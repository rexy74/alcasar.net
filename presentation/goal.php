<?php
  $basepath = "prst";
  require "../header.php";
  
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  
  switch ($lang)
  {
      case "fr":
        //echo "PAGE FR";
        $file_content = loadLanguage("goal_fr.txt","prst");
        break;
      case "en":
          //echo "PAGE EN";
          $file_content = loadLanguage("goal_en.txt","prst");
          break;        
      default:
          //echo "PAGE EN - Setting Default";
          $file_content = loadLanguage("goal_en.txt","prst");
          break;
  }
?>
<!-- Header -->
  <div class="intro text-center">
    <div class="overlayBis">
      <div class="container">
        
<div id="goal" >

      <h2> <?php echo "$file_content[num_1]"; ?> </h2>
     <div class="flex-section">
        <div class="col-1">
            <div class="text">
        
                    <h3><?php echo "$file_content[num_2]"; ?></h3>
                    <p>     <?php echo "$file_content[num_3]"; ?></p>
                    <p>     <?php echo "$file_content[num_4]"; ?></p>
            
            </div>
        </div>
    <div class="col-lg-4 ">
         <div class="imgRight">
        <div class="portfolio-item">
            <img src="/img/loginUser.png">
        </div>
    </div>
    </div>
    </div>
    <div class="flex-section reverse">
        <div class="col-1">
            <div class="text">
                        <h3><?php echo "$file_content[num_5]"; ?></h3>
                        <p><?php echo "$file_content[num_6]"; ?></p>
                        <p><?php echo "$file_content[num_7]"; ?></p>
                    <div class="row ">
                        <div class="col-md-6 textSize">
                               <?php echo "$file_content[num_8]"; ?>
                        </div>
                        <div class="col-md-6 textSize">
                             <?php echo "$file_content[num_9]"; ?>
                        </div>
                        <div class="col-md-6 textSize">
                              <?php echo "$file_content[num_10]"; ?>
                        </div>
                    </div>   
             </div>
        </div>
        <div> 
        
        </div>
    </div>
    <div class="flex-section">
        <div class="col-1">
            <div class="text">
                    <h3><?php echo "$file_content[num_11]"; ?></h3>
                    <p><?php echo "$file_content[num_12]"; ?></p>
                    <p><?php echo "$file_content[num_12Bis]"; ?></p>

                    <h4><?php echo "$file_content[num_13]"; ?></h4>
                    
                    <p><?php echo "$file_content[num_14]"; ?></p>
                      <div class="row ">
                    <div class="col-md-6 textSize">
                          <?php echo "$file_content[num_15]"; ?>
                    </div>
                    <div class="col-md-6 textSize">
                         <?php echo "$file_content[num_16]"; ?>
                    </div>
                    <div class="col-md-6 textSize">
                         <?php echo "$file_content[num_17]"; ?>
                    </div>
                    <div class="col-md-6 textSize">
                        <?php echo "$file_content[num_18]"; ?>

                    </div>
                  </div>
                    
                     <h4><?php echo "$file_content[num_19]"; ?></h4>
                    <p><?php echo "$file_content[num_20]"; ?></p>
                      <div class="row ">
                    <div class="col-md-6 textSize">
                         <?php echo "$file_content[num_21]"; ?>
                    </div>
                    <div class="col-md-6 textSize">
                          <?php echo "$file_content[num_22]"; ?>
                    </div>
                   
                </div>   
                    <p><?php echo "$file_content[num_23]"; ?></p>
            </div>
        </div>          
        <div class="col-lg-2 ">
                    <div class="imgRight">
            <div class="portfolio-item">
                     <img src="/img/access_deny_en.jpg"></div>
                        
            </div>
                    </div>
        </div>
    </div>
    </div>
    </div>
  </div>
</div>
</div>
</div>
<?php

  require "../footer.php";
?>