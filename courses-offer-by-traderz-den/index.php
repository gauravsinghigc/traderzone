<?php include_once __DIR__ . "/../config.php"; ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <title>Our Courses | <?php echo WEBSITE_INFO['PRIMARY_INFO']['WEBSITE_NAME']; ?></title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php include_once __DIR__ . "/../assets/HeaderFiles.php"; ?>
</head>

<body>
  <?php
  include_once __DIR__ . "/../include/MainLoader.php";
  include_once __DIR__ . "/../include/MainHeader.php";
  ?>
  <!-- ================> Page header start here <================== -->
  <section class="page-header bg--cover" style="background-image:url(<?php echo STORAGE_URL; ?>/images/header/1.png)">
    <div class="container">
      <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
        <h2>Courses Offer by <?php echo WEBSITE_INFO['PRIMARY_INFO']['WEBSITE_NAME']; ?></h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="<?php echo DOMAIN; ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Our Courses</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__shape">
        <span class="page-header__shape-item page-header__shape-item--1">
          <img src="<?php echo STORAGE_URL; ?>/images/header/2.png"
            alt="shape-icon">
        </span>
      </div>
    </div>
  </section>
  <!-- ================> Page header end here <================== -->


  <!-- ===============>> Service section start here <<================= -->
  <section class="service padding-top padding-bottom">
    <div class="container">
      <div class="service__wrapper">
        <div class="row g-4 align-items-center justify-content-between">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="<?php echo STORAGE_URL; ?>/images/service/1.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h6>Traderz Den's</h6>
                  <h5>
                    <a class="stretched-link" href="<?php echo DOMAIN; ?>/courses-offer-by-traderz-den/beginner-to-advance">Beginner to Advanced</a>
                  </h5>
                  <p class="mb-0">Become a pro trader, join us Online/Offline, and trade live with mentors.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-6">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1000">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="<?php echo STORAGE_URL; ?>/images/service/2.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h6>Traderz Den's</h6>
                  <h5> <a class="stretched-link" href="<?php echo DOMAIN; ?>/courses-offer-by-traderz-den/make-money-at-home"> Make Money at Home</a> </h5>
                  <p class="mb-0">Self-paced course with pre-recorded content + weekly Friday Google Meet Q&A Sessions.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-6">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="<?php echo STORAGE_URL; ?>/images/service/3.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h6>Traderz Den's</h6>
                  <h5> <a class="stretched-link" href="<?php echo DOMAIN; ?>/courses-offer-by-traderz-den/ultimate-program">Ultimate Program</a> </h5>
                  <p class="mb-0">Take your trading to the next level with our most comprehensive program.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-6">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="<?php echo STORAGE_URL; ?>/images/service/4.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h6>Traderz Den's</h6>
                  <h5> <a class="stretched-link" href="<?php echo DOMAIN; ?>/courses-offer-by-traderz-den/one-on-one-mentorship-program">1-on-1 Mentorship Program </a>
                  </h5>
                  <p class="mb-0">An elite, personalized training experience, available online & offline.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> Service section start here <<================= -->





  <?php include_once __DIR__ . "/../include/MainFooter.php"; ?>

  <!-- ===============>> scrollToTop start here <<================= -->
  <a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
  <!-- ===============>> scrollToTop ending here <<================= -->

  <?php include_once __DIR__ . "/../assets/FooterFiles.php"; ?>


</body>

</html>