<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pardot Landing Page Generator. Clicks not code (but some code, but Voltron made it easy, so that's ok...">
    <meta name="author" content="">

    <title>PCG - Pardot Code Gen</title>

    <!-- Bootstrap core CSS -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom fonts for this template -->
    <link href="https://blackrockdigital.github.io/startbootstrap-freelancer/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

<!-- Favicons -->
<link rel="apple-touch-icon" href="Assets/flav-p3.png">
<link rel="icon" href="Assets/flav-p3.png">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">PCG</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="htu.html" target="_blank">How to use</a>
            </li> 
             <li class="nav-item">
              <a class="nav-link"> | </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="lpd.html" target="_blank">LandingPage Details</a>
            </li> 
             <li class="nav-item">
              <a class="nav-link"> | </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="edmd.html" target="_blank">Email Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"> | </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="rap.html" target="_blank">Report a Problem</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
    
        <div class="intro-text">
          <span class="name">PCG</span>
          <hr class="star-light">
          <span class="skills">Pardot Code Generator - Clicks <i>not</i> Code<br>(but some code, but Voltron made it easy, so that's ok then!)</span>
        </div>
      </div>
    </header>





<div class="container">
<div class="row">
   <div class="col-md-3">
                </div>
                <div class="col-md-6">
        <div class="col-xl-12 text-centered">
        <div class="input-group">
          <ul class="nav nav-tabs mb-3 center-pills" id="pills-tab" role="tablist">
   



            

  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Landing Page Only</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Email Only</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Landing Page and Email</a>
  </li>
</ul>


           
      </div>         
      </div>
    </div>
  </div>
</div>



<div class="container-fluid">
<div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

<form action="results1.php" method="post">
<input type="hidden" name="tab" value="1">
<br>
<!-- Logo URL -->
                <div class="form-group">
                    <input class="form-control" name="logo" type="text" placeholder="logo url" ></p>
                </div>
                <!-- head1  -->
                <div class="form-group">
                <input class="form-control" name="head1" type="text" placeholder="head 1 text" ></p>
                </div>
                <!-- head1Colour -->
                <div class="form-group">
                <input class="form-control" name="head1Colour" type="text" label="123" placeholder="head 1 colour" ></p>
                </div>
                <!-- head2 -->
                <div class="form-group">
                    <input class="form-control" name="head2" type="text" placeholder="head 2 text" ></p>
                </div>
                <!-- head2Colour -->
                <div class="form-group">
                    <input class="form-control" name="head2Colour" type="text" placeholder="head 2 colour" ></p>
                </div>
                 <!-- imageUrl -->
                <div class="form-group">
                    <input class="form-control" name="imageUrl" type="text" placeholder="image url" ></p>
                </div>
                
               
                <!-- para1Text-->
                <div class="form-group">
                  <textarea class="form-control" name="para1Text" placeholder="paragraph 1 text" rows="4"></textarea>
                    <!-- <input class="form-control" name="para1Text" type="textarea" placeholder="paragraph 1 text" ></p> -->
                </div>
                <!-- para2Text -->
                <div class="form-group">
                  <textarea class="form-control" name="para2Text" placeholder="paragraph 2 text" rows="4"></textarea>
                <!--    <input class="form-control" name="para2Text" type="textarea" placeholder="paragraph 2 text" ></p> -->
                </div>
                <!-- cta -->
                <div class="form-group">
                    <input class="form-control" name="cta" type="text" placeholder="lp call to action text EG. Submit the form and we will send you..." ></p>
                </div>
                <!-- ctaColour -->
                <div class="form-group">
                    <input class="form-control" name="ctaColour" type="text" placeholder="cta text colour" ></p>
                </div>
                <!-- formHead -->
                <div class="form-group">
                    <input class="form-control" name="formHead" type="text" placeholder="form head text" ></p>
                </div>
                <!-- formHeadColour -->
                <div class="form-group">
                    <input class="form-control" name="formHeadColour" type="text" placeholder="form head text colour" ></p>
                </div>
                <!-- formHeadBgColour -->
                <div class="form-group">
                    <input class="form-control" name="formHeadBgColour" type="text" placeholder="form head bg colour" ></p>
                </div>
               
                <!-- copyWrite -->
                <div class="form-group">
                    <input class="form-control" name="copyWrite" type="text" placeholder="copyright company name *REQUIRED*" required="true"></p>
                </div>

<div class="col-lg-12 text-center">
<div id="success"></div>
<button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" formaction="results1.php" type="submit">Generate LP Code!</button><p></p>
</div>
</form>

  </div>



  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
<form action="results2.php" method="post">
<input type="hidden" name="tab" value="2">
<br>
<!-- Logo URL -->
                <div class="form-group">
                    <input class="form-control" name="logo" type="text" placeholder="logo url" ></p>
                </div>
                <!-- head1  -->
                <div class="form-group">
                <input class="form-control" name="head1" type="text" placeholder="head 1 text" ></p>
                </div>
                <!-- head1Colour -->
                <div class="form-group">
                <input class="form-control" name="head1Colour" type="text" label="123" placeholder="head 1 colour" ></p>
                </div>
                <!-- head2 
                <div class="form-group">
                    <input class="form-control" name="head2" type="text" placeholder="head 2 text" ></p>
                </div> -->
                <!-- head2Colour 
                <div class="form-group">
                    <input class="form-control" name="head2Colour" type="text" placeholder="head 2 colour" ></p>
                </div> -->
                 <!-- imageUrl -->
                <div class="form-group">
                    <input class="form-control" name="imageUrl" type="text" placeholder="image url" ></p>
                </div>
                
               
                <!-- para1Text-->
                <div class="form-group">
                  <textarea class="form-control" name="para1Text" placeholder="paragraph 1 text" rows="4"></textarea>
                    <!-- <input class="form-control" name="para1Text" type="textarea" placeholder="paragraph 1 text" ></p> -->
                </div>
                <!-- para2Text -->
                <div class="form-group">
                  <textarea class="form-control" name="para2Text" placeholder="paragraph 2 text" rows="4"></textarea> 
                <!--    <input class="form-control" name="para2Text" type="textarea" placeholder="paragraph 2 text" ></p> -->
                </div>
                <!-- ecta -->
                <div class="form-group">
                    <input class="form-control" name="ecta" type="text" placeholder="email call to action text EG Click to download..." ></p>
                </div>
                   <!-- formHeadBgColour -->
                <div class="form-group">
                    <input class="form-control" name="edmformHeadBgColour" type="text" placeholder="header bg + cta button colour" ></p>
                </div>
                <!-- ctaColour -->
                <div class="form-group">
                    <input class="form-control" name="ctaColour" type="text" placeholder="cta text colour - best to leave this white!" ></p>
                </div>
                <!-- copyWrite -->
                <div class="form-group">
                    <input class="form-control" name="copyWrite" type="text" placeholder="copyright company name *REQUIRED*" required="true"></p>
                </div>

<div class="col-lg-12 text-center">
<div id="success"></div>
<button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" formaction="results3.php" type="submit">Generate EDM Code!</button><p></p>
</div>
</form>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
<form action="results3.php" method="post">
<input type="hidden" name="tab" value="3">
<br>
<!-- Logo URL -->
                <div class="form-group">
                    <input class="form-control" name="logo" type="text" placeholder="logo url" ></p>
                </div>
                <!-- head1  -->
                <div class="form-group">
                <input class="form-control" name="head1" type="text" placeholder="head 1 text" ></p>
                </div>
                <!-- head1Colour -->
                <div class="form-group">
                <input class="form-control" name="head1Colour" type="text" label="123" placeholder="head 1 colour" ></p>
                </div>
                <!-- head2 -->
                <div class="form-group">
                    <input class="form-control" name="head2" type="text" placeholder="head 2 text" ></p>
                </div>
                <!-- head2Colour -->
                <div class="form-group">
                    <input class="form-control" name="head2Colour" type="text" placeholder="head 2 colour" ></p>
                </div>
                 <!-- imageUrl -->
                <div class="form-group">
                    <input class="form-control" name="imageUrl" type="text" placeholder="image url" ></p>
                </div>
                
               
                <!-- para1Text-->
                <div class="form-group">
                  <textarea class="form-control" name="para1Text" placeholder="paragraph 1 text" rows="4"></textarea>
                    <!-- <input class="form-control" name="para1Text" type="textarea" placeholder="paragraph 1 text" ></p> -->
                </div>
                <!-- para2Text -->
                <div class="form-group">
                  <textarea class="form-control" name="para2Text" placeholder="paragraph 2 text" rows="4"></textarea>
                <!--    <input class="form-control" name="para2Text" type="textarea" placeholder="paragraph 2 text" ></p> -->
                </div>
                <!-- cta -->
                <div class="form-group">
                    <input class="form-control" name="cta" type="text" placeholder="lp call to action text EG. Submit the form and we will send you..." ></p>
                </div>
                 <!-- ecta -->
                <div class="form-group">
                    <input class="form-control" name="ecta" type="text" placeholder="email call to action text EG Click to download..." ></p>
                </div>
                <!-- ctaColour -->
                <div class="form-group">
                    <input class="form-control" name="ctaColour" type="text" placeholder="cta text colour" ></p>
                </div>
               
                <!-- formHead -->
                <div class="form-group">
                    <input class="form-control" name="formHead" type="text" placeholder="form head text" ></p>
                </div>
                <!-- formHeadColour -->
                <div class="form-group">
                    <input class="form-control" name="formHeadColour" type="text" placeholder="form head text colour" ></p>
                </div>
                <!-- formHeadBgColour -->
                <div class="form-group">
                    <input class="form-control" name="formHeadBgColour" type="text" placeholder="form head bg colour" ></p>
                </div>
               <!-- EDM formHeadBgColour -->
                <div class="form-group">
                    <input class="form-control" name="edmformHeadBgColour" type="text" placeholder="edm header bg + edm cta button colour" ></p>
                </div>

                <!-- copyWrite -->
                <div class="form-group">
                    <input class="form-control" name="copyWrite" type="text" placeholder="copyright company name *REQUIRED*" required="true"></p>
                </div>

<div class="col-lg-12 text-center">
<div id="success"></div>
<button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" formaction="results2.php" type="submit">Generate LP + EDM Code!</button><p></p>
</div>
</form>
  </div>
</div>
</div>
</div>
</div>





<!-- ORIGINAL --> 

   

    <!-- About Section 
    <section class="success" id="about">
      <div class="container">
        <h2 class="text-center">About</h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
          </div>
          <div class="col-lg-8 mx-auto text-center">
            <a href="#" class="btn btn-lg btn-outline">
              <i class="fa fa-download"></i>
              Download Theme
            </a>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
           
            <div class="col-lg-12">
               PLP-Gen V2.0 (Rel 01.18) by<br>
    <img class="asset-image" src="Assets/Voltron_Logo_Rev_2.png" width="600px">
    <br>Landing Page Template Created By: Jenna Molby | www.jennamolby.com
        <br>Email Template Created By: Litmus | http://litmus.com
            </div>
            
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Voltron Ventures 2018
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!--
    <script src=“https://code.jquery.com/jquery-3.2.1.slim.min.js” integrity=“sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN” crossorigin=“anonymous”></script>
    <script src=“https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js” integrity=“sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q” crossorigin=“anonymous”></script>
    <script src=“https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js” integrity=“sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4” crossorigin=“anonymous”></script>
-->


    <!-- Bootstrap core JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-freelancer/vendor/jquery/jquery.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-freelancer/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 

    <!-- Plugin JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-freelancer/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
