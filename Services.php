<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="txgKmeRnG--tbzmjs6dsxKpFw-x3RCL2t_jCDioBfDo" />
    <meta name="google-site-verification" content="xkHDb2_zgTzNpDumgrN7J39GOzcAilbnu3ZnP9G_Q8A" />

    <meta name="description" content="At Nelgara Pty Ltd we offer a wide range of commercial construction services.">
    <meta name="keywords" content="HTML, CSS, XML, JavaScript, Php, Nelgara, Nick, Noonan, Commercial, Construction, Services, Peter, Hooks, Katherine, James, Australian, Australia, Perth, Kallaroo, nelgara, australia, contruction services perth,">
    <meta name="author" content="James Nicholas Noonan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="title" content="Commercial Construction Services🏗️ | Nelgara Pty Ltd>
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
    <title>Nelgara Pty Ltd | Commercial Construction Services🏗️</title>
  </head>
  <body>
    <?php include("Php/Header.php"); ?>
    <?php include("Php/Banner.php");
      $BannerHandlerHelper->CreateNewContent("<b>Commercial Construction Services</b>");
    ?>
    <a id="WhatWeDo"></a>
    <div style="margin-top: 500px;"></div>
    <?php include("Php/MainContent.php");
      $MainContentHandlerHelper->CreateNewContent("random", "LEFT", "<b>The business</b>", "
            We have established Nelgara Pty Ltd to provide clients with industry
            expertise from experienced resources contracted to deliver commercial
            aspects for businesses and projects and can provide resources to supplement
            peak work demands in line with your technical brief/requirements.

            We provide following services:
      ");

      $MainContentHandlerHelper->CreateNewContent("random", "RIGHT", "<b>Business and Project Risk Services</b>", "
            Businesses

            Drafting of, or advice upon, Subcontracts, Supply Agreements, Consultancy Agreements,
            minor professional Services Agreements;
            Pre-Contract Review of Contract Terms prior to submission of bids;
            Advice on Contract Negotiations;
            Project Commercial Controls health checks;
            Through our partner consultants, Estimating/Planning Services;
      ");

      $MainContentHandlerHelper->CreateNewContent("random", "LEFT", "<b>Projects</b>", "
          Project Procurement Services (Startup /Strategy/Procurement);
          Preparation of Summary Key Obligations and Rights (Project Commercial Game Plan);
          Quantity Surveyor/Contract Administrator Services (short/long term);
          Program Review/Management advice;
          Variation/Delay/Disruption & Extension of Time Claim preparation or management;
      ");

      $MainContentHandlerHelper->CreateNewContent("random", "RIGHT", "<b>Management</b>", "
            Project Management

            Project management support;
            Project reviews and due diligence;
            Risk management analytics and advice;
            Contract management;
            Commercial Operational readiness;
      ");

      $MainContentHandlerHelper->CreateNewContent("random", "LEFT", "<b>Project Controls</b>", "
          Cost management;
          Planning and scheduling advice;
          Change management;
          Project reporting;
      ");

      $MainContentHandlerHelper->CreateNewContent("random", "RIGHT", "<b>Improvement Services</b>", "
            Services for projects under duress;<
            Develop and implement business commercial management processes;

            Nelgara continues to draw on its actual delivery experience integrated with
            the latest technology solutions to provide a unique firm that delivers
            sustainable outcomes for an ever-changing world.
        ");
    ?>
    <div style="height:450px;"> </div>
    <?php include("Php/Footer.php");
     ?>
  </body>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
      PageHandler.InitializeBanner(["img/perthday.png"], ["img/perthnight.png"]);
    }, false);
  </script>
</html>
