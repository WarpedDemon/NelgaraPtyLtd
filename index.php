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
    <title> Nelgara Pty Ltd - index</title>
  </head>
  <body>
    <?php include("Php/Header.php"); ?>
    <?php include("Php/Banner.php");
      $BannerHandlerHelper->CreateNewContent("Commercial Construction - Services");
    ?>
    <?php include("Php/MainContent.php");
        $MainContentHandlerHelper->CreateNewContent("cheese", "<b>What We Do</b>", "
          <p>
          <h2>Innovative Commercial and Project Management Solutions</h2>
          </p>

          <p>
          Nelgara Pty Ltd is an Australian commercial management consulting firm that leverages its significant industry experience to develop and apply best practice solutions to a broad mix of service industries including oil and gas, water treatment, power distribution, infrastructure, resources and mining for both private and public institutions.
          </p>

          <p>
          We can understand our clients’ needs quickly, as we have worked there, and respond with significant and cost-effective improvements to their operational performance whilst supporting their business goals.
          </p>

          <p>
          We bring in combined local and global knowledge for the benefit of the Australian construction industry.
          </p>

          <p>
          We put clients first.
          </p>");

        $MainContentHandlerHelper->CreateNewContent("cheese", "<b>Expertise</b>", "
          <p>
          Nelgara Pty Ltd brings more than 100 years of experience in delivering solutions across the end to end phases of projects both pre and post construction. Nelgara continues to draw on its actual delivery experience integrated with the latest technology solutions to provide a unique firm that delivers sustainable outcomes for an ever-changing world.
          We are Skilled in Project Leadership, People, Schedule and Cost Management, Sub-Contractor Management, and Stressed Project Recovery (more consultants are joining monthly).
          </p>");

        $MainContentHandlerHelper->CreateNewContent("cheese", "<b>Locations</b>", "
          <p>
          Nelgara Pty Ltd is based in Perth, WA but consultants have both worked on projects and or being responsible at a business Contracts Manager or Commercial Manager level for projects in Queensland, NSW and Victoria.
          We can also provide solutions through our network of consultant partners in the industry.
          </p>");
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
