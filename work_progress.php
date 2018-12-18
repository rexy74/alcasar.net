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
<div class="intro container work-offset">
  <div class="row">        
    <div class="hWork text-center"><?=$file_cont['title'] ?></div><br/>
    <div id="servicesWork">
      <p><?= $file_cont['desc'] ?><a style="color: #25BAD0;" href="http://websvn.alcasar.net"> SVN</a>.</p>
      <div style="margin-top: 20px;margin-left: -731px;margin-bottom: -268px;color: #25BAD0; position: relative;right: 51.333px;top: 79.167px;left: 541.667px;margin-right: 41px;width: 40%;text-align: right;">
        <ul class="work">
          <li style="top: 7px;left: 0px; right: 0px;">Security</li>
          <li style="top: 11px;left: 0px; right: 0px;">Component updating</li>
          <li style="top: 18px;left: 0px; right: 0px;">Graphical interface improvements</li>
        </ul>
      </div>
      <div style="margin-top: 72px;margin-left: 773px;margin-bottom: -268px;color: #25BAD0; position: relative;right: -32.667px;top: 206.167px;left: -33.333px;">
        <ul class="work">
          <li style="top: 3px; margin-left: 113px;left: 0px;text-align: left;">Bugs fixing</li>
          <li style="top: 11px;margin-left: 113px;left: 0px;text-align: left;">Documentation updating</li>
          <li style="top: 18px; margin-left: 113px;left: 0px;text-align: left;">New functionalities</li>
        </ul>
      </div>
      <img src="/img/work_personne.png" style="margin-top: 260px;margin-left: 180px;">
    </div>
  </div>
  <div class="row">
    <div id="coreTitle" class="container-fluid">
      <div class="row">
        <h2 class="fixPstCore"> <i class="fa fa-gears"></i><?= $file_cont['core_title'] ?></h2>
      </div>
      <?php
          $counter = $file_cont['nbCore_task'];
      ?>

      <?php for ($i=1; $i <= $counter; $i++): ?>
      <?php if($i % 2 === 1): ?>
      <div class="taskCore row">
      <?php endif; ?>
        <div id="barPrgrssCore" class="col-md-6">
            <p class="longDescriptTask">
              <?php $content1 = "task".$i."_CoreC";
              echo $file_cont[$content1]; 
              ?>
            </p>
            <div class="progress progress-striped styleBar center-block">
              <?php $content2 = "task".$i."_Core%"; ?>
                <div class="progress-bar progress-bar-info contentBar" role="progressbar" aria-valuenow="20" aria-valuemin="0"  aria-valuemax="100" style="width: <?= $file_cont[$content2]?>%;">
                <?= $file_cont[$content2] ?>%
              </div>
            </div>
          <p class="positionAuthor"> <?php $content3 = "task".$i."_CoreA";
            echo "$file_cont[$content3]"; ?></p>
        </div>
      <?php if($i % 2 === 0 || $i == $counter): ?>
        </div>  
      <?php endif; ?>
      <?php endfor; ?>
    </div>
  </div>
  <div class="row">
    <div id="graphicalAcc" class="container-fluid text-center">
      <div class="row">
        <h2 class="graph fixPstGraph"><?= $file_cont['design_title'] ?></h2>
      </div>
      <?php for ($i=1; $i <= $file_cont['nbTask_graph']; $i++): ?>
      <?php if($i % 2 === 1): ?>
      <div class="row center-block">
      <?php endif; ?>
        <div id="barPrgrssCore" class="col-md-6">
        <p class="longDescriptTask"><?php $content1 = "task".$i."_graphC";
          echo $file_cont[$content1];
        ?></p>
        <div class="progress progress-striped styleBar">
          <?php $content2 = "task".$i."_graph%"; ?>
          <div class="progress-bar progress-bar-info contentBar" role="progressbar" aria-valuenow="20" aria-valuemin="0"  aria-valuemax="100" style="width:<?= $file_cont[$content2] ?>%">
            <?php echo $file_cont[$content2].'%'; ?>
          </div>
        </div>
        <p class="positionAuthor"> <?php $content3 = "task".$i."_graphA";
          echo $file_cont[$content3];
          ?>
        </p>
      </div>
      <?php if($i % 2 === 0 || $i == $file_cont['nbTask_graph']): ?>
        </div>  
      <?php endif; ?>
      <?php endfor; ?>
    </div>
  </div>
</div>
<?php
  require "footer.php";
?>
