<?php
  $basepath = "prst";
  require "../header.php";
  
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  
  switch ($lang)
  {
      case "fr":
        //echo "PAGE FR";
        $file_cont = loadLanguage("contribution_fr.txt","prst");
        break;
      case "en":
          //echo "PAGE EN";
          $file_cont = loadLanguage("contribution_en.txt","prst");
          break;        
      default:
          //echo "PAGE EN - Setting Default";
          $file_cont = loadLanguage("contribution_en.txt","prst");
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


            </div>

        </div>
        <?php if($lang == "fr") : ?>
           <div class="imgPaddingContribution">
             <a href="https://www.paypal.com/donate/?token=zgmVIQ2eUz4XIVIjiqzYGaCTPnLsGAgD0cDxotvNrej9Pr_OEWVxtAbxTTRz8NvXm9Tp20&country.x=US&locale.x=US&Z3JncnB0="><img src="/img/btn_donate_fr.png"></a>
        </div>
        <?php else :  ?>

        <div class="imgPaddingContribution">
             <a href="https://www.paypal.com/donate/?token=zgmVIQ2eUz4XIVIjiqzYGaCTPnLsGAgD0cDxotvNrej9Pr_OEWVxtAbxTTRz8NvXm9Tp20&country.x=US&locale.x=US&Z3JncnB0="><img src="/img/btn_donate.png"></a>
        </div>
        <?php endif ;  ?>
             
          
  

    </div>
</div>

<?php

  require "../footer.php";
?>