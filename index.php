<?php
  

  $basepath = "root";
  require "header.php";
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  $file_desc = loadLanguage("description.txt",$basepath);
  
  switch ($lang)
  {
      case "fr":
        //echo "PAGE FR";
        $file_content = loadLanguage("index_fr.txt",$basepath);
        $file_topBar = loadLanguage("topbar_fr.txt",$basepath);
        break;

      case "en":
          //echo "PAGE EN";
          $file_content = loadLanguage("index_en.txt",$basepath);
          $file_topBar = loadLanguage("topbar_en.txt",$basepath);
          break;

      default:
          //echo "PAGE EN - Setting Default";
          $file_content = loadLanguage("index_en.txt",$basepath);
          $file_topBar = loadLanguage("topbar_en.txt",$basepath);
          break;
  }

?>

<!-- Header -->
<header id="header">
  <div class="intro text-center">
    <div class="overlay">
      <div class="containerIndex">
          <div class="intro-text">
              <h1><?php echo "$file_content[welcome]"; ?> <span class="brand">ALCASAR</span></h1>
              <p><?php echo "$file_content[slogan]"; ?> </p>
              <!-- <a href="#services" class="btn btn-default btn-lg page-scroll">Learn More</a>  --> </div>
        </div>
    </div>
  </div>
</header>

<!-- Services Section -->
<div id="servicesIndex" class="text-center">
  <div class="containerIndex">
    <div class="col-md-8 col-md-offset-2 section-title">
      <h2> <?php echo "$file_content[num_1]"; ?></h2>
      <p><?php echo "$file_content[num_2]"; ?></p>
    </div>
    <div class="row" style=" width: 100% !important">
      <div class="col-xs-6 col-md-3"> <i class="fa fa-shield"></i>
        <h4><?php echo "$file_content[num_3]"; ?> </h4>
        <p><?php echo "$file_content[num_4]"; ?></p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-university"></i>
        <h4><?php echo "$file_content[num_5]"; ?></h4>
        <p><?php echo "$file_content[num_6]"; ?></p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-linux"></i>
        <h4><?php echo "$file_content[num_7]"; ?></h4>
        <p><?php echo "$file_content[num_8]"; ?> <a href="http://adullact.net/projects/alcasar/" class="colorBlue"> forum. </a></p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-code"></i>
        <h4><?php echo "$file_content[num_9]"; ?></h4>
        <p><?php echo "$file_content[num_10]"; ?></p>
      </div>
    </div>
  </div>
</div>

<div id="whyContainer">
    <div class="text-center" > 
      <h2> <?php echo "$file_content[why]"; ?></h2>
      <picture>
         <source srcset="/img/infrastructure_small.png" media="(max-width: 600px)">
         <source srcset="/img/infrastructure.png" media="(max-width: 1500px)">
          <img src="/img/infrastructure.png" class="" alt="components" style="width:auto;">
      </picture>
    </div>

          <div id="outPopUp">
                <div class="col-md-5">
                    <ul class="why-li">
                      <?php 
                          if($file_content[nb_reason] > 5) 
                          {
                            $counter = 5;
                          }
                          else
                          {
                             $counter = $file_content[nb_reason];
                          }
                      ?>
                      <?php for($i = 1; $i <= $counter; $i++ ): ?>
                       <?php $indexReason = "reason_" . $i; ?>
                       <li><?php echo "$file_content[$indexReason]"; ?> </li>
                        <?php endfor; ?>
                    </ul>
                </div>
                <div class="col-md-5">
                    <ul class="why-li">
                      <?php if( $file_content[nb_reason] > 5) : ?>
                          <?php for($i = 6; $i <= $file_content[nb_reason]; $i++ ): ?>
                              <?php $indexReason = "reason_" . $i; ?>
                              <li><?php echo "$file_content[$indexReason]"; ?> </li>
                          <?php endfor; ?>
                      <?php endif;?>
                    </ul>
                </div>
            </div> 

</div>


<!-- Some state -->
<div id="whyContainer" class="paddingStats" >
  <div id="gtco-counter" class="gtco-section state">

          <h2><?php echo "$file_content[someState]"; ?></h2>
        <div class="fixState">
          
        <div class="col-md-2 col-sm-6 animate-box iconState" data-animate-effect="fadeInLeft">
          <div class="feature-center">
            <span class="icon">
              <i class="fa fa-download"></i>
            </span>
            <?php
             echo '<span class="counter js-counter" data-from="0" data-to="'.$file_content[nb_downloadTarball].'" data-speed="5000" data-refresh-interval="50">1</span>';
              ?>
            
            <span class="counter-label"> <t class="colorBlue"> <?php echo "$file_content[downloadTarball]"; ?> </t></span>

          </div>
        </div>
        <div class="col-md-2 col-sm-6 animate-box iconState" data-animate-effect="fadeInLeft">
          <div class="feature-center">
            <span class="icon">
              <i class="fa fa-download"></i>
            </span>
            <?php
             echo '<span class="counter js-counter" data-from="0" data-to="'.$file_content[downloadDoc].'" data-speed="5000" data-refresh-interval="50">1</span>';
              ?>
            
            <span class="counter-label "> <t class="colorBlue"> documentations </t></span>

          </div>
        </div>
        <div class="col-md-2 col-sm-6 animate-box iconState" data-animate-effect="fadeInLeft">
          <div class="feature-center">
            <span class="icon">
              <i class="fa fa-smile-o"></i>
            </span>
            <span class="counter js-counter" data-from="0" data-to="183002" data-speed="5000" data-refresh-interval="50">1</span>
            <span class="counter-label"> <t class="colorBlue" >Happy Clients </t></span>
          </div>
        </div>

        <div class="col-md-2 col-sm-6 animate-box iconState" data-animate-effect="fadeInLeft">
          <div class="feature-center">
            <span class="icon">
              <i class="fa fa-briefcase"></i>
            </span>
            <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
            <span class="counter-label"> <t class="colorBlue" >  <?php echo "$file_content[donate]"; ?> </t></span>
          </div>
        </div>   

          <div class="col-md-2 col-sm-6 animate-box iconState"  data-animate-effect="fadeInLeft">
            <div class="feature-center">
              <span class="icon">
                <i class="fa fa-search"></i>
              </span>
                <?php
             echo '<span class="counter js-counter" data-from="0" data-to="'.$file_content[nb_Visitor].'" data-speed="5000" data-refresh-interval="50">1</span>';
              ?>
            
              <span class="counter-label"> <t class="colorBlue" >  <?php echo "$file_content[Visitor]"; ?> </t></span>
            </div>
          </div>   
    </div>
  </div>
</div>

<?php 

require "footer.php";

?>