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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="https://blackrockdigital.github.io/startbootstrap-freelancer/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="https://blackrockdigital.github.io/startbootstrap-freelancer/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

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
<!--        <img class="img-fluid" src="img/profile.png" alt=""> -->
        <div class="intro-text">
          <span class="name">PCG</span>
          <hr class="star-light">
          <span class="skills">Your PCG Code</span>
        </div>
      </div>
    </header>



<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">

        
  <p></p>
  
  <p>To <b>EDIT</b> these values, click the "back" button in your browser. <br>To start over and <b>CREATE NEW CODE</b>, click the PCG icon in the top left of this page.</p>
  <p></p>




<!-- start content here -->

<?php

$logo = $_POST['logo'];
$head1 = $_POST['head1'];
$head1Colour = $_POST['head1Colour'];  
$head2 = $_POST['head2'];
$head2Colour = $_POST['head2Colour'];    
$formHead = $_POST['formHead'];
$formHeadColour = $_POST['formHeadColour'];
$formHeadBgColour = $_POST['formHeadBgColour']; 
$edmformHeadBgColour = $_POST['edmformHeadBgColour']; 
$imageUrl = $_POST['imageUrl'];
$para1Text = $_POST['para1Text'];    
$para2Text = $_POST['para2Text'];   
$cta = $_POST['cta'];
$ecta = $_POST['ecta'];
$ctaColour = $_POST['ctaColour'];    
$copyWrite = $_POST['copyWrite'];  

$fp = fopen("formdata.txt", "a");
$savestring = "Email:  " . $copyWrite . "  ||  " . $head1 . "  ||  " . $logo . "  ||  " . $imageUrl . "\n";
fwrite($fp, $savestring);
fclose($fp);

?>

<div class="container-fluid">
<div class="row">
                
                <div class="col-md-12">

<br>
<!-- Logo URL -->
      
<form id="form_a" action="previews/preview-email.php" method="post" target="_blank">
<!-- <input type="hidden" name="tab" value="1"> -->
<input type="hidden" name="logo" value="<?php echo htmlspecialchars($logo); ?>" >
<input type="hidden" name="head1" value="<?php echo htmlspecialchars($head1); ?>" >
<input type="hidden" name="head1Colour" value="<?php echo htmlspecialchars($head1Colour); ?>" >
<input type="hidden" name="head2" value="<?php echo htmlspecialchars($head2); ?>" >
<input type="hidden" name="head2Colour" value="<?php echo htmlspecialchars($head2Colour); ?>" >
<input type="hidden" name="formHead" value="<?php echo htmlspecialchars($formHead); ?>" >
<input type="hidden" name="formHeadColour" value="<?php echo htmlspecialchars($formHeadColour); ?>" >
<input type="hidden" name="formHeadBgColour" value="<?php echo htmlspecialchars($formHeadBgColour); ?>" >
<input type="hidden" name="edmformHeadBgColour" value="<?php echo htmlspecialchars($edmformHeadBgColour); ?>" >
<input type="hidden" name="imageUrl" value="<?php echo htmlspecialchars($imageUrl); ?>" >
<input type="hidden" name="para1Text" value="<?php echo htmlspecialchars($para1Text); ?>" >
<input type="hidden" name="para2Text" value="<?php echo htmlspecialchars($para2Text); ?>" >
<input type="hidden" name="cta" value="<?php echo htmlspecialchars($cta); ?>" >
<input type="hidden" name="ecta" value="<?php echo htmlspecialchars($ecta); ?>" >
<input type="hidden" name="ctaColour" value="<?php echo htmlspecialchars($ctaColour); ?>" >
<input type="hidden" name="copyWrite" value="<?php echo htmlspecialchars($copyWrite); ?>" >
<button id="sendMessageButton2" class="btn btn-primary btn-xl text-uppercase" formaction="previews/preview-email.php" type="submit">Preview Email</button><p></p>

<div class="bd-example" data-example-id="">
Click <code class="highlighter-rouge">&lt;COPY&gt;</code> below to copy the <b>Email</b> code to the pasteboard.</div>
<div class="bd-clipboard"><span class="btn-clipboard" title="" data-original-title="Copy to clipboard"></span></div><div class="highlight">




<pre><code><!-- put the exited code here -->

&lt;!-- THIS EMAIL WAS BUILT BY LITMUS http://litmus.com --&gt;
&lt;!-- RELEASED UNDER THE MIT LICENSE https://opensource.org/licenses/MIT --&gt;
&lt;!-- Template Modified by DSolomons | Voltron Ventures --&gt;
&lt;!doctype html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;&lt;/title&gt;
&lt;style type=&quot;text/css&quot;&gt;
/* CLIENT-SPECIFIC STYLES */
body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
img { -ms-interpolation-mode: bicubic; }

/* RESET STYLES */
img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
table { border-collapse: collapse !important; }
body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

/* iOS BLUE LINKS */
a[x-apple-data-detectors] {
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

/* MOBILE STYLES */
@media screen and (max-width: 600px) {
  .img-max {
    width: 100% !important;
    max-width: 100% !important;
    height: auto !important;
  }

  .max-width {
    max-width: 100% !important;
  }

  .mobile-wrapper {
    width: 85% !important;
    max-width: 85% !important;
  }

  .mobile-padding {
    padding-left: 5% !important;
    padding-right: 5% !important;
  }
}

/* ANDROID CENTER FIX */
div[style*=&quot;margin: 16px 0;&quot;] { margin: 0 !important; }
&lt;/style&gt;
&lt;/head&gt;
&lt;body style=&quot;margin: 0 !important; padding: 0; !important background-color: #ffffff;&quot; bgcolor=&quot;#ffffff&quot;&gt;
&lt;!-- HIDDEN PREHEADER TEXT --&gt;
&lt;div style=&quot;display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;&quot;&gt;Lorem ipsum dolor que ist&lt;/div&gt;

&lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td align=&quot;center&quot; background=&quot;bg.jpg&quot; bgcolor=&quot;<?php echo $edmformHeadBgColour ?>&quot; class=&quot;mobile-padding&quot; style=&quot;background: <?php echo $edmformHeadBgColour ?> url(&apos;bg.jpg&apos;); background-size: cover; padding: 50px 15px;&quot; valign=&quot;top&quot; width=&quot;100%&quot;&gt;&lt;!--[if (gte mso 9)|(IE)]&gt;
            &lt;table align=&quot;center&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; width=&quot;600&quot;&gt;
            &lt;tr&gt;
            &lt;td align=&quot;center&quot; valign=&quot;top&quot; width=&quot;600&quot;&gt;
            &lt;![endif]--&gt;
      &lt;table align=&quot;center&quot; border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;max-width:600px;&quot; width=&quot;100%&quot;&gt;
        &lt;tbody&gt;
          &lt;tr&gt;
            &lt;td align=&quot;center&quot; style=&quot;padding: 0 0 20px 0;&quot; valign=&quot;top&quot; class=&quot;&quot;&gt;&lt;img border=&quot;0&quot; src=&quot;<?php  echo $logo;?>&quot; style=&quot;display: block; width: 180px;  border-width: 0px; border-style: solid;&quot; width=&quot;180&quot;&gt;&lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td align=&quot;center&quot; style=&quot;padding: 0; font-family: Open Sans, Helvetica, Arial, sans-serif;&quot; valign=&quot;top&quot; class=&quot;&quot;&gt;&lt;/td&gt;
          &lt;/tr&gt;
        &lt;/tbody&gt;
      &lt;/table&gt;
      &lt;!--[if (gte mso 9)|(IE)]&gt;
            &lt;/td&gt;
            &lt;/tr&gt;
            &lt;/table&gt;
            &lt;![endif]--&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td align=&quot;center&quot; bgcolor=&quot;#ffffff&quot; class=&quot;mobile-padding&quot; height=&quot;100%&quot; style=&quot;padding: 50px 15px;&quot; valign=&quot;top&quot; width=&quot;100%&quot;&gt;&lt;!--[if (gte mso 9)|(IE)]&gt;
            &lt;table align=&quot;center&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; width=&quot;600&quot;&gt;
            &lt;tr&gt;
            &lt;td align=&quot;center&quot; valign=&quot;top&quot; width=&quot;600&quot;&gt;
            &lt;![endif]--&gt;
      &lt;table align=&quot;center&quot; border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;max-width:600px;&quot; width=&quot;100%&quot;&gt;
        &lt;tbody&gt;
          &lt;tr&gt;
            &lt;td align=&quot;center&quot; style=&quot;padding: 0 0 25px 0; font-family: Open Sans, Helvetica, Arial, sans-serif;&quot; valign=&quot;top&quot;&gt;
            &lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;
              &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;td align=&quot;center&quot; bgcolor=&quot;#ffffff&quot; pardot-data=&quot;&quot; style=&quot;border-radius: 3px 3px 0px 0px; background: rgb(255, 255, 255);&quot; class=&quot;&quot;&gt;&lt;img alt=&quot;insert alt text here&quot; class=&quot;img-max&quot; height=&quot;401&quot; src=&quot;<?php  echo $imageUrl;?>&quot; style=&quot;display: block; border-radius: 3px 3px 0px 0px; font-family: sans-serif; font-size: 16px; color: rgb(153, 153, 153); width: 600px; height: 401px;&quot; width=&quot;600&quot;&gt;&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td align=&quot;center&quot; bgcolor=&quot;#ffffff&quot; style=&quot;border-radius: 0 0 3px 3px; padding: 25px;&quot;&gt;
                  &lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;
                    &lt;tbody&gt;
                      &lt;tr&gt;
                        &lt;td align=&quot;center&quot; style=&quot;font-family: Open Sans, Helvetica, Arial, sans-serif;&quot; class=&quot;&quot;&gt;&lt;h1 style=&quot;font-size: 40px; color: <?php echo $head1Colour ?>; margin: 0; padding-bottom: 10px;&quot;&gt;<?php  echo $head1;?>&amp;nbsp;&lt;br&gt;&lt;/h1&gt;
                          
                        &lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td align=&quot;center&quot; style=&quot;font-family: Open Sans, Helvetica, Arial, sans-serif;&quot; class=&quot;&quot;&gt;&lt;h2 style=&quot;font-size: 20px; color: #444444; margin: 0; padding-bottom: 10px;&quot;&gt;Hi %%first_name%%,&amp;nbsp;&lt;br&gt;&lt;/h2&gt;


&lt;p style=&quot;color: #999999; font-size: 16px; line-height: 24px; margin: 0;&quot;&gt;<?php echo $para1Text;?>&lt;br&gt;&amp;nbsp;&lt;/p&gt;
&lt;p style=&quot;color: #999999; font-size: 16px; line-height: 24px; margin: 0;&quot;&gt;<?php echo $para2Text;?>&lt;br&gt;&amp;nbsp;&lt;/p&gt;


&lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td align=&quot;center&quot; style=&quot;padding: 30px 0 0 0;&quot;&gt;
                        &lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot;&gt;
                          &lt;tbody&gt;
                            &lt;tr&gt;
                              &lt;td align=&quot;center&quot; bgcolor=&quot;<?php echo $edmformHeadBgColour ?>&quot; pardot-data=&quot;&quot; style=&quot;border-radius: 26px; background:<?php echo $edmformHeadBgColour ?>;&quot; class=&quot;&quot;&gt;&lt;a href=&quot;https://pardot.com&quot; style=&quot;font-size: 16px; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 26px; background-color: <?php echo $edmformHeadBgColour ?>; padding: 14px 26px; border: 1px solid <?php echo $edmformHeadBgColour ?>; display: block;&quot; target=&quot;_blank&quot;&gt;<?php  echo $ecta;?>&lt;/a&gt;&lt;/td&gt;
                            &lt;/tr&gt;
                          &lt;/tbody&gt;
                        &lt;/table&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                    &lt;/tbody&gt;
                  &lt;/table&gt;
                  &lt;/td&gt;
                &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
            &lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td align=&quot;center&quot; bgcolor=&quot;#ffffff&quot; height=&quot;100%&quot; style=&quot;padding: 0 15px 40px 15px;&quot; valign=&quot;top&quot; width=&quot;100%&quot;&gt;&lt;!--[if (gte mso 9)|(IE)]&gt;
            &lt;table align=&quot;center&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; width=&quot;600&quot;&gt;
            &lt;tr&gt;
            &lt;td align=&quot;center&quot; valign=&quot;top&quot; width=&quot;600&quot;&gt;
            &lt;![endif]--&gt;
            &lt;table align=&quot;center&quot; border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;max-width:600px;&quot; width=&quot;100%&quot;&gt;
              &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;td align=&quot;center&quot; style=&quot;padding: 0 0 5px 0;&quot; valign=&quot;top&quot; class=&quot;&quot;&gt;&lt;img border=&quot;0&quot; src=&quot;<?php  echo $logo;?>&quot; style=&quot;display: block; width: 180px; border-width: 0px; border-style: solid;&quot; width=&quot;180&quot;&gt;&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td align=&quot;center&quot; style=&quot;padding: 0; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #999999;&quot; valign=&quot;top&quot; class=&quot;&quot;&gt;2017 <?php  echo $copyWrite;?> All rights reserved.
                  &lt;p style=&quot;font-size: 14px; line-height: 20px;&quot;&gt;&lt;a href=&quot;https://pardot.com&quot; style=&quot;color: #999999;&quot; target=&quot;_blank&quot;&gt;View Online&lt;/a&gt; &amp;nbsp; • &amp;nbsp; %%unsubscribe%%&lt;/p&gt;
                  &lt;/td&gt;
                &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
            &lt;!--[if (gte mso 9)|(IE)]&gt;
            &lt;/td&gt;
            &lt;/tr&gt;
            &lt;/table&gt;
            &lt;![endif]--&gt;&lt;/td&gt;
          &lt;/tr&gt;
        &lt;/tbody&gt;
      &lt;/table&gt;
      &lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;



</code></pre><!-- finish the exited code here -->   

</div>
</div>
</div>
</div>


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

<!-- from original results -->

<script src="Bootstrap_files/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>

<script src="Bootstrap_files/tether.min.js"></script>


  <script src="Bootstrap_files/bootstrap.min.js"></script>



  <script src="Bootstrap_files/anchor.min.js"></script>

  <script src="Bootstrap_files/clipboard.min.js"></script>

  <script src="Bootstrap_files/holder.min.js"></script>

  <script src="Bootstrap_files/application.js"></script>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
<script src="Bootstrap_files/ie-emulation-modes-warning.js"></script>


<script src="Bootstrap_files/jekyll-search.min.js"></script>




  </body>

</html>
