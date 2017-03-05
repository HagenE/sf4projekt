<?php
session_start();

require_once'helpers/security.php';

$errors=isset($_SESSION['errors'])?$_SESSION['errors']:[];
$fields=isset($_SESSION['fields'])?$_SESSION['fields']:[];
?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Informatik Projekt</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script>

      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
<?php
include ("nav.php");
?>
   </head>
   <body class="size-1140">
   		<div id="contact">

    <div class="line" style="margin-top: 3em;">
            <!--Kontaktformular-->
			<div class="s-12 m-12 l-5">
            <h3>Kontaktformular:</h3>
                <form class="customform" action="contact.php" method="post">
                   <div class="s-12"><input name="email" placeholder="Ihre E-Mail" title="Ihre E-Mail:" type="text" <?php echo isset ($fields['name'])? 'value=" ' . e($fields['name']).'" ': ''?> /></div>
                   <div class="s-12"><input name="name" placeholder="Ihr Name" title="Ihr Name:" type="text" <?php echo isset($fields['email'])? 'value="' . e($fields['email']) . ' " ':''?>/></div>
                   <div class="s-12"><textarea placeholder="Ihre Nachricht" name="nachricht" rows="5" <?php echo isset ($fields['nachricht'])? e($fields['nachricht']):''?>></textarea></div>
                   <div class="s-12 m-12 l-4"><button class="color-btn" type="submit">Abschicken</button></div>
                </form>
                <?php if(!empty($errors)): ?>
                  <!-- Error-Display -->
           		  <div class="s-12 m-12 l-5 margin-bottom" style="margin-left: 2em;">
                  <font color="red">
           		  	  <ul><li><?php echo implode('</li><li>', $errors); ?> </li></ul>
                  </font>
           		  </div>
           		  <?php endif; ?>

                <?php
                $confirm = $_GET['confirm'];
                if(!empty($errors) && $confirm == 1): ?>
                <!-- NachrichtErfolg -->
                <div class="s-12 m-12 l-5 margin-bottom" style="margin-left: 2em;">
                  <font color="92c500">
                    <p>Ihre Nachricht wurde erfolgreich versandt.</p>
                  </font>
                </div>
                <?php endif; ?>
            </div>
            <!--Informationen-->
            <div class="s-12 m-12 l-5 margin-bottom" style="margin-left: 2em;">
                 <h3>Tischlerei Mustermann</h3>
                   <address>
                      <p><strong>Adresse:</strong> Humboldtstraße 3, Wildeshausen</p>
                      <p><strong>E-Mail:</strong> sf4projekt@gmail.com</p>
                      <p><strong>Telefon:</strong> 0800 123456</p>
                   </address>
                     <br />
                     <h3>Bitte beachten:</h3>
                     <p>In der Regel werden alle nicht-telefonischen Anfragen innerhalb von höchstens 2 Werktagen beanwortet. Sollte dies nicht der Fall sein, warten Sie bitte noch etwas ab, bevor Sie uns erneut kontaktieren.</p>
                  </div>
          </div>
        </div>
    </body>

<?php
include ("footer.php");

unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>
