<?php
  
  $basepath = "root";
  require "header.php";
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  
  switch ($lang)
  {
      case "fr":
        //echo "PAGE FR";
        $file_cont = loadLanguage("news_fr.txt","root");
        break;
      case "en":
          //echo "PAGE EN";
          $file_cont = loadLanguage("news_en.txt","root");
          break;        
      default:
          //echo "PAGE EN - Setting Default";
          $file_cont = loadLanguage("news_en.txt","root");
          break;
  }
?>


<div  class="intro">
    
    <div class="overlayBis">
        <div class="">     

          <div id="aboutNews">
              <div class="newImg" >
                <?php if($lang == "fr"): ?>
                  <img  src="/img/new_fr.png">
                <?php else : ?>
                  <img  src="/img/new.png">

                <?php endif; ?>
              </div>
            <div class="newTxt">
            <p style="color: #25BAD0; font-size: 20px;margin-bottom: 23px;"><?php echo " $file_cont[content] "; ?></p> 
              <div class="" style="margin-left: 20px;" >
                   
                        <ul class="plus-news">
                          <?php 
                                for ($i=0; $i < $file_cont[number_change]; $i++) :  ?> 
                                  <li class="liNews"> <?php $tmp = change_.$i; echo "$file_cont[$tmp]";?> </li>
                                <?php  endfor;?>
                        </ul>

             </div>

            </div>
              <div style="margin-top: 70px;">
                 <!-- <img   src="/img/arrow_news.png"> -->
              </div>
                
          </div>

      </div>
    </div>
</div>




<?php

  require "footer.php";
?>