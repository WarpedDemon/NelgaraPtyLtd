<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel='icon' href='favicon.ico' type='../img/logo.png'/>
    <meta name="google-site-verification" content="txgKmeRnG--tbzmjs6dsxKpFw-x3RCL2t_jCDioBfDo" />
    <meta name="google-site-verification" content="xkHDb2_zgTzNpDumgrN7J39GOzcAilbnu3ZnP9G_Q8A" />
    <meta name="description" content="Nelgara Pty Ltd contact details.">
    <meta name="keywords" content="HTML, CSS, XML, JavaScript, Php, Nelgara, Nick, Noonan, Commercial, Construction, Services, Peter, Hooks, Katherine, James, Australian, Australia, Perth, Kallaroo, nelgara, australia, contruction services perth,">
    <meta name="author" content="James Nicholas Noonan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="title" content="Nelgara Pty Ltd | About">
    <meta property="url" content="https://nelgara.com.au">
    <meta property="type" content="website">
    <meta property="site_name" content="nelgara">

    <link rel="stylesheet" href="Css/LandingPage.css">
    <link rel="stylesheet" href="Css/Mobile.css">
    <link rel="stylesheet" href="Css/Extras.css">
    <link rel="stylesheet" href="Css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src="Js/Master.mjs"></script>
    <script src="Js/jquery.min.js"></script>
    <script src="Js/wow.min.js"></script>
    <script src="Js/jquery-ui.min.js"></script>

    <script type="text/javascript">
      new WOW().init();
    </script>
    <title>Nelgara Pty Ltd - About</title>
  </head>
  <body>
    <?php include("Php/Header.php"); ?>
    <?php include("Php/Banner.php");
      $BannerHandlerHelper->CreateNewContent("<b>About</b>");
    ?>
    <a id="WhatWeDo"></a>
    <div style="margin-top: 500px;"></div>
    <?php include("Php/MainContent.php");
      $MainContentHandlerHelper->CreateNewContent("random", "LEFT", "<b>Contact</b>", "
          Executive Headquarters
          28 Henderson Drive
          Kallaroo
          Perth
          WA 6025
          TEL: +61 (0)434 333 161
          E-Mail: Nelgara@outlook.com
        ");

    ?>
    <div style="height:250px;"> </div>
    <?php include("Php/Footer.php");
     ?>
  </body>
</html>
