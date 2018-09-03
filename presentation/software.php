<?php
  $basepath = "prst";
  require "../header.php";
  
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  
  switch ($lang)
  {
      case "fr":
        //echo "PAGE FR";
        $file_cont = loadLanguage("software_fr.txt","prst");
        break;
      default:
        //echo "PAGE EN - Setting Default";
        $file_cont = loadLanguage("software_en.txt","prst");
        break;
  }
?>
<div class="intro">
    <div class="overlay">
        <div class="container">        
            <div id="conatainerSoft"  >

                
          <div class="centerText">
               <h2> <?= $file_cont["tilte_soft"] ?> </h2>
                <p><?= $file_cont["content_soft"] ?></p>


                <div class="portfolio-items">
                  
                  <div class="col-sm5  col-lg-2 ">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://en.wikipedia.org/wiki/Linux" target="_blank" >
                        <div class="hover-text">
                          <h4>Operating System</h4>
                          <small>Linux</small>
                           </div>
                        <img src="/img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>


                  <div class="col-sm-5   col-lg-2 ">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://www.mageia.org" target="_blank">
                        <div class="hover-text">
                          <h4>Operating System</h4>
                          <small>Mageia</small> 
                        </div>
                        <img src="/img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-5   col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://coova.github.io/" target="_blank">
                        <div class="hover-text">
                          <h4>coova</h4>
                           </div>
                        <img src="/img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>



                        <div class="col-sm-5   col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://mariadb.org/" target="_blank">
                        <div class="hover-text">
                          <h4>mariadb</h4>
                          </div>
                        <img src="/img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>


                  <div class="col-sm-5 col-lg-2 ">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://www.openssh.com/" target="_blank">
                        <div class="hover-text">
                          <h4>openssh</h4>
                           </div>
                        <img src="/img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-5 col-lg-2 ">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://www.netfilter.org/" target="_blank">
                        <div class="hover-text">
                          <h4>netfilter</h4>
                           </div>
                        <img src="/img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-5 col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://www.gnupg.org/" target="_blank">
                        <div class="hover-text">
                          <h4>gnupg</h4>
                          </div>
                        <img src="/img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-5 col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="http://www.havp.org/" target="_blank">
                        <div class="hover-text">
                          <h4>havp</h4>
                           </div>
                        <img src="/img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>


                    <div class="col-sm-5 col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://www.clamav.net/" target="_blank">
                        <div class="hover-text">
                          <h4>clamav</h4>
                           </div>
                        <img src="/img/portfolio/10-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-5 col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="http://e2guardian.org/cms/" target="_blank">
                        <div class="hover-text">
                          <h4>e2guardian</h4>
                           </div>
                        <img src="/img/portfolio/11-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>

                    <div class="col-sm-5 col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://www.openssl.org/" target="_blank">
                        <div class="hover-text">
                          <h4>openssl</h4>
                           </div>
                        <img src="/img/portfolio/12-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-5 col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="http://www.thekelleys.org.uk/dnsmasq/doc.html" target="_blank">
                        <div class="hover-text">
                          <h4>Dnsmasq</h4>
                           </div>
                        <img src="/img/portfolio/13-small.jpg" class="img-responsive" alt="Project Title"> </a>
                         </div>
                    </div>
                  </div>

                  <div class="col-sm-5 col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://www.lighttpd.net/" target="_blank">
                        <div class="hover-text">
                          <h4>lighttpd</h4>
                           </div>
                        <img src="/img/portfolio/14-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-5 col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://secure.php.net/" target="_blank">
                        <div class="hover-text">
                          <h4>PHP</h4>
                           </div>
                        <img src="/img/portfolio/15-small.jpg" class="img-responsive" alt="Project Title"> </a>
                         </div>
                    </div>
                  </div>


                    <div class="col-sm-5 col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://sourceforge.net/projects/ipt-netflow/" target="_blank">
                        <div class="hover-text">
                          <h4>netflow</h4>
                           </div>
                        <img src="/img/portfolio/16-small.jpg" class="img-responsive" alt="Project Title"> </a>
                           </div>
                    </div>
                  </div>
                    <div class="col-sm-5 col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="http://nfsen.sourceforge.net/" target="_blank">
                        <div class="hover-text">
                          <h4>nfsen</h4>
                           </div>
                        <img src="/img/portfolio/17-small.jpg" class="img-responsive" alt="Project Title"> </a> 
                      </div>
                    </div>
                  </div>
                   <div class="col-sm-5 col-lg-2">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="https://wkhtmltopdf.org/" target="_blank">
                        <div class="hover-text">
                          <h4>wkhtmltopdf</h4>
                           </div>
                        <img src="/img/portfolio/18-small.jpg" class="img-responsive" alt="Project Title"> </a> 
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