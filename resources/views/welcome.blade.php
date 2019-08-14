@extends('layouts.app')
@include('inc.nav')

@section('content')
<style>
body{
  /* overflow-y: hidden; */
}
</style>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto  flex-column lets">

        <main role="main" class="jumbotron inner cover text-center" id="hmj">
          <h1 class="cover-heading text-center"  id="uptxt">Let's Find</h1><hr style="background-color:white">

          <p class="lead text-center" id="cap">
              Sometimes Things That Are Lost<br>
              Can be Found Again
              <hr style="background-color:aliceblue;  width:150px;">
          </p>
          <br>

          <p class="lead">
            <a href="/posts/upload" class="btn btn-lg  btn-primary  ">Upload</a>
            <a href="/posts" class="btn  btn-lg btn-success ml-3  " style="width:6.3rem" >Find</a>
          </p>

        </main>
</div>


@endsection
