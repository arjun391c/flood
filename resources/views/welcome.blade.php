@extends('layouts.app')

@section('content')

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        @include('inc.nav')
        <main role="main" class="inner cover">
          <h1 class="cover-heading">LETS FIND</h1>
          <p class="lead">Lets help find their stuffs</p>
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
