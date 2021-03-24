 <?php

 class BannerHandler {

   function CreateNewContent($Title) {
     echo '
     <div id="videoContainer">
       <video width="100%" height="90%" autoplay loop muted>
         <source src="video/background_video.mp4" type="video/mp4"/>
         Your browser does not support the video tag.
       </video>
       <h1 id="BannerId">'. $Title .'</h1>
       <a href="#WhatWeDo"><div class="scrollButton">
           <span class="fas fa-chevron-down"></span>
       </div></a>
       <div class="gradient-left"></div>
       <div class="gradient-right"></div>
     </div>
       ';
   }
 }

 $BannerHandlerHelper = new BannerHandler();
 ?>
