<?php include_once __DIR__ . "/../config.php"; ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <title>About Us | <?php echo WEBSITE_INFO['PRIMARY_INFO']['WEBSITE_NAME']; ?></title>
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
        <h2>About <?php echo WEBSITE_INFO['PRIMARY_INFO']['WEBSITE_NAME']; ?></h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="<?php echo DOMAIN; ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About <?php echo WEBSITE_INFO['PRIMARY_INFO']['WEBSITE_NAME']; ?></li>
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





  <!-- ===============>> Story section start here <<================= -->
  <div class="story padding-top bg-color-3">
    <div class="container">
      <div class="story__wrapper">
        <div class="story__thumb">
          <div class="story__thumb-inner" data-aos="fade-up" data-aos-duration="800">
            <img src="<?php echo STORAGE_URL; ?>/images/about/4.png" alt="story-image">
            <div class="story__thumb-playbtn">
              <a href="https://www.youtube.com/watch?v=uJSgaPIvgKk&amp;ab_channel=FreeTemplates" data-fslightbox><i
                  class="fa-solid fa-circle-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="story__shape">
      <span class="story__shape-item story__shape-item--1"><span></span> </span>
    </div>
  </div>
  <!-- ===============>> Story section end here <<================= -->





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
                      <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="10">30</span>
                        Years
                      </h3>
                      <p>Consulting Experience</p>
                    </div>
                  </div>
                  <div class="floating-content__bottom-right" data-aos="fade-right" data-aos-duration="1000">
                    <div class="floating-content__item">
                      <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="25">25K</span>K+
                      </h3>
                      <p>Satisfied Customers</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about__content" data-aos="fade-left" data-aos-duration="800">
              <div class="about__content-inner">
                <h2>At Traderz den, we’re dedicated to empowering traders to reach their full potential. </h2>

                <p class="mb-0">With over 5 years of proven success in the trading world, we’ve helped number of students become consistently profitable.
                  <br><br>
                  Join our community to master the skills and strategies essential for long-term success. Our expertly designed courses deliver advanced insights and practical knowledge—your first step toward true financial freedom.
                </p>
                <a href="about.html" class="trk-btn trk-btn--border trk-btn--primary">Explore More </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> About section start here <<================= -->






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




  <?php include_once __DIR__ . "/../include/MainFooter.php"; ?>

  <!-- ===============>> scrollToTop start here <<================= -->
  <a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
  <!-- ===============>> scrollToTop ending here <<================= -->

  <?php include_once __DIR__ . "/../assets/FooterFiles.php"; ?>


</body>

</html>