<?php
  
  $basepath = "root";
  require "header.php";
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  
  switch ($lang)
  {
      case "fr":
        //echo "PAGE FR";
        $file_cont = loadLanguage("work_progress_fr.txt","root");
        break;
      default:
        //echo "PAGE EN - Setting Default";
        $file_cont = loadLanguage("work_progress_en.txt","root");
        break;
  }
?>
<div class="intro">
    <div class="overlay">
        <div class="container">        
                <div class="hWork" > <?=$file_cont['title'] ?> </div>
                <p> <?= $file_cont['desc'] ?>  <a style="color: #25BAD0;" href="http://svn.alcasar.net"> SVN</a>. </p>
            <div id="servicesWork">

                    
                    <div style="margin-top: -33px;margin-left: -731px;margin-bottom: -268px;color: #25BAD0; position: relative;right: 51.333px;top: 79.167px;left: 541.667px;margin-right: 41px;width: 40%;text-align: right;">
                      <ul class="work">
                        <li style="top: 7px;left: 0px; right: 0px;" >Security </li>
                        <li style="top: 11px;left: 0px; right: 0px;">Component updating</li>
                        <li style="top: 18px;left: 0px; right: 0px;">Graphical interface improvements</li>
                      </ul>
                    </div>
                    
                    <div style="margin-top: 72px;margin-left: 773px;margin-bottom: -268px;color: #25BAD0; position: relative;right: -32.667px;top: 206.167px;left: -33.333px;">
                      <ul class="work">
                        <li style="top: 7px; margin-left: 113px;left: 0px;text-align: left;" >Bugs fixing</li>
                        <li style="top: 11px;margin-left: 113px;left: 0px;text-align: left;">Documentation updating</li>
                        <li style="top: 18px; margin-left: 113px;left: 0px;text-align: left;">New functionalities</li>
                      </ul>
                    </div>
                    
                  <img  src="/img/work_personne.png" style="margin-top: 233px;">      
<!--                  <div class="text-center" style="margin-top: 51px;"> 
                  <h2 class="Doc"> <span> Documentation </span></h2>
                </div>

                <div class="centerbar">
                    <div class="progress progress-striped active styleBar">
                      <div class="progress-bar progress-bar-info contentBar" role="progressbar" aria-valuenow="20" aria-valuemin="0"  aria-valuemax="100"  style="width: 95%">
                        <?= $file_cont['doc_task'] ?>
                      </div>
                    </div>
                </div>  
                    <p class="positionAuthor"><?= $file_cont['author_doc'] ?> </p>
-->            </div>


               <div id="coreTitle">
                  <h2 class="fixPstCore"> <i class="fa fa-gears"></i><?= $file_cont['core_title'] ?></h2>
              
              <?php  
                    $pair = false;
                    if(($file_cont['nbCore_task']%2) == 0)
                    {
                      $counter = $file_cont['nbCore_task'];
                      $pair = true;
                    }
                    else
                    {
                      $counter = $file_cont['nbCore_task']-1;
                    }
              ?>

              <?php for ($i=1; $i <=  $counter; $i +=2) :  ?>
                  <div  id="taskCore">
                  <div  id="barPrgrssCore" class="barPrgrssCoreLeft" >

                    <div class="centerbar">
                    <p class="longDescriptTask">
                          <?php $content1 = "task".$i."_CoreC";
                          echo $file_cont[$content1]; 
                          ?>
                      </p>
                    <div class="progress progress-striped styleBar" >
                      <?php $content2 = "task".$i."_Core%";
                          echo ' 
                      <div class="progress-bar progress-bar-info contentBar" role="progressbar" aria-valuenow="20" aria-valuemin="0"  aria-valuemax="100" style="width:'.$file_cont[$content2].'%;">';
                          ?>
                      <?= $file_cont[$content2] ?>%
                      </div>
                    </div>
                </div>  
                    <p class="positionAuthor"> <?php $content3 = "task".$i."_CoreA";
                          echo "$file_cont[$content3]"; 
                          $tmp = $i +1; 
                          ?></p>
                </div>

               <div  id="barPrgrssCore" class="barPrgrssCoreRight"  >
                  <div class="centerbar">
                     <p class="longDescriptTask">
                        <?php $content1 = "task".$tmp."_CoreC";
                          echo $file_cont[$content1]; 
                          ?>
                      </p>
                    <div class="progress progress-striped styleBar" >
                     <?php $content2 = "task".$tmp."_Core%";
                          echo ' 
                      <div class="progress-bar progress-bar-info contentBar" role="progressbar" aria-valuenow="20" aria-valuemin="0"  aria-valuemax="100" style="width:'.$file_cont[$content2].'%;">';
                          ?>
                      <?php echo $file_cont[$content2].'%'; ?>
                      </div>
                    </div>
                </div>  
                    <p class="positionAuthor"> <?php $content3 = "task".$tmp."_CoreA";
                          echo $file_cont[$content3];
                          ?></p>
            </div>
          </div>
             <?php  endfor;?>
            <?php $counter +=1;?>
            <?php if( $pair == false) : ?>

              <div  id="taskCore">
                  <div  id="barPrgrssCore" class="barPrgrssCoreLeft" >

                    <div class="centerbar">
                    <p class="longDescriptTask">
                          <?php $content1 = "task".$counter."_CoreC";
                          echo "$file_cont[$content1]"; 
                          ?>
                      </p>
                    <div class="progress progress-striped styleBar" >
                      <?php $content2 = "task".$counter."_Core%";
                          echo ' 
                      <div class="progress-bar progress-bar-info contentBar" role="progressbar" aria-valuenow="20" aria-valuemin="0"  aria-valuemax="100" style="width:'.$file_cont[$content2].'%;">';
                          ?>
                      <?php echo "$file_cont[$content2]%"; ?>
                      </div>
                    </div>
                </div>  
                    <p class="positionAuthor"> <?php $content3 = "task".$counter."_CoreA";
                          echo $file_cont[$content3];
                          ?></p>
                </div>
              <?php endif; ?>
           </div>
         </div>


            <div id="graphicalAcc" class="">
              
              <div class="text-center"> 
                <h2 class="graph fixPstGraph"><?= $file_cont['design_title'] ?></h2>
                
                <?php for ($i=1; $i <= $file_cont['nbTask_graph'] ; $i++) : ?>
                  <div class="centerbar">
                      <p class="longDescriptTask"><?php $content1 = "task".$i."_graphC";
                          echo $file_cont[$content1];
                          ?></p>
                     <div class="progress progress-striped styleBar" >
                      <?php $content2 = "task".$i."_graph%"; ?>
                      <div class="progress-bar progress-bar-info contentBar" role="progressbar" aria-valuenow="20" aria-valuemin="0"  aria-valuemax="100" style="width:<?= $file_cont[$content2] ?>%">
                      <?php echo $file_cont[$content2].'%'; ?>
                      </div>
                    </div>
                </div>  
                    <p class="positionAuthor"> <?php $content3 = "task".$i."_graphA";
                          echo $file_cont[$content3];
                          ?>
                            
                          </p>

              <?php endfor; ?>
            </div>
                    


                </div>

            </div>


          </div>
        </div>
            


    </div> 
</div>




<?php

  require "footer.php";
?>
