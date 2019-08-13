@extends('layouts.app')
@include('inc.nav')

@section('content')
<div class="container">
        <div class="py-5 text-center">

          <h2>Details</h2>
          {{-- <p class="lead">Lets know your details</p> --}}
        </div>

        <div class="row">

                <div class="jumbotron col-md-5  mb-6 mr-md-5">
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

                          @if($post->email)
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
                           @endif


                        </ul>

                      </div>


                    <div class="jumbotron col-md-5  mb-6 ml-md-5">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Search Results</span>
                      </h4>
                      <hr>
                      <ul class="list-group mb-3">
                      @if($post->dfname)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                          <div>
                            <h6 class="my-0">Name as on document</h6>

                          </div>
                          <span class="text-muted">{{$post->dfname}}. {{$post->dlname}}</span>
                        </li>
                        @endif
                        @if($post->doc)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                <strong><h6 class="my-0">Document Type</h6></strong>

                              </div>
                              <span class="text-muted">{{$post->doc}}</span>
                        </li>
                        @endif
                        @if($post->pincode)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                <strong><h6 class="my-0">Pincode</h6></strong>

                              </div>
                                  <small class="text-muted">{{$post->pincode}}</small>
                        </li>
                        @endif
                        @if($post->dob)

                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                  <strong><h6 class="my-0">Date of Birth</h6></strong>

                                </div>
                                    <small class="text-muted">{{$post->dob}}</small>
                          </li>
                          @endif
                        @if($post->pname)
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                  <strong><h6 class="my-0">Parent Name</h6></strong>

                                </div>
                                    <small class="text-muted">{{$post->pname}}</small>
                          </li>
                          @endif




                      </ul>

        </div>


    </div>
    </main>
@endsection
