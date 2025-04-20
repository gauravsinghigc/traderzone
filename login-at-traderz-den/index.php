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
        <h2>Register</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
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





  <!-- ===============>> account start here <<================= -->
  <section class="account padding-top padding-bottom sec-bg-color2">
    <div class="container">
      <div class="account__wrapper" data-aos="fade-up" data-aos-duration="800">
        <div class="row g-4">
          <div class="col-12">
            <div class="account__content account__content--style1">

              <!-- account tittle -->
              <div class="account__header">
                <h2>Create Your Account</h2>
                <p>Hey there! Ready to join the party? We just need a few details from you to get started. Let's do
                  this!</p>
              </div>

              <!-- account form -->
              <form action="../send.php" method="POST" class="account__form needs-validation">
                <div class="row g-4">
                  <div class="col-12 col-md-6">
                    <div>
                      <label for="first-name" class="form-label">First name</label>
                      <input class="form-control" type="text" id="first-name" name="First_NAME" placeholder="Ex. Jhon">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div>
                      <label for="last-name" class="form-label">Last name</label>
                      <input class="form-control" type="text" id="last-name" NAME="last_name" placeholder="Ex. Doe">
                    </div>
                  </div>
                  <div class="col-12">
                    <div>
                      <label for="account-phone" class="form-label">Phone number</label>
                      <input type="tel" class="form-control" id="account-phone" name='phonenumber' placeholder="Phone number"
                        required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div>
                      <label for="account-email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="account-email" name='emailid' placeholder="Enter your email"
                        required>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-pass">
                      <label for="select-course" class="form-label">Select Courses</label>
                      <select name="SelectedCourses" class="form-control" required>
                        <option value="">Select Course</option>
                        <option value="beginner-to-advance">beginner-to-advance</option>
                        <option value="make-money-at-home">Make Money At Home</option>
                        <option value="ultimate-program">ultimate-program</option>
                        <option value="one-to-one-mentorship">One To One Mentorship</option>
                      </select>
                    </div>
                  </div>
                </div>


                <button type="submit" name="SendQuery" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Sign Up</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="account__shape">
      <span class="account__shape-item account__shape-item--1"><img src="<?php echo STORAGE_URL; ?>/images/contact/4.png"
          alt="shape-icon"></span>
    </div>
  </section>
  <!-- ===============>> account end here <<================= -->



  <?php include_once __DIR__ . "/../include/MainFooter.php"; ?>

  <!-- ===============>> scrollToTop start here <<================= -->
  <a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
  <!-- ===============>> scrollToTop ending here <<================= -->

  <?php include_once __DIR__ . "/../assets/FooterFiles.php"; ?>


</body>

</html>