@extends('layouts.app')
@include('inc.nav')

@section('content')
<div class="container">
        <div class="py-5 text-center">

          <h2>Details</h2>
          {{-- <p class="lead">Lets know your details</p> --}}
        </div>

        <div class="row">

                <div class="jumbotron col-md-5 order-md-2 mb-6 ml-md-2">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                          <span class="text-muted">Whom to Contact</span>
                        </h4>
                        <hr>
                        <ul class="list-group mb-3">
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                              <h6 class="my-0">Name</h6>

                            </div>
                            <span class="text-muted">{{$post->name}}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                  <strong><h6 class="my-0">Phone</h6></strong>

                                </div>
                                <span class="text-muted">{{$post->phone}}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                  <strong><h6 class="my-0">Email</h6></strong>

                                </div>
                                @if ($post->email != NULL)
                                    <span class="text-muted">{{$post->email}}</span>
                                @else
                                    <small class="text-muted">No email specified</small>
                                @endif
                           </li>


                        </ul>
{{-- -
                        <form class="card p-2">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-secondary">Redeem</button>
                            </div>
                          </div>
                        </form>--}}
                      </div>


                    <div class="jumbotron col-md-5 order-md-2 mb-6 ml-md-2">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Search Details</span>
                      </h4>
                      <hr>
                      <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                          <div>
                            <h6 class="my-0">Name as on document</h6>

                          </div>
                          <span class="text-muted">{{$post->dfname}}. {{$post->dlname}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                <strong><h6 class="my-0">Phone</h6></strong>

                              </div>
                              <span class="text-muted">{{$post->phone}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                <strong><h6 class="my-0">Email</h6></strong>

                              </div>
                              @if ($post->email != NULL)
                                  <span class="text-muted">{{$post->email}}</span>
                              @else
                                  <small class="text-muted">No email specified</small>
                              @endif
                         </li>


                      </ul>

        </div>


    </div>
    </main>
@endsection
