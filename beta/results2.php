
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PLP Gen &mdash; Get Pardot on the brain</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	-->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.php">Pardot<br>Code-Gen</a></h1>
      <nav id="fh5co-main-menu" role="navigation">
        <ul>
        <!--  <li class="fh5co-active"><a href="industry.php">Industry Pages</a></li>   -->  
          <li class="fh5co-active"><a href="custom.php">Build Custom</a></li>
          <li><a href="landing.php">*Landing Page*</a></li>
          <li><a href="edm.php">*Email*</a></li>
          <li><a href="combo.php">*Both*</a></li>
          <li>.</li>          
          <li class="fh5co-active"><a href="index.html" target="_blank">How To Use</a></li>
          <li class="fh5co-active"><a href="index.html" target="_blank">Help</a></li>
        </ul>
      </nav>

      <div class="fh5co-footer">
      <!--  <p><small>&copy; 2018 <a href="https://pub.s4.exacttarget.com/25kdvgge4om" target="_blank">Voltron Ventures.</a></span>  <span>Take it to Chatter: <a href="https://org62.lightning.force.com/lightning/r/CollaborationGroup/0F90M0000009ZcrSAE/view" target="_blank">Pardot Code Generator</a></span> <br> 
          --> <span>   <img href="https://pub.s4.exacttarget.com/25kdvgge4om" target="_blank" src="https://plp-gen.herokuapp.com/Assets/Voltron_Logo_Rev_2.png" style="max-height: 50px"/>  </span>



				</small></p>
				<ul>
					<!-- <li><a href="#"><i class="icon-facebook2"></i></a></li> -->
					<!-- <li><a href="#"><i class="icon-twitter2"></i></a></li> -->
					<!-- <li><a href="#"><i class="icon-instagram"></i></a></li> -->
					<!-- <li><a href="#"><i class="icon-linkedin2"></i></a></li> -->
				</ul>
			</div>

		</aside>

		<div id="fh5co-main">
			
			
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Build A Custom Landing Page</h2>
				<div class="row">
					<div class="col-md-1">
						
					</div>
					<div class="col-md-10">
						
					<h3>Your <b>Landing Page and Email</b> code is here!</h3>
					<p>To <b>EDIT</b> these values, click the "back" button in your browser. <br>To start over and <b>CREATE NEW CODE</b>, click the Pardot Code-Gen icon in the top left of this page.<br>
					</p>
							


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">


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
$imageUrl = $_POST['imageUrl'];
$para1Text = $_POST['para1Text'];    
$para2Text = $_POST['para2Text'];   
$cta = $_POST['cta'];
$ecta = $_POST['ecta'];
$ctaColour = $_POST['ctaColour'];    
$copyWrite = $_POST['copyWrite'];  


?>


                
               <div class="col-md-6"> 

<br>
<form id="form_b" action="previews/preview1.php" method="post" target="_blank">
<!-- <input type="hidden" name="tab" value="1"> -->
<input type="hidden" name="logo" value="<?php echo htmlspecialchars($logo); ?>" >
<input type="hidden" name="head1" value="<?php echo htmlspecialchars($head1); ?>" >
<input type="hidden" name="head1Colour" value="<?php echo htmlspecialchars($head1Colour); ?>" >
<input type="hidden" name="head2" value="<?php echo htmlspecialchars($head2); ?>" >
<input type="hidden" name="head2Colour" value="<?php echo htmlspecialchars($head2Colour); ?>" >
<input type="hidden" name="formHead" value="<?php echo htmlspecialchars($formHead); ?>" >
<input type="hidden" name="formHeadColour" value="<?php echo htmlspecialchars($formHeadColour); ?>" >
<input type="hidden" name="formHeadBgColour" value="<?php echo htmlspecialchars($formHeadBgColour); ?>" >
<input type="hidden" name="imageUrl" value="<?php echo htmlspecialchars($imageUrl); ?>" >
<input type="hidden" name="para1Text" value="<?php echo htmlspecialchars($para1Text); ?>" >
<input type="hidden" name="para2Text" value="<?php echo htmlspecialchars($para2Text); ?>" >
<input type="hidden" name="cta" value="<?php echo htmlspecialchars($cta); ?>" >
<input type="hidden" name="ctaColour" value="<?php echo htmlspecialchars($ctaColour); ?>" >
<input type="hidden" name="copyWrite" value="<?php echo htmlspecialchars($copyWrite); ?>" >


<button id="sendMessageButton1" class="btn btn-primary btn-xl text-uppercase" type="submit">Preview Landing Page</button><p></p>

<div class="bd-example" data-example-id="">
Click <code class="highlighter-rouge">&lt;COPY&gt;</code> below to copy the <b>Landing Page</b> code to the pasteboard.</div>
<div class="bd-clipboard"><span class="btn-clipboard" title="" data-original-title="Copy to clipboard"></span></div><div class="highlight">

<pre><code><!-- put the exited code here -->
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
  &lt;!-- Template Created By: Jenna Molby | www.jennamolby.com | Support: pardot@jennamolby.com --&gt;
  &lt;!-- Template Modified by DSolomons | dsolomons@salesforce.com | Voltron Ventures --&gt;
  &lt;!-- Required meta tags --&gt;
  &lt;meta charset=&quot;utf-8&quot;&gt;
  &lt;meta content=&quot;width=device-width, initial-scale=1, shrink-to-fit=no&quot; name=&quot;viewport&quot;&gt;
  &lt;link href=&quot;https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Oswald:400,600&quot; rel=&quot;stylesheet&quot;&gt;&lt;!-- Bootstrap CSS --&gt;
  &lt;link href=&quot;//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot;&gt;
  &lt;link href=&quot;//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css&quot; rel=&quot;stylesheet&quot;&gt;
  &lt;title&gt;%%title%%&lt;/title&gt;
  &lt;style type=&quot;text/css&quot;&gt;
      /* --------------------------

      EDIT THESE COLORS BELOW TO CUSTOMIZE 
      THE TEMPLATE TO MEET YOUR BRAND GUIDELINES

      --------------------------*/

      /* Font for headlines */
      h1, h2, h3, h4 {
        font-family: &apos;Oswald&apos;, sans-serif;
      }
      /* Font colors and size for headlines */
      h1 {
        color:<?php  echo $head1Colour;?>;
        font-size:45px;
        line-height:50px;
        margin:0;
        text-align:center;
      }
      h2 {
        color:<?php  echo $head2Colour;?>;
        font-size:35px;
        line-height:40px;
        font-weight:normal;
        margin:0;
        text-align:center;
      }
      h3 {   /* This is the Form Header Text Colour - generally good to leave white */
        font-size:20px;
        line-height:28px;
        color:<?php  echo $formHeadColour;?>;
        margin:0;
      }
      h4 {
        font-size:20px;
        line-height:28px;
        color:<?php  echo $ctaColour;?>;
        margin:0;
      }
      /* Font colors, size and type for body copy */
      body {
        font-family: &apos;Open Sans&apos;, sans-serif;
        color:#757575;
        font-size:15px;
        line-height:25px;
        background-color:#efefef;
      }
      /* Form background color */
      form.form {
        background-color:#FFF;
      }


      /* --------------------------

      WARNING: EDITING THE BELOW CSS MIGHT
      BREAK THE TEMPLATE

      --------------------------*/
      .header {
        padding:20px 10px;
        background-color:#FFF;
      }
      .headline {
        padding:0 0 25px 0;
      }
      .page-body {
        padding:55px 0;
      }
      .form-header {
        background:<?php  echo $formHeadBgColour;?>; /* Background of the form head */
        padding:20px;
      }
      form.form  {
        padding:20px !important;
        margin:0 !important;
      }
      form.form p label {
        color:#757575 !important;
        display:block;
        margin-bottom:2px !important;
        font-size:15px;
        width:100% !important;
        text-align:left !important;
        font-family: &apos;Open Sans&apos;, sans-serif;
      }
      form.form p.form-field {
        margin-bottom:10px;
      }
      form.form input[type=text], form.form textarea {
        width:100%;
        border:solid 1px #E0E0E0;
        background-color:#FFF;
        padding:5px !important;
        font-size:15px;
        font-family: &apos;Open Sans&apos;, sans-serif;
        width:100% !important;
      }
      form.form input[type=text]:focus, form.form textarea:focus, form.form select:focus {
        outline:none;
      }
      /* Background of the submit button */
      form.form input[type=submit] {
        background-color:<?php  echo $formHeadBgColour;?>;
        border:0;
        color:#FFF;
        font-size:15px;
        font-family: &apos;Open Sans&apos;, sans-serif;
        padding:10px 30px !important;
      }
      form.form p.submit {
        margin-left:0 !important;
        text-align:center;
      }
      form.form label.inline {
        display:inline-block !important;
        padding-left:8px;
        font-size:13px;
      }
      form.form textarea {
        height:75px;
      }
      form.form select {
        width:100%;
        border:solid 1px #E0E0E0;
        background-color:#FFF;
        padding:5px !important;
        font-size:15px;
        border-radius:0;
        -moz-border-radius:0;
        -webkit-border-radius:0;
        font-family: &apos;Open Sans&apos;, sans-serif;
          -moz-appearance: none;
          -webkit-appearance: none;
          appearancce: none;
          background-position: right center;
          background-repeat: no-repeat;
          background-size: 1ex;
          background-origin: content-box;
          
      }
      .footer {
        padding: 35px 0 30px 0;
        font-size:11px;
        color:#9E9E9E;
        line-height:18px;
        font-family: &apos;Open Sans&apos;, sans-serif;
        background-color:#FFF;
      }
      .footer .border-top {
        border-top:solid 1px #E0E0E0;
        padding-top:20px;
      }
      ul.social {
        list-style-type:none;
        margin:0;
        padding: 15px 0 0 0;
      }
      ul.social li {
        display:inline-block;
        padding:5px;
      }
      ul.social i {
        color:#9E9E9E;
        font-size:30px;
      }
      .asset-image {
        float:left;
        padding:0 15px 10px 0;
      }
      @media only screen and (max-width : 480px) {
        ul.social {
          text-align:center !important;
        }
        .copyright {
          text-align:center;
          padding-bottom:10px;
        }
        form.form input[type=submit] {
          width:100%;
          padding-top:12px;
          padding-bottom:12px;
        }
        h1 {
          font-size:30px;
          line-height:35px;
        }
        h2 {
          font-size:22px;
          line-height:28px;
        }
        .headline {
          padding-bottom:15px;
        }
        .logo {
          text-align:center;
        }
        .asset-image {
          float:none;
          padding-right:0;
        }
      }
  &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;div class=&quot;header&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;col-sm-6&quot;&gt;
          &lt;div class=&quot;logo&quot; pardot-region=&quot;logo&quot;&gt; &lt;!-- This is the company logo --&gt;
           &lt;img src=&quot;<?php  echo $logo;?>&quot; style=&quot;max-height: 60px&quot;/&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-sm-6&quot;&gt;
          &lt;ul class=&quot;social text-right&quot; pardot-region=&quot;social-icons&quot;&gt; 
            &lt;li&gt;
              &lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;&lt;i aria-hidden=&quot;true&quot; class=&quot;fa fa-facebook-square&quot;&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;&lt;i aria-hidden=&quot;true&quot; class=&quot;fa fa-twitter-square&quot;&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;&lt;i aria-hidden=&quot;true&quot; class=&quot;fa fa-youtube-square&quot;&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;&lt;i aria-hidden=&quot;true&quot; class=&quot;fa fa-google-plus-square&quot;&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;/li&gt; 
          &lt;/ul&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;page-body&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;col-md-8 main-content&quot;&gt;
          &lt;div class=&quot;headline&quot; pardot-region=&quot;headlines&quot;&gt;
            &lt;h1&gt;<?php  echo $head1;?>&lt;/h1&gt;
            &lt;h2&gt;<?php  echo $head2;?>&lt;/h2&gt;
          &lt;/div&gt;
          &lt;div pardot-region=&quot;main-content&quot;&gt;

            &lt;!-- This is the hero image --&gt;
          &lt;img class=&quot;asset-image&quot; src=&quot;<?php  echo $imageUrl;?>&quot; width=&quot;100%&quot;&gt;
          &lt;p&gt;<?php echo $para1Text ?>&lt;/p&gt;
          &lt;p&gt;<?php echo $para2Text ?>&lt;/p&gt;
        

            &lt;!-- Uncomment and add bullet items if desired --&gt;
         &lt;!-- 
          &lt;ul&gt;
            &lt;li&gt;Maecenas feugiat felis erat.&lt;/li&gt;
            &lt;li&gt;Phasellus vel auctor massa. Fusce semper elit vel mi pharetra, rutrum dictum purus sodales.&lt;/li&gt;
            &lt;li&gt;In volutpat molestie urna, eu hendrerit risus congue eu. Maecenas condimentum vehicula pretium.&lt;/li&gt;
            &lt;li&gt;Praesent odio sapien, gravida a molestie a, dignissim a libero.&lt;/li&gt;
            &lt;li&gt;Ut tempor consequat tortor, ac dapibus erat mollis quis.&lt;/li&gt;
            &lt;li&gt;Nam a consectetur arcu.&lt;/li&gt;
          &lt;/ul&gt; --&gt;
          &lt;h2&gt;<?php  echo $cta;?>&lt;/h2&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-md-4 form-container&quot;&gt;
          &lt;div class=&quot;form-header text-center&quot; pardot-region=&quot;form-header&quot;&gt;
            &lt;h3&gt;<?php  echo $formHead;?>&lt;/h3&gt;
          &lt;/div&gt;
            %%Content%%
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;footer&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;col-sm-12 copyright text-center&quot; pardot-region=&quot;copyright-and-address&quot;&gt;
          &amp;copy; 2017 <?php  echo $copyWrite;?>
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
				
			
			
	</div>
		</div>

    <div class="col-md-6">
      
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
&lt;!-- Template Modified by DSolomons | dsolomons@salesforce.com | Voltron Ventures --&gt;
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
                              &lt;td align=&quot;center&quot; bgcolor=&quot;<?php echo $ctaColour ?>&quot; pardot-data=&quot;&quot; style=&quot;border-radius: 26px; background:<?php echo $ctaColour ?>;&quot; class=&quot;&quot;&gt;&lt;a href=&quot;https://pardot.com&quot; style=&quot;font-size: 16px; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 26px; background-color: <?php echo $ctaColour ?>; padding: 14px 26px; border: 1px solid <?php echo $ctaColour ?>; display: block;&quot; target=&quot;_blank&quot;&gt;<?php  echo $ecta;?>&lt;/a&gt;&lt;/td&gt;
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
        
      
      
  </div>
</div>

<script src="previews/Bootstrap_files/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="previews/Bootstrap_files/tether.min.js"></script>
  <script src="previews/Bootstrap_files/bootstrap.min.js"></script>
  <script src="previews/Bootstrap_files/anchor.min.js"></script>
  <script src="previews/Bootstrap_files/clipboard.min.js"></script>
  <script src="previews/Bootstrap_files/holder.min.js"></script>
  <script src="previews/Bootstrap_files/application.js"></script>


	<!-- jQuery -->
	<script src="previews/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="previews/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="previews/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="previews/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="previews/js/jquery.flexslider-min.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

