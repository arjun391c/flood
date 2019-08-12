@extends('layouts.app')
@include('inc.nav')


@section('content')
<style>
#data-table-keytable_filter{
    display: none;
}
#data-table-keytable{
  display: none;
}
</style>
<main role="main" class="inner cover" style="padding:20px">
    <div class="container">
        {{-- <div class="py-5 text-center">

          <h2>Find it</h2>

        </div> --}}


        <div class="row mb-md-2" >

               

                        
                      </div>

         

           
          <div class="jumbotron chat-body chat-scroll" id="chat-scroll" style="color:black">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Search here</span>

                      </h4>
                      <div class="row mb-2" >
                      <div class="col-md-4">
                                <h6 class="text-dark">Document Type</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                                <input type="text" id="doc" class="form-control"/>
                          </div>
                          <div class="col-md-4">
                                <h6 class=" text-dark">Name on document</h6>
                                <!-- <p class="text-muted">Enter your name</p> -->
                                <input type="text" id="name" class="form-control"/>
                          </div>
                          
                          <div class="col-md-4">
                                <h6 class="text-dark">Document Number</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                                <input type="text" id="dno" class="form-control"/>
                          </div>
                          <div class="col-md-4 mt-2">
                                <h6 class="text-dark">DOB</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                                <input type="date" id="dob" class="form-control"/>
                          </div>
                          <div class="col-md-4 mt-2">
                                <h6 class="text-dark">Pincode</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                                <input type="text" id="pincode" class="form-control"/>
                          </div>
                      </div>
                      

          <table id="data-table-keytable" class="table table-striped table-bordered" >
                <thead>
                    <tr style="color:black">


                        <th class="text-nowrap">Document Number</th>
                        <th class="text-nowrap">Document</th>
                        <th class="text-nowrap">Name</th>
                        <th class="text-nowrap">DOB</th>
                        <th class="text-nowrap">Pincode</th>
                        <th class="text-nowrap">Contact</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                
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
                            {
                              "visible": false,
                              "data": "dno",
                            "searchable": true,
                            "orderable": false,
                            "render": function(dno){
                                if(dno){
                                  return dno;
                                }else{
                                  return '#!&*$';
                                }
                            }
                        },
                        {

                            "orderable": false,
                            'data': 'doc',
                            'render': function(doc) {
                                if(doc){
                                    var code = '<ul>';
                                    var itemNames
                                    itemNames = doc.split(" ");
                                    itemNames.forEach(item => {
                                        code += '<li>'+item+'</li>';

                                    });
                                    code += '</ul>';
                                    return code;
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
                        },
                        {
                              "visible": false,
                              "data": "dob",
                            "searchable": true,
                            "orderable": false,
                            "render": function(dob){
                                if(dob){
                                  return dob;
                                }else{
                                  return '#!&*$###$%^';
                                }
                            }
                        },
                        {
                              "visible": false,
                              "data": "pincode",
                            "searchable": true,
                            "orderable": false,
                            "render": function(pincode){
                                if(pincode){
                                  return pincode;
                                }else{
                                  return '#!&*$###$%^';
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
    var pincode = $('#pincode').val();
       var dob = $('#dob').val();
       var dno = $('#dno').val();
       var name = $('#name').val();
       var type = $('#doc').val();
    $('#name').on( 'keyup change', function () {
            if ( table.column(2).search() !== this.value ) {
                table
                    .column(2)
                    .search( this.value )
                    .draw();
                    $('#data-table-keytable').css("display", "block");
            }
            if(($('#pincode').val() == "")&&($('#dob').val() == "")&&($('#dno').val() == "")&&($('#name').val() == "")&&($('#doc').val() == "")){
          
          $('#data-table-keytable').css("display", "none");
    }
            
        } );
        $('#doc').on( 'keyup change', function () {
            if ( table.column(1).search() !== this.value ) {
                table
                    .column(1)
                    .search( this.value )
                    .draw();
                    $('#data-table-keytable').css("display", "block");
            }
            if(($('#pincode').val() == "")&&($('#dob').val() == "")&&($('#dno').val() == "")&&($('#name').val() == "")&&($('#doc').val() == "")){
          
          $('#data-table-keytable').css("display", "none");
    }
            
        } );
        $('#dno').on( 'keyup change', function () {
            if ( table.column(0).search() !== this.value ) {
                table
                    .column(0)
                    .search( this.value )
                    .draw();
                    $('#data-table-keytable').css("display", "block");
            }
            if(($('#pincode').val() == "")&&($('#dob').val() == "")&&($('#dno').val() == "")&&($('#name').val() == "")&&($('#doc').val() == "")){
          
          $('#data-table-keytable').css("display", "none");
    }
            
        } );
        $('#dob').on( 'keyup change', function () {
            if ( table.column(3).search() !== this.value ) {
                table
                    .column(3)
                    .search( this.value )
                    .draw();
                    $('#data-table-keytable').css("display", "block");
            }
            if(($('#pincode').val() == "")&&($('#dob').val() == "")&&($('#dno').val() == "")&&($('#name').val() == "")&&($('#doc').val() == "")){
          
          $('#data-table-keytable').css("display", "none");
    }
            
        } );
        $('#pincode').on( 'keyup change', function () {
            if ( table.column(4).search() !== this.value ) {
                table
                    .column(4)
                    .search( this.value )
                    .draw();
                    $('#data-table-keytable').css("display", "block");
            }
            if(($('#pincode').val() == "")&&($('#dob').val() == "")&&($('#dno').val() == "")&&($('#name').val() == "")&&($('#doc').val() == "")){
          
          $('#data-table-keytable').css("display", "none");
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


