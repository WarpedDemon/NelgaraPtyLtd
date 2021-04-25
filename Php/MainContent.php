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

    echo '
        <div id="MainContent'. $this->SaveIndex .'" class="MainContentClass animated fadeInLeft wow">
        ';
    if($FloatDirection == "LEFT") {
      echo '
          <img class="ContentImage" id="MainContentImg'. $this->SaveIndex .'" src="' . $ImageSource . '"/>
          <div id="MainContentBox'. $this->SaveIndex .'" class="MainContentBoxClass">
            <h3 id="MainContentTitle'. $this->SaveIndex .'"> ' . $Title . ' </h3>
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
        <div style="float: left !important;" id="MainContentBox'. $this->SaveIndex .'" class="MainContentBoxClass">
          <h3 class="ContentTitleClass" id="MainContentTitle'. $this->SaveIndex .'"> ' . $Title . ' </h3>
          <hr style="border-color: #eeeeee;"/>
          <br/>
          <p id="MainContentText' . $this->SaveIndex . '" class="MainContentText">
              ' . html_entity_decode($Text) . '
          </p>
        </div>
        <img style="float: right !important;" id="MainContentImg'. $this->SaveIndex .'" src="' . $ImageSource . '"/>
        </div>
      ';
    }
  }


}

$MainContentHandlerHelper = new MainContentHandler();
?>
