<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Passeio de Buggy</title>
  <meta content="Passeio de Buggy Em Natal, litoral norte, litoral sul, pipa, maracajau e muito mais..."
    name="description">
  <meta content="Buggy, Passeio, Natal, Viagem, Litoral Sul, Litoral Norte" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo INCLUDE_PATH; ?>assets/img/logo.png" rel="icon">
  <link href="<?php echo INCLUDE_PATH; ?>assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?php echo INCLUDE_PATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo INCLUDE_PATH; ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo INCLUDE_PATH; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo INCLUDE_PATH; ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo INCLUDE_PATH; ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo INCLUDE_PATH; ?>assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="<?php echo INCLUDE_PATH; ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo INCLUDE_PATH; ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo INCLUDE_PATH; ?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo INCLUDE_PATH; ?>assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo flow  mr-auto">
        <a href="#"><img src="<?php echo INCLUDE_PATH; ?>assets/img/logo.png" alt="Passeio de Buggy"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#features">Viagens</a></li>
          <li><a href="#portfolio">Locais</a></li>
          <li><a href="#contact">Contato</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bem Vindo à <span>Natal</span></h2>
          <p class="animate__animated animate__fadeInUp">Natal é conhecida pelas extensas dunas de areia costeiras e
            pelo Forte dos Reis Magos, em forma de estrela, uma fortaleza portuguesa do século XVI na foz do rio
            Potengi. A norte do rio, Genipabu é uma área de enormes dunas com uma lagoa de água doce. A autoestrada Via
            Costeira liga uma faixa de 15 km de praias a sul do forte.</p>
          <a href="http://turismo.natal.rn.gov.br/"
            class="btn-get-started animate__animated animate__fadeInUp scrollto">Leia Mais Sobre Natal</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Passeios com Dannyel Almeida</h2>
          <p class="animate__animated animate__fadeInUp">Criamos um pacote com os melhores passeios para te proporcionar
            a melhor experiencia em passeios turisticos.</p>
          <a href="https://www.instagram.com/dannyel_bugueiro"
            class="btn-get-started animate__animated animate__fadeInUp scrollto">Acompanhe nossas histórias</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Vamos aos Melhores Locais</h2>
          <p class="animate__animated animate__fadeInUp">Chama os Amigos e vem passear em Natal com o Melhor Bugueiro e
            Guia de Turismo de Natal. Estamos prontos para receber você e sua família.</p>
          <a href="https://api.whatsapp.com/send?phone=5584999690550"
            class="btn-get-started animate__animated animate__fadeInUp scrollto">Entre em Contato</a>
        </div>
      </div>

      <!--<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>-->

    </div>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="9" fill="rgba(61,217,201, 1)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(13,104,140, .9)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(242,197,114, 1)">
      </g>
    </svg>

  </section><!-- End Hero -->
  <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#F2C572" fill-opacity="1"
      d="M0,128L80,122.7C160,117,320,107,480,112C640,117,800,139,960,149.3C1120,160,1280,160,1360,160L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
    </path>
  </svg>
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Sobre</h2>
          <p>Quem eu Sou!</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              Meu Nome é Dannyel Almeida, Bugueiro credenciado e Guia de Turismo. De Buggy , Carro executivo, 4x4 com ou
              sem adrenalina, quero te proporcionar a melhor experiência no RN.
            </p>
            <ul>
              <li><i class="icofont-beach"></i> Litoral Norte</li>
              <li><i class="icofont-beach"></i> Lagoas Sul</li>
              <li><i class="icofont-beach"></i> Litoral Sul</li>
              <li><i class="icofont-beach"></i> Litoral Norte Premium + Por do Sol</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Bugueiro e Guia Credenciado, nativo do RN. Apaixonado pela minha profissão, uma herança de pai para filho.
              <br> Tenho o passeio perfeito para você.
            </p>

            <a class="cta-btn align-middle" href="https://api.whatsapp.com/send?phone=5584999690550"><i
                class="icofont-whatsapp"></i>Whatsapp</a>

          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>VIAGENS</h2>
          <p>Alguma de nossas viagens
          </p>
          <h5>Clique nos botões abaixo</h5>
        </div>
        <div class="nav nav-tabs ">
          <div class="container-fluid" id="accordion">
            <div class="nav-link col-12 col-sm-12 col-md-12 col-xl-12" id="headingOne" data-aos="zoom-in"
              data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"
              data-aos-delay="100">
              <i class="icofont-direction-sign"></i>
              <h4 class=" d-lg-block">Premium + Por do Sol</h4>
            </div>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Litoral Norte Premium + Por do Sol
                </h3>
                <p>
                  &nbsp;&nbsp;&nbsp;&nbsp;O passeio mais tradicional da cidade com aquele toque de sofisticação!
                  Alegria, diversão e emoção andam juntos. Vindo a Natal, fazer este passeio é obrigatório!
                </p>
                <ul>
                  <li><i class="icofont-beach"></i> Praia de Ponta Negra;</li>
                  <li><i class="icofont-beach"></i> Praia do Miami;</li>
                  <li><i class="icofont-beach"></i> Praia de Areia Preta;</li>
                  <li><i class="icofont-beach"></i> Praia dos Artistas;</li>
                  <li><i class="icofont-beach"></i> Praia do Meio;</li>
                  <li><i class="icofont-beach"></i> Praia do Forte;</li>
                  <li><i class="icofont-beach"></i> Praia da Redinha;</li>
                  <li><i class="icofont-beach"></i> Praia de Santa Rita;</li>
                  <li><i class="icofont-beach"></i> Praia, lagoa e Dunas de Genipabu;</li>
                  <li><i class="icofont-beach"></i> Dunas Móveis em Genipabu<i class="icofont-star"></i>;</li>
                  <li><i class="icofont-beach"></i> Praia de Barra do Rio;</li>
                  <li><i class="icofont-beach"></i> Praia e Duna de Graçandu;</li>
                  <li><i class="icofont-beach"></i> Praia, Duna e Lagoa de Pitangui;</li>
                  <li><i class="icofont-beach"></i> Praia, Duna e Lagoa de Jacumã;</li>
                  <li><i class="icofont-beach"></i> Praia de Porto Mirim;</li>
                  <li><i class="icofont-beach"></i> Praia de Muriú;</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo INCLUDE_PATH; ?>assets/img/portfolio/dunna.jpeg" alt="" class="img-fluid">
                <BR>
                <BR>
                <a href="<?php echo INCLUDE_PATH; ?>lnp-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i>Clique
                  Aqui Para Mais Detalhes</a>
              </div>
            </div>
          </div>
        </div>
        <div class="nav nav-tabs ">
          <div class="container-fluid" id="accordion">
            <div class="nav-link col-12 col-sm-12 col-md-12 col-xl-12" id="headingTwo" data-aos="zoom-in"
              data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
              data-aos-delay="150">
              <i class="icofont-direction-sign"></i>
              <h4 class=" d-lg-block">Litoral Norte</h4>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                  <h3>Litoral Norte, Locais Visitados:</h3>
                  <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;O passeio mais tradicional da cidade. Alegria, diversão e emoção andam
                    juntos. Se vim a Natal, fazer este passeio é obrigatório!
                  </p>
                  <ul>
                    <li><i class="icofont-beach"></i> Praia de Ponta Negra;</li>
                    <li><i class="icofont-beach"></i> Praia do Miami;</li>
                    <li><i class="icofont-beach"></i> Praia de Areia Preta;</li>
                    <li><i class="icofont-beach"></i> Praia dos Artistas;</li>
                    <li><i class="icofont-beach"></i> Praia do Meio;</li>
                    <li><i class="icofont-beach"></i> Praia do Forte;</li>
                    <li><i class="icofont-beach"></i> Praia da Redinha;</li>
                    <li><i class="icofont-beach"></i> Praia de Santa Rita;</li>
                    <li><i class="icofont-beach"></i> Praia, lagoa e Dunas de Genipabu;</li>
                    <li><i class="icofont-beach"></i> Praia de Barra do Rio;</li>
                    <li><i class="icofont-beach"></i> Praia e Duna de Graçandu;</li>
                    <li><i class="icofont-beach"></i> Praia, Duna e Lagoa de Pitangui;</li>
                    <li><i class="icofont-beach"></i> Praia, Duna e Lagoa de Jacumã;</li>
                    <li><i class="icofont-beach"></i> Praia de Porto Mirim;</li>
                    <li><i class="icofont-beach"></i> Praia de Muriú;</li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
<<<<<<< HEAD
                  <img src="<?php echo INCLUDE_PATH; ?> assets/img/portfolio/litn.jpeg" alt="" class="img-fluid">
                  <BR>
                  <BR>
                  <a href="<?php echo INCLUDE_PATH; ?> litn-details.php" class="details-link" title="More Details"><i
                      class="icofont-tags"></i>Clique Aqui Para Mais Detalhes</a>
=======
                  <img src="<?php echo INCLUDE_PATH; ?>assets/img/portfolio/litn.jpeg" alt="" class="img-fluid">
                  <BR>
                  <BR>
                  <a href="litn-details.php" class="details-link" title="More Details"><i
                      class="<?php echo INCLUDE_PATH; ?>icofont-tags"></i>Clique Aqui Para Mais Detalhes</a>
>>>>>>> b75b61b70a18597b3166bc43e7cf202e502da40d
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav nav-tabs ">
          <div class="container-fluid" id="accordion">
            <div class="nav-link col-12 col-sm-12 col-md-12 col-xl-12" id="headingThree" data-aos="zoom-in"
              data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
              data-aos-delay="200">
              <i class="icofont-direction-sign"></i>
              <h4 class=" d-lg-block">Litoral Sul</h4>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                  <h3>Litoral Sul, Locais Visitados:</h3>
                  <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;Neste maravilhoso passeio será visitado em média 15 praias, 02 lagoas e 01
                    parque de duna.
                    Um passeio incrivelmente lindo composto por praias paradisíacas e falésias belíssimas.
                  </p>
                  <ul>
                    <li><i class="icofont-beach"></i> Praia de Ponta Negra;</li>
                    <li><i class="icofont-beach"></i> Praia de Cotovelo;</li>
                    <li><i class="icofont-beach"></i> Praia de Pirangi Norte/Sul;</li>
                    <li><i class="icofont-beach"></i> Praia de Pirambuzios;</li>
                    <li><i class="icofont-beach"></i> Duna de Búzios;</li>
                    <li><i class="icofont-beach"></i> Praia de Búzios;</li>
                    <li><i class="icofont-beach"></i> Praia de Rio Doce;</li>
                    <li><i class="icofont-beach"></i> Praia de Tabatinga;</li>
                    <li><i class="icofont-beach"></i> Praia do Camurupim;</li>
                    <li><i class="icofont-beach"></i> Lagoa de Arituba;</li>
                    <li><i class="icofont-beach"></i> Praia de Barreta;</li>
                    <li><i class="icofont-beach"></i> Praia de Malembá;</li>
                    <li><i class="icofont-beach"></i> Praia de Tibau do Sul;</li>
                    <li><i class="icofont-beach"></i> Praia de Cacimbinhas;</li>
                    <li><i class="icofont-beach"></i> Praia do Madeiro (Baia dos Golfinhos);</li>
                    <li><i class="icofont-beach"></i> Praia da Pipa;</li>
                    <li><i class="icofont-beach"></i> Chapadão da Praia do Amor;</li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="<?php echo INCLUDE_PATH; ?>assets/img/portfolio/ls1.jpeg" alt="" class="img-fluid">
                  <BR>
                  <BR>
                  <a href="<?php echo INCLUDE_PATH; ?>lits-details.php" class="details-link" title="More Details"><i
                      class="icofont-tags"></i>Clique Aqui Para Mais Detalhes</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav nav-tabs ">
          <div class="container-fluid" id="accordion">
            <div class="nav-link col-12 col-sm-12 col-md-12 col-xl-12" id="headingFour" data-aos="zoom-in "
              data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
              data-aos-delay="250">
              <i class="icofont-direction-sign"></i>
              <h4 class=" d-lg-block">Lagoas Sul</h4>
            </div>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Lagoas Sul, Locais Visitados:</h3>
                <p>
                  &nbsp;&nbsp;&nbsp;&nbsp;Nem só de praias invejáveis vive o nosso Nordeste Brasileiro!
                  Um ótimo destino para quem quer relaxar em águas doces.
                  Um típico passeio aonde as crianças se divertem e os adultos relaxam
                  Neste passeio você e sua família contemplaram 03 lagoas maravilhosas que não poderá deixar de
                  visitar.

                </p>
                <ul>
                  <li><i class="icofont-beach"></i> Lagoa do Carcará;</li>
                  <li><i class="icofont-beach"></i> Lagoa de Alcaçuz;</li>
                  <li><i class="icofont-beach"></i> Lagoa da Juventude;</li>

                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo INCLUDE_PATH; ?>assets/img/portfolio/lagoas.jpeg" alt="" class="img-fluid">
                <BR>
                <BR>
                <a href="<?php echo INCLUDE_PATH; ?>lags-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i>Clique
                  Aqui Para Mais Detalhes</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Whatsapp</h3>
            <p> Entre em contato com o nosso setor comercial.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://api.whatsapp.com/send?phone=5584999690550"><i
                class="icofont-whatsapp"></i>Whatsapp</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container-port">
<<<<<<< HEAD

        <div class="section-title" data-aos="zoom-out">
          <h2>Locais</h2>
          <p>Registro de viagens e detalhes</p>
          <h5>Clique nos botões para selecionar o roteiros , nas fotos para Zoom e Detalhe das viagens</h5>
        </div>
        <div id='portfolio-filters'>
          <div data-filter="*" class="filter-active nav-link col-12 col-sm-12 col-md-12 col-xl-12 "><i class="icofont-beach"></i>Todas</div>
          <div data-filter=".filter-LNP" class=" nav-link col-12 col-sm-12 col-md-12 col-xl-12"><i class="icofont-beach"></i>Litoral Norte Premium + Por do Sol</div>
          <div data-filter=".filter-LITS" class=" nav-link col-12 col-sm-12 col-md-12 col-xl-12 "><i class="icofont-beach"></i>Litoral Sul</div>
          <div data-filter=".filter-LITN" class=" nav-link col-12 col-sm-12 col-md-12 col-xl-12 "><i class="icofont-beach"></i>itoral Norte</div>
          <div data-filter=".filter-LAGS" class=" nav-link col-12 col-sm-12 col-md-12 col-xl-12"><i class="icofont-beach"></i>Lagoas Sul</div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up">
          <div class="col-lg-4 col-md-6 portfolio-item filter-LITS">
            <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/LS/ls33.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Litoral Sul</h4>

              <a href="<?php echo INCLUDE_PATH; ?>assets/img/LS/ls33.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                title="Litoral Sul"><i class="icofont-ui-zoom-in"></i></a>
              <a href="<?php echo INCLUDE_PATH; ?>lits-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-LAGS">
            <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/lags/lags12.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lagoa Sul</h4>
              <a href="<?php echo INCLUDE_PATH; ?>assets/img/lags/lags12.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                title="Lagoa Sul"><i class="icofont-ui-zoom-in"></i></a>
              <a href="<?php echo INCLUDE_PATH; ?>lags-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-LNP">
            <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/lnp/lnp13.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Litoral Norte Premium</h4>

              <a href="<?php echo INCLUDE_PATH; ?>assets/img/lnp/lnp13.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                title="Litoral Norte Premium"><i class="icofont-ui-zoom-in"></i></a>
              <a href="<?php echo INCLUDE_PATH; ?>lnp-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-LITN">
            <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln2.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Litoral Norte</h4>

              <a href="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln2.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                title="Litoral Norte"><i class="icofont-ui-zoom-in"></i></a>
              <a href="<?php echo INCLUDE_PATH; ?>litn-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-LITS">
            <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ls/ls40.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Litoral Sul</h4>
              <a href="<?php echo INCLUDE_PATH; ?>assets/img/ls/ls40.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                title="Litoral Sul"><i class="icofont-ui-zoom-in"></i></a>
              <a href="<?php echo INCLUDE_PATH; ?>lits-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-LAGS">
            <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/lags/lags7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lagoas Sul</h4>
              <a href="<?php echo INCLUDE_PATH; ?>assets/img/lags/lags7.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                title="Lagoas Sul"><i class="icofont-ui-zoom-in"></i></a>
              <a href="<?php echo INCLUDE_PATH; ?>lags-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-LITN">
            <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln21.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Litoral Norte</h4>
              <a href="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln21.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                title="Litoral Norte"><i class="icofont-ui-zoom-in"></i></a>
              <a href="<?php echo INCLUDE_PATH; ?>litn-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-LNP">
            <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln3.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Litoral Norte</h4>
              <a href="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln3.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                title="Litoral Norte"><i class="icofont-ui-zoom-in"></i></a>
              <a href="<?php echo INCLUDE_PATH; ?>lnp-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-LITS">
            <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ls/ls40.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Litoral Sul</h4>
              <a href="<?php echo INCLUDE_PATH; ?>assets/img/ls/ls40.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                title="Litoral Sul"><i class="icofont-ui-zoom-in"></i></a>
              <a href="<?php echo INCLUDE_PATH; ?>lits-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-LAGS">
            <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/lags/lags10.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lagoas Sul</h4>
              <a href="<?php echo INCLUDE_PATH; ?>assets/img/lags/lags10.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                title="Lagoas Sul"><i class="icofont-ui-zoom-in"></i></a>
              <a href="<?php echo INCLUDE_PATH; ?>lags-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-LITN">
            <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln5.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Litoral Norte</h4>
              <a href="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln25.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                title="Litoral Norte"><i class="icofont-ui-zoom-in"></i></a>
              <a href="<?php echo INCLUDE_PATH; ?>litn-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-LNP">
            <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/lnp/lnp22.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Litoral Norte Premium</h4>
              <a href="<?php echo INCLUDE_PATH; ?>assets/img/lnp/lnp22.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                title="Litoral Norte Premium"><i class="icofont-ui-zoom-in"></i></a>
              <a href="<?php echo INCLUDE_PATH; ?>lnp-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
=======
        <div class="container">

          <div class="section-title" data-aos="zoom-out">
            <h2>Locais</h2>
            <p>Registro de viagens e detalhes</p>
            <h5>Clique nos botões para selecionar o roteiros , nas fotos para Zoom e Detalhe das viagens</h5>
          </div>
          <div id='portfolio-filters'>
            <div data-filter="*" class="filter-active nav-link col-12 col-sm-12 col-md-12 col-xl-12 "><i class="icofont-beach"></i>Todas</div>
            <div data-filter=".filter-LNP" class=" nav-link col-12 col-sm-12 col-md-12 col-xl-12"><i class="icofont-beach"></i>Litoral Norte Premium + Por do Sol</div>
            <div data-filter=".filter-LITS" class=" nav-link col-12 col-sm-12 col-md-12 col-xl-12 "><i class="icofont-beach"></i>Litoral Sul</div>
            <div data-filter=".filter-LITN" class=" nav-link col-12 col-sm-12 col-md-12 col-xl-12 "><i class="icofont-beach"></i>itoral Norte</div>
            <div data-filter=".filter-LAGS" class=" nav-link col-12 col-sm-12 col-md-12 col-xl-12"><i class="icofont-beach"></i>Lagoas Sul</div>
          </div>
          <div class="row portfolio-container" data-aos="fade-up">
            <div class="col-lg-4 col-md-6 portfolio-item filter-LITS">
              <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ls/ls33.JPG" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Litoral Sul</h4>

                <a href="<?php echo INCLUDE_PATH; ?>assets/img/ls/ls33.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                  title="Litoral Sul"><i class="icofont-ui-zoom-in"></i></a>
                <a href="<?php echo INCLUDE_PATH; ?>lits-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-LAGS">
              <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/lags/lags12.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Lagoa Sul</h4>
                <a href="<?php echo INCLUDE_PATH; ?>assets/img/lags/lags12.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                  title="Lagoa Sul"><i class="icofont-ui-zoom-in"></i></a>
                <a href="<?php echo INCLUDE_PATH; ?>lags-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-LNP">
              <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/lnp/lnp13.JPG" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Litoral Norte Premium</h4>

                <a href="<?php echo INCLUDE_PATH; ?>assets/img/lnp/lnp13.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                  title="Litoral Norte Premium"><i class="icofont-ui-zoom-in"></i></a>
                <a href="<?php echo INCLUDE_PATH; ?>lnp-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-LITN">
              <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln2.JPG" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Litoral Norte</h4>

                <a href="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln2.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                  title="Litoral Norte"><i class="icofont-ui-zoom-in"></i></a>
                <a href="<?php echo INCLUDE_PATH; ?>litn-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-LITS">
              <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ls/ls40.JPG" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Litoral Sul</h4>
                <a href="<?php echo INCLUDE_PATH; ?>assets/img/ls/ls40.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                  title="Litoral Sul"><i class="icofont-ui-zoom-in"></i></a>
                <a href="<?php echo INCLUDE_PATH; ?>lits-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-LAGS">
              <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/lags/lags7.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Lagoas Sul</h4>
                <a href="<?php echo INCLUDE_PATH; ?>assets/img/lags/lags7.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                  title="Lagoas Sul"><i class="icofont-ui-zoom-in"></i></a>
                <a href="<?php echo INCLUDE_PATH; ?>lags-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-LITN">
              <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln21.JPG" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Litoral Norte</h4>
                <a href="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln21.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                  title="Litoral Norte"><i class="icofont-ui-zoom-in"></i></a>
                <a href="<?php echo INCLUDE_PATH; ?>litn-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-LNP">
              <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln3.JPG" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Litoral Norte</h4>
                <a href="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln3.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                  title="Litoral Norte"><i class="icofont-ui-zoom-in"></i></a>
                <a href="<?php echo INCLUDE_PATH; ?>lnp-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-LITS">
              <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ls/ls40.JPG" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Litoral Sul</h4>
                <a href="<?php echo INCLUDE_PATH; ?>assets/img/ls/ls40.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                  title="Litoral Sul"><i class="icofont-ui-zoom-in"></i></a>
                <a href="<?php echo INCLUDE_PATH; ?>lits-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-LAGS">
              <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/lags/lags10.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Lagoas Sul</h4>
                <a href="<?php echo INCLUDE_PATH; ?>assets/img/lags/lags10.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                  title="Lagoas Sul"><i class="icofont-ui-zoom-in"></i></a>
                <a href="<?php echo INCLUDE_PATH; ?>lags-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-LITN">
              <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln5.JPG" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Litoral Norte</h4>
                <a href="<?php echo INCLUDE_PATH; ?>assets/img/ln/ln25.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                  title="Litoral Norte"><i class="icofont-ui-zoom-in"></i></a>
                <a href="<?php echo INCLUDE_PATH; ?>litn-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-LNP">
              <div class="portfolio-img"><img src="<?php echo INCLUDE_PATH; ?>assets/img/lnp/lnp22.JPG" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Litoral Norte Premium</h4>
                <a href="<?php echo INCLUDE_PATH; ?>assets/img/lnp/lnp22.JPG" data-gall="portfolioGallery" class="venobox preview-link"
                  title="Litoral Norte Premium"><i class="icofont-ui-zoom-in"></i></a>
                <a href="<?php echo INCLUDE_PATH; ?>lnp-details.php" class="details-link" title="More Details"><i class="icofont-tags"></i></a>
              </div>
>>>>>>> b75b61b70a18597b3166bc43e7cf202e502da40d
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <!--
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Depoimentos</h2>
          <p>O que nossos clientes dizem sobre nós</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

          <div class="testimonial-item">
            <p>
              <i class="icofont-quote-left quote-icon-left"></i>
                Fizemos os passeios com a agência Br. Foram muito bons, de acordo com o prometido. O único ponto negativo para nós são as paradas nos artesanatos e mercado de Ponta Negra, no final de cada dia, até porque alguns clientes não são pontuais. Fizemos dois passeios com o guia Rogério, o melhor em termos de saber coordenar as pessoas, explicando que se trata de um passeio coletivo e que todos têm que colaborar.
              <i class="icofont-quote-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Juliana Carmesin</h3>
            <h4>Rio de Janeiro - RJ</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="icofont-quote-left quote-icon-left"></i>
                A BR TUR esta de parabéns cumpriu com tudo que prometeu , passamos um dia excepcional o qual não vamos esquecer jamais, Parabéns em especial ao guia Rogério desde o começo da viagem com uma educação incrivel nos deixando super a vontade, com certeza voltarei e irei indicar a BR TUR a todos que vierem a Natal.
              <i class="icofont-quote-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>José Araujo</h3>
            <h4>São Paulo - SP</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="icofont-quote-left quote-icon-left"></i>
                Todas as 8 x que fui para Natal sempre fiz meus passeios pela BR tour o Rogério e sua equipe são sensacionais ! Adoro vcs saudades !
              <i class="icofont-quote-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Denize Medina</h3>
            <h4>Itapoá - SC</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="icofont-quote-left quote-icon-left"></i>
                BR TUR esta de parabéns cumpriu com tudo que prometeu , foram 5 dias de passeios, não vamos esquecer jamais, Parabéns aos guias, sempre muitos anteciosos, uma educação incrivel, nós deixando super a vontade, com certeza voltarei e irei indicar a BR TUR a todos que vierem a Natal.
              <i class="icofont-quote-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Claudia M</h3>
            <h4>Arraial do Cabo - RJ</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="icofont-quote-left quote-icon-left"></i>
                Atenciosos e pontuais no passeio de Buggy para o litoral norte.
                Bugueiro Dannyel divertido e bom motorista. Gostamos muito.
              <i class="icofont-quote-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>Vitor M</h3>
            <h4>Vila Velha - ES</h4>
          </div>

        </div>

      </div>
    </section>
    -->
    <!-- End Testimonials Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>DÚVIDAS</h2>
          <p>PERGUNTAS E RESPOSTAS FREQUENTES</p>
        </div>

        <ul class="faq-list">

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" class="" href="#faq1">Quanto tempo dura o passeio? <i
                class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p> A duração do passeio depende do Roteiro escolhido <br />
                Litoral norte de buggy: 6-7 horas de duração<br />
                Litoral norte de buggy premium: 9-10 horas de duração<br />
                Lagoas do Sul de buggy: 6-7 horas de duração<br />
                Litoral Sul de buggy: 7-8 horas de duração<br />
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <a data-toggle="collapse" href="#faq2" class="collapsed">O que está incluso no valor do passeio? <i
                class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                O buggy com o bugueiro para realizar o passeio pelo litoral solicitado. <br />
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <a data-toggle="collapse" href="#faq3" class="collapsed">Eu vou dividir o buggy com outras pessoas? <i
                class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Depende da modalidade, no caso pode ser escolhido passeio privativo ou fechar todos os lugares com
                amigos e familia, caso contrario as demais vagas devem ser fechado com os demais.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <a data-toggle="collapse" href="#faq4" class="collapsed">Existe algum pacote de passeio turistico? <i
                class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Entre em contato conosco, que fechamos um pacote perfeito para você!
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <a data-toggle="collapse" href="#faq5" class="collapsed">Criança paga? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                sim. <br />
                Criança independente da idade paga o mesmo valor do adulto, <br />
                Pois cada buggy so pode levar no máximo 4 passageiros contando com elas
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="600">
            <a data-toggle="collapse" href="#faq6" class="collapsed">Como funciona o passeio privativo? <i
                class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                O passeio privativo é super indicado neste período de pandemia , <br />
                pois vai somente a família que contratar o serviço.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>CONTATO</h2>
          <p>ENTRE EM CONTATO CONOSCO</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <a href="https://www.instagram.com/dannyel_bugueiro/"><i class="icofont-instagram"></i></a>
                <h4>Instagram</h4>
                <p>@dannyel_bugueiro</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>contato@passeiodebuggy.com</p>
              </div>

              <div class="phone">
                <a href="https://api.whatsapp.com/send?phone=5584999690550"><i class="icofont-whatsapp"></i></a>
                <h4>Telefone:</h4>
                <p>+55 84 99969-0550</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
            <!--
            <form action="assets/email/Email.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Insira pelo menos 4 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Por favor, entre com um email válido" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Por favor, insira pelo menos 8 caracteres de assunto!" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor, nos escreva algo!" placeholder="Mensagem"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua Mensagem Foi Enviada, Muitx Obrigadx!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
            </form>
-->
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="social-links">
        <!--<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="google-plus"><i class="icofont-whatsapp"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>-->
        <a href="https://api.whatsapp.com/send?phone=5584999690550"" class=" google-plus"><i
            class="icofont-whatsapp"></i></a>
        <a href="https://www.instagram.com/_merakisolucoes/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="mailto:allanpablo.ti@gmail.com" class="linkedin"><i class="icofont-mail"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Passeio de Buggy com Dannyel Almeida</span></strong>. Todos os Direitos
        Reservados
      </div>
      <div class="credits">
        Criado por ApK pela <a href="https://merakisolucoes.com/">Meraki Soluções</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <a href="https://api.whatsapp.com/send?phone=5584999690550" class="back-to-top zap"><i
      class="icofont-whatsapp"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo INCLUDE_PATH; ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo INCLUDE_PATH; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo INCLUDE_PATH; ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->
  <script src="<?php echo INCLUDE_PATH; ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo INCLUDE_PATH; ?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo INCLUDE_PATH; ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo INCLUDE_PATH; ?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo INCLUDE_PATH; ?>assets/js/main.js"></script>
  <script src="<?php echo INCLUDE_PATH; ?>assets/js/formularios.js"></script>

</body>

</html>
