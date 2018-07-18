<?php
  
  include "setLanguage.php";
  
  $basepath = "root";
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
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ALCASAR </title>
<?php  echo '<meta name="description" content="'.$file_topBar[description_fr].'">'; ?> 


<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/icomoon.css">


<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="containerIndex"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="/index.php"><i class="fa fa-shield"></i> ALCASAR</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
       
 <li><div class="dropdown" id="dropdownPrsnt" >
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php echo "$file_topBar[num_1]"; ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a href="/index.php"><button class="dropdown-item buttonTopBar"  type="button">  <t class="colorBlue"> <?php echo "$file_topBar[num_2]"; ?> </t></button></a>
    <a href="/presentation/goal.php"><button class="dropdown-item buttonTopBar"  type="button">  <t class="colorBlue"> <?php echo "$file_topBar[num_3]"; ?> </t></button></a>
    <a href="/presentation/exploitation.php"> <button class="dropdown-item buttonTopBar"  type="button">  <t class="colorBlue"> <?php echo "$file_topBar[num_4]"; ?> </t></button></a>
    <a href="/presentation/contribution.php"> <button class="dropdown-item buttonTopBar"  type="button">  <t class="colorBlue"> <?php echo "$file_topBar[num_5]"; ?> </t></button></a>
    <a href="/presentation/software.php"> <button class="dropdown-item buttonTopBar"  type="button">  <t class="colorBlue"> <?php echo "$file_topBar[software]"; ?> </t></button></a>
    <a href="/presentation/team.php"> <button class="dropdown-item buttonTopBar"  type="button">  <t class="colorBlue"> <?php echo "$file_topBar[num_11]"; ?> </t></button></a>
  </div>
</div></li>
     <li><a href="/news.php" class="page-scroll"><?php echo "$file_topBar[num_6]"; ?></a></li>
      <li><a href="/download.php" class="page-scroll"><?php echo "$file_topBar[num_7]"; ?></a></li>
      <li><a href="/work_progress.php" class="page-scroll"><?php echo "$file_topBar[num_8]"; ?></a></li>
        <li><a href="http://adullact.net/forum/?group_id=450" class="page-scroll"><?php echo "$file_topBar[num_9]"; ?></a></li>
        <li style="left: -10px;"><a href="/about.php" class="page-scroll"><?php echo "$file_topBar[num_10]"; ?></a></li>
        <!-- <li style="left: -5px;"><a href="/about.php"   class="page-scroll"> Team</a></li> -->
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
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
                        <li><?php echo "$file_content[reason_1]"; ?> </li>
                        <li><?php echo "$file_content[reason_2]"; ?></li>
                        <li><?php echo "$file_content[reason_3]"; ?></li>
                        <li><?php echo "$file_content[reason_4]"; ?></li>
                        <li><?php echo "$file_content[reason_5]"; ?></li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <ul class="why-li">
                       <li><?php echo "$file_content[reason_6]"; ?> </li>
                        <li><?php echo "$file_content[reason_7]"; ?> </li>
                        <li><?php echo "$file_content[reason_8]"; ?></li>
                        <li><?php echo "$file_content[reason_9]"; ?></li>
                        <li><?php echo "$file_content[reason_10]"; ?></li>
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

  <script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
  <script type="text/javascript" src="js/bootstrap.js"></script> 
  <script type="text/javascript" src="js/SmoothScroll.js"></script> 
  <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
  <script type="text/javascript" src="js/jquery.isotope.js"></script> 
  <script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
  <script type="text/javascript" src="js/main.js"></script>
  <script src="js/jquery.countTo.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.countTo.js"></script>

</body>
</html>