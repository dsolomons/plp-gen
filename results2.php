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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="Bootstrap_files/docs.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

?>



<div class="im-centered">
<div class="row">
        <div class="col-md-12 col-xs-12 col-centered">
        <div class="input-group">
            
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Landing Page Code</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Email Code</a>
  </li>
 </ul>


        </div>
    </div>
</div>
</div>



<div class="container-fluid">
<div class="row">
                
                <div class="col-md-12">

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
<br>
<form id="form_b" action="previews/preview.php" method="post" target="_blank">
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
  &lt;!-- Template Modified by DSolomons | Voltron Ventures --&gt;
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
          background-image: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcKICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIgogICB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgdmVyc2lvbj0iMS4xIgogICBpZD0ic3ZnMiIKICAgdmlld0JveD0iMCAwIDM1Ljk3MDk4MyAyMy4wOTE1MTgiCiAgIGhlaWdodD0iNi41MTY5Mzk2bW0iCiAgIHdpZHRoPSIxMC4xNTE4MTFtbSI+CiAgPGRlZnMKICAgICBpZD0iZGVmczQiIC8+CiAgPG1ldGFkYXRhCiAgICAgaWQ9Im1ldGFkYXRhNyI+CiAgICA8cmRmOlJERj4KICAgICAgPGNjOldvcmsKICAgICAgICAgcmRmOmFib3V0PSIiPgogICAgICAgIDxkYzpmb3JtYXQ+aW1hZ2Uvc3ZnK3htbDwvZGM6Zm9ybWF0PgogICAgICAgIDxkYzp0eXBlCiAgICAgICAgICAgcmRmOnJlc291cmNlPSJodHRwOi8vcHVybC5vcmcvZGMvZGNtaXR5cGUvU3RpbGxJbWFnZSIgLz4KICAgICAgICA8ZGM6dGl0bGU+PC9kYzp0aXRsZT4KICAgICAgPC9jYzpXb3JrPgogICAgPC9yZGY6UkRGPgogIDwvbWV0YWRhdGE+CiAgPGcKICAgICB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjAyLjAxNDUxLC00MDcuMTIyMjUpIgogICAgIGlkPSJsYXllcjEiPgogICAgPHRleHQKICAgICAgIGlkPSJ0ZXh0MzMzNiIKICAgICAgIHk9IjYyOS41MDUwNyIKICAgICAgIHg9IjI5MS40Mjg1NiIKICAgICAgIHN0eWxlPSJmb250LXN0eWxlOm5vcm1hbDtmb250LXdlaWdodDpub3JtYWw7Zm9udC1zaXplOjQwcHg7bGluZS1oZWlnaHQ6MTI1JTtmb250LWZhbWlseTpzYW5zLXNlcmlmO2xldHRlci1zcGFjaW5nOjBweDt3b3JkLXNwYWNpbmc6MHB4O2ZpbGw6IzAwMDAwMDtmaWxsLW9wYWNpdHk6MTtzdHJva2U6bm9uZTtzdHJva2Utd2lkdGg6MXB4O3N0cm9rZS1saW5lY2FwOmJ1dHQ7c3Ryb2tlLWxpbmVqb2luOm1pdGVyO3N0cm9rZS1vcGFjaXR5OjEiCiAgICAgICB4bWw6c3BhY2U9InByZXNlcnZlIj48dHNwYW4KICAgICAgICAgeT0iNjI5LjUwNTA3IgogICAgICAgICB4PSIyOTEuNDI4NTYiCiAgICAgICAgIGlkPSJ0c3BhbjMzMzgiPjwvdHNwYW4+PC90ZXh0PgogICAgPGcKICAgICAgIGlkPSJ0ZXh0MzM0MCIKICAgICAgIHN0eWxlPSJmb250LXN0eWxlOm5vcm1hbDtmb250LXZhcmlhbnQ6bm9ybWFsO2ZvbnQtd2VpZ2h0Om5vcm1hbDtmb250LXN0cmV0Y2g6bm9ybWFsO2ZvbnQtc2l6ZTo0MHB4O2xpbmUtaGVpZ2h0OjEyNSU7Zm9udC1mYW1pbHk6Rm9udEF3ZXNvbWU7LWlua3NjYXBlLWZvbnQtc3BlY2lmaWNhdGlvbjpGb250QXdlc29tZTtsZXR0ZXItc3BhY2luZzowcHg7d29yZC1zcGFjaW5nOjBweDtmaWxsOiMwMDAwMDA7ZmlsbC1vcGFjaXR5OjE7c3Ryb2tlOm5vbmU7c3Ryb2tlLXdpZHRoOjFweDtzdHJva2UtbGluZWNhcDpidXR0O3N0cm9rZS1saW5lam9pbjptaXRlcjtzdHJva2Utb3BhY2l0eToxIj4KICAgICAgPHBhdGgKICAgICAgICAgaWQ9InBhdGgzMzQ1IgogICAgICAgICBzdHlsZT0iZmlsbDojMzMzMzMzO2ZpbGwtb3BhY2l0eToxIgogICAgICAgICBkPSJtIDIzNy41NjY5Niw0MTMuMjU1MDcgYyAwLjU1ODA0LC0wLjU1ODA0IDAuNTU4MDQsLTEuNDczMjIgMCwtMi4wMzEyNSBsIC0zLjcwNTM1LC0zLjY4MzA0IGMgLTAuNTU4MDQsLTAuNTU4MDQgLTEuNDUwOSwtMC41NTgwNCAtMi4wMDg5MywwIEwgMjIwLDQxOS4zOTM0NiAyMDguMTQ3MzIsNDA3LjU0MDc4IGMgLTAuNTU4MDMsLTAuNTU4MDQgLTEuNDUwODksLTAuNTU4MDQgLTIuMDA4OTMsMCBsIC0zLjcwNTM1LDMuNjgzMDQgYyAtMC41NTgwNCwwLjU1ODAzIC0wLjU1ODA0LDEuNDczMjEgMCwyLjAzMTI1IGwgMTYuNTYyNSwxNi41NDAxNyBjIDAuNTU4MDMsMC41NTgwNCAxLjQ1MDg5LDAuNTU4MDQgMi4wMDg5MiwwIGwgMTYuNTYyNSwtMTYuNTQwMTcgeiIgLz4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=&quot;);
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


</code></pre><!-- finish the exited code here -->   


</div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
</div>
</div>






</div>
</div>
</div>


<!-- end content here -->
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
    </section>. -->

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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

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
