<?php
  $basepath = "prst";
  require "../header.php";
  
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  
  switch ($lang)
  {
      case "fr":
        //echo "PAGE FR";
        $file_cont = loadLanguage("team_fr.txt","prst");
        break;
      default:
        //echo "PAGE EN - Setting Default";
        $file_cont = loadLanguage("team_en.txt","prst");
        break;
  }

?>

<div class="intro">
    <div class="overlay">
        <div class="container">        
            <div id="servicesContribution" class="text-center" style="margin-right: -26px;margin-left: -26px !important;" >

        <div class="container">
          <div class="centerText">
    <div class="col-md-8 col-md-offset-2 section-title">
      <h2> <?= $file_cont['team'] ?></h2>
      <p><?= $file_cont['desc'] ?></p>
    </div>
 <h3> <?= $file_cont['adm'] ?> </h3>
      <div class="centerTeam"> 
          <div id="row">
              <div class="col-md-4">
                 <img src="/img/team/user_default.png" alt="..." class="img-circle team-img">
                  <div class="caption">
                    <h3><?= $file_cont['memberAdm_N1'] ?> 
                    </h3>
                    <h4 class="infoMember" >
                      <?= $file_cont['memberAdm_Psd1'] ?> 
                    </h4>
                    <p><?= $file_cont['memberAdm_D1'] ?></p>
                </div>
              </div>
              <div class="col-md-5">
                 <img src="/img/team/user_default.png" alt="..." class="img-circle team-img">
                  <div class="caption">
                     <h3>
                      <?= $file_cont['memberAdm_N2'] ?>
                      </h3>
                    <h4 class="infoMember">
                        <?= $file_cont['memberAdm_Psd2'] ?> 
                     </h4>

                    <p><?= $file_cont['memberAdm_D2'] ?></p>
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>
        </div>
        </div>

        <?php if( ($file_cont['nb_member']%4) == 0 )
          {
            $count=$file_cont['nb_member']/4;
          }
          else
          {
            $count=$file_cont['nb_member']/4 ;
            $resul = $file_cont['nb_member']%4;
          }
        ?>

        <?php for ($i=0; $i < (int)$count ; $i++) :
             
             $tmp = $i*4 + 1;
             $name1 = "member_N".$tmp;
             $desc1 = "member_D".$tmp;
             $pseudo1 ="member_Psd".$tmp;
             $Isgithub1 = "member_G".$tmp;
             $IsLinkdn1 = "member_L".$tmp;

             $tmp ++;
             $name2 = "member_N".$tmp;
             $desc2 = "member_D".$tmp;
             $pseudo2 ="member_Psd".$tmp;
             $Isgithub2 = "member_G".$tmp;
             $IsLinkdn2 = "member_L".$tmp;

             $tmp ++;
             $name3 = "member_N".$tmp;
             $desc3 = "member_D".$tmp;
             $pseudo3 ="member_Psd".$tmp;
             $Isgithub3 = "member_G".$tmp;
             $IsLinkdn3 = "member_L".$tmp;
             
             $tmp ++;
             $name4 = "member_N".$tmp;
             $desc4 = "member_D".$tmp;
             $pseudo4 ="member_Psd".$tmp;
             $Isgithub4 = "member_G".$tmp;
             $IsLinkdn4 = "member_L".$tmp;
           ?>
        <div id="row" class="container">
            <div class="col-md-3 col-sm-6 team">
             <img src="/img/team/user_default.png" alt="..." class="img-circle team-img">
              <div class="caption">
                <h3><?= $file_cont[$name1] ?>
                </h3>
                     <h4 class="infoMember" >
                <?php if (!empty($file_cont[$Isgithub1])): ?>
                      <?php echo' <a class="infoMember"  href="'.$file_cont[$Isgithub1].'" >
                   ';?>
                     <i class="fa fa-github"> </i>
                   </a>
                      <?php endif;?>
                 <?php  if (!empty($file_cont[$IsLinkdn1])): ?>
                     <?php echo' <a  class="infoMember" href="'.$file_cont[$IsLinkdn1].'" >
                     <i class="fa fa-linkedin"> </i>
                   </a>';?>
                <?php endif;?>
                <?php  if (!empty($file_cont[$pseudo1])): ?>
                     <?= $file_cont[$pseudo1] ?>
                <?php endif;?>
                    </h4>
                <p><?= $file_cont[$desc1] ?></p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 team">
               <img src="/img/team/user_default.png" alt="..." class="img-circle team-img">
              <div class="caption">
                <h3><?= $file_cont[$name2] ?></h3>
                     <h4 class="infoMember" >
                <?php if (!empty($file_cont[$Isgithub2])): ?>
                     <?php echo'<a href="'.$file_cont[$Isgithub2].'" >
                     <i class="fa fa-github"> </i>
                   </a>';?>
                      <?php endif;?>
                 <?php  if (!empty($file_cont[$IsLinkdn2])): ?>
                      <?php echo '<a href="'.$file_cont[$IsLinkdn2].'" >
                     <i class="fa fa-linkedin"> </i>
                   </a>';?>
                <?php endif;?>
                    <?php  if (!empty($file_cont[$pseudo2])): ?>
                     <?= $file_cont[$pseudo2] ?>
                <?php endif;?>
                    </h4>
                <p><?= $file_cont[$desc2] ?></p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 team">
              <img src="/img/team/user_default.png" alt="..." class="img-circle team-img">
                <div class="caption">
                  <h3><?= $file_cont[$name3] ?></h3>
                       <h4 class="infoMember" >
                <?php if (!empty($file_cont[$Isgithub3])): ?>
                     <?php echo' <a class="infoMember"  href="'.$file_cont[$Isgithub3].'" >
                     <i class="fa fa-github"> </i>
                   </a>';?>
                      <?php endif;?>
                 <?php  if (!empty($file_cont[$IsLinkdn3])): ?>
                      <?php echo' <a class="infoMember"  href="'.$file_cont[$IsLinkdn3].'" >
                     <i class="fa fa-linkedin"> </i>
                   </a>';?>
                <?php endif;?>
                  <?php  if (!empty($file_cont[$pseudo3])): ?>
                     <?= $file_cont[$pseudo3] ?>
                <?php endif;?>
                    </h4>
                  <p><?= $file_cont[$desc3] ?></p>
              </div>
            </div>

           <div class="col-md-3 col-sm-6 team">
                <img src="/img/team/user_default.png" alt="..." class="img-circle team-img">
                  <div class="caption">
                    <h3><?= $file_cont[$name4] ?></h3>
                         <h4 class="infoMember" >
                <?php if (!empty($file_cont[$Isgithub4])): ?>
                     <?php echo' <a class="infoMember"  href="'.$file_cont[$Isgithub4].'" >
                     <i class="fa fa-github"> </i>
                   </a>';?>
                      <?php endif;?>
                 <?php  if (!empty($file_cont[$IsLinkdn4])): ?>
                      <?php echo' <a class="infoMember"  href="'.$file_cont[$IsLinkdn4].'" >
                     <i class="fa fa-linkedin"> </i>
                   </a>';?>
                <?php endif;?>
                    <?php  if (!empty($file_cont[$pseudo4])): ?>
                     <?= $file_cont[$pseudo4] ?>
                <?php endif;?>
                    </h4>
                    <p><?= $file_cont[$desc4] ?></p>
                </div>
          </div>
        </div>
      <?php endfor; ?>

        <div id="row" class="container">
        <?php for ($i=0; $i <  $resul ; $i++) : 

              $tmp ++;
              $name1 = "member_N".$tmp;
              $desc1 = "member_D".$tmp;
              $pseudo1 ="member_Psd".$tmp;
              $Isgithub1 = "member_G".$tmp;
              $IsLinkdn1 = "member_L".$tmp;
             ?>
            <div class="col-md-3 col-sm-6 team">
             <img src="/img/team/user_default.png" alt="..." class="img-circle team-img">
              <div class="caption">
                <h3><?= $file_cont[$name1] ?></h3>
                    <h4 class="infoMember" >
                <?php if (!empty($file_cont[$Isgithub1])): ?>
                     <?php echo' <a class="infoMember"  href="'.$file_cont[$Isgithub1].'" >
                     <i class="fa fa-github"> </i>
                   </a>';?>
                      <?php endif;?>
                 <?php  if (!empty($file_cont[$IsLinkdn1])): ?>
                      <?php echo' <a class="infoMember"  href="'.$file_cont[$IsLinkdn1].'" >
                     <i class="fa fa-linkedin"> </i>
                   </a>';?>
                <?php endif;?>
                    <?php  if (!empty($file_cont[$pseudo1])): ?>
                     <?= $file_cont[$pseudo1] ?>
                <?php endif;?>
                    </h4>
                <p><?= $file_cont[$desc1] ?></p>
              </div>
            </div>
          <?php endfor; ?>




          </div>

        </div>
  
      </div>
    </div>
</div>

<?php

  require "../footer.php";
?>