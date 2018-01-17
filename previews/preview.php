<?php
$tab = $_POST['tab'];
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
$ctaColour = $_POST['ctaColour'];    
$copyWrite = $_POST['copyWrite'];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Template Created By: Jenna Molby | www.jennamolby.com | Support: pardot@jennamolby.com -->
  <!-- Template Modified by DSolomons | Voltron Ventures -->
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Oswald:400,600" rel="stylesheet"><!-- Bootstrap CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <title>%%title%%</title>
  <style type="text/css">
      /* --------------------------

      EDIT THESE COLORS BELOW TO CUSTOMIZE 
      THE TEMPLATE TO MEET YOUR BRAND GUIDELINES

      --------------------------*/

      /* Font for headlines */
      h1, h2, h3, h4 {
        font-family: 'Oswald', sans-serif;
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
        color:<?php  echo $ctaColour;?>;
        font-size:35px;
        line-height:40px;
        font-weight:normal;
        margin:0;
        text-align:center;
      }
      /* Font colors, size and type for body copy */
      body {
        font-family: 'Open Sans', sans-serif;
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
        font-family: 'Open Sans', sans-serif;
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
        font-family: 'Open Sans', sans-serif;
        width:100% !important;
      }
      form.form input[type=text]:focus, form.form textarea:focus, form.form select:focus {
        outline:none;
      }
      /* Background of the submit button */
      form.form input[type=submit] {
        background:<?php  echo $formHeadBgColour;?>;
        border:0;
        color:#FFF;
        font-size:15px;
        font-family: 'Open Sans', sans-serif;
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
        font-family: 'Open Sans', sans-serif;
          -moz-appearance: none;
          -webkit-appearance: none;
          appearancce: none;
          background-position: right center;
          background-repeat: no-repeat;
          background-size: 1ex;
          background-origin: content-box;
          background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcKICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIgogICB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgdmVyc2lvbj0iMS4xIgogICBpZD0ic3ZnMiIKICAgdmlld0JveD0iMCAwIDM1Ljk3MDk4MyAyMy4wOTE1MTgiCiAgIGhlaWdodD0iNi41MTY5Mzk2bW0iCiAgIHdpZHRoPSIxMC4xNTE4MTFtbSI+CiAgPGRlZnMKICAgICBpZD0iZGVmczQiIC8+CiAgPG1ldGFkYXRhCiAgICAgaWQ9Im1ldGFkYXRhNyI+CiAgICA8cmRmOlJERj4KICAgICAgPGNjOldvcmsKICAgICAgICAgcmRmOmFib3V0PSIiPgogICAgICAgIDxkYzpmb3JtYXQ+aW1hZ2Uvc3ZnK3htbDwvZGM6Zm9ybWF0PgogICAgICAgIDxkYzp0eXBlCiAgICAgICAgICAgcmRmOnJlc291cmNlPSJodHRwOi8vcHVybC5vcmcvZGMvZGNtaXR5cGUvU3RpbGxJbWFnZSIgLz4KICAgICAgICA8ZGM6dGl0bGU+PC9kYzp0aXRsZT4KICAgICAgPC9jYzpXb3JrPgogICAgPC9yZGY6UkRGPgogIDwvbWV0YWRhdGE+CiAgPGcKICAgICB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjAyLjAxNDUxLC00MDcuMTIyMjUpIgogICAgIGlkPSJsYXllcjEiPgogICAgPHRleHQKICAgICAgIGlkPSJ0ZXh0MzMzNiIKICAgICAgIHk9IjYyOS41MDUwNyIKICAgICAgIHg9IjI5MS40Mjg1NiIKICAgICAgIHN0eWxlPSJmb250LXN0eWxlOm5vcm1hbDtmb250LXdlaWdodDpub3JtYWw7Zm9udC1zaXplOjQwcHg7bGluZS1oZWlnaHQ6MTI1JTtmb250LWZhbWlseTpzYW5zLXNlcmlmO2xldHRlci1zcGFjaW5nOjBweDt3b3JkLXNwYWNpbmc6MHB4O2ZpbGw6IzAwMDAwMDtmaWxsLW9wYWNpdHk6MTtzdHJva2U6bm9uZTtzdHJva2Utd2lkdGg6MXB4O3N0cm9rZS1saW5lY2FwOmJ1dHQ7c3Ryb2tlLWxpbmVqb2luOm1pdGVyO3N0cm9rZS1vcGFjaXR5OjEiCiAgICAgICB4bWw6c3BhY2U9InByZXNlcnZlIj48dHNwYW4KICAgICAgICAgeT0iNjI5LjUwNTA3IgogICAgICAgICB4PSIyOTEuNDI4NTYiCiAgICAgICAgIGlkPSJ0c3BhbjMzMzgiPjwvdHNwYW4+PC90ZXh0PgogICAgPGcKICAgICAgIGlkPSJ0ZXh0MzM0MCIKICAgICAgIHN0eWxlPSJmb250LXN0eWxlOm5vcm1hbDtmb250LXZhcmlhbnQ6bm9ybWFsO2ZvbnQtd2VpZ2h0Om5vcm1hbDtmb250LXN0cmV0Y2g6bm9ybWFsO2ZvbnQtc2l6ZTo0MHB4O2xpbmUtaGVpZ2h0OjEyNSU7Zm9udC1mYW1pbHk6Rm9udEF3ZXNvbWU7LWlua3NjYXBlLWZvbnQtc3BlY2lmaWNhdGlvbjpGb250QXdlc29tZTtsZXR0ZXItc3BhY2luZzowcHg7d29yZC1zcGFjaW5nOjBweDtmaWxsOiMwMDAwMDA7ZmlsbC1vcGFjaXR5OjE7c3Ryb2tlOm5vbmU7c3Ryb2tlLXdpZHRoOjFweDtzdHJva2UtbGluZWNhcDpidXR0O3N0cm9rZS1saW5lam9pbjptaXRlcjtzdHJva2Utb3BhY2l0eToxIj4KICAgICAgPHBhdGgKICAgICAgICAgaWQ9InBhdGgzMzQ1IgogICAgICAgICBzdHlsZT0iZmlsbDojMzMzMzMzO2ZpbGwtb3BhY2l0eToxIgogICAgICAgICBkPSJtIDIzNy41NjY5Niw0MTMuMjU1MDcgYyAwLjU1ODA0LC0wLjU1ODA0IDAuNTU4MDQsLTEuNDczMjIgMCwtMi4wMzEyNSBsIC0zLjcwNTM1LC0zLjY4MzA0IGMgLTAuNTU4MDQsLTAuNTU4MDQgLTEuNDUwOSwtMC41NTgwNCAtMi4wMDg5MywwIEwgMjIwLDQxOS4zOTM0NiAyMDguMTQ3MzIsNDA3LjU0MDc4IGMgLTAuNTU4MDMsLTAuNTU4MDQgLTEuNDUwODksLTAuNTU4MDQgLTIuMDA4OTMsMCBsIC0zLjcwNTM1LDMuNjgzMDQgYyAtMC41NTgwNCwwLjU1ODAzIC0wLjU1ODA0LDEuNDczMjEgMCwyLjAzMTI1IGwgMTYuNTYyNSwxNi41NDAxNyBjIDAuNTU4MDMsMC41NTgwNCAxLjQ1MDg5LDAuNTU4MDQgMi4wMDg5MiwwIGwgMTYuNTYyNSwtMTYuNTQwMTcgeiIgLz4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=");
      }
      .footer {
        padding: 35px 0 30px 0;
        font-size:11px;
        color:#9E9E9E;
        line-height:18px;
        font-family: 'Open Sans', sans-serif;
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
        display: block;
    margin: auto;
    width: 90%;
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
    display: block;
    margin: auto;
    width: 90%;
    
        }
      }
  </style>
</head>
<body>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="logo" pardot-region="logo"> <!-- This is the company logo -->
           <img src="<?php  echo $logo;?>" style="max-height: 60px"/>
          </div>
        </div>
        <div class="col-sm-6">
          <ul class="social text-right" pardot-region="social-icons"> 
            <li>
              <a href="#" target="_blank"><i aria-hidden="true" class="fa fa-facebook-square"></i></a>
            </li>
            <li>
              <a href="#" target="_blank"><i aria-hidden="true" class="fa fa-twitter-square"></i></a>
            </li>
            <li>
              <a href="#" target="_blank"><i aria-hidden="true" class="fa fa-youtube-square"></i></a>
            </li>
            <li>
              <a href="#" target="_blank"><i aria-hidden="true" class="fa fa-google-plus-square"></i></a>
            </li> 
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container">
      <div class="row">
        <div class="col-md-8 main-content">
          <div class="headline" pardot-region="headlines">
            <h1><?php  echo $head1;?></h1>
            <h2><?php  echo $head2;?></h2>
          </div>
          <div pardot-region="main-content">

            <!-- This is the hero image -->
            
          <img class="asset-image" src="<?php  echo $imageUrl;?>" width="600px"> 
          <p>&nbsp;</p>
          <p><?php echo $para1Text ?></p>
          <p><?php echo $para2Text ?></p><br>
        

            <!-- Uncomment and add bullet items if desired -->
         <!-- 
          <ul>
            <li>Maecenas feugiat felis erat.</li>
            <li>Phasellus vel auctor massa. Fusce semper elit vel mi pharetra, rutrum dictum purus sodales.</li>
            <li>In volutpat molestie urna, eu hendrerit risus congue eu. Maecenas condimentum vehicula pretium.</li>
            <li>Praesent odio sapien, gravida a molestie a, dignissim a libero.</li>
            <li>Ut tempor consequat tortor, ac dapibus erat mollis quis.</li>
            <li>Nam a consectetur arcu.</li>
          </ul> -->
          <h4><?php  echo $cta;?></h4>
          </div>
        </div>
        <div class="col-md-4 form-container">
          <div class="form-header text-center" pardot-region="form-header">
            <h3><?php  echo $formHead;?></h3>
          </div>
               <div>

            <form accept-charset="UTF-8" method="post" action="" class="form" id="pardot-form">
<!-- 
<style type="text/css">
form.form p label { float: none; text-align: left; line-height: 1em; width: auto; }
form.form p.submit { margin-left: 5px; }
form.form p.no-label { margin-left: 50px; }
form.form span.value { margin-left: 0px; }
form.form p span.description { margin-left: 0px; }
form.form p.required label, form.form span.required label { background-position: top left; background: none; padding-left: 0px; }
form.form .pd-checkbox .value span { display: block !important; }
form.form .pd-radio .value span { display: block !important; }
</style> 


-->



  
    
    
    
      <p class="form-field  first_name pd-text required required-custom    ">
        <label class="field-label" for="First_Namepi_First_Name">Field One</label>
        <input type="text" name="First_Namepi_First_Name" id="First_Namepi_First_Name" value="" class="text" size="30" maxlength="40" onchange="" />
      </p>
      <div id="error_for_First_Namepi_First_Name" style="display:none"></div>
      
      <p class="form-field  last_name pd-text required required-custom    ">
        <label class="field-label" for="Last_Namepi_Last_Name">Field Two</label>
        <input type="text" name="Last_Namepi_Last_Name" id="Last_Namepi_Last_Name" value="" class="text" size="30" maxlength="80" onchange="" />
      </p>
      <div id="error_for_Last_Namepi_Last_Name" style="display:none"></div>
      
      <p class="form-field  email pd-text required required-custom    ">
        <label class="field-label" for="Emailpi_Email">Field Three</label> 
        <input type="text" name="Emailpi_Email" id="Emailpi_Email" value="" class="text" size="30" maxlength="255" onchange="piAjax.auditEmailField(this, 396142, 14609, 7750870);" />
      </p>
      <div id="error_for_Emailpi_Email" style="display:none"></div>
          
  <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
    <label for="pi_extra_field">Comments</label>
  
  </p>
    
    
    <!-- forces IE5-8 to correctly submit UTF8 content  -->
    <input name="_utf8" type="hidden" value="&#9731;" />
    
    <p class="submit">
      <input type="submit" accesskey="s" value="Submit" />
    </p>
  

        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 copyright text-center" pardot-region="copyright-and-address">
          &copy; 2017 <?php  echo $copyWrite;?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>