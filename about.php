<?php
  
  $basepath = "root";
  require "header.php";
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  
  switch ($lang)
  {
      case "fr":
        //echo "PAGE FR";
        $file_cont = loadLanguage("about_fr.txt","root");
        break;
      case "en":
          //echo "PAGE EN";
          $file_cont = loadLanguage("about_en.txt","root");
          break;        
      default:
          //echo "PAGE EN - Setting Default";
          $file_cont = loadLanguage("about_en.txt","root");
          break;
  }
?>


<div id="ouais" class="intro">
    <div class="overlay">
        <div class="container">     

          <div id="aboutNews">
              <div class="text-center" > 
                  <h2>  <?php echo " $file_cont[title] "; ?> </h2>
                </div>
            <div class="aboutText">
              
             
              <p style="text-align: left;">
              <?php echo " $file_cont[about] "; ?>
              </p>
              <ul class="" >
                <li>
                  <i class="fa fa-map-marker liAbout" style="margin-left: -69px;" > <t class="colorTxt"> France </t> </i>
                  <i class="fa fa-envelope liAbout"  style="margin-left: 40px;"> <t class="colorTxt"> <img src="/img/alcasar_mail.png"> </t> </i>
                  <i class="fa fa-wechat liAbout"  style="margin-left: 40px;"> <a href="http://adullact.net/forum/?group_id=450"> <t class="colorTxt"> Forum </t> </a></i>
                  <i class="fa fa-upload liAbout"  style="margin-left: 40px;"> <a href="http://svn.alcasar.net"> <t class="colorTxt"> SVN </t> </a></i>
                  
                </li>
              </ul>
                <img class="aprilImg" src="/img/april.png">
            </div>

          </div>



      </div>
    </div>
</div>




<?php

  require "footer.php";
?>