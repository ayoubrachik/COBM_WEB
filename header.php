<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>COBM|BLOG</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script.js"></script>
    <link href="<?php echo get_stylesheet_directory_uri().'/css/fontawesome/css/all.css'; ?>" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri().'/tolls/bootstrap.min.css'; ?>" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri().'/css/main.css'; ?>" rel="stylesheet" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="tolls/jquery-3.4.1.min.js" ></script>
    <script src='js/main.js'></script>
    <script src="tolls/jquery-3.4.1.slim.min.js" ></script>
    <script src="tolls/popper.min.js" ></script>
    <script src="tolls/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="tolls/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href="<?php bloginfo( 'stylesheet_url' ) ?>">
    <link rel='stylesheet' type='text/css' media='screen' href='css/nav.css'>
    <link rel="icon" href="img/icon.ico">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <style>
  .interface { 
    background-image: url("<?php bloginfo('template_directory'); ?>/img/bloger-bg.jpg ");
  }
  .cobm_logo{
    background-image: url("<?php bloginfo('template_directory'); ?>/img/logo_cobm.jpg");
    
  }
  .subscribe-option{
    background-image: url("<?php bloginfo('template_directory'); ?>/img/footer-signup.jpg");
  }
  .interface{
    height: 350px;
  }
  .cobm_logo
  {
      z-index: 2;
      -webkit-box-shadow: 10px 10px 38px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: 10px 10px 38px 0px rgba(0,0,0,0.75);
      box-shadow: 10px 10px 38px 0px rgba(0,0,0,0.75);
      position: absolute;
      top: 270px;
      background-position: center;
      background-size: cover;
      width: 150px;
      height: 150px;
      border: 3px solid #615CFD ;
      border-radius: 50%;
  }
 
</style>
</head>
<body>
    <header id="header" >
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand "href="#"> <img style="width:120px; padding-left: 10px; " src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt=""> </a>

            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
              <ul class="navbar-nav  justify-content-end ">
                <li class="nav-item ">
                  <a class="nav-link" href="<?php echo get_home_url();?>">ACCUEIL <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ACTIVITÉS
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo get_home_url()."#Equitation";?>">Équitation</a>
                    <a class="dropdown-item" href="<?php echo get_home_url()."#Tennis";?>">Tennis</a>
                    <a class="dropdown-item" href="<?php echo get_home_url()."#Natation";?>">Natation</a>
                    <a class="dropdown-item" href="<?php echo get_home_url()."#Athlétisme";?>">Athlétisme</a>
                    <a class="dropdown-item" href="<?php echo get_home_url()."#Terrains";?>">Terrains de sport</a>
                    <a class="dropdown-item" href="<?php echo get_home_url()."#Salle";?>">Salle de Fitness &amp; Aérobic</a>
                    <a class="dropdown-item" href="<?php echo get_home_url()."#Restaurant";?>">Restaurant</a>
                    <a class="dropdown-item" href="<?php echo get_home_url()."#Centre";?>">Centre de formation</a>
                  </div>
                </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo get_home_url()."#Offres";?>">OFFRES <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">BLOG<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo get_home_url()."#Contact";?>">CONTACT <span class="sr-only">(current)</span></a>
                  </li>
                  
                  <li class="nav-item ">
                    <button id="numberphone" type="button" class="btn btn-outline-secondary">05 23 48 22 02</button>
                  </li>
              </ul>
              
            </div>
        </nav>

</header>
<div class="interface" >
  <div class="ourtitle" >
    <br>
    <h1 data-aos="zoom-in" class=" " >
        <h1>BLOG</h1>
    </h1>
    
  </div>
  <div class="color-overplay"></div>
  <div  class="cobm_logo"></div>
</div>
<br> <br> <br> <br>

    <div class="container ">
          <div class="row">
       
  <script>
    $(document).ready(function () {
    $(window).on("scroll", function() {
        
        if($(window).scrollTop()) {
              $('header').addClass('black2');
        }

        else {
            $('header').removeClass('black2');
        }
  });
  $(".navbar-toggler").click(function () { 
    $('header').addClass('black2');
      
  });
  $(".cobm_logo").mouseleave(function () { 
    $('.cobm_logo').addClass('black2');
      
  });
  
});
  </script>