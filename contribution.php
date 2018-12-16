<?php
  $basepath = "root";
  require "header.php";
  
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  
  switch ($lang)
  {
      case "fr":
        //echo "PAGE FR";
        $file_cont = loadLanguage("contribution_fr.txt","root");
        break;
      case "en":
          //echo "PAGE EN";
          $file_cont = loadLanguage("contribution_en.txt","root");
          break;        
      default:
          //echo "PAGE EN - Setting Default";
          $file_cont = loadLanguage("contribution_en.txt","root");
          break;
  }
?>
<div class="intro">
    <div class="overlay">
        <div class="container">        
            <div id="servicesContribution" class="text-center" >
                       <h2> <?php echo "$file_cont[num_1]"; ?> </h2>
        <div class="container">
          <div class="centerText">
    
                <div class="textLeft">           
                    
                    <p> <?php echo "$file_cont[num_2]"; ?> </p>
                    <p>  <?php echo "$file_cont[num_3]"; ?> </p>
                   
                    <div class="row textLeft">
                        <div class="col-md-6 textSize">
                             <?php echo "$file_cont[num_4]"; ?>
                        </div>
                        <div class="col-md-6 textSize">
                             <?php echo "$file_cont[num_5]"; ?>
                        </div>
                        <div class="col-md-6 textSize">
                             <?php echo "$file_cont[num_6]"; ?>
                             <t class="TextColor"> <?php echo "$file_cont[num_8]"; ?> </t>
                        </div>
                        <div class="col-md-6 textSize">
                             <?php echo "$file_cont[num_9]"; ?>
                        </div>
                    </div>  

                    <p> <?php echo "$file_cont[num_10]"; ?> </p>
                    
                    <div class="row textLeft">
                        <div class="col-md-6 textSize">
                             <?php echo "$file_cont[num_11]"; ?>
                        </div>

                         <div class="col-md-6 textSize">
                             <?php echo "$file_cont[num_12]"; ?>
                        </div>

                        <div class="col-md-6 textSize">
                             <?php echo "$file_cont[num_13]"; ?>
                        </div>
                    </div>

                </div>

                 <ul class="" >
                <li>
                  <i class="fa fa-envelope liAbout"  style="margin-left: 40px;"> <t class="colorTxt"> <img src="/img/alcasar_mail.png"> </t> </i>
                  <i class="fa fa-wechat liAbout"  style="margin-left: 40px;"> <a href="http://adullact.net/forum/?group_id=450"> <t class="colorTxt"> Forum </t> </a></i>
                  <i class="fa fa-upload liAbout"  style="margin-left: 40px;"> <a href="http://websvn.alcasar.net"> <t class="colorTxt"> SVN </t> </a></i>
                  
                </li>
              </ul>

            </div>

        </div>
        
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="VUC4TDGWADVDU">
            <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
            <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
            </form>
            <img class="aprilImg" src="/img/april.png">
    </div>
</div>

<?php

  require "footer.php";
?>
