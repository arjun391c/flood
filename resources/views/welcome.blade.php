@extends('layouts.app')
@include('inc.nav')

@section('content')
<style>
body{
  overflow-y: hidden;
}
</style>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto  flex-column" style="margin-top:10%">

        <main role="main" class="jumbotron inner cover text-center" id="hmj">
          <h1 class="cover-heading text-center"  id="uptxt">LET'S FIND</h1>
          <p class="lead" >Lets help find their stuff</p>
          <p class="lead">
            <a href="/posts/upload" class="btn  btn-primary">Upload</a>
            <a href="/posts" class="btn  btn-success ml-3" >Find</a>
          </p>

        </main>
        <footer class="mastfoot mt-auto">
                <div class="inner">
                  <p><a href="https://getbootstrap.com/"></a> <a href="#"></a></p>
                </div>
         </footer>
</div>


@endsection
