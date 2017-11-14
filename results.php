<!DOCTYPE html>
<!-- saved from url=(0047)https://v4-alpha.getbootstrap.com/content/code/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>

    PLP-Gen

</title>



<!-- Meta -->
<meta name="description" content="Pardot Landing Page Generator. Clicks not code (but some code, but Voltron made it easy, so that's ok...">


<!-- Bootstrap core CSS -->

  <style class="anchorjs"></style><link href="./Code · Bootstrap_files/bootstrap.min.css" rel="stylesheet">


<!-- Documentation extras -->
<link href="./Code · Bootstrap_files/docs.min.css" rel="stylesheet">

<!-- Favicons -->
<link rel="apple-touch-icon" href="Assets/flav-p3.png">
<link rel="icon" href="Assets/flav-p3.png">

</header>


    <div class="bd-pageheader">
      <div class="container">

  <h1>PLP-Gen</h1>
  <p class="lead">
    Pardot Landing Page Generator. Clicks not code<br>(but some code, but Voltron made it easy, so that's ok then!)
  </p>



      </div>
    </div>

    <div class="container">
      <div class="row">
   </div>
     <div class="row">
      
  <div class="col-md-12">         
  <a class="btn btn-primary btn-xl text-uppercase" href="https://plp-gen.herokuapp.com/">Create New</a>
</div>



                <div class="col-md-12">
            
        
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
$ctaColour = $_POST['ctaColour'];    
$copyWrite = $_POST['copyWrite'];  
 
?>



<div class="bd-example" data-example-id="">
Click <code class="highlighter-rouge">&lt;COPY&gt;</code> below to copy the code to the pasteboard.</div>
<div class="bd-clipboard"><span class="btn-clipboard" title="" data-original-title="Copy to clipboard">Copy</span></div><div class="highlight">



<pre><code><!-- put the exited code here -->&lt;!DOCTYPE html&gt;
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
        color:#<?php  echo $head1Colour;?>;
        font-size:45px;
        line-height:50px;
        margin:0;
        text-align:center;
      }
      h2 {
        color:#<?php  echo $head2Colour;?>;
        font-size:35px;
        line-height:40px;
        font-weight:normal;
        margin:0;
        text-align:center;
      }
      h3 {   /* This is the Form Header Text Colour - generally good to leave white */
        font-size:20px;
        line-height:28px;
        color:#<?php  echo $formHeadColour;?>;
        margin:0;
      }
      h4 {
        font-size:20px;
        line-height:28px;
        color:#<?php  echo $ctaColour;?>;
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
        background:#<?php  echo $formHeadBgColour;?>; /* Background of the form head */
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
        background-color:#<?php  echo $formHeadBgColour;?>;
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
           &lt;img src=&quot;<?php  echo $logo;?>&quot; style=&quot;height: 100%; width: 100%; max-height: 80px&quot;/&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-sm-6&quot;&gt;
          &lt;ul class=&quot;social text-right&quot; pardot-region=&quot;social-icons&quot;&gt; &lt;!--
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
            &lt;/li&gt; --&gt;
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
      </div> 
    </div>

   

<div class="bd-pageheader">
      <div class="container">

  <p class="lead">
    PLP-Gen V1.0 by<br>
    <img class="asset-image" src="Assets/Voltron_Logo_Rev_2.png" width="600px">
    <br>Landing Page Template Created By: Jenna Molby | www.jennamolby.com
  </p>



      </div>
    </div>

<script src="./Code · Bootstrap_files/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>

<script src="./Code · Bootstrap_files/tether.min.js"></script>


  <script src="./Code · Bootstrap_files/bootstrap.min.js"></script>



  <script src="./Code · Bootstrap_files/anchor.min.js"></script>

  <script src="./Code · Bootstrap_files/clipboard.min.js"></script>

  <script src="./Code · Bootstrap_files/holder.min.js"></script>

  <script src="./Code · Bootstrap_files/application.js"></script>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="./Code · Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
<script src="./Code · Bootstrap_files/ie-emulation-modes-warning.js"></script>


<script src="./Code · Bootstrap_files/jekyll-search.min.js"></script>




<script>
Holder.addTheme('gray', {
  bg: '#777',
  fg: 'rgba(255,255,255,.75)',
  font: 'Helvetica',
  fontweight: 'normal'
})
</script>

  

</body></html>