<?php
  
  $basepath = "root";
  require "header.php";
  
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  
  switch ($lang)
  {
      case "fr":
        //echo "PAGE FR";
        $file_cont = loadLanguage("download_fr.txt","root");
        break;
      case "en":
          //echo "PAGE EN";
          $file_cont = loadLanguage("download_en.txt","root");
          break;        
      default:
          //echo "PAGE EN - Setting Default";
          $file_cont = loadLanguage("download_en.txt","root");
          break;
  }
  $version = $file_cont [version];
?>
<div class="intro">
    <div class="overlay">
        <div class="container">        
            <div class="hDownload" > <?php echo "$file_cont[title]"; ?> </div>
            <div id="servicesDownload"  style="text-align: left;" >
            <div class="fixDownloadPst">
                    
                <h3 class="sizeT"> <?php echo "$file_cont[version]"; ?> </h3>
                <div class="fixPositionBtn">
                  <?php  echo '<a class="p-button--positive" href="'.$file_cont[link_tarball].'" download="alcasar-3.2.tar.gz">' ; echo "$file_cont[download] </a>" ;?>
                </div> 
                <p>  <?php echo "$file_cont[descpt]"; ?> </p>
                <p> SHA256 : <?php echo "$file_cont[sha256]"; ?> </p>
               
                
             <p style="margin-top: 24px;">  <?php echo "$file_cont[num_1]"; ?> </p>
            </div>
             <div class="row" style="margin-left: 7px;" >
                    <div class="col-md-6">
                        <ul class="check-li">
                            <li><?php echo "$file_cont[num_2]"; ?> </li>
                            <li><?php echo "$file_cont[num_3]"; ?> </li>
                            <li><?php echo "$file_cont[num_4]"; ?></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="check-li">
                            <li><?php echo "$file_cont[num_5]"; ?></li>
                            <li><?php echo "$file_cont[num_6]"; ?></li>
                        </ul>
                    </div>
             </div>

            <div class="div1">  
                <?php echo '<a class="downloadIcon" href="'.$file_cont[link_mageia].'" download="Mageia-6-x86_64-DVD.iso"> <i class="fa fa-download" style="color: #0e8390"> </i> Image ISO du DVD Linux Mageia 6 </a>'; ?>
                <?php echo'<a href="'.$file_cont[link_readme].'" download="readme.txt" > <i class="fa fa-download" style="color: #0e8390"> </i> readme.txt </a>' ; ?>
            </div>

            </div>
        </div>

        <div class="fixPadding"> 

        <div class="container"> 
            <div id="servicesMid" class="paddingDownload paddingDwnld">
                <div class="fixPstDoc">
                    <h3  class="testIco" > <span> Documentation </span> </h3>
                           <div class="row" style="margin-left: 7px;" >
                    <div class="col-md-6">
                        <ul class="check-li">
                            <li> 
                              <?php echo '<a href="'.$file_cont[link_1].'" download="'.$version.'-exploitation-en.pdf">'.$version.'-exploitation-en.pdf  </a>'; ?>
                            </li>
                            <li> 
                              <?php echo '<a href="'.$file_cont[link_2].'" download="'.$version.'-installation-en.pdf">'.$version.'-installation-en.pdf  </a> '; ?>
                            </li>
                            <li> 
                             <?php echo '<a href="'.$file_cont[link_3].'" download="'.$version.'-presentation-en.pdf">'.$version.'-presentation-en.pdf </a> '; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="check-li">
                           <li>
                           <?php echo '<a href="'.$file_cont[link_4].'" download="'.$version.'-exploitation-fr.pdf" >'.$version.'-exploitation-fr.pdf </a> ' ; ?>
                           </li>
                            <li> 
                              <?php echo '<a href="'.$file_cont[link_5].'" download="'.$version.'-installation-fr.pdf">'.$version.'-installation-fr.pdf  </a> ' ; ?>
                            </li>
                            <li> 
                              <?php echo '<a href="'.$file_cont[link_6].'" download="'.$version.'-presentation-fr.pdf">'.$version.'-presentation-fr.pdf </a> ' ; ?>
                            </li>

                        </ul>
                    </div>

                    <i class="fa fa-download" style="color: #0e8390 ; margin-left: 5%; margin-top: 5%"> </i> <?php echo '<a href="'.$file_cont[link_7].'" download="'.$version.'-technique.pdf">'.$version.'-technique.pdf </a> ';?> 
                     <i class="fa fa-download" style="color: #0e8390 ;  margin-left: 5%;"> </i> <?php echo '<a href="'.$file_cont[link_8].'" download="changelog">changelog</a> ';?> 

                 </div>

                    
            </div>


        </div> 

           <div class="container">        
            <div id="servicesMidBis" class="paddingDownload resizeContainer">
     
                <div class="fixPstDoc">
                    <h3  class="testIco" > <span> Documentation-additional </span> </h3>
                           <div class="row" style="margin-left: 7px;" >
                    <div class="col-md-6">
                        <ul class="check-li">
                            <li>
                              <?php echo '<a href="'.$file_cont[link_9].'" download="Présentation-FIC2016.pdf">Présentation-FIC2016 </a>'; ?>
                            </li>
                            <li>
                              <?php echo '<a href="'.$file_cont[link_10].'" download="Rapport - François CROSNIER - Sonde Netflow_Nfen.pdf">Rapport - François CROSNIER - Sonde Netflow_Nfsen </a>'; ?>
                            </li>
                            <li>
                              <?php echo '<a href="'.$file_cont[link_11].'" download="Rapport - Jean-Baptiste COUPRIT - Réarchitecture parefeu (IPSET)">Rapport - Jean-Baptiste COUPRIT - Réarchitecture parefeu (IPSET)</a>'; ?>
                            </li>
                            <li>
                              <?php echo '<a href="'.$file_cont[link_12].'" download="Rapport - Raphael PION - Évolutions ALCASAR V3"> Rapport - Raphael PION - Évolutions ALCASAR V3</a>'; ?>
                            </li>
                             <li>
                              <?php echo '<a href="'.$file_cont[link_13].'" download="Rapport - Jérémy GUIGUELAY - Installation Mairie St Brieuc.pdf">Rapport - Jérémy GUIGUELAY - Installation Mairie St Brieuc </a>'; ?>
                            </li>
                            <li>
                              <?php echo '<a href="'.$file_cont[link_14].'" download="Rapport - Nicolas AUBRY - Enregistrement par SMS.pdf">Rapport - Nicolas AUBRY - Enregistrement par SMS </a>'; ?>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="check-li">
                            <li>
                               <?php echo '<a href="'.$file_cont[link_15].'" download="Rapport - Olivier HOUSSENBAY - 802.1x.pdf">Rapport - Olivier HOUSSENBAY - 802.1x </a>' ; ?>
                              </li>
                          <li>
                              <?php echo '<a href="'.$file_cont[link_16].'" download="Tutoriel_alcasar_Utilisation_d\'une_clé_3G-4G_sur_une_VM.pdf">Tutoriel - Johan RABOUIN - Utilisation d\'une clé 3G-4G sur une VM </a>' ; ?>
                            </li>
                            <li>
                               <?php echo '<a href="'.$file_cont[link_17].'" download="Tutoriel_Alcasar_virtualisation.pdf">Tutoriel VirtualHere </a>' ; ?>
                              </li>
                            <li>
                                <?php echo '<a href="'.$file_cont[link_18].'" download="Tutoriel_Alcasar_Active_Directory.pdf">Tutoriel - Matthias Leclair - Connexion ALCASAR avec un AD </a>' ; ?>
                              </li>
                        </ul>
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