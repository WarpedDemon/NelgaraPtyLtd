 <?php

 class BannerHandler {

   function CreateNewContent($Title) {
     echo '
     <div id="videoContainer">
       <video width="100%" height="55%" autoplay muted>
         <source src="video/background_video.mp4" type="video/mp4"/>
         Your browser does not support the video tag.
       </video>
       <h1 id="BannerId">'. $Title .'</h1>
       <div class="gradient-left"></div>
       <div class="gradient-right"></div>
     </div>
       ';
   }
 }

 $BannerHandlerHelper = new BannerHandler();
 ?>
