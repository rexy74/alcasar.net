<?php
include "setLanguage.php";
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if (!isset ($lang)) { $lang = "en"; }
switch ($lang)
{
    case "fr":
      $file_topBar = loadLanguage("topbar_fr.txt", $basepath);
      break;
    default:
      $file_topBar = loadLanguage("topbar_en.txt",$basepath);
      break;
}
header('X-Frame-Options: SAMEORIGIN');
header("Strict-Transport-Security:max-age=63072000");
//header("Referrer-Policy : same-origin");
header("X-XSS-Protection: 0");
header('X-Content-Type-Options: nosniff');
//header_remove("X-Powered-By");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ALCASAR WEB SITE</title>
<?php
switch ($lang)
{
    case "fr":
      echo '<meta name=\"description\" content=\"ALCASAR est un controleur d\'acces au réseau libre et gratuit. Traçabilité et imputabilité des connexions. Contrôle parental\">';
      break;
    default :
      echo '<meta name=\"description\" content=\"ALCASAR is a open source network access controler. Traceability and imputablility of connections. Parental control\">';
      break;
}
?>
 
  <meta name="keywords" content="ALCASAR, Network Access Controler, captive portal, Free, Open Source, Private life respect">
  <meta name="author" content="ALCASAR Team">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css"  href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/fonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="/css/icomoon.css">

  <!-- Stylesheet
      ================================================== -->
  <link rel="stylesheet" type="text/css"  href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand page-scroll" href="/index.php"><i class="fa fa-shield"></i>ALCASAR</a></div>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <!-- Collect the nav links, <fieldset></fieldset>orms, and other content for toggling 
            <li>
              <div class="dropdown" id="dropdownPrsnt">
              <a href=""  class="btn btn-secondary dropdown-toggle"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><?php //echo "$file_topBar[num_1]"; ?>
                <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                  <li class="dropdown-item" role="presentation"><a role="menuitem" tabindex="-1" href="/index.php"><?php //echo "$file_topBar[num_2]"; ?></a></li>
                  <li class="dropdown-item" role="presentation"><a role="menuitem" tabindex="-1" href="/presentation/goal.php"><?php //echo "$file_topBar[num_3]"; ?></a></li>
                  <li class="dropdown-item" role="presentation"><a role="menuitem" tabindex="-1" href="/presentation/exploitation.php"><?php //echo "$file_topBar[num_4]"; ?></a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="/presentation/contribution.php"><?php //echo "$file_topBar[num_5]"; ?></a></li>
              </ul>
            </div>
          </li>
        -->
     
        <li>
          <div class="dropdown" id="dropdownPrsnt" >
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <?= $file_topBar['num_1'] ?>
            </button>
            <div class="dropdown-menu btnBackground" aria-labelledby="dropdownMenu2">
              <a href="/index.php"><button class="dropdown-item buttonTopBar noBorderBar" type="button"><span class="colorBlue"><?= $file_topBar['num_2']; ?></span></button></a>
              <a href="/presentation/goal.php"><button class="dropdown-item buttonTopBar noBorderBar" type="button"><span class="colorBlue"><?= $file_topBar['num_3']; ?></span></button></a>
              <a href="/presentation/exploitation.php"><button class="dropdown-item buttonTopBar noBorderBar" type="button"><span class="colorBlue"><?= $file_topBar['num_4'] ?></span></button></a>
              <a href="/presentation/software.php"><button class="dropdown-item buttonTopBar noBorderBar" type="button"><span class="colorBlue"><?= $file_topBar['software'] ?></span></button></a>
              <a href="/presentation/team.php"><button class="dropdown-item buttonTopBar noBorderBar" type="button"><span class="colorBlue"><?= $file_topBar['num_11'] ?></span></button></a>
            </div>
          </div>
        </li>
        <li><a href="/news.php" class="page-scroll"><?= $file_topBar['num_6'] ?></a></li>
        <li><a href="/download.php" class="page-scroll"><?= $file_topBar['num_7'] ?></a></li>
        <li><a href="/work_progress.php" class="page-scroll"><?= $file_topBar['num_8'] ?></a></li>
        <li><a href="http://adullact.net/forum/?group_id=450" class="page-scroll"><?= $file_topBar['num_9'] ?></a></li>
        <li style="left: -10px;"><a href="/contribution.php" class="page-scroll"><?= $file_topBar['num_5'] ?></a></li>
        <!-- <li style="left: -5px;"><a href="/about.php"   class="page-scroll"> Team</a></li> -->
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
