<?php 
  include 'nedmin/netting/baglan.php';
  include 'nedmin/production/fonksiyon.php';
  $ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
  $ayarsor->execute(array(
  'id' => 0
  ));
  $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


  $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
  $kullanicisor->execute(array(
  'mail' => $_SESSION['userkullanici_mail']
  ));
  $say=$kullanicisor->rowCount();
  $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Star Wars Coffee</title>
    <link rel="shortcut icon" href="<?php echo $ayarcek['ayar_logo']?>">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script> 
    <style>
      #logo_1{
        width: 20%;
        margin-bottom:30px;
      }
      #logo_2{
        width: 80%;
      }
      #headline{
        font-size: 80px;
      }
    </style>     
  </head>

  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/minimalista-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-2">
            <a href="index.php" class="logo">
              <!-- Logo version before sticky nav -->
              <img id="logo_2" class="logo-before" src="<?php echo $ayarcek['ayar_logo']?>" alt="">
              <!-- Logo version after sticky nav -->
              <img id="logo_1" class="logo-after"  src="<?php echo $ayarcek['ayar_logo']?>" alt="">
            </a>
          </div>
          <div class="s-12 l-10">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                <li><a href="index.php">Anasayfa</a></li>
                <li><a href="about-us.php">Hakkımızda</a></li>             
                <li><a href="contact.php">İletişim</a></li>
              </ul>
            </div>
          </div>  
        </nav>
      </header>