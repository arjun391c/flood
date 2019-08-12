@extends('layouts.app')
@include('inc.nav')



@section('content')
<main role="main" class="inner cover" >
<div class="container-fluid" id="">
    <div class="row">
        <div class="col-md-3">
                <div class=" justify-content-center ml-md-3 mt-md-5">

                        <h2>Upload details</h2>
                        <p class="lead">Let's help them Find</p>
                      </div>
        </div>
        <div class="col-md-9 " >
                <div class="row " >

                        <div class="col-md-8 order-md-1" id="hmj">
                          <h4 class="mb-3">Details of uploader</h4><hr>
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
                                  <h4 class="mb-3">Document Type</h4><hr>
                                  <div class="col-lg-0">
                                      {{-- {{  Form::checkbox('doc', ['adhaar' => 'ADHAAR', 'license' => 'DRIVING LICENSE', 'id' => 'ID'],  '', ['class' => 'form-control' ]) }} --}}
                                      {{ Form::checkbox('aadhar', 'aadhar',false, ['id'=>'aadhar']) }}
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
                          <h4 class="mb-3">Details on document</h4><hr>

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

                          {{-- <div class="form-group"> --}}

                                  {{-- {{ Form::checkbox('terms',true,false,['class' => 'checkbox']) }} --}}
                                  {{-- <a href="/terms">Terms & Condition</a> --}}
                          {{-- </div> --}}
                          <br>

                            <hr class="mb-4">
                            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalScrollable">
                                    Submit
                                  </button>

                                  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                    <span> GOOGLE TERMS OF SERVICE
                                                    Last modified: October 25, 2017 (view archived versions)
                                                        <p>
                                                    Welcome to Google!
                                                    Thanks for using our products and services (“Services”). The Services are provided by Google LLC (“Google”), located at 1600 Amphitheatre Parkway, Mountain View, CA 94043, United States.

                                                    By using our Services, you are agreeing to these terms. Please read them carefully.

                                                    Our Services are very diverse, so sometimes additional terms or product requirements (including age requirements) may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.

                                                    Using our Services
                                                    You must follow any policies made available to you within the Services.

                                                    Don’t misuse our Services. For example, don’t interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by law, including applicable export and re-export control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct.

                                                    Using our Services does not give you ownership of any intellectual property rights in our Services or the content you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Don’t remove, obscure, or alter any legal notices displayed in or along with our Services.

                                                    Our Services display some content that is not Google’s. This content is the sole responsibility of the entity that makes it available. We may review content to determine whether it is illegal or violates our policies, and we may remove or refuse to display content that we reasonably believe violates our policies or the law. But that does not necessarily mean that we review content, so please don’t assume that we do.

                                                    In connection with your use of the Services, we may send you service announcements, administrative messages, and other information. You may opt out of some of those communications.

                                                    Some of our Services are available on mobile devices. Do not use such Services in a way that distracts you and prevents you from obeying traffic or safety laws.

                                                    Your Google Account
                                                    You may need a Google Account in order to use some of our Services. You may create your own Google Account, or your Google Account may be assigned to you by an administrator, such as your employer or educational institution. If you are using a Google Account assigned to you by an administrator, different or additional terms may apply and your administrator may be able to access or disable your account.

                                                    To protect your Google Account, keep your password confidential. You are responsible for the activity that happens on or through your Google Account. Try not to reuse your Google Account password on third-party applications. If you learn of any unauthorized use of your password or Google Account, follow these instructions.

                                                    Privacy and Copyright Protection
                                                    Google’s privacy policies explain how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that Google can use such data in accordance with our privacy policies.

                                                    We respond to notices of alleged copyright infringement and terminate accounts of repeat infringers according to the process set out in the U.S. Digital Millennium Copyright Act.

                                                    We provide information to help copyright holders manage their intellectual property online. If you think somebody is violating your copyrights and want to notify us, you can find information about submitting notices and Google’s policy about responding to notices in our Help Center.
                                                    </p><p>
                                                    Your Content in our Services
                                                    Some of our Services allow you to upload, submit, store, send or receive content. You retain ownership of any intellectual property rights that you hold in that content. In short, what belongs to you stays yours.

                                                    When you upload, submit, store, send or receive content to or through our Services, you give Google (and those we work with) a worldwide license to use, host, store, reproduce, modify, create derivative works (such as those resulting from translations, adaptations or other changes we make so that your content works better with our Services), communicate, publish, publicly perform, publicly display and distribute such content. The rights you grant in this license are for the limited purpose of operating, promoting, and improving our Services, and to develop new ones. This license continues even if you stop using our Services (for example, for a business listing you have added to Google Maps). Some Services may offer you ways to access and remove content that has been provided to that Service. Also, in some of our Services, there are terms or settings that narrow the scope of our use of the content submitted in those Services. Make sure you have the necessary rights to grant us this license for any content that you submit to our Services.

                                                    Our automated systems analyze your content (including emails) to provide you personally relevant product features, such as customized search results, tailored advertising, and spam and malware detection. This analysis occurs as the content is sent, received, and when it is stored.

                                                    If you have a Google Account, we may display your Profile name, Profile photo, and actions you take on Google or on third-party applications connected to your Google Account (such as +1’s, reviews you write and comments you post) in our Services, including displaying in ads and other commercial contexts. We will respect the choices you make to limit sharing or visibility settings in your Google Account. For example, you can choose your settings so your name and photo do not appear in an ad.

                                                    You can find more information about how Google uses and stores content in the privacy policy or additional terms for particular Services. If you submit feedback or suggestions about our Services, we may use your feedback or suggestions without obligation to you.
                                                    </p><p>
                                                    About Software in our Services
                                                    When a Service requires or includes downloadable software, this software may update automatically on your device once a new version or feature is available. Some Services may let you adjust your automatic update settings.

                                                    Google gives you a personal, worldwide, royalty-free, non-assignable and non-exclusive license to use the software provided to you by Google as part of the Services. This license is for the sole purpose of enabling you to use and enjoy the benefit of the Services as provided by Google, in the manner permitted by these terms. You may not copy, modify, distribute, sell, or lease any part of our Services or included software, nor may you reverse engineer or attempt to extract the source code of that software, unless laws prohibit those restrictions or you have our written permission.

                                                    Open source software is important to us. Some software used in our Services may be offered under an open source license that we will make available to you. There may be provisions in the open source license that expressly override some of these terms.

                                                    Modifying and Terminating our Services
                                                    We are constantly changing and improving our Services. We may add or remove functionalities or features, and we may suspend or stop a Service altogether.

                                                    You can stop using our Services at any time, although we’ll be sorry to see you go. Google may also stop providing Services to you, or add or create new limits to our Services at any time.

                                                    We believe that you own your data and preserving your access to such data is important. If we discontinue a Service, where reasonably possible, we will give you reasonable advance notice and a chance to get information out of that Service.

                                                    Our Warranties and Disclaimers
                                                    We provide our Services using a commercially reasonable level of skill and care and we hope that you will enjoy using them. But there are certain things that we don’t promise about our Services.

                                                    Other than as expressly set out in these terms or additional terms, neither Google nor its suppliers or distributors make any specific promises about the Services. For example, we don’t make any commitments about the content within the Services, the specific functions of the Services, or their reliability, availability, or ability to meet your needs. We provide the Services “as is”.

                                                    Some jurisdictions provide for certain warranties, like the implied warranty of merchantability, fitness for a particular purpose and non-infringement. To the extent permitted by law, we exclude all warranties.
                                                    </p><p>
                                                    Liability for our Services
                                                    When permitted by law, Google, and Google’s suppliers and distributors, will not be responsible for lost profits, revenues, or data, financial losses or indirect, special, consequential, exemplary, or punitive damages.

                                                    To the extent permitted by law, the total liability of Google, and its suppliers and distributors, for any claims under these terms, including for any implied warranties, is limited to the amount you paid us to use the Services (or, if we choose, to supplying you the Services again).

                                                    In all cases, Google, and its suppliers and distributors, will not be liable for any loss or damage that is not reasonably foreseeable.

                                                    We recognize that in some countries, you might have legal rights as a consumer. If you are using the Services for a personal purpose, then nothing in these terms or any additional terms limits any consumer legal rights which may not be waived by contract.

                                                    Business uses of our Services
                                                    If you are using our Services on behalf of a business, that business accepts these terms. It will hold harmless and indemnify Google and its affiliates, officers, agents, and employees from any claim, suit or action arising from or related to the use of the Services or violation of these terms, including any liability or expense arising from claims, losses, damages, suits, judgments, litigation costs and attorneys’ fees.
                                                    </p>
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


