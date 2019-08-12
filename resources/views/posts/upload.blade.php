@extends('layouts.app')
@include('inc.nav')



@section('content')
<main role="main" class="inner cover" style="padding:20px">
<div class="container">

    <div class="py-5 text-center">

      <h2>Upload detils</h2>
      <p class="lead">Let's help them Find</p>
    </div>

    <div class="row justify-content-center">

      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Details of uploader</h4>
        {{ Form::open(array('action' => 'PostsController@store','method'=>'POST','enctype' => 'multipart/form-data')) }}
        <div class="form-group">
                        {{Form::label('name','Name')}}
                       {{Form::text('name','',['class' =>'form-control','placeholder' =>'Enter Name'])}}

          </div>


        <div class="form-group">
                <label for="phone">Mobile Number</label>
                <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">+91</span>
                 </div>
                {{Form::number('phone','',['class' =>'form-control','placeholder' =>'Moblie no.'])}}
        </div>
        <hr class="mb-1">
        <div class="form-group">

                {{Form::label('email','Email(optional)')}}
                {{Form::email('email','',['class' =>'form-control','placeholder' =>'Enter email'])}}
        </div>

        <hr class="mb-4">

        <div class="form-group">
                <h4 class="mb-3">Document Type</h4>
                <div class="col-lg-0">
                    {{-- {{  Form::checkbox('doc', ['adhaar' => 'ADHAAR', 'license' => 'DRIVING LICENSE', 'id' => 'ID'],  '', ['class' => 'form-control' ]) }} --}}
                    {{ Form::checkbox('doc', 'aadhar',false, ['id'=>'aadhar']) }}
                    {!! Form::label('aadhar', 'Aadhar Card') !!} <br>
                    {{ Form::checkbox('license', 'license',false, ['id'=>'license']) }}
                    {!! Form::label('license', 'Driving License') !!} <br>
                    {{ Form::checkbox('sslc', 'sslc',false, ['id'=>'sslc']) }}
                    {!! Form::label('sslc', 'SSLC Certificate') !!} <br>
                    {{ Form::checkbox('atm', 'atm',false, ['id'=>'atm']) }}
                    {!! Form::label('atm', 'ATM Card') !!} <br>
                    {{ Form::checkbox('passport', 'passport',false, ['id'=>'passport']) }}
                    {!! Form::label('passport', 'Passport') !!} <br>
                    {{ Form::checkbox('others', 'others',false, ['id'=>'others']) }}
                    {!! Form::label('others', 'Others') !!} <br>
                    {{-- {!! Form::checkbox($name, $value, $checked, [$options]) !!x} --}}
                    {!! Form::text('others', '', ['class'=>'form-control', 'placeholder'=>'If others, specify']) !!}
                </div>
        </div>
        <hr class="mb-4">
        <h4 class="mb-3">Details on document</h4>

        <div class="row">
                <div class="col-md-6 mb-3">
                   {{Form::label('dfname','First Name')}}
                  {{Form::text('dfname','',['class' =>'form-control','placeholder' =>'Enter Name'])}}
                    </div>
                    <div class="col-md-6 mb-3">
                            {{Form::label('dlname','Last Name')}}
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
            </div>

        
        <div class="form-group">
                {{Form::label('pname','Parent name')}}
                {{Form::text('pname','',['class' =>'form-control','placeholder' =>'Enter Name'])}}
        </div>

        <div class="form-group">

                {{ Form::checkbox('terms',true,false,['class' => 'checkbox']) }}
                <a href="/terms">Terms & Condition</a>
        </div>
        <br>
        <br>

          <hr class="mb-4">

          {{Form::submit('submit',['class'=>'btn btn-primary btn-lg btn-block'])}}


      </div>
      {{ Form::close() }}
    </div>


</div>
</main>
{{-- <script>
    var postURl = '/posts';
    var list = {
        hello: 'Hi'
    }
    $('#submit').click(()=>{
        fetch(postURl, {
                    method: 'post',
                    headers: {
                        'Content-Type': 'application/json', // sent request
                        'Accept': 'application/json' // expected data sent back
                    },
                    body: JSON.stringify(list)
                })
                .then((res) => res.json())
                .then((data) => {
                    if (data) {
                        console.log(data);
                    } else {
                        console.log(data);

                    }

                })
                .catch((error) => console.log(error))
    })

</script> --}}
@endsection


