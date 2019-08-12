@extends('layouts.app')
@include('inc.nav')


@section('content')
<style>
#data-table-keytable_filter{
    display: none;
}
</style>
<main role="main" class="inner cover" style="padding:20px">
    <div class="container">
        <div class="py-5 text-center">

          <h2>Find your stuff</h2>
          {{-- <p class="lead">Lets know your details</p> --}}
        </div>

        <div class="row">

                {{-- <div class="jumbotron col-md-5 order-md-2 mb-6 ml-md-2">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                          <span class="text-muted">Search here</span>

                        </h4>
                        <ul class="list-group mb-3">
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div class="row">
                              <h6 class=" text-dark">Name on document</h6> <br>
                              <!-- <p class="text-muted">Enter your name</p> -->
                              <input type="text" id="name" class="form-control"/>
                            </div>
                            <!-- <span class="text-muted">$12</span> -->
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div class="row">
                              <h6 class="text-dark">Document Type</h6>
                              <!-- <small class="text-muted">Brief description</small> -->
                              <input type="text" id="doc" class="form-control"/>
                            </div>
                            <!-- <span class="text-muted">$8</span> -->
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div class="row">
                              <h6 class="text-dark">Document Number</h6>
                              <!-- <small class="text-muted">Brief description</small> -->
                              <input type="text" id="docNo" class="form-control"/>
                            </div>
                            <!-- <span class="text-muted">$5</span> -->
                          </li>
                          <!-- <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                              <h6 class="my-0">Promo code</h6>
                              <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">-$5</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                          </li> -->
                        </ul> --}}

                        <!-- <form class="card p-2">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-secondary">Redeem</button>
                            </div>
                          </div>
                        </form> -->
                      </div>

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
          <div class="jumbotron chat-body chat-scroll" id="chat-scroll" style="color:black">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Search here</span>

                      </h4>
                      <div class="row mb-2">
                          <div class="col-md-4">
                                <h6 class=" text-dark">Name on document</h6>
                                <!-- <p class="text-muted">Enter your name</p> -->
                                <input type="text" id="name" class="form-control"/>
                          </div>
                          <div class="col-md-4">
                                <h6 class="text-dark">Document Type</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                                <input type="text" id="doc" class="form-control"/>
                          </div>
                          <div class="col-md-4">
                                <h6 class="text-dark">Document Number</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                                <input type="text" id="docNo" class="form-control"/>
                          </div>
                      </div>
                      {{-- <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                          <div class="row">
                            <h6 class=" text-dark">Name on document</h6> <br>
                            <!-- <p class="text-muted">Enter your name</p> -->
                            <input type="text" id="name" class="form-control"/>
                          </div>
                          <!-- <span class="text-muted">$12</span> -->
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                          <div class="row">
                            <h6 class="text-dark">Document Type</h6>
                            <!-- <small class="text-muted">Brief description</small> -->
                            <input type="text" id="doc" class="form-control"/>
                          </div>
                          <!-- <span class="text-muted">$8</span> -->
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                          <div class="row">
                            <h6 class="text-dark">Document Number</h6>
                            <!-- <small class="text-muted">Brief description</small> -->
                            <input type="text" id="docNo" class="form-control"/>
                          </div>
                          <!-- <span class="text-muted">$5</span> -->
                        </li> --}}

          <table id="data-table-keytable" class="table table-striped table-bordered" >
                <thead>
                    <tr style="color:black">



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
                        columns: [
                        //     {
                        //     "searchable": false,
                        //     "orderable": true,
                        //     'render': function(){
                        //         return i++;
                        //     }
                        // },
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
                    // $('#data-table-keytable thead tr').clone(true).appendTo( '#data-table-keytable thead' );
    $('#data-table-keytable thead tr:eq(1) th').each( function (i) {
    if(i!=2){
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

    $('#name').on( 'keyup change', function () {
            if ( table.column(1).search() !== this.value ) {
                table
                    .column(1)
                    .search( this.value )
                    .draw();
            }
        } );
        $('#doc').on( 'keyup change', function () {
            if ( table.column(0).search() !== this.value ) {
                table
                    .column(0)
                    .search( this.value )
                    .draw();
            }
        } )

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


