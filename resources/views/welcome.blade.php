@extends('layouts.app')
@include('inc.nav')

@section('content')
<style>
body{
  overflow-y: hidden;
}
</style>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto  flex-column lets">

        <main role="main" class="jumbotron inner cover text-center" id="hmj">
          <h1 class="cover-heading text-center"  id="uptxt">Let's Find</h1><hr style="background-color:white">
          {{-- <p class="lead" >Lets help find their stuff</p> --}}
          <div class="cover-heading" id="cap" >
          <span style="font-size:2rem ">S</span><span style="font-size:1.5rem">ometimes </span>
          <span style="font-size:2rem ">T</span><span style="font-size:1.5rem">hings </span>
          <span style="font-size:2rem ">T</span><span style="font-size:1.5rem">hat </span>
          <span style="font-size:2rem ">A</span><span style="font-size:1.5rem">re </span>
          <span style="font-size:2rem ">L</span><span style="font-size:1.5rem">ost </span><br>
          <span style="font-size:2rem ">C</span><span style="font-size:1.5rem">an </span>
          <span style="font-size:2rem ">B</span><span style="font-size:1.5rem">e </span>
          <span style="font-size:2rem ">F</span><span style="font-size:1.5rem">ound</span>
          <span style="font-size:2rem ">A</span><span style="font-size:1.5rem">gain</span>
          </div>
          <br>
          <br>
          <p class="lead">
            <a href="/posts/upload" class="btn btn-lg  btn-primary  ">Upload</a>
            <a href="/posts" class="btn  btn-lg btn-success ml-3  " style="width:6.3rem" >Find</a>
          </p>

        </main>
        <footer class="mastfoot mt-auto">
                <div class="inner">
                  <p><a href="https://getbootstrap.com/"></a> <a href="#"></a></p>
                </div>
         </footer>
</div>


@endsection
