<?php include_once __DIR__ . "/config.php"; ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <title><?php echo WEBSITE_INFO['PRIMARY_INFO']['WEBSITE_NAME']; ?> | <?php echo WEBSITE_INFO['PRIMARY_INFO']['TAGLINE']; ?></title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php include_once __DIR__ . "/assets/HeaderFiles.php"; ?>
</head>

<body>
  <?php
  include_once __DIR__ . "/include/MainLoader.php";
  include_once __DIR__ . "/include/MainHeader.php";
  ?>
  <!-- ===============>> Banner section start here <<================= -->
  <section class="banner banner--style1">
    <div class="banner__bg">
      <div class="banner__bg-element">
        <img src="<?php echo STORAGE_URL; ?>/images/banner/home1/bg.png" alt="section-bg-element" class="dark d-none d-lg-block">
        <span class="bg-color d-lg-none"></span>
      </div>
    </div>
    <div class="container">
      <div class="banner__wrapper">
        <div class="row gy-5 gx-4">
          <div class="col-lg-6 col-md-7">
            <div class="banner__content" data-aos="fade-right" data-aos-duration="1000">
              <div class="banner__content-coin">
                <img src="<?php echo STORAGE_URL; ?>/images/banner/home1/3.png" alt="coin icon">
              </div>
              <h1 class="banner__content-heading">Invest your money
                with <span>higher return</span></h1>
              <p class="banner__content-moto">Anyone can invest money to different currency to increase their earnings
                by the help of <?php echo WEBSITE_INFO['PRIMARY_INFO']['WEBSITE_NAME']; ?> through online.
              </p>
              <div class="banner__btn-group btn-group">
                <a href="signin.html" class="trk-btn trk-btn--primary trk-btn--arrow">Get Started
                  <span><i class="fa-solid fa-arrow-right"></i></span> </a>

                <a href="https://www.youtube.com/watch?v=MHhIzIgFgJo&amp;ab_channel=NoCopyrightFootages"
                  class="trk-btn trk-btn--outline22" data-fslightbox>
                  <span class="style1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_1397_814)">
                        <path
                          d="M10.5547 7.03647C9.89015 6.59343 9 7.06982 9 7.86852V16.1315C9 16.9302 9.89015 17.4066 10.5547 16.9635L16.7519 12.8321C17.3457 12.4362 17.3457 11.5638 16.7519 11.1679L10.5547 7.03647Z"
                          stroke="#A4FD5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                      <rect x="-0.75" y="0.75" width="22.5" height="22.5" rx="11.25" transform="matrix(-1 0 0 1 22.5 0)"
                        stroke="#A4FD5" stroke-width="1.5" />
                      <defs>
                        <clipPath id="clip0_1397_814">
                          <rect width="24" height="24" fill="white" />
                        </clipPath>
                      </defs>
                    </svg></span> Watch Video
                </a>
              </div>
              <div class="banner__content-social">
                <p>Follow Us</p>
                <ul class="social">
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style1 active"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style1"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style1"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style1"><i class="fab fa-youtube"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="signin.html" class="social__link social__link--style1"><i class="fab fa-twitter"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-5">
            <div class="banner__thumb" data-aos="fade-left" data-aos-duration="1000">
              <img src="<?php echo STORAGE_URL; ?>/images/banner/home1/1.png" alt="banner-thumb" class="dark">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="banner__shape">
      <span class="banner__shape-item banner__shape-item--1"><img src="<?php echo STORAGE_URL; ?>/images/banner/home1/4.png"
          alt="shape icon"></span>
    </div>

  </section>
  <!-- ===============>> Banner section end here <<================= -->





  <!-- ===============>> partner section start here <<================= -->
  <div class="partner partner--gradient">
    <div class="container">
      <div class="partner__wrapper">
        <div class="partner__slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="<?php echo STORAGE_URL; ?>/images/partner/light/1.png" alt="partner logo" class="dark">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="<?php echo STORAGE_URL; ?>/images/partner/light/2.png" alt="partner logo" class="dark">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="<?php echo STORAGE_URL; ?>/images/partner/light/3.png" alt="partner logo" class="dark">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="<?php echo STORAGE_URL; ?>/images/partner/light/4.png" alt="partner logo" class="dark">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="<?php echo STORAGE_URL; ?>/images/partner/light/5.png" alt="partner logo" class="dark">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===============>> partner section end here <<================= -->





  <!-- ===============>> About section start here <<================= -->
  <section class="about about--style1 ">
    <div class="container">
      <div class="about__wrapper">
        <div class="row gx-5  gy-4 gy-sm-0  align-items-center">
          <div class="col-lg-6">
            <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
              <div class="about__thumb-inner">
                <div class="about__thumb-image floating-content">
                  <img class="dark" src="<?php echo STORAGE_URL; ?>/images/about/1.png" alt="about-image">
                  <div class="floating-content__top-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="floating-content__item">
                      <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="5">5</span>
                        Years
                      </h3>
                      <p> Trading Experience</p>
                    </div>
                  </div>
                  <div class="floating-content__bottom-right" data-aos="fade-right" data-aos-duration="1000">
                    <div class="floating-content__item">
                      <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="25">25K</span>K+
                      </h3>
                      <p>Satisfied students</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about__content" data-aos="fade-left" data-aos-duration="800">
              <div class="about__content-inner">
                <h2>Join <span>our community</span> to master the skills and strategies </h2>

                <p class="mb-0">At Traderz den, we’re dedicated to empowering traders to reach their full potential.

                  With over 5 years of proven success in the trading world, we’ve helped number of students become consistently profitable.

                  Join our community to master the skills and strategies essential for long-term success. Our expertly designed courses deliver advanced insights and practical knowledge—your first step toward true financial freedom.
                </p>
                <a href="about.php" class="trk-btn trk-btn--border trk-btn--primary">Explore More </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> About section start here <<================= -->
  <!-- ===============>> feature section start here <<================= -->
  <section class="feature feature--style1 padding-bottom padding-top bg-color">
    <div class="container">
      <div class="feature__wrapper">
        <div class="row g-5 align-items-center justify-content-between">
          <div class="col-md-6 col-lg-5">
            <div class="feature__content" data-aos="fade-right" data-aos-duration="800">
              <div class="feature__content-inner">
                <div class="section-header">
                  <h2 class="mb-10 mt-minus-5"><span>Explore Our</span> Four Comprehensive Trading Courses</h2>
                  <p class="mb-0">
                    Whether you're just beginning your trading journey or looking to master advanced techniques, our courses are tailored to meet every skill level with a focus on practical knowledge and long-term success.
                  </p>
                </div>

                <div class="feature__nav">
                  <div class="nav nav--feature flex-column nav-pills" id="feat-pills-tab" role="tablist" aria-orientation="vertical">

                    <div class="nav-link active" id="feat-pills-one-tab" data-bs-toggle="pill"
                      data-bs-target="#feat-pills-one" role="tab" aria-controls="feat-pills-one" aria-selected="true">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <h6>Master the Markets with Certified Trading Experts</h6>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" id="feat-pills-two-tab" data-bs-toggle="pill"
                      data-bs-target="#feat-pills-two" role="tab" aria-controls="feat-pills-two" aria-selected="false">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <h6>Participate in Live Market Sessions with Real-Time Strategies</h6>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" id="feat-pills-three-tab" data-bs-toggle="pill"
                      data-bs-target="#feat-pills-three" role="tab" aria-controls="feat-pills-three" aria-selected="false">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <h6>Unlock Premium Trading Tools & Exclusive Resources</h6>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" id="feat-pills-four-tab" data-bs-toggle="pill"
                      data-bs-target="#feat-pills-four" role="tab" aria-controls="feat-pills-four" aria-selected="false">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <h6>Benefit from Personalized Mentorship & a Supportive Community</h6>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="feature__thumb pt-5 pt-md-0" data-aos="fade-left" data-aos-duration="800">
              <div class="feature__thumb-inner">
                <div class="tab-content" id="feat-pills-tabContent">

                  <!-- TAB 1 -->
                  <div class="tab-pane fade show active" id="feat-pills-one" role="tabpanel" aria-labelledby="feat-pills-one-tab" tabindex="0">
                    <div class="feature__image floating-content">
                      <img src="<?php echo STORAGE_URL; ?>/images/feature/1.png" alt="Feature image">
                      <div class="floating-content__top-right floating-content__top-right--style2" data-aos="fade-left" data-aos-duration="1000">
                        <div class="floating-content__item floating-content__item--style2 text-center">
                          <img src="<?php echo STORAGE_URL; ?>/images/feature/5.png" alt="rating">
                          <p class="style2">Expert-Led Learning</p>
                        </div>
                      </div>
                      <div class="floating-content__bottom-left floating-content__bottom-left--style2" data-aos="fade-left" data-aos-duration="1000">
                        <div class="floating-content__item floating-content__item--style3 d-flex align-items-center">
                          <h3 class="style2"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="10000">10K</span>+</h3>
                          <p class="ms-3 style2">Students Trained</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- TAB 2 -->
                  <div class="tab-pane fade" id="feat-pills-two" role="tabpanel" aria-labelledby="feat-pills-two-tab" tabindex="0">
                    <div class="feature__image floating-content">
                      <img src="<?php echo STORAGE_URL; ?>/images/feature/2.png" alt="Feature image">
                      <div class="floating-content__top-right floating-content__top-right--style2" data-aos="fade-left" data-aos-duration="1000">
                        <div class="floating-content__item floating-content__item--style2 text-center">
                          <img src="<?php echo STORAGE_URL; ?>/images/feature/6.png" alt="rating">
                          <p class="style2">Live Market Training</p>
                        </div>
                      </div>
                      <div class="floating-content__bottom-left floating-content__bottom-left--style2" data-aos="fade-left" data-aos-duration="1000">
                        <div class="floating-content__item floating-content__item--style3 d-flex align-items-center">
                          <h3 class="style2"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="200">200+</span></h3>
                          <p class="ms-3 style2">Live Sessions Conducted</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- TAB 3 -->
                  <div class="tab-pane fade" id="feat-pills-three" role="tabpanel" aria-labelledby="feat-pills-three-tab" tabindex="0">
                    <div class="feature__image floating-content">
                      <img src="<?php echo STORAGE_URL; ?>/images/feature/1.png" alt="Feature image">
                      <div class="floating-content__top-right floating-content__top-right--style2" data-aos="fade-left" data-aos-duration="1000">
                        <div class="floating-content__item floating-content__item--style2 text-center">
                          <img src="<?php echo STORAGE_URL; ?>/images/feature/7.png" alt="rating">
                          <p class="style2">Tools & Resources</p>
                        </div>
                      </div>
                      <div class="floating-content__bottom-left floating-content__bottom-left--style2" data-aos="fade-left" data-aos-duration="1000">
                        <div class="floating-content__item floating-content__item--style3 d-flex align-items-center">
                          <h3 class="style2"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="50">50+</span></h3>
                          <p class="ms-3 style2">Premium Tools Provided</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- TAB 4 -->
                  <div class="tab-pane fade" id="feat-pills-four" role="tabpanel" aria-labelledby="feat-pills-four-tab" tabindex="0">
                    <div class="feature__image floating-content">
                      <img src="<?php echo STORAGE_URL; ?>/images/feature/2.png" alt="Feature image">
                      <div class="floating-content__top-right floating-content__top-right--style2" data-aos="fade-left" data-aos-duration="1000">
                        <div class="floating-content__item floating-content__item--style2 text-center">
                          <img src="<?php echo STORAGE_URL; ?>/images/feature/8.png" alt="rating">
                          <p class="style2">1-on-1 Mentorship</p>
                        </div>
                      </div>
                      <div class="floating-content__bottom-left floating-content__bottom-left--style2" data-aos="fade-left" data-aos-duration="1000">
                        <div class="floating-content__item floating-content__item--style3 d-flex align-items-center">
                          <h3 class="style2"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="95">95%</span></h3>
                          <p class="ms-3 style2">Success Rate Achieved</p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div> <!-- tab-content -->
              </div> <!-- feature__thumb-inner -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="feature__shape">
      <span class="feature__shape-item feature__shape-item--1"><img src="<?php echo STORAGE_URL; ?>/images/feature/shape/1.png" alt="shape-icon"></span>
      <span class="feature__shape-item feature__shape-item--2"><span></span></span>
    </div>
  </section>

  <!-- ===============>> feature section end here <<================= -->

  <!-- ===============>> Service section start here <<================= -->
  <section class="service padding-top padding-bottom">
    <div class="section-header section-header--max50">
      <h2 class="mb-10 mt-minus-5"><span>Courses </span>We Offer</h2>
      <p>We offer four powerful programs, each carefully crafted to suit your experience level and trading goals.</p>
    </div>
    <div class="container">
      <div class="service__wrapper">
        <div class="row g-4 align-items-center justify-content-between  ">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="<?php echo STORAGE_URL; ?>/images/service/1.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5> <a class="stretched-link" href="service-details.html">Beginner to Advanced</a> </h5>
                  <p class="mb-0">Become a pro trader, join us Online/Offline, and trade live with mentors.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1000">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="<?php echo STORAGE_URL; ?>/images/service/2.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5> <a class="stretched-link" href="service-details.html"> Make Money at Home</a> </h5>
                  <p class="mb-0">Self-paced course with pre-recorded content + weekly Friday Google Meet Q&A Sessions.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="<?php echo STORAGE_URL; ?>/images/service/3.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5> <a class="stretched-link" href="service-details.html">Ultimate Program</a> </h5>
                  <p class="mb-0">Take your trading to the next level with our most comprehensive program.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="<?php echo STORAGE_URL; ?>/images/service/4.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5> <a class="stretched-link" href="service-details.html">1-on-1 Mentorship Program </a>
                  </h5>
                  <p class="mb-0">An elite, personalized training experience, available online & offline.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-sm-6 col-lg-4">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1000">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="<?php echo STORAGE_URL; ?>/images/service/5.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5> <a class="stretched-link" href="service-details.html">HR consulting</a> </h5>
                  <p class="mb-0">Hey guys, just a quick update on exchange orders. There have been some changes
                    currency!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1200">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="<?php echo STORAGE_URL; ?>/images/service/6.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5> <a class="stretched-link" href="service-details.html">Marketing consulting</a>
                  </h5>
                  <p class="mb-0">Hey! Just wanted to let you know that the price notification module processes is now
                    live!</p>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> Service section start here <<================= -->




  <!-- ========== Roadmap Section start Here========== -->
  <section class="roadmap roadmap--style1 padding-top  padding-bottom bg-color" id="roadmap">
    <div class="container">
      <div class="section-header section-header--max50">
        <h2 class="mb-10 mt-minus-5">Roadmap to Become a <span> Profitable Trader</span></h2>
        <p>Your journey doesn’t end at learning—it begins with earning.</p>
      </div>
      <div class="roadmap__wrapper">
        <div class="row gy-4 gy-md-0 gx-5">
          <div class="col-md-6 offset-md-6">
            <div class="roadmap__item ms-md-4 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
              <div class="roadmap__item-inner">
                <div class="roadmap__item-content">
                  <div class="roadmap__item-header">
                    <h3>Build Strong Foundations</h3>
                    <span>P1</span>
                  </div>
                  <p>Start your journey with crystal-clear concepts in Forex trading, MT5 platform navigation, broker selection,
                    and wallet setups. Whether you’re a complete beginner or switching strategies—this step makes sure your fundamentals
                    are solid.</p>
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-6">
            <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init aos-animate" data-aos="fade-right"
              data-aos-duration="800">
              <div class="roadmap__item-inner">
                <div class="roadmap__item-content">
                  <div class="roadmap__item-header">
                    <h3>Learn to Read the Markets</h3>
                    <span>P2</span>
                  </div>
                  <p>Master the art of reading charts with candlesticks, AOI/POI, Fibonacci, breakout zones, and market behavior. Understand how news,
                    interest rates, and central banks impact price action. This dual-edge approach is your weapon for precision trading.</p>
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-6 offset-md-6">
            <div class="roadmap__item ms-md-4 aos-init" data-aos="fade-left" data-aos-duration="800">
              <div class="roadmap__item-inner">
                <div class="roadmap__item-content">
                  <div class="roadmap__item-header">
                    <h3>Smart Trade Execution</h3>
                    <span>P3</span>
                  </div>
                  <p>Learn how the big players trade. Master liquidity trapping, price psychology, and top-to-bottom analysis.
                    Build a proper watchlist, keep trade journals, and diversify your trades smartly.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init" data-aos="fade-right"
              data-aos-duration="800">
              <div class="roadmap__item-inner">
                <div class="roadmap__item-content">
                  <div class="roadmap__item-header">
                    <h3>Control Risk Like a Pro</h3>
                    <span>P4</span>
                  </div>
                  <p>Manage your emotions and money with strategies to avoid FOMO, revenge trading, and over-leverage.
                    Build the mindset of a disciplined trader who knows when to strike—and when to sit back.</p>
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-6 offset-md-6">
            <div class="roadmap__item ms-md-4 aos-init" data-aos="fade-left" data-aos-duration="800">
              <div class="roadmap__item-inner">
                <div class="roadmap__item-content">
                  <div class="roadmap__item-header">
                    <h3>Practice & Trade Live</h3>
                    <span>P5</span>
                  </div>
                  <p>Join live trading sessions led by mentors and trade in real-time. Learn by doing, get instant feedback,
                    and watch strategies unfold before your eyes. Participate in funded trader challenges and track your growth.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init" data-aos="fade-right"
              data-aos-duration="800">
              <div class="roadmap__item-inner">
                <div class="roadmap__item-content">
                  <div class="roadmap__item-header">
                    <h3>Join the Inner Circle & Grow</h3>
                    <span>P6</span>
                  </div>
                  <p>Get lifetime access to a premium network of traders, mentors, and market analysts.
                    Enjoy weekly doubt-solving sessions, daily market insights, and continuous guidance—so you're never trading alone.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="roadmap__shape">
      <span class="roadmap__shape-item roadmap__shape-item--1"> <span></span> </span>
      <span class="roadmap__shape-item roadmap__shape-item--2"> <img src="<?php echo STORAGE_URL; ?>/images/icon/1.png" alt="shape-icon">
      </span>
    </div>
  </section>
  <!-- ========== Roadmap Section Ends Here========== -->



  <!-- ===============>> Pricing section start here <<================= -->
  <section class="pricing padding-top padding-bottom">
    <div class="section-header section-header--max50">
      <h2 class="mb-10 mt-minus-5">Our <span>Pricings</span> Plan</h2>
      <p>Choose the Perfect Trading Plan to Kickstart or Elevate Your Journey – From Beginner to Pro!</p>
    </div>
    <div class="container">
      <div class="pricing__wrapper">
        <div class="row g-4 align-items-center">

          <!-- Traderz Den (Make Money at Home) -->
          <div class="col-md-6 col-lg-4">
            <div class="pricing__item" data-aos="fade-right" data-aos-duration="1000">
              <div class="pricing__item-inner">
                <div class="pricing__item-content">
                  <div class="pricing__item-top">
                    <h6 class="mb-15">Make Money at Home</h6>
                    <h3 class="mb-25">₹4,199/<span>One Time</span></h3>
                  </div>
                  <div class="pricing__item-middle">
                    <ul class="pricing__list">
                      <li class="pricing__list-item">Pre-recorded (Beginner to Advance)</li>
                      <li class="pricing__list-item">40+ hours high-quality videos</li>
                      <li class="pricing__list-item">6 months course material access</li>
                      <li class="pricing__list-item">Weekly Friday live doubt session (Google Meet)</li>
                      <li class="pricing__list-item">Access to all new updates & content</li>
                      <li class="pricing__list-item">Lifetime access to Premium Discussion Group</li>
                    </ul>
                  </div>
                  <div class="pricing__item-bottom">
                    <a href="signup.html" class="trk-btn trk-btn--outline">Choose Plan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Traderz Den (Beginner to Advance) -->
          <div class="col-md-6 col-lg-4">
            <div class="pricing__item" data-aos="fade-up" data-aos-duration="1000">
              <div class="pricing__item-inner active">
                <div class="pricing__item-content">
                  <div class="pricing__item-top">
                    <h6 class="mb-15">Beginner to Advance</h6>
                    <h3 class="mb-25">Offline ₹39,999</h3>
                    <small>Online ₹29,999</small>
                  </div>
                  <div class="pricing__item-middle">
                    <ul class="pricing__list">
                      <li class="pricing__list-item">Offline Trading Floor Access</li>
                      <li class="pricing__list-item">40+ hours Live offline classes</li>
                      <li class="pricing__list-item">Live Trading Sessions</li>
                      <li class="pricing__list-item">Live Doubt Sessions</li>
                      <li class="pricing__list-item">Lifetime access to course material</li>
                      <li class="pricing__list-item">Lifetime access to Premium Discussion Groups</li>
                    </ul>
                  </div>
                  <div class="pricing__item-bottom">
                    <a href="signup.html" class="trk-btn trk-btn--outline active">Choose Plan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Traderz Den Ultimate Mentorship -->
          <div class="col-md-6 col-lg-4">
            <div class="pricing__item" data-aos="fade-left" data-aos-duration="1000">
              <div class="pricing__item-inner">
                <div class="pricing__item-content">
                  <div class="pricing__item-top">
                    <h6 class="mb-15">Ultimate Mentorship</h6>
                    <h3 class="mb-15">Offline ₹59,999</h3>
                    <small>Online ₹49,999</small>
                  </div>
                  <div class="pricing__item-middle">
                    <ul class="pricing__list">
                      <li class="pricing__list-item">We Guarantee 100% Fee Recovery*</li>
                      <li class="pricing__list-item">Offline Trading Floor Access</li>
                      <li class="pricing__list-item">40+ hours Live offline classes</li>
                      <li class="pricing__list-item">Live Trading Sessions</li>
                      <li class="pricing__list-item">Live Doubt Sessions</li>
                      <li class="pricing__list-item">Lifetime access to course material</li>
                      <li class="pricing__list-item">Lifetime access to Premium Discussion Groups</li>
                    </ul>
                  </div>
                  <div class="pricing__item-bottom">
                    <a href="signup.html" class="trk-btn trk-btn--outline">Choose Plan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Traderz Den Legend 1-on-1 Mentorship -->
          <div class="col-md-6 col-lg-4 mx-auto">
            <div class="pricing__item" data-aos="fade-up" data-aos-duration="1000">
              <div class="pricing__item-inner">
                <div class="pricing__item-content">
                  <div class="pricing__item-top">
                    <h6 class="mb-15">Legend 1-on-1 Mentorship</h6>
                    <h3 class="mb-25">₹70,000/<span>One Time</span></h3>
                  </div>
                  <div class="pricing__item-middle">
                    <ul class="pricing__list">
                      <li class="pricing__list-item">1-on-1 Mentorship (Offline)</li>
                      <li class="pricing__list-item">Unlimited Trading Floor Access</li>
                      <li class="pricing__list-item">30+ hours Live 1-on-1 sessions</li>
                      <li class="pricing__list-item">Live Trading Sessions</li>
                      <li class="pricing__list-item">Weekly Live Doubt Sessions</li>
                      <li class="pricing__list-item">Lifetime access to course material</li>
                      <li class="pricing__list-item">Lifetime access to Premium Discussion Groups</li>
                    </ul>
                  </div>
                  <div class="pricing__item-bottom">
                    <a href="signup.html" class="trk-btn trk-btn--outline">Choose Plan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="pricing__shape">
      <span class="pricing__shape-item pricing__shape-item--1"><span></span></span>
      <span class="pricing__shape-item pricing__shape-item--2">
        <img src="<?php echo STORAGE_URL; ?>/images/icon/1.png" alt="shape-icon">
      </span>
    </div>
  </section>

  <!-- ===============>> Pricing section start here <<================= -->





  <!-- ===============>> Team section start here <<================= -->
  <section class="team padding-top padding-bottom bg-color">
    <div class="section-header section-header--max50">
      <h2 class="mb-10 mt-minus-5">Meet our <span>advisers</span></h2>
      <p>Hey everyone, meet our amazing advisers! They're here to help and guide us through anything.</p>
    </div>
    <div class="container">
      <div class="team__wrapper">
        <div class="row g-4 align-items-center" style="display: flex;justify-content:center;">
          <div class="col-sm-6 col-lg-4">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="<?php echo STORAGE_URL; ?>/images/team/2.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Udit Mahajan</a> </h6>
                      <p class="mb-0">Institutional Trader & Crypto Investor</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="<?php echo STORAGE_URL; ?>/images/team/1.png" alt="Team Image" class="dark">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Aman Solanki</a> </h6>
                      <p class="mb-0">Scalping Expert & ICT Specialist</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> Team section start here <<================= -->
  <!-- ===============>> Testimonial section start here <<================= -->
  <section class="testimonial padding-top padding-bottom-style2 bg-color">
    <div class="container">
      <div class="section-header d-md-flex align-items-center justify-content-between">
        <div class="section-header__content">
          <h2 class="mb-10">What Our <span>Traders Say About Us</span></h2>
          <p class="mb-0">Discover how Traderz Den has empowered aspiring traders with expert mentorship and powerful trading courses.</p>
        </div>
        <div class="section-header__action">
          <div class="swiper-nav">
            <button class="swiper-nav__btn testimonial__slider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button class="swiper-nav__btn testimonial__slider-next active"><i class="fa-solid fa-angle-right"></i></button>
          </div>
        </div>
      </div>
      <div class="testimonial__wrapper" data-aos="fade-up" data-aos-duration="1000">
        <div class="testimonial__slider swiper">
          <div class="swiper-wrapper">

            <!-- Traderz Den Testimonial 1 -->
            <div class="swiper-slide">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <p class="mb-0">
                      Traderz Den has completely changed my perspective on trading. The courses are so well-structured and beginner-friendly. Most importantly, the guidance and mentorship from the team are unmatched. I went from being confused to confident in just a few weeks!
                    </p>
                    <div class="testimonial__footer">
                      <div class="testimonial__author">
                        <div class="testimonial__author-thumb">
                          <img src="<?php echo STORAGE_URL; ?>/images/testimonial/6.png" alt="author">
                        </div>
                        <div class="testimonial__author-designation">
                          <h6>Aryan Joshi</h6>
                          <span>Student, Mumbai</span>
                        </div>
                      </div>
                      <div class="testimonial__quote">
                        <span><i class="fa-solid fa-quote-right"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Traderz Den Testimonial 2 -->
            <div class="swiper-slide">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <p class="mb-0">
                      As a trader and small business owner, I always struggled with consistency. Traderz Den not only taught me powerful strategies but also gave me the mentorship I was missing. Their support system and community are fantastic. Truly the best place to learn trading in India!
                    </p>
                    <div class="testimonial__footer">
                      <div class="testimonial__author">
                        <div class="testimonial__author-thumb">
                          <img src="<?php echo STORAGE_URL; ?>/images/testimonial/7.png" alt="author">
                        </div>
                        <div class="testimonial__author-designation">
                          <h6>Priya Mehra</h6>
                          <span>Entrepreneur, Delhi</span>
                        </div>
                      </div>
                      <div class="testimonial__quote">
                        <span><i class="fa-solid fa-quote-right"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Traderz Den Testimonial 3 -->
            <div class="swiper-slide">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <p class="mb-0">
                      I’ve taken many trading courses before, but Traderz Den stands out. The mentors are experienced, approachable, and genuinely care about your growth. The live sessions and doubt-clearing support are just amazing. Proud to be part of this learning journey.
                    </p>
                    <div class="testimonial__footer">
                      <div class="testimonial__author">
                        <div class="testimonial__author-thumb">
                          <img src="<?php echo STORAGE_URL; ?>/images/testimonial/8.png" alt="author">
                        </div>
                        <div class="testimonial__author-designation">
                          <h6>Sachin Bhandari</h6>
                          <span>Full-time Trader, Jaipur</span>
                        </div>
                      </div>
                      <div class="testimonial__quote">
                        <span><i class="fa-solid fa-quote-right"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div> <!-- swiper-wrapper -->
        </div> <!-- testimonial__slider -->
      </div> <!-- testimonial__wrapper -->
    </div> <!-- container -->
  </section>


  <!-- ===============>> Testimonial section start here <<================= -->




  <!-- ===============>> FAQ section start here <<================= -->
  <section class="faq padding-top padding-bottom of-hidden">
    <div class="section-header section-header--max65">
      <h2 class="mb-10 mt-minus-5"><span>Frequently</span> Asked Questions</h2>
      <p>Got questions about Traderz Den? You're in the right place! Browse through these answers or contact us if you need more help.</p>
    </div>
    <div class="container">
      <div class="faq__wrapper">
        <div class="row g-5 align-items-center justify-content-between">
          <div class="col-lg-6">
            <div class="accordion accordion--style1" id="faqAccordion1" data-aos="fade-right" data-aos-duration="1000">
              <div class="row">
                <div class="col-12">
                  <div class="accordion__item accordion-item">
                    <div class="accordion__header accordion-header" id="faq1">
                      <button class="accordion__button accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqBody1" aria-expanded="true" aria-controls="faqBody1">
                        <span class="accordion__button-content">What is Traderz Den?</span>
                      </button>
                    </div>
                    <div id="faqBody1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                      data-bs-parent="#faqAccordion1">
                      <div class="accordion__body accordion-body">
                        <p class="mb-15">Traderz Den is an all-in-one platform where traders can learn, connect, and grow. Whether you're a beginner or a pro, we've got tools, courses, and community support to help you level up your trading game.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="accordion__item accordion-item">
                    <div class="accordion__header accordion-header" id="faq2">
                      <button class="accordion-button accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody2" aria-expanded="false"
                        aria-controls="faqBody2">
                        <span class="accordion__button-content">Is Traderz Den suitable for beginners?</span>
                      </button>
                    </div>
                    <div id="faqBody2" class="accordion-collapse collapse" aria-labelledby="faq2"
                      data-bs-parent="#faqAccordion1">
                      <div class="accordion__body accordion-body">
                        <p class="mb-15">Absolutely! We provide beginner-friendly content, mentorship, and a supportive community so that you can start your trading journey with confidence.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="accordion__item accordion-item">
                    <div class="accordion__header accordion-header" id="faq3">
                      <button class="accordion-button accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody3" aria-expanded="false"
                        aria-controls="faqBody3">
                        <span class="accordion__button-content">Do I need any special software to get started?</span>
                      </button>
                    </div>
                    <div id="faqBody3" class="accordion-collapse collapse" aria-labelledby="faq3"
                      data-bs-parent="#faqAccordion1">
                      <div class="accordion__body accordion-body">
                        <p class="mb-15">No special software required. All you need is a device with internet access. Our platform works seamlessly on mobile, tablet, and desktop.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="accordion__item accordion-item">
                    <div class="accordion__header accordion-header" id="faq4">
                      <button class="accordion-button accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody4" aria-expanded="false"
                        aria-controls="faqBody4">
                        <span class="accordion__button-content">What kind of content do you offer?</span>
                      </button>
                    </div>
                    <div id="faqBody4" class="accordion-collapse collapse" aria-labelledby="faq4"
                      data-bs-parent="#faqAccordion1">
                      <div class="accordion__body accordion-body">
                        <p class="mb-15">We offer live sessions, recorded webinars, market analysis, strategy breakdowns, and exclusive resources to help traders stay ahead in the game.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="accordion__item accordion-item">
                    <div class="accordion__header accordion-header" id="faq5">
                      <button class="accordion-button accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody5" aria-expanded="false"
                        aria-controls="faqBody5">
                        <span class="accordion__button-content">Is there a community I can join?</span>
                      </button>
                    </div>
                    <div id="faqBody5" class="accordion-collapse collapse" aria-labelledby="faq5"
                      data-bs-parent="#faqAccordion1">
                      <div class="accordion__body accordion-body">
                        <p class="mb-15">Yes! Traderz Den features a vibrant online community where you can connect with fellow traders, ask questions, share insights, and grow together.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="accordion__item accordion-item border-0">
                    <div class="accordion__header accordion-header" id="faq6">
                      <button class="accordion-button accordion__button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqBody6" aria-expanded="false"
                        aria-controls="faqBody6">
                        <span class="accordion__button-content">How do I sign up for Traderz Den?</span>
                      </button>
                    </div>
                    <div id="faqBody6" class="accordion-collapse collapse" aria-labelledby="faq6"
                      data-bs-parent="#faqAccordion1">
                      <div class="accordion__body accordion-body">
                        <p class="mb-15">Signing up is easy! Just head to our registration page, fill out your details, and you're in. You'll receive instant access to all free resources and options to join premium plans.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- row end -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="faq__thumb faq__thumb--style1" data-aos="fade-left" data-aos-duration="1000">
              <img class="dark" src="<?php echo STORAGE_URL; ?>/images/others/1.png" alt="faq-thumb">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="faq__shape faq__shape--style1">
      <span class="faq__shape-item faq__shape-item--1"><img src="<?php echo STORAGE_URL; ?>/images/others/2.png" alt="shpae-icon"></span>
    </div>
  </section>

  <!-- ===============>> FAQ section start here <<================= -->


  <!-- ===============>> cta section start here <<================= -->
  <section class="cta padding-top padding-bottom bg-color">
    <div class="container">
      <div class="cta__wrapper">
        <div class="cta__newsletter justify-content-center">
          <div class="cta__newsletter-inner" data-aos="fade-up" data-aos-duration="1000">
            <div class="cta__thumb">
              <img src="<?php echo STORAGE_URL; ?>/images/cta/3.png" alt="cta-thumb">
            </div>
            <div class="cta__subscribe">
              <h2><span>Stay Ahead</span> in the Market</h2>
              <p>Want exclusive trading insights, tips, and community updates straight to your inbox? Join the Traderz Den newsletter – and never miss a move!</p>
              <form class="cta-form cta-form--style2 form-subscribe" action="#">
                <div class="cta-form__inner d-sm-flex align-items-center">
                  <input type="email" class="form-control form-control--style2 mb-3 mb-sm-0"
                    placeholder="Enter your email address">
                  <button class="trk-btn trk-btn--large trk-btn--secondary2" type="submit">Subscribe Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="cta__shape">
          <span class="cta__shape-item cta__shape-item--1"><img src="<?php echo STORAGE_URL; ?>/images/cta/2.png" alt="shape icon"></span>
          <span class="cta__shape-item cta__shape-item--2"><img src="<?php echo STORAGE_URL; ?>/images/cta/4.png" alt="shape icon"></span>
          <span class="cta__shape-item cta__shape-item--3"><img src="<?php echo STORAGE_URL; ?>/images/cta/5.png" alt="shape icon"></span>
        </div>
      </div>
    </div>
  </section>

  <!-- ===============>> cta section start here <<================= -->





  <?php include_once __DIR__ . "/include/MainFooter.php"; ?>



  <!-- ===============>> scrollToTop start here <<================= -->
  <a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
  <!-- ===============>> scrollToTop ending here <<================= -->

  <?php include_once __DIR__ . "/assets/FooterFiles.php"; ?>

</body>

</html>