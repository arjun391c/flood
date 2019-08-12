@extends('layouts.app')
@include('inc.nav')


@section('content')
<main role="main" class="inner cover" style="padding:20px">
    <div class="container">

        <div class="py-5 text-center">

          <h2>Find your stuff</h2>
          {{-- <p class="lead">Lets know your details</p> --}}
        </div>

        <div class="jumbotron">

          {{-- <div class="col-md-8 order-md-1">
            <hr class="mb-4">
            <h4 class="mb-3">Details As on document</h4>
            {{ Form::open(array('action' => 'PostsController@store','method'=>'POST','enctype' => 'multipart/form-data')) }}

            <div class="row">
                    <div class="col-md-6 mb-3">
                       {{Form::label('dfname','Name')}}
                      {{Form::text('dfname','',['class' =>'form-control','placeholder' =>'Enter Name'])}}
                        </div>
                        <div class="col-md-6 mb-3">
                                {{Form::label('dlname','Name')}}
                                {{Form::text('dlname','',['class' =>'form-control','placeholder' =>'Enter Name'])}}
                        </div>
                </div>
            <div class="form-group">
                    {{Form::label('pincode','Pin Code')}}
                    {{Form::number('pincode','',['class' =>'form-control','placeholder' =>'- - - - - -'])}}
            </div>

            <div class="form-group">
                    {{Form::label('dob','Date of Birth')}}
                    {{Form::date('dob','',['class' =>'form-control','placeholder' =>'Enter Name'])}}
                </div> --}}

            {{-- <div class="form-group">
                        {{Form::label('age','Age')}}
                        {{Form::number('age','',['class' =>'form-control','placeholder' =>'- -'])}}

            </div> --}}
            {{-- <div class="form-group">
                    {{Form::label('pname','Parent name')}}
                    {{Form::text('pname','',['class' =>'form-control','placeholder' =>'Enter Name'])}}
            </div>
            <br>
            <br>

              <hr class="mb-4">

              {{Form::submit('search',['class'=>'btn btn-primary btn-lg btn-block'])}}

              {{ Form::close() }}
          </div> --}}
          <table id="data-table-keytable" class="table table-striped table-bordered">
                <thead>
                    <tr>


                        <th class="text-nowrap">#</th>
                        <th class="text-nowrap">Document</th>
                        <th class="text-nowrap">Name</th>
                        <th class="text-nowrap">Contact</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                {{-- <tfoot>
                        <th class="text-nowrap">#</th>
                        <th class="text-nowrap">Document</th>
                        <th class="text-nowrap">Name</th>
                        <th class="text-nowrap">Contact</th>
                </tfoot> --}}
            </table>

        </div>


    </div>
    </main>
    <script>
        // var data = [
        //         {
        //         items: [{
        //             type: 'Aadhar',
        //             name: 'Name',
        //             number: 1154424
        //         }],
        //         status: 'Verified',
        //         info: '#'
        //     }
        // ]
        // console.log({{$posts}})

        var data = <?php echo json_encode($posts); ?>;
        var i =1;
    // $.ajax({
    //             url: '/posts',
    //             method: 'get',
    //             dataType: 'json',
    //             success: function(data) {
    //     $('#data-table-keytable tfoot th').each( function (i) {
    //     var title = $('#data-table-keytable thead th').eq( $(this).index() ).text();
    //     $(this).html( '<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />' );
    // } );
                   var table = $('#data-table-keytable').DataTable({
						data: data,
                        responsive: true,
                        orderCellsTop: true,
                        fixedHeader: true,
                        columns: [{
                            "searchable": false,
                            "orderable": true,
                            'render': function(){
                                return i++;
                            }
                        },
                        {

                            "orderable": false,
                            'data': 'doc',
                            'render': function(doc) {
                                if(doc){
                                    // var code = '<ul>';
                                    // items.forEach(item => {
                                    //     code += '<li>'+item.type+'</li><ul><li>Holder\'s Name: '+item.name+'</li><li>Document Number: '+item.number+'</li></ul>';

                                    // });
                                    // code += '</ul>';
                                    return doc;
                                }else{
                                    return 'No Item details';
                                }
                            }
                        },
                        {

                            "orderable": false,
                            'data': {dfname: 'dfname', dlname:'dlname'},
                            'render': function(name){
                                if(name){
                                    return name.dfname+' '+name.dlname;
                                }else{
                                    return 'Status unknown';
                                }
                            }
                        },{

                            "orderable": false,
                            'data': 'id',
                            'render': function(id){
                                if(id){
                                    return `<a href='/posts/${id}'  class='btn btn-success'>View</a>`
                                }else{
                                    return `<a href="#"  class='btn btn-success'>View</a>`
                                }
                            }
                        }
                        ]
                    });
                    $('#data-table-keytable thead tr').clone(true).appendTo( '#data-table-keytable thead' );
    $('#data-table-keytable thead tr:eq(1) th').each( function (i) {
    if(i!=0 && i!=3){
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    }else{
        $(this).html('');
    }
    } );

//     var table = $('#example').DataTable( {
//         orderCellsTop: true,
//         fixedHeader: true
//     } );
// } );
    //                 table.columns().eq( 0 ).each( function ( colIdx ) {
    //     $( 'input', table.column( colIdx ).header() ).on( 'keyup change', function () {
    //         table
    //             .column( colIdx )
    //             .search( this.value )
    //             .draw();
    //     } );
    // } );
            //     }

            // })
    </script>
@endsection


