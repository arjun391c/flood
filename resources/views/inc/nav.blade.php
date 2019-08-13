<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container-fluid row" id="row">
        <div class="col-sm-3">
                <img id="logo"  src="{{url('/images/iedc_logo.png')}}">
        </div>

        <div class="col-sm-9 py-4">
          <h4 class="text-white">About</h4>
          <hr>
          <p class="text-white" id="about" style="text-align: justify; font-size: 1.2em;">The continuous downpour of rain; that left the people of God's own country stunned and totally helpless. The uncalled waters swept away everything in its vicinity. In the milliseconds that the raging waters came through, it may have not been possible to get your hands on all the life dependent tools. Returning to our normal lives may become a bit more difficult without these items.

Have you had your documents lost in the midst of these floods and wonder of you can get it back? Or have the documents of some one else fallen into your hands and you wish to return it?

We intent to help make your desire a little bit more easy to accomplish. Upload the document that you have found and the seekers will have the opportunity to search for their lost items.

We hope that this venture will help you cross over the tide to a future with lesser losses of these floods.</p>
        </div>

    </div>
  </div>
  <div class="collapse bg-dark" id="navbarHeader2">
        <div class="container-fluid row" id="row">
            <div class="col-sm-3">
                    <img id="logo"  src="{{url('/images/iedc_logo.png')}}">
            </div>

            <div class="col-sm-9 py-4">
              <h4 class="text-white">Contact</h4>
              <hr>
              <div class="row">
                    <div class="col-md-3 mb-3" >
                            <h5 class="text-white" id="about" style="text-align: justify; font-size: 1.2em; font-weight:bold;">Arjun C</h5>
                            <small class="text-white" id="about" style="text-align: justify; font-size: 1.2em;">Maker Space Head</small>
                            <p class="text-white" id="about" style="text-align: justify; font-size: 1.2em;">IEDC TKMCE</p>
                            <p class="text-white" id="about" style="text-align: justify; font-size: 1.2em;">Phone: 88487714937</p>



                      </div>

                      <div class="col-md-3 mb-3">
                            <h5 class="text-white "  id="about" style="text-align: justify; font-size: 1.2em; font-weight:bold;">Sharook K</h5>
                            <small class="text-white" id="about" style="text-align: justify; font-size: 1.2em;">Chief Marketing Officer</small>
                            <p class="text-white" id="about" style="text-align: justify; font-size: 1.2em;">IEDC TKMCE</p>
                            <p class="text-white" id="about" style="text-align: justify; font-size: 1.2em;">Phone: 9656494495</p>

                      </div>
                      <hr>
                      <div class="col-md-3 " id="links">
                            <h5 class="text-white" id="about" style="text-align: justify; font-size: 1.2em; font-weight:bolder;">FOLLOW US</h5>
                            <h5 class="text-white" id="about" style="text-align: justify; font-size: 1.2em;">IEDC TKMCE, Kollam</h5>

                            <div class="mt-3">
                                    <a href="https://www.instagram.com/iedc_tkmce/?utm_source=ig_profile_share&igshid=1l9s2kp2c6j2t" target="_blank"><i class="fab fa-instagram mr-3" style="font-size: 2em;"></i></a>
                                    <a href="https://www.linkedin.com/company/iedc-tkmce" target="_blank"><i class="fab fa-linkedin-in mr-3" style="font-size: 2em;"></i></a>
                                    <a href="https://www.iedctkmce.com" target="_blank"><i class="fas fa-globe mr-3" style="font-size: 2em;"></i></a>
                                    <a href=" https://www.facebook.com/tkmedc/" target="_blank"><i class="fab fa-facebook-f mr-3" style="font-size: 2em;"></i></a>
                                    <a href="mailto:info@iedctkmce.com" target="_blank"><i class="fas fa-envelope mr-3" style="font-size: 2em;"></i></a>
                            </div>

                      </div>
                      <hr>
              </div>


            </div>


        </div>
      </div>
  <div class="navbar ">
    <div class="container d-flex justify-content-between">
      <a href="/" class="navbar-brand d-flex align-items-center">
         <img src="{{url('/images/file.png')}}" height="40" width="40" style=""/>&nbsp;&nbsp;

        <strong>Let's Find</strong>
      </a>
      <nav class="nav nav-masthead ml-auto">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" id="contact" style="cursor: pointer;" >Contact</a>
            <a class="nav-link" id="about1" style="cursor: pointer;">About</a>
          </nav>
    </div>
  </div>
</header>

<script>
$('#contact').click(()=>{
    $('#navbarHeader').collapse('hide');
    $('#navbarHeader2').collapse('toggle');
})
$('#about1').click(()=>{
    $('#navbarHeader2').collapse('hide');
    $('#navbarHeader').collapse('toggle');
})
</script>
