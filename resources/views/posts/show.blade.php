@extends('layouts.app')
@include('inc.nav')

@section('content')
<div class="container">
        <div class="py-5 " id="uptxt">

          <h2 style="font-size:3rem;">Details</h2>
          {{-- <p class="lead">Lets know your details</p> --}}
        </div>

        <div class="row " >

                <div class="jumbotron col-md-5  mb-6 mr-md-5 ">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                          <span class="text-muted">Whom to Contact</span>
                        </h4>
                        <hr>
                        <ul class="list-group mb-3">

                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                              <h6 class="my-0 n">Name</h6>
                            </div>
                            <span class="text-muted notranslate">{{$post->name}}</span>
                          </li>

                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                  <strong><h6 class="my-0 ">Phone</h6></strong>

                                </div>
                                <a href="tel:+91{{$post->phone}}"><span class="text-muted">{{$post->phone}}</span></a>
                          </li>

                          @if($post->email)
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                  <strong><h6 class="my-0 ">Email</h6></strong>

                                </div>
                                @if ($post->email != NULL)
                                    <span class="text-muted">{{$post->email}}</span>
                                @else
                                    <small class="text-muted notranslate">No email specified</small>
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
                            <h6 class="my-0 ">Name as on document</h6>

                          </div>
                          <span class="text-muted notranslate">{{$post->dfname}}. {{$post->dlname}}</span>
                        </li>
                        @endif
                        @if($post->doc)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                <strong><h6 class="my-0 ">Document Type</h6></strong>

                              </div>
                              <span class="text-muted notranslate">{{$post->doc}}</span>
                        </li>
                        @endif
                        @if($post->pincode)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                <strong><h6 class="my-0">Pincode</h6></strong>

                              </div>
                                  <small class="text-muted notranslate">{{$post->pincode}}</small>
                        </li>
                        @endif
                        @if($post->dob)

                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                  <strong><h6 class="my-0">Date of Birth</h6></strong>

                                </div>
                                    <small class="text-muted notranslate">{{$post->dob}}</small>
                          </li>
                          @endif
                        @if($post->pname)
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                  <strong><h6 class="my-0">Parent Name</h6></strong>

                                </div>
                                    <small class="text-muted notranslate">{{$post->pname}}</small>
                          </li>
                          @endif




                      </ul>

        </div>


    </div>
    </main>
@endsection
