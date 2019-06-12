
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	
  <!-- THIS PAGE IS BADLY NAMED - THIS IS THE EDM CODE RESULTS -->

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

<!-- Global site tag (gtag.js) - Google Analytics Connected to GA For Pardot Code Gen -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119753873-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119753873-1');
</script>

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.php">Pardot<br>Code-Gen</a></h1>
      <nav id="fh5co-main-menu" role="navigation">
        <ul>
          <li><a>Build A Custom</a></li>
          <li><a href="landing.php">*Landing Page*</a></li>
          <li><a href="edm.php">*Email*</a></li>
          <li><a href="combo.php">*Both*</a></li>
          <li>.</li>          
          <li><a href="howto.php" target="_blank">How To Use</a></li>
          <li><a href="help.php" target="_blank">Help</a></li>
        </ul>
      </nav>

      <div class="fh5co-footer">
   <span>   <img href="https://pub.s4.exacttarget.com/25kdvgge4om" target="_blank" src="https://plp-gen.herokuapp.com/Assets/Voltron_Logo_Rev_2.png" style="max-height: 50px"/>  </span>



				
			</div>

		</aside>

		<div id="fh5co-main">
			
			
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Build A Custom Email</h2>
				<div class="row">
					<div class="col-md-1">
						
					</div>
					<div class="col-md-10">
						
					<h3>Your <b>Email</b> code is here!</h3>
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
/* $head2Colour = $_POST['head2Colour']; */    
$formHead = $_POST['formHead'];
$formHeadColour = $_POST['formHeadColour'];
$formHeadBgColour = $_POST['formHeadBgColour']; 
$edmformHeadBgColour = $_POST['edmformHeadBgColour']; 
$imageUrl = $_POST['imageUrl'];
$para1Text = $_POST['para1Text'];    
$para2Text = $_POST['para2Text'];   
$cta = $_POST['cta'];
$ecta = $_POST['ecta'];
/* $ctaColour = "#ffffff"; */
$ctaColour = $_POST['ctaColour'];    
$copyWrite = $_POST['copyWrite'];  

/*
$fp = fopen("http://kemsoft.davidsolomons.xyz/hosted/formdata.txt", "a");
$savestring = "Email:  " . $copyWrite . "  ||  " . $head1 . "  ||  " . $logo . "  ||  " . $imageUrl . "\n";
fwrite($fp, $savestring);
fclose($fp);
*/
?>

                
                

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
  <button id="sendMessageButton2" class="btn btn-primary btn-xl text-uppercase" formaction="previews/preview-email.php" type="submit">Preview Your Email</button><p></p>

<div class="bd-example" data-example-id="">
Once you have Previewed your email, click <code class="highlighter-rouge">&lt;COPY EDM CODE&gt;</code> below to copy the <b>Email</b> code to the pasteboard.</div>
<br>
<button id="copyEDMcode" class="btn btn-primary btn-xl text-uppercase" data-clipboard-target="#edmContent" type="button">Copy 1EDM Code</button><p></p>

<pre><code><div class="highlight" id="edmContent">  
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
      &lt;td align=&quot;center&quot; background=&quot;bg.jpg&quot; bgcolor=&quot;<?php echo $head2 ?>&quot; class=&quot;mobile-padding&quot; style=&quot;background: <?php echo $head2 ?> url(&apos;bg.jpg&apos;); background-size: cover; padding: 50px 15px;&quot; valign=&quot;top&quot; width=&quot;100%&quot;&gt;&lt;!--[if (gte mso 9)|(IE)]&gt;
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
                  &lt;td align=&quot;center&quot; bgcolor=&quot;#000000&quot; pardot-data=&quot;&quot; style=&quot;border-radius: 3px 3px 0px 0px; background:#ffffff;&quot; class=&quot;&quot;&gt;&lt;img alt=&quot;insert alt text here&quot; class=&quot;img-max&quot; height=&quot;401&quot; src=&quot;<?php  echo $imageUrl;?>&quot; style=&quot;display: block; border-radius: 3px 3px 0px 0px; font-family: sans-serif; font-size: 16px; color: rgb(153, 153, 153); width: 600px; height: 401px;&quot; width=&quot;600&quot;&gt;&lt;/td&gt;
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
		
	<!-- Copy Button Things -->
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

<script type="text/javascript">
  
  var clipboard = new ClipboardJS('#copyEDMcode');

clipboard.on('success', function(e) {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger);
    $("#copyEDMcode").text("Code Copied!");
    setTimeout(function () {$("#copyEDMcode").text("Copy EDM Code");},2000);
    e.clearSelection();
});

clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
});



</script>

	</body>
</html>

