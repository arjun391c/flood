@extends('layouts.app')
@include('inc.nav')



@section('content')
<main role="main" class="inner cover" >
<div class="container-fluid" id="">
    <div class="row">
        <div class="col-md-3 mt-5">
                <div class=" justify-content-center ml-md-3 mt-md-5 notranslate ">

                        <h2 id="uptxt">Upload details</h2>
                        <p class="lead" >Let's help them Find</p>
                </div>
        </div>
        <div class="col-md-9 " >
                <div class="row " >

                        <div class="col-md-8 order-md-1" id="hmj">
                          <h4 class="mb-3">Details of uploader</h4><hr>
                          {{ Form::open(array('action' => 'PostsController@store','method'=>'POST','enctype' => 'multipart/form-data','class'=>'needs-validation','novalidate'=>true)) }}
                          <div class="form-group">
                                          {{Form::label('name','Name')}}
                                         {{Form::text('name','',['class' =>'form-control','id'=>'name' ,'placeholder' =>'Enter Name', 'required'=>true])}}
                                         <div class="invalid-feedback ">
                                            Please enter a name.
                                        </div>

                            </div>


                          <div class="form-group">
                                  <label for="phone">Mobile Number</label>
                                  <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">+91</span>
                                   </div>
                                  {{Form::tel('phone','',['class' =>'form-control','id'=>'phone','placeholder' =>'Moblie no.', 'required'=>true])}}
                                  <div class="invalid-feedback">
                                            Please enter a valid phone.
                                        </div>
                          </div>
                          <hr class="mb-1">
                          <div class="form-group">

                                  {{Form::label('email','Email(optional)')}}
                                  {{Form::email('email','',['class' =>'form-control','id'=>'email','placeholder' =>'Enter email'])}}
                                  <div class="invalid-feedback">
                                            Please enter a valid email.
                                        </div>
                          </div>

                          <hr class="mb-4">

                          <div class="form-group">
                                  <h4 class="mb-3">Document Type</h4><hr>
                                  <div class="col-lg-0">
                                      {{-- {{  Form::checkbox('doc', ['adhaar' => 'ADHAAR', 'license' => 'DRIVING LICENSE', 'id' => 'ID'],  '', ['class' => 'form-control' ]) }} --}}
                                      {{ Form::checkbox('aadhar', 'Aadhar',false, ['id'=>'aadhar','class'=>'check']) }}
                                      {!! Form::label('aadhar', 'Aadhar Card') !!} <br>
                                      {{ Form::checkbox('license', 'License',false, ['id'=>'license','class'=>'check']) }}
                                      {!! Form::label('license', 'Driving License') !!} <br>
                                      {{ Form::checkbox('sslc', 'SSLC',false, ['id'=>'sslc','class'=>'check']) }}
                                      {!! Form::label('sslc', 'SSLC Certificate') !!} <br>
                                      {{ Form::checkbox('atm', 'ATM',false, ['id'=>'atm','class'=>'check']) }}
                                      {!! Form::label('atm', 'ATM Card') !!} <br>
                                      {{ Form::checkbox('passport', 'Passport',false, ['id'=>'passport','class'=>'check']) }}
                                      {!! Form::label('passport', 'Passport') !!} <br>
                                      {{ Form::checkbox('others', 'others',false, ['id'=>'others','class'=>'check']) }}
                                      {!! Form::label('others', 'Others') !!} <br>
                                      {{-- {!! Form::checkbox($name, $value, $checked, [$options]) !!x} --}}
                                      {!! Form::text('others', '', ['class'=>'form-control', 'placeholder'=>'If others, specify', 'id'=>'otherItem']) !!}
                                  </div>
                          </div>
                          <hr class="mb-4">
                          <h4 class="mb-3">Details on document</h4><hr>

                          <div class="row">
                                  <div class="col-md-6 mb-3">
                                     {{Form::label('dfname','First Name')}}
                                    {{Form::text('dfname','',['class' =>'form-control','id'=>'dfname','placeholder' =>'Enter Name', 'required'=>true,'autocomplete' => 'off'])}}
                                    <div class="invalid-feedback">
                                            Please enter a first name.
                                        </div>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                              {{Form::label('dlname','Last Name')}}
                                              {{Form::text('dlname','',['class' =>'form-control','id'=>'dlname','placeholder' =>'Enter Name', 'required'=>true,'autocomplete' => 'off'])}}
                                              <div class="invalid-feedback">
                                            Please enter a last name.
                                        </div>
                                      </div>
                              </div>
                              <div class="form-group">
                                  {{Form::label('dno','Document Number(optional)')}}
                                  {{Form::text('dno','',['class' =>'form-control','placeholder' =>'Enter document number(Any one)','autocomplete' => 'off'])}}
                          </div>
                          <div class="form-group">
                                  {{Form::label('pincode','Pin Code(optional)')}}
                                  {{Form::number('pincode','',['class' =>'form-control','id'=>'pincode','placeholder' =>'- - - - - -','autocomplete' => 'off'])}}
                                  <div class="invalid-feedback">
                                            Please enter a valid pincode.
                                        </div>
                          </div>

                          <div class="form-group">
                                  {{Form::label('dob','Date of Birth(optional)')}}
                                  {{Form::date('dob','',['class' =>'form-control','placeholder' =>'--/--/----','autocomplete' => 'off'])}}
                              </div>

                          <div class="form-group">
                                  {{Form::label('pname','Parent name(optional)')}}
                                  {{Form::text('pname','',['class' =>'form-control','placeholder' =>'Enter Name','autocomplete' => 'off'])}}
                          </div>
                          {{Form::hidden('doc','',['class' =>'form-control','id'=>'doc','placeholder' =>'Enter Name'])}}

                          {{-- <div class="form-group"> --}}

                                  {{-- {{ Form::checkbox('terms',true,false,['class' => 'checkbox']) }} --}}
                                  {{-- <a href="/terms">Terms & Condition</a> --}}
                          {{-- </div> --}}
                          <br>

                            <hr class="mb-4">
                            <button type="button" class="btn btn-primary btn-lg btn-block" id="submit" data-toggle="modal" data-target="#exampleModalCenter" >
                                    Submit
                                  </button>


                                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalCenterTitle"><u>Terms & Conditions</u></h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body text-justify" style="color: black;">
                                            <p>
                                            These <u>Terms and Conditions</u> ("Terms", "Terms and Conditions") govern your relationship with <span class="notranslate">www.letsfindit.in </span> Find website.
                                              Please read these Terms and Conditions carefully before using our website.Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.

                                              By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p>

                                              <p><u>Self Declaration</u></p>

                                              <p>I assert that the details mentioned by me in the upload form are true to the best of my knowledge. I don't have any intentions to tamper the service offered by team Let's Find by providing fake details. I further promise that I will sincerely handover the document(s) to the owner after verification.</p>







                                              <p><u>Changes</u></p>

                                              <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.

                                              By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
                                            </pre>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                              {{Form::submit('Accept & Continue',['class'=>'btn btn-primary '])}}
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                            {{-- {{Form::submit('submit',['class'=>'btn btn-primary btn-lg btn-block'])}} --}}


                        </div>
                        {{ Form::close() }}
                      </div>


                  </div>
        </div>
    </div>

</main>
<script>
    $('#navbarHeader').collapse({
  toggle: false
})
    </script>
<script>
$(document).ready(()=>{
  var Errors = <?php echo $errors; ?>;
  if(Errors.name){
    $('#name').addClass('is-invalid');
  }
  if(Errors.phone){
    $('#phone').addClass('is-invalid');
  }
  if(Errors.dfname){
    $('#dfname').addClass('is-invalid');
  }
  if(Errors.dlname){
    $('#dlname').addClass('is-invalid');
  }
  if(Errors.pincode){
    $('#pincode').addClass('is-invalid');
  }


});

var form = document.getElementsByClassName('needs-validation')[0];
    $('#submit').click((event)=>{
        if (form.checkValidity() == false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
        var string = '';
        var selected = [];
        $('input:checked').each(function() {
            selected.push($(this).attr('value'));
        });
        selected.forEach((item)=>{
            if(item == "others"){
              string += $('#otherItem').val() + " ";
            }else{
              string += item + " ";
            }
        });
        console.log(string);
        $('#doc').val(string);

        $('#exampleModalCenter').modal('show');
    });
</script>
@endsection


