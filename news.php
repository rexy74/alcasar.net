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
      default:
        //echo "PAGE EN - Setting Default";
        $file_cont = loadLanguage("news_en.txt","root");
        break;
  }
?>
<div class="intro container-fluid">
      <div class="row">
          <div id="aboutNews">
            <div class="col-md-9">
              <p style="color: #25BAD0; font-size: 20px;margin-bottom: 23px;">   <?= $file_cont['content'] ?> <a href="/download.php"> <i class="fa fa-download" style="color: #0e8390"> </i> </a> </p> 
                <ul class="plus-news">
                  <?php 
                        for ($i=0; $i < $file_cont['number_change']; $i++) :  ?> 
                          <li class="liNews"> <?= $file_cont['change_'.$i] ?> </li>
                        <?php  endfor;?>
                </ul>
            </div>
              <div class="col-md-3">
                <?php if($lang == "fr"): ?>
                  <img class="news-img" src="/img/new_fr.png">
                <?php else : ?>
                  <img class="news-img" style="width:100%" src="/img/new.png">
                <?php endif; ?>
              </div>
              <div style="margin-top: 70px;">
                 <!-- <img   src="/img/arrow_news.png"> -->
              </div>
          </div>
      </div>
</div>

<?php

  require "footer.php";
?>
