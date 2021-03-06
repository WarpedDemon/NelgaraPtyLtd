<?php

class MainContentHandler {
  private $Used = [];
  private $SaveIndex = -1;

  function CreateNewContent($ImageSource, $FloatDirection, $Title, $Text) {
    $this->SaveIndex += 1;
    if($ImageSource == "Random" ||$ImageSource == "random" ||$ImageSource == "cheese")
    {
      $imageList = ["../img/project2.png", "../img/road2.png", "../img/startup.jpg", "../img/train.png", "../img/office.jpg", "../img/bridge.png", "../img/bigminner.png", "../img/desal.png", "../img/miningtruck.png", "../img/openpit.png", "../img/room.jpg"];

      $random = rand(0, sizeof($imageList)-1);
      while(in_array($random, $this->Used))
      {
        $random = rand(0, sizeof($imageList)-1);
      }

      array_push($this->Used, $random);
      $ImageSource = $imageList[$random];
    }
    if($ImageSource == "DefaultAccount")
    {
      $ImageSource = "../img/defaultAccountIcon.jpg";
    }
    if($ImageSource == "NickNoonan")
    {
      $ImageSource = "../img/nicknoonan.jpg";
    }
    if($ImageSource == "KateNoonan")
    {
      $ImageSource = "../img/defaultAccountIcon.jpg";
    }
    if($ImageSource == "JasonWinter")
    {
      $ImageSource = "../img/jasonwinter.png";
    }
    if($ImageSource == "PaulBrown")
    {
      $ImageSource = "../img/paulbrown.jpg";
    }
    if($ImageSource == "PeterHooks")
    {
      $ImageSource = "../img/peterhooks.png";
    }

    if($FloatDirection == "LEFT") {
      echo '
          <div id="MainContent'. $this->SaveIndex .'" class="ProfileContentClass animated fadeInLeft faster wow">
          <img class="ContentImage" id="ProfileMainContentImg'. $this->SaveIndex .'" src="' . $ImageSource . '"/>
          <div id="MainContentBox'. $this->SaveIndex .'" class="MainContentBoxClass">
            <h2 class="ContentTitleClass" id="MainContentTitle'. $this->SaveIndex .'"> ' . $Title . ' </h2>
            <hr style="border-color: #eeeeee;"/>
            <br/>
            <p id="MainContentText' . $this->SaveIndex . '" class="MainContentText">
                ' . html_entity_decode($Text) . '
            </p>
          </div>
        </div>
        ';
    } else {
      echo '
          <div id="MainContent'. $this->SaveIndex .'" class="ProfileContentClass animated fadeInRight faster wow">
          <div style="float: left !important;" id="MainContentBox'. $this->SaveIndex .'" class="MainContentBoxClass">
          <h2 class="ContentTitleClass" id="MainContentTitle'. $this->SaveIndex .'"> ' . $Title . ' </h2>
          <hr style="border-color: #eeeeee;"/>
          <br/>
          <p id="MainContentText' . $this->SaveIndex . '" class="MainContentText">
              ' . html_entity_decode($Text) . '
          </p>
        </div>
        <img style="float: right !important;" id="ProfileMainContentImg'. $this->SaveIndex .'" src="' . $ImageSource . '"/>
        </div>
      ';
    }
  }


}

$MainContentHandlerHelper = new MainContentHandler();
?>
