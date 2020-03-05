<?php /* Template Name: home_page*/  ?>
<!DOCTYPE html>
<html>
<head>
  
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>COCM|HOME</title>
    <script type="text/javascript"> url_detect.OnBack = function() { window.location.replace("URL.org"); } </script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="<?php echo get_stylesheet_directory_uri().'/css/fontawesome/css/all.css'; ?>" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri().'/tolls/bootstrap.min.css'; ?>" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri().'/css/main.css'; ?>" rel="stylesheet" />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
    <style>
    .interface { 
    background-image: url("<?php bloginfo('template_directory'); ?>/img/header-bg.jpg ");
  }
  .cobm_logo{
    background-image: url("<?php bloginfo('template_directory'); ?>/img/logo_cobm.jpg");
    
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
                        <a class="dropdown-item" href="#Equitation">Équitation</a>
                        <a class="dropdown-item" href="#Tennis">Tennis</a>
                        <a class="dropdown-item" href="#Natation">Natation</a>
                        <a class="dropdown-item" href="#Athlétisme">Athlétisme</a>
                        <a class="dropdown-item" href="#Terrains">Terrains de sport</a>
                        <a class="dropdown-item" href="#Salle">Salle de Fitness &amp; Aérobic</a>
                        <a class="dropdown-item" href="#Restaurant">Restaurant</a>
                        <a class="dropdown-item" href="#Centre">Centre de formation</a>
                      </div>
                    </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="#Offres">OFFRES <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">BLOG<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="#Contact">CONTACT <span class="sr-only">(current)</span></a>
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
            <h1 data-aos="zoom-in">CLUB OMNISPORTS DE BENI MELLAL</h1>
            <h1 data-aos="zoom-in">COBM</h1>
        </h1>
        <br> 
        <a href="#Offres"> <button type="button" class="btn">Abonnez-vous maintenant</button> </a>
      </div>
      <div class="color-overplay"></div>
      <div  class="cobm_logo"></div>
    </div>
 
    
     <!-- Start home-about Area -->
  <section class="home-about-area section-gap">
    <div class="container">
      <div class="row">
        <div data-aos="fade-up" class="col-lg-6 home-about-left">
          <img class="mx-auto d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/about-img.png" alt="">
        </div>
        <div data-aos="fade-down" class="col-lg-6 home-about-right">
          
          <h1>Bienvenue au Club Omnisports De Benimellal</h1>
          
          <p>
            Le COBM est un club de loisirs situé à quelques minutes du centre-ville de Beni Mellal. Pour les adeptes des loisirs en pleine air, le Club Omnisport de Beni Mellal vous propose plusieurs activités : Sport équestre, Tennis, Natation, Athlétisme, Basketball, Volleyball, Football,Tire au plateau,Petanque.

S’initier, s’entraîner ou se perfectionner, COBM offre un programme de divertissement et de pratique de sport complet, adapté aussi bien aux amateurs qu’aux professionnels. L’équipe de COBM se compose de coachs experts animés par l’ambition de réinventer la pratique du sport.

Le COBM vous accueille tous les jours de la semaine, dans un site étendu et diversifié.
          </p>
          <span id="Equitation" ></span>
      </div>
    </div>	
  </section>
  <!-- End home-about Area -->
    </div>
    <br> <br>
    <div class="main-wrapper"  >
      <section  class="about-area pt-100 pb-100" >
        <div  class="container">
          <div class="row align-items-center justify-content-between">
            <div data-aos="fade-up" class="col-lg-6 col-md-12 col-sm-12 about-left">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Equitation.jpg" alt="">
            </div>
            <div data-aos="fade-down" class="col-lg-6 col-md-12 col-sm-12 about-right">
              <span class="lnr lnr-sun"></span>
              <h1  class="text-uppercase">
              
                <span >Équitation</span> <br>
                Les amoureux du cheval
                
               </h1>
              
              <p>
                
                Les amoureux du cheval trouveront dans le club COBM, un cadre de pratique d’équitation agréable. Que vous soyez débutants ou confirmés, l’école équestre est dirigée par une équipe expérimentée qui vous propose des cours et des stages adaptés à tous les niveaux: stages sur mesure, initiation ou perfectionnement.
              </p>
              <span id="Tennis" ></span>
            </div>
          </div>
        </div>
      </section>
      <section  class="about-area pt-100 pb-100" >
        <div  class="container">
          <div class="row align-items-center justify-content-between">
            <div data-aos="fade-up" class="col-lg-6 col-md-12 col-sm-12 about-left">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Tennis.png" alt="">
                
            </div>
            <div data-aos="fade-down" class="col-lg-6 col-md-12 col-sm-12 about-right">
              <span class="lnr lnr-sun"></span>
              <h1 class="text-uppercase">
    
                <span>Tennis</span> <br>
                
                <span id="Natation"  ></span>
              </h1>
              <p>
                Avec de nombreux courts de tennis en terre battue, COBM est le lieu parfait pour une expérience de “tennis” unique à Béni Mellal. Venez découvrir le tennis avec nous, pour les joueurs compétition ou loisir, COBM est un endroit très agréable pour taper la balle, en cours particulier ou à 2 si vous le souhaitez.
              </p>
              
            </div>
          </div>
        </div>
       
      </section>
     
      <section  class="about-area pt-100 pb-100" >
        <div  class="container">
          <div class="row align-items-center justify-content-between">
            <div data-aos="fade-up" class="col-lg-6 col-md-12 col-sm-12 about-left">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/bg-natation-1.png" alt="">
            </div>
            <div data-aos="fade-down" class="col-lg-6 col-md-12 col-sm-12 about-right">
              <span class="lnr lnr-sun"></span>
              <h1 class="text-uppercase">
    
                <span>Natation</span> <br>
               
                <span id="Athlétisme"></span>
              </h1>
              <p>
                Pour apprendre à nager, le plus tôt est le mieux. Au club COBM, des moniteurs spécialement dédiée à l'apprentissage de la nage assisteront vos enfants pour savoir nager et assurer leur sécurité dans l’eau.              </p>
              
            </div>
          </div>
        </div>
      </section>
      <section class="about-area pt-100 pb-100" >
        <div  class="container">
          <div class="row align-items-center justify-content-between">
            <div data-aos="fade-up" class="col-lg-6 col-md-12 col-sm-12 about-left">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/bg-Athletisme-1.png" alt="">
            </div>
            <div data-aos="fade-down" class="col-lg-6 col-md-12 col-sm-12 about-right">
              <span class="lnr lnr-sun"></span>
              <h1 class="text-uppercase">
    
                <span>Athlétisme</span> <br>
                
                <span id="Terrains" ></span>
              </h1>
              <p>
                Que vous cherchiez la performance, un moment de détente entre ami(e)s, ou tout simplement à retrouver la forme, COBM est proche de vous. Ce Club est doté d’une piste en tartan aux normes olympiques, et d’un circuit de course à pieds, c’est l'endroit idéal pour pratiquer l'Athlétisme, courir, sauter et marcher avec vos proches et vos amis. Et n’oubliez pas, on ne peut entretenir une bonne santé que lorsqu’on prenne soin d’elle, alors prenez-en soin, et portez-vous bien en vous rendant au Club COBM.
              </p>
              
            </div>
          </div>
        </div>
      </section>
      <section class="about-area pt-100 pb-100" >
        <div  class="container">
          <div  class="row align-items-center justify-content-between">
            <div data-aos="fade-up" class="col-lg-6 col-md-12 col-sm-12 about-left">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/bg-terrains-sport.jpg" alt="">
            </div>
            <div data-aos="fade-down" class="col-lg-6 col-md-12 col-sm-12 about-right">
              <span class="lnr lnr-sun"></span>
              <h1 class="text-uppercase">
    
                <span>Terrains de sport</span> <br>
              
                <span id="Salle" ></span>
              </h1>
              <p>
                Selon votre sport préféré, des terrains pour plusieurs disciplines (Basketball, Volleyball, Football) vous offrent des espaces aux normes standards où vous avez le choix de vous entrainer et pratiquer votre sport en équipe pour les adultes. Les enfants peuvent aussi s’entrainer et pratiquer le sport collectif qu’ils aiment sous la direction de moniteurs qualifiés.              </p>
              
            </div>
          </div>
        </div>
      </section>
      <section class="about-area pt-100 pb-100" >
        <div  class="container">
          <div class="row align-items-center justify-content-between">
            <div data-aos="fade-up" class="col-lg-6 col-md-12 col-sm-12 about-left">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/bg-salle-sport.jpg" alt="">
            </div>
            <div data-aos="fade-down" class="col-lg-6 col-md-12 col-sm-12 about-right">
              <span class="lnr lnr-sun"></span>
              <h1 class="text-uppercase">
    
                <span>Salle de Fitness & Aérobic</span> <br>
               
                <span id="Restaurant" ></span>
              </h1>
              <p>
                En plus des différents terrains de sport, des cours collectifs quotidiens sont dédiés au fitness, à la musculation et à la remise en forme.
              </p>
              
            </div>
          </div>
        </div>
      </section>
      <section class="about-area pt-100 pb-100" >
        <div  class="container">
          <div class="row align-items-center justify-content-between">
            <div data-aos="fade-up" class="col-lg-6 col-md-12 col-sm-12 about-left">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/bg-restaurant-11.png" alt="">
            </div>
            <div data-aos="fade-down" class="col-lg-6 col-md-12 col-sm-12 about-right">
              <span class="lnr lnr-sun"></span>
              <h1 class="text-uppercase">
    
                <span>Restaurant</span> <br>
                
                <span id="Centre" ></span>
              </h1>
              <p>
                Le club COBM dispose d’un restaurant qui offre des plats variés aux adhérents et au grand public.
              </p>
              
            </div>
          </div>
        </div>
      </section>
      <section class="about-area pt-100 pb-100" >
        <div  class="container">
          <div class="row align-items-center justify-content-between">
            <div data-aos="fade-up" class="col-lg-6 col-md-12 col-sm-12 about-left">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/bg-cf.jpg" alt="">
            </div>
            <div data-aos="fade-down" class="col-lg-6 col-md-12 col-sm-12 about-right">
              <span class="lnr lnr-sun"></span>
              <h1 class="text-uppercase">
    
                <span>Centre de formation</span> <br>
                
              </h1>
              <p>
                COBM dispose d’un centre de formation avec des locaux équipés de sonorisation, de matériel d’enregistrement, et d’espaces de pause-café destinés à l’organisation de divers événements (séminaires, journées de formation,…….).
              </p>
              
            </div>
          </div>
        </div>
      </section>
      <section class="about-area pt-100 pb-100" >
        <div  class="container">
          <div class="row align-items-center justify-content-between">
            <div data-aos="fade-up" class="col-lg-6 col-md-12 col-sm-12 about-left">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/tire.jpg" alt="">
            </div>
            <div data-aos="fade-down" class="col-lg-6 col-md-12 col-sm-12 about-right">
              <span class="lnr lnr-sun"></span>
              <h1 class="text-uppercase">
    
                <span>Tire au plateau</span> <br>
                
              </h1>
              <p>
                ...
              </p>
              
            </div>
          </div>
        </div>
      </section>
      <section class="about-area pt-100 pb-100" >
        <div  class="container">
          <div class="row align-items-center justify-content-between">
            <div data-aos="fade-up" class="col-lg-6 col-md-12 col-sm-12 about-left">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/ball.jpg" alt="">
            </div>
            <div data-aos="fade-down" class="col-lg-6 col-md-12 col-sm-12 about-right">
              <span class="lnr lnr-sun"></span>
              <h1 class="text-uppercase">
    
                <span>Petanque</span> <br>
                
              </h1>
              <p>
              Le ball-trap ou balltrap1 ou tir aux clays (Belgique), parfois appelé « tir aux pigeons d'argile », est un exercice d'adresse, d'entraînement à la chasse ou pratiqué comme activité sportive, consistant à abattre au fusil des plateaux constitués d'un mélange de brai de pétrole et d'un filler calcaire projetés en l'air.
              </p>
              
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="container-fluid">    
      <div class="row justify-content-center ">
        <div class="col-sm-6">
          <h1 class="mestitre">Activités</h1>
          <div id="demo"  class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/img/p1.jpg" alt="" width="1100" height="500">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/p2.jpg" alt="Chicago" width="1100" height="500">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/p4.jpg" alt="New York" width="1100" height="500">
              </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
        <div class="col-sm-5">
          <h1 class="mestitre red" >Où sommes nous?</h1>
         <p > <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4908.61696483474!2d-6.397776280615258!3d32.30900275588785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda3872540c5792f%3A0x95b496363ba9c562!2z2KfZhNmB2LHZiNiz2YrYqQ!5e0!3m2!1sen!2sma!4v1580760629501!5m2!1sen!2sma" width=100% height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
        </div>
      </div>
    </div>
    <!--star price-->
    <section  id="Offres" class="price-area section-gap2 justify-content-center ">
      <div class="container">
        <div style="padding-bottom: 20px;" class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">Offres Promotionnels</h1>
            </div>
          </div>
        </div>					
        <div class="row">
          <div data-aos="fade-up" class="col-lg-4 col-md-6">
            <div class="single-price">
              <div class="top-part">
                <h1 class="package-no">01</h1>
                <h4>Adhésion pour adulte</h4>
              </div>
              <div class="package-list">
                <ul>
                  <li>Annuelle 3500,00 dhs</li>
                  <li>Semestrielle 2000,00 dhs</li>
                  <li>Trimestrielle 1300,00 dhs</li>
                </ul>
              </div>
              <div class="bottom-part">
                <a class="price-btn text-uppercase" href="#Contact">Contactez-nous</a>
              </div>								
            </div>
          </div>
          <div data-aos="fade-down" class="col-lg-4 col-md-6">
            <div class="single-price">
              <div class="top-part">
                <h1 class="package-no">02</h1>
                <h4>Adhésion pour couple</h4>
              </div>
              <div class="package-list">
                <ul>
                  <li>Annuelle 4000,00 dhs</li>
                  <li>Semestrielle 2200,00 dhs</li>
                  <li>Trimestrielle 1400,00 dhs</li>
                </ul>
              </div>
              <div class="bottom-part">
                <a class="price-btn text-uppercase" href="#Contact">Contactez-nous</a>
              </div>								
            </div>
          </div>
          <div data-aos="fade-down" class="col-lg-4 col-md-6">
            <div class="single-price">
              <div class="top-part">
                <h1 class="package-no">03</h1>
                <h4>Adhésion pour enfant</h4>
              </div>
              <div class="package-list">
                <ul>
                  <li>Annuelle 500,00 dhs</li>
                  <li>Semestrielle 300,00 dhs</li>
                  <li>Trimestrielle 200,00 dhs</li>
                </ul>
              </div>
              <div class="bottom-part">
                <a class="price-btn text-uppercase" href="#Contact">Contactez-nous</a>
              </div>								
            </div>
          </div>
                                              
        </div>
      </div>	
    </section>
    <!--end pricing-->
    
    <!--Avis des clients-->
    
    <!-- Footer Section Begin -->
 <footer id="Contact" class="footer-section">
  <div class="container">
      <div class="row">
          <div class="col-md-4">
              <div class="contact-option">
                  <span>Phone</span>
                  <p>05 23 48 22 02 - 06 </p>
              </div>
          </div>
          <div class="col-md-4">
              <div class="contact-option">
                  <span>Address</span>
                  <p>COBM - CLUB OMNISPORTS KM 4,2 ROUTE DE MARRAKECH, BENI MELLAL </p>
              </div>
          </div>
          <div class="col-md-4">
              <div class="contact-option">
                  <span>Email</span>
                  <p>contact@cobm.ma</p>
              </div>
          </div>
      </div>
      <div class="subscribe-option set-bg" data-setbg="img/footer-signup.jpg">
          <div class="so-text">
              <h4>Club Omnisports De Benimellal</h4>
              
          </div>
          
      </div>
      <div class="copyright-text">
          <ul>
              <li><a href="#">Term&Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
          </ul>
          <p><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Powered With Love <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.linkedin.com/in/ayoub-rachik-13b7631a2/" target="_blank">Ayoub Rachik</a>
          <div class="footer-social">
              
              <a href="https://www.facebook.com/cobm.cobm" target="_blank" ><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
      </div>
  </div>
</footer>
<!-- Footer Section End -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration:1000,once: true,
  });
</script>    

</body>
</html>
