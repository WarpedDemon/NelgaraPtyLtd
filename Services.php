<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="Nelgara Commercial Construction Website Trading Site Nick Noonan Katherine Noonan Peter Hooks">
    <meta name="description" content="Commercial Construction Trading Site Nelgara: E-Mail: Nelgara@outlook.com TEL: +61 (0)434 33 161">
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
    <title> Nelgara Pty Ltd </title>
  </head>
  <body>
    <?php include("Php/header.php"); ?>
    <?php include("Php/banner.php");
      $BannerHandlerHelper->CreateNewContent("Commercial Construction - <b>Services</b>");
    ?>
    <?php include("Php/maincontent.php");
      $MainContentHandlerHelper->CreateNewContent("random", "<b>The business</b>", "<p>We have established Nelgara Pty Ltd to provide clients with industry expertise from experienced resources contracted to deliver commercial aspects for businesses and projects and can provide resources to supplement peak work demands in line with your technical brief/requirements.</p>
        <p>We provide following services:</p>

        <p>
        <li>Business and Project Risk Services;</li>
        <li>Businesses;</li>
        <li>Drafting of, or advice upon, Subcontracts, Supply Agreements, Consultancy Agreements, minor professional Services Agreements;<br/><br/>
        <li>Pre-Contract Review of Contract Terms prior to submission of bids;</li>
        <li>Advice on Contract Negotiations;</li>
        <li>Project Commercial Controls health checks;</li>
        <li>Through our partner consultants, Estimating/Planning Services;</li>
        </p>
      ");

      $MainContentHandlerHelper->CreateNewContent("random", "<b>Projects</b>", "
        <p>
        <li>Project Procurement Services (Startup /Strategy/Procurement);</li>
        <li>Preparation of Summary Key Obligations and Rights (Project Commercial Game Plan);</li>
        <li>Quantity Surveyor/Contract Administrator Services (short/long term);</li>
        <li>Program Review/Management advice;</li>
        <li>Variation/Delay/Disruption & Extension of Time Claim preparation or management;</li>
        </p>
      ");

      $MainContentHandlerHelper->CreateNewContent("random", "<b>Management</b>", "
        <p>
        Project Management
        </p>

        <p>
        <li>Project management support;</li>
        <li>Project reviews and due diligence;</li>
        <li>Risk management analytics and advice;</li>
        <li>Contract management;</li>
        <li>Commercial Operational readiness;</li>
        </p>
      ");

      $MainContentHandlerHelper->CreateNewContent("random", "<b>Project Controls</b>", "
        <p>
        <li>Cost management;</li>
        <li>Planning and scheduling advice;</li>
        <li>Change management;</li>
        <li>Project reporting;</li>
        </p>
      ");

      $MainContentHandlerHelper->CreateNewContent("random", "<b>Improvement Services</b>", "
        <p>
        <li>Services for projects under duress;</li>
        <li>Develop and implement business commercial management processes;</li>
        </p>

        <p>
        Nelgara continues to draw on its actual delivery experience integrated with the latest technology solutions to provide a unique firm that delivers sustainable outcomes for an ever-changing world.
        </p>
        ");
    ?>
    <?php include("Php/Footer.php");
     ?>
  </body>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
      PageHandler.InitializeBanner(["img/perthday.png"], ["img/perthnight.png"]);
    }, false);
  </script>
</html>
