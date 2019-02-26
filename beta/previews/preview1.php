<?php

$logo = $_POST['logo']; 
$head1 = $_POST['head1']; 
$copyWrite = $_POST['copyWrite'];  
$formHead = $_POST['formHead']; 
$formHeadBgColour = $_POST['formHeadBgColour'];  
$para1Text = $_POST['para1Text'];
$para2Text = $_POST['para2Text'];
$imageUrl = $_POST['imageUrl'];
$head2Colour = $_POST['head2Colour']; 
/* manual */
$formHeadColour = "#ffffff";
$head1Colour = "#ffffff"; 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- THIS PAGE IS BADLY NAMED - THIS IS THE LANDING PAGE PREVIEW -->

  <!-- Template Created By: Jenna Molby | www.jennamolby.com | Support: pardot@jennamolby.com -->
  <!-- Template Modified by DSolomons | dsolomons@salesforce.com | Voltron Ventures -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300i,400,400i,700|Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet"><!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" rel="stylesheet">
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <meta content="%%description%%" name="description">
  <title>%%title%%</title>
  <style type="text/css">
/* --------------------------

EDIT THESE COLORS BELOW TO CUSTOMIZE 
THE TEMPLATE TO MEET YOUR BRAND GUIDELINES

--------------------------*/

/* Hero background Image */
.highlight {
  padding: 75px 0;
  background:
    linear-gradient(
      rgba(0, 0, 50, 0.6),
      rgba(0, 0, 50, 0.6)
    ),
  url(<?php  echo $imageUrl;?>) no-repeat center center fixed;

}

/* Font for headlines */
h1, h3 {
  font-family: 'Merriweather', sans-serif;
} 

/* Font colors and size for headlines */
h1 {
  color:<?php  echo $head1Colour;?>;
  font-size: 45px;
  line-height: 55px;
  margin: 0;
}
.headline h2 {
  color: #FFF;
  font-size: 20px;
  line-height: 30px;
  font-weight: normal;
  margin: 0;
}
h3 {
  font-size: 20px;
  line-height: 28px;
  color:<?php  echo $formHeadColour;?>;
  margin: 0;
}
.speakers-container {
  margin-top:35px;
}
.speakers-container h2 {
  text-align:center;
}
.speakers {
  margin-top:20px;
}

.page-body .speakers h3 {
  font-weight:500;
  color:#737373;
  font-size:18px;
  margin:0;
  padding:0 0 5px 0;
}
.speakers h4 {
  font-size: 14px;
  font-weight:500;
  color:#757575;
  margin:0 0 10px 0;
  line-height:15px;
}

/* Font colors, size and type for body copy */
body {
  font-family: 'Open Sans', sans-serif;
  color: #757575;
  font-size: 15px;
  line-height: 25px;
  background-color: #FFF;
}

/* Form background color */
form.form {
  background-color: #FFF;
}

/* Header background color */
.header {
  background-color: <?php  echo $head2Colour;?>;
}
/* Body Sub Header Color and font size */
.page-body .form-header h3 {
  color: #FFF;
  font-size: 20px;
  padding-bottom:0;
}
.page-body h3 {
  color: #10ddc2;
  font-size: 20px;
}
/* Form Header background color */
.form-header {
  background:<?php  echo $formHeadBgColour;?>;
}
table.event-details i {
  color: #FFF;
}


/* --------------------------

WARNING: EDITING THE BELOW CSS MIGHT
BREAK THE TEMPLATE. 

--------------------------*/
.highlight {
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.header {
  padding: 20px 10px;
}
.headline {
  padding: 0 0 15px 0;
}
.description {
  color: #737373;
  font-size: 18px;
}
.page-body {
  padding: 15px 0;
}
.page-body h3 {
  padding-bottom: 10px;
}
.form-header {
  padding: 20px;
  text-align: center;
}
.footer {
  padding: 35px 0 30px 0;
  font-size: 11px;
  color: #9E9E9E;
  line-height: 18px;
  font-family: 'Open Sans', sans-serif;
  background-color: #FFF;
}
.footer .border-top {
  border-top: solid 1px #E0E0E0;
  padding-top: 20px;
}
ul.social {
  list-style-type: none;
  margin: 0;
  padding: 15px 0 0 0;
}
ul.social i:hover {
    color:<?php  echo $formHeadBgColour;?>;
    transition:background-color 0.5s ease;
}
ul.social li {
  display: inline-block;
  padding: 5px;
}
ul.social i {
  color:<?php  echo $formHeadBgColour;?>;
  font-size: 30px;
  transition:background-color 0.5s ease;
}
.asset-image img {
  width: 100%;
}
.desktop-hide {
  display: none;
}
table.event-details {
  table-layout:fixed;
  width:100%;
  font-size:16px;
  margin-top: 45px;
  color:#FFF;
}
table.event-details i {
  font-size:30px;
  padding-right:10px;
  position:relative;
  top:5px;
}
.speakers td {
  padding-bottom:20px;
  vertical-align:top;
}
.speakers tr:last-child td {
  padding-bottom:0;
}
.speakers img {
  margin-right: 20px;
}
@media only screen and (max-width: 480px) {
  ul.social {
    text-align: center !important;
  }
  .copyright {
    text-align: center;
    padding-bottom: 10px;
  }
  form.form input[type=submit] {
    width: 100%;
    padding-top: 12px;
    padding-bottom: 12px;

  }
  h1 {
    font-size: 30px;
    line-height: 35px;
  }
  h2 {
    font-size: 22px;
    line-height: 28px;
  }
  .headline {
    padding-bottom: 15px;
  }
}
@media only screen and (max-width: 668px) {
  .asset-image {
    width: 100%;
    text-align: center;
    padding-bottom: 25px;
  }
  .asset-image img {
    max-width: 300px;
  }
  .headline-container {
    width: 90%;
    margin: 0 auto;
    float: none;
    text-align: center;
  }
  .logo {
    text-align: center;
  }
  .speakers td {
    display:block;
  }
  .speakers td:first-child {
    text-align:center;
    margin-bottom:10px;
  }
  ul.social {
    text-align:center !important;
  }
}
@media only screen and (max-width: 992px) {
  .form-container, .form-container-inner {
    position: static;
  }
  .form-container {
    padding-top: 25px;
  }
}

/* Pardot Form Styles */

form.form {
  padding: 20px !important;
  background:#f5f5f5;
  border:solid 1px #ededed;
  font-family:'Open Sans', Sans-serif;
  margin:0 !important;
}
form.form p label {
  color: #757575 !important;
  display: block;
  margin-bottom: 2px !important;
  font-size: 15px;
  font-family: 'Open Sans', sans-serif;
  font-weight: normal;
  text-align:left !important;
  width:auto !important;
}
form.form p {
  margin-right:0 !important;
  margin-left:0 !important;
  padding-left:0 !important;
  padding-right:0 !important;
}
form.form p.form-field {
  margin-bottom: 10px;
}
form.form input[type=text], form.form textarea {
  width: 100% !important;
  border: solid 1px #E0E0E0;
  background-color: #FFF;
  padding: 5px !important;
  font-size: 15px;
  font-family: 'Open Sans', sans-serif;
}
form.form input[type=text]:focus, form.form textarea:focus, form.form select:focus {
  outline: none;
}
form.form input[type=submit] {
  background-color:<?php  echo $formHeadBgColour;?>;
  border: solid 3px <?php  echo $formHeadBgColour;?>;
  color: #FFF;
  font-size: 16px;
  font-family: 'Open Sans', sans-serif;
  padding: 8px 30px !important;
  width:100%;
  transition: background-color 0.5s ease;
}
form.form input[type=submit]:hover {
  transition: background-color 0.5s ease;
  background-color:transparent;
  border: solid 3px #f57170;
  color:#f57170;
  outline:none;
}
form.form p.submit {
  text-align: center;
  margin-right:0 !important;
  margin-left:0 !important;
}
form.form label.inline {
  display: inline-block !important;
  padding-left: 8px;
  font-size: 13px;
}
form.form textarea {
  height: 75px;
}
form.form select {
  width: 100%;
  border: solid 1px #E0E0E0;
  background-color: #FFF;
  padding: 5px !important;
  font-size: 15px;
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
font-family: 'Open Sans', sans-serif;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearancce: none;
  background-position: right center;
  background-repeat: no-repeat;
  background-size: 1ex;
  background-origin: content-box;
  
.footer .container {
  border-top:solid 1px #ededed;
  padding-top:20px;
}
  </style>

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
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="logo" pardot-region="logo">
            <a href="#"><img src="<?php  echo $logo;?>" style="max-height: 60px"/>
          </div>
        </div>
        <div class="col-sm-6 text-right" pardot-region="social-media">
          <ul class="social">
            <li>
              <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            </li>
            <li>
              <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
            </li>
            <li>
              <a href="#" target="_blank"><i class="fab fa-youtube-square"></i></a>
            </li>
            <li>
              <a href="#" target="_blank"><i class="fab fa-google-plus-square"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="highlight">
    <div class="container">
      <div class="row">
        <div class="col-md-12 headline-container">
          <div class="headline text-center">
            <h2 pardot-region="event-type"></h2>
            <h1 pardot-region="event-title"><?php  echo $head1;?></h1>
            <table class="event-details">
              <!-- <tr>
                <td><i class="fas fa-calendar-alt"></i> <span pardot-region="event-date">October 20th, 2018</span></td>
                <td><i class="fas fa-clock"></i> <span pardot-region="event-time">10am PST | 1pm EST</span></td>
                <td><i class="fas fa-map-marker-alt"></i> <span pardot-region="event-location">Your Desk!</span></td> -->
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container">
      <div class="row">
        <div class="col-md-push-8 col-md-4 form-container">
          <div class="form-container-inner">
            <div class="form-header">
              <h3 pardot-region="form-header"><?php  echo $formHead;?></h3>
            </div>
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
          <div pardot-region="text-below-form"></div>
        </div>
        <div class="col-md-8 col-md-pull-4">
          <div class="description" pardot-region="event-details">
            <p><?php echo $para1Text ?></p>

            <p><?php echo $para2Text ?></p>

            
            
            </div>
            
          </div>
        </div>
      </div>
    </div>
  <div class="container speakers"></div>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center copyright" pardot-region="copyright">
          &copy; 2018 <?php  echo $copyWrite;?>
        </div>
      </div>
    </div>
  </div><a class="open-form desktop-hide" href="#"></a> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript">
  </script>
</body>
</html>