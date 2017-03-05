<!DOCTYPE html>
<html lang="de-DE">
<head>

</head>

      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <p>Kontaktieren Sie uns: <strong>0800 123456</strong> | <strong>sf4projekt@gmail.com</strong> </p></b>
				<!--  <p>Bitte beachten Sie, dass es sich bei dieser Website lediglich um eine Demo handelt, keine der Angebote sind real.</p>
               --></div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                     <a href="http://www.gymnasium-wildeshausen.de/"><i class="icon-facebook_circle"></i></a> <a href="http://www.gymnasium-wildeshausen.de/"><i class="icon-twitter_circle"></i></a> <a href="http://www.gymnasium-wildeshausen.de/"><i class="icon-google_plus_circle"></i></a> <a href="http://www.gymnasium-wildeshausen.de/"><i class="icon-instagram_circle"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><strong>Tischlerei</strong>Mustermann</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Navigation</p>
                  <ul class="right">

				  <?php
				  if(basename($_SERVER['PHP_SELF']) == 'index.php'){
               //Hier einen kompletten Link zu verwenden stört das carousel, von daher nur Kurzversion
					        echo '<li class="active-item"><a href="#carousel">Start</a></li>';
                  echo '<li><a href="#features">News</a></li>';
                  echo '<li><a href="#our-work">Produkte</a></li>';
                  echo '<li><a href="#services">Service</a></li>';
				          echo '<li><a href="#contact">Kontakt</a></li>';
                  echo '<li><a href="#disclaimer">Disclaimer</a></li>';
                  }
                  //Auf anderen Seiten muss logischer Weise ein kompletter Link vorhanden sein.
            elseif(basename($_SERVER['PHP_SELF']) == 'kontaktformular.php'){//Kontaktformular, also Kontakt
                  echo '<li><a href="http://sf4.bplaced.com/index.php#carousel">Start</a></li>';
                  echo '<li><a href="http://sf4.bplaced.com/index.php#features">News</a></li>';;
                  echo '<li><a href="http://sf4.bplaced.com/index.php#our-work">Produkte</a></li>';
                  echo '<li><a href="http://sf4.bplaced.com/index.php#services">Service</a></li>';
                  echo '<li class="active-item"><a href="http://sf4.bplaced.com/index.php#contact">Kontakt</a></li>';
                  echo '<li><a href="http://sf4.bplaced.com/index.php#disclaimer">Disclaimer</a></li>';}
            else{
					        echo '<li class="active-item"><a href="http://sf4.bplaced.com/index.php#carousel">Start</a></li>';
                  echo '<li><a href="http://sf4.bplaced.com/index.php#features">News</a></li>';;
                  echo '<li><a href="http://sf4.bplaced.com/index.php#our-work">Produkte</a></li>';
                  echo '<li><a href="http://sf4.bplaced.com/index.php#services">Service</a></li>';
                  echo '<li><a href="http://sf4.bplaced.com/index.php#contact">Kontakt</a></li>';
                  echo '<li><a href="http://sf4.bplaced.com/index.php#disclaimer">Disclaimer</a></li>';}
				 ?>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
