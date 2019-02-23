<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="Description" CONTENT="Author: J.N. Author, Site Owner: Nicholas Noonan (Nelgara), Category: Commercial Construction, Length: 5 pages">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,Php">
    <meta name="author" content="James Nicholas Noonan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <title> Nelgara Pty Ltd - about</title>
  </head>
  <body>
    <?php include("Php/Header.php"); ?>
    <?php include("Php/Banner.php");
      $BannerHandlerHelper->CreateNewContent("Commercial Construction - <b>About</b>");
    ?>
    <?php include("Php/MainContent.php");
      $MainContentHandlerHelper->CreateNewContent("random", "<b>Contact</b>", "
        <pre>
        <h2>Executive Headquarters</h2>
        <h3>28 Henderson Drive,</h3>
        <h3>Kallaroo, Perth,</h3>
        <h3>WA 6025,</h3></p>
        <h3>TEL: +61 (0)434 33 161,</h3>
        <h3>E-Mail: Nelgara@outlook.com</h3>
        </pre>
        ");

    ?>
    <?php include("Php/Footer.php");
     ?>
  </body>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
      PageHandler.InitializeBanner(["img/sydneyday.png"], ["img/sydneynight.png"]);
    }, false);
  </script>
</html>
