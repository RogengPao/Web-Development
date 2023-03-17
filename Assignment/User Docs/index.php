<?php
include ("../Routing/route.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Healing</title>

    <link rel="shortcut icon" href="favicon_io\favicon-16x16.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/17a5980fd9.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Css\style.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <section id="navigation-bar">
        <nav class="navbar navbar-expand-lg bg-light navigation-container fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img class="nav-company-logo" src="illustration\companylogo.png" alt="company's logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse dropdown-items" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                       <?php 
                       if(isset($_SESSION["log_in"]) && $_SESSION["log_in"] == "logged_in") {
                          echo "
                            <li id='user-dashboard' class='nav-item'><a class='nav-link' aria-current='page' href='calendar.php'>Dashboard</a></li>
                          ";
                      } else {
                          echo "
                            <li id='user-dashboard' class='nav-item'><a class='nav-link disabled' aria-current='page' href='#'>Dashboard</a></li>
                          ";
                      }
                      ?>
                       <?php 
                       if(isset($_SESSION["log_in"]) && $_SESSION["log_in"] == "logged_in") {
                          echo "
                            <li id= 'user-profile' class='nav-item'><a class='nav-link' aria-current='page' href='user_profile.php'>Profile</a></li>
                          ";
                      } else {
                          echo "
                            <li id= 'user-profile' class='nav-item'><a class='nav-link disabled' aria-current='page' href='#'>Profile</a></li>
                          ";
                      }
                      ?>
                    <li class="nav-item"><a class="nav-link active" href="#about-us">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#book-appointment">Book an Appointment</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="#our-service">Services We Offer</a></li>
                            <li class="nav-item"><a class="nav-link" href="#meet-our-team">Meet Our Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="#reviews">Our Reviews</a></li>
                            <li class="nav-item"><a class="nav-link" href="#join-our-team">Join Our Team</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                      <?php 
                       if(isset($_SESSION["log_in"]) && $_SESSION["log_in"] == "logged_in") {
                          echo "
                          <form action='../Routing/route.php' method='post'>
                          <input type='submit' class='btn btn-dark log-in-btn' value='Log out' name='signOut'>
                          </form>  
                          ";
                      } else {
                          echo "<a class='btn btn-dark log-in-btn' href='login.php'>Log In</a>";
                      }
                      ?>
                    </li>
                </div>
              </div>
            </div>
          </nav>
    </section>

    <section id="header">
        <div class="conatiner-fluid body-content">
          <div class="header-main fade-in-out">
            <div class="header-logo"><img src="illustration/companylogo.png" alt="Comapny Logo"></div>
            <h1>Care<br>Healing</h1>
          </div>
          <div class="header-icon fade-in-out">
            <a id="header-btn" href="#">
              <p> Learn More</p>
              <i class="fa-solid fa-angle-down fa-2x"></i>
            </a>
          </div>
        </div>
    </section>

    <section id="about-us">
        <div class="container-fluid body-content">
            <div class="row">
                <div class="col-lg-6">
                  <div class="header-image-container">
                    <div class="header-image-container-2"></div>
                    <img class="header-image" src="illustration/about-us-logo.png" alt="header image">
                  </div>
                </div>
                <div class="col-lg-6 header-content">
                    <h1>About Us</h1>
                    <hr>
                    <p>Welcome to our medical appointment website! Our goal is to make it easy and convenient for patients to schedule appointments with their healthcare providers. <br>
                     <br> We understand that visiting the doctor can be stressful, so we've designed our website to be user-friendly and easy to navigate. With just a few clicks, you can search for a provider, view available appointment times, and book your appointment online.</p>
                    <button onclick="location.href='#features'" class="btn btn-light header-btn btn-lg">Read More</button>
                    <button class="btn btn-primary header-btn btn-lg book-btn" onclick="location.href='#book-appointment'"><i class="fa-solid fa-mobile-screen"></i>&nbsp;&nbsp;Book Now</button>
                </div>

            </div>
        </div>
    </section>

    <section id="mini-features">
      <div>
        <div class="row">
          <div class="col-lg-4" id="first-container">
            <i class="fa-solid fa-user-tie fa-3x mini-icons"></i>
            <div class="mini-features-content">
              <h1>30+</h1>
              <hr>
              <p>Years of experience</p>
            </div>
          </div>
          <div class="col-lg-4" id="second-container">
            <i class="fa-solid fa-calendar-check fa-3x mini-icons"></i>
            <div class="mini-features-content">
              <h1>200+</h1>
              <hr>
              <p>Appointment per month</p>
            </div>
          </div>
          <div class="col-lg-4" id="third-container">
            <i class="fa-solid fa-check fa-3x mini-icons"></i>
            <div class="mini-features-content">
              <h1>96%</h1>
              <hr>
              <p>Of patients recommend us</p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="features">
        <div class="container-fluid body-content">
            <div class="feature-tittle">
              <h4>Features</h4>
              <h1>Our Features & Services</h1>
              <hr>
            </div>

            <div class="row">
              <div class="card-group">
                <div class="col-lg-3">
                  <div class="card card-up">
                    <img class="feature-image" src="https://thumbs.dreamstime.com/b/online-doctor-appointment-vector-male-online-planning-app-online-agenda-illustration-appointment-to-consultation-doctor-online-158070597.jpg" class="card-img-top" alt="Online scheduling Illustration">
                    <div class="card-body">
                      <h5 class="card-title">Fully Online</h5>
                      <p class="card-text">Make appointments fully online without the need to head over to the clinic in person!</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="card card-down">
                    <img class="feature-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdHLa8JgEZvKTcr-77XD-RLgxMCmZc7keOrA&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Online Patient's Portal</h5>
                      <p class="card-text">Patients can access their medical records, communicate with their care team, and more.</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="card card-up">
                    <img class="feature-image" src="https://img.freepik.com/free-vector/online-medicine-composition-with-image-smartphone-with-reminder-app-taking-pills_1284-54425.jpg?w=2000" class="card-img-top" alt="Medical Reminders Illustration">
                    <div class="card-body">
                      <h5 class="card-title">Medical Reminders</h5>
                      <p class="card-text">Reminders to help patients stay on track with their health care needs.   </p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="card card-down">
                    <img class="feature-image" src="https://thumbs.dreamstime.com/b/steady-medical-assistance-service-vector-web-icon-flat-isolated-eps-illustration-minimal-design-long-shadow-118525873.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">24/7 Availability</h5>
                      <p class="card-text">This service is 24/7 available for people who may need medical attention outside of normal business hours.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section id="meet-our-team">
        <div class="container-fluid body-content">
            <div class="team-tittle">
                <h1>Meet Our Team</h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <img class="team-image" src="https://res2.weblium.site/res/5f8641ad598b3400216948c3/5f86790c5481cb0021cff0d7_optimized_877_c812x993-26x11?nowebp" alt="Team's Image">
                    <div class="team-content">
                        <div class="team-text">
                          <h1>Dr. Eric <br> Williams</h1>
                          <p> Dr. Williams is a geriatrician with over 20 years of experience in caring for elderly patients. He has a deep understanding of the unique health needs and challenges faced by older adults, and is skilled in the management of conditions such as hypertension, diabetes, and arthritis.</p>
                        </div>
                        <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook fa-2x team-icon"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img class="team-image" src="https://res2.weblium.site/res/5f8641ad598b3400216948c3/5f8673075f6e8e0021a3282d_optimized_976_c903x925-35x0?nowebp" alt="Team's Image">
                    <div class="team-content">
                      <div class="team-text">
                        <h1>Dr. Maria Hernandez</h1>
                        <p>Dr. Hernandez is a pediatrician with over 15 years of experience. She has a strong background in pediatric care, including routine check-ups, immunizations, and the treatment of common illnesses and injuries.</p>
                      </div>
                        <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook fa-2x team-icon"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img class="team-image" src="https://res2.weblium.site/res/5f8641ad598b3400216948c3/5f8678565f6e8e0021a32d00_optimized_877_c790x994-62x24?nowebp" alt="Team's Image">
                    <div class="team-content">
                      <div class="team-text">
                        <h1>Dr. Samir <br> Patel</h1>
                        <p>Dr. Patel is a family medicine physician with over 10 years of experience. He has a broad range of medical knowledge and is skilled in caring for patients of all ages.</p>
                      </div>  
                        <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook fa-2x team-icon"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-service">
      <div class="container-fluid body-content">
          <h1>Service We Offer</h1>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="row">

            <div class="thecontainer col-lg-4">
              <div class="thecard1">
                
                <div class="thefront">
                  <h2>Consultation</h2>
                  <hr>
                  <img id="service-image1" class="service-illustration" src="illustration\medical_consultation_img.png" alt="Consultation Image">
                  <div class="btn-container">
                    <button id="flip1" class="btn flip-the-card-1"><i class="fa-solid fa-repeat"></i></button>
                  </div>
                </div>

                <div class="theback">
                  <h2>Consultation</h2>
                  <hr>
                  <p>A medical consultation is a meeting between you and a healthcare provider, during which you will discuss your medical history, current symptoms, and overall health. This is an opportunity for you to ask questions and learn more about your health, as well as receive advice and guidance on how to manage any medical conditions you may have.</p>
                  <div class="btn-container">
                    <button id="unflip1" class="btn2 flip-the-card-1"><i class="fa-solid fa-repeat"></i></button>
                  </div>
                </div>

              </div>
            </div>
          
            <div class="thecontainer col-lg-4">
              <div class="thecard2">

                <div class="thefront">
                  <h2>Check Ups</h2>
                  <hr>
                  <img id="service-image2" class="service-illustration" src="illustration\medical_checkup.png" alt="Medical Check Up">
                  <div class="btn-container">
                    <button id="flip2" class="btn"><i class="fa-solid fa-repeat"></i></button>
                  </div>
                </div>

                <div class="theback">
                  <h2>Check Ups</h2>
                  <hr>
                  <p>A medical consultation is a meeting between you and a healthcare provider, during which you will discuss your medical history, current symptoms, and overall health. This is an opportunity for you to ask questions and learn more about your health, as well as receive advice and guidance on how to manage any medical conditions you may have.</p>
                  <div class="btn-container">
                    <button id="unflip2" class="btn2"><i class="fa-solid fa-repeat"></i></button>
                  </div>
                </div>

              </div>
            </div>
          
            <div class="thecontainer col-lg-4">
              <div class="thecard3">

                <div class="thefront">
                  <h2>Simple Treatements</h2>
                  <hr>
                  <img id="service-image3" class="service-illustration" src="illustration\medical_treatement_image.png" alt="Medical Treatment">
                  <div class="btn-container">
                    <button id="flip3" class="btn"><i class="fa-solid fa-repeat"></i></button>
                  </div>
                </div>

                <div class="theback">
                  <h2>Simple Treatements</h2>
                  <hr>
                  <p>A medical consultation is a meeting between you and a healthcare provider, during which you will discuss your medical history, current symptoms, and overall health. This is an opportunity for you to ask questions and learn more about your health, as well as receive advice and guidance on how to manage any medical conditions you may have.</p>
                  <div class="btn-container">
                    <button id="unflip3" class="btn2"><i class="fa-solid fa-repeat"></i></button>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
      </div>
    </section>

    <section id="reviews">
      <div class="container-fluid body-content">
        <h1>What Patients Says About Us</h1>
        <hr>
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <section id="our-review">
                <div class="container-fluid body-content2">
                    <div class="review-container row">
                        <img class="col-lg-12 review-background" src="https://images.freecreatives.com/wp-content/uploads/2016/04/Free-Website-BAckgrounds1.jpg" alt="Background Image">
                        <div class="testimonial-image-container">
                            <img class="testimonial-image" src="https://imageio.forbes.com/specials-images/imageserve/605e22fe6df966b3fcbd3e15/0x0.jpg?format=jpg&crop=1080,1080,x0,y0,safe&height=416&width=416&fit=bounds" alt="Testimonial Image">
                        </div>
                        <div class="testimonial-content">
                            <blockquote>
                              The website was easy to navigate and allowed me to find a provider that fit my needs. Scheduling the appointment was quick and painless. The appointment itself was great - the staff was friendly and the office was clean. I will definitely be using this website for all of my future medical appointments.
                                <br>
                                <cite>Ma Jack, 1996</cite>
                            </blockquote>   
                        </div>
                    </div>
                </div>
            </section>
            </div>
            <div class="carousel-item">
                <section id="our-review">
                    <div class="container-fluid body-content2">
                        <div class="review-container row">
                          <img class="col-lg-12 review-background" src="https://i.pinimg.com/originals/9e/9d/b9/9e9db9eaddef1a9ae953bd5fe0346933.jpg" alt="Background Image">
                            <div class="testimonial-image-container">
                                <img class="testimonial-image" src="https://pbs.twimg.com/profile_images/1564398871996174336/M-hffw5a_400x400.jpg" alt="Testimonial Image">
                            </div>
                            <div class="testimonial-content">
                                <blockquote>
                                  I recently used a medical appointment website to schedule a check-up with my primary care physician, and it was such a convenient and easy process! This allowed me to find a time that worked for my schedule without having to make a phone call or visit the office in person. Overall, I would highly recommend this website to anyone in need of medical care.
                                    <br>
                                    <cite>Job Steve , 2007</cite>
                                </blockquote>   
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="carousel-item">
              <section id="our-review">
                <div class="container-fluid body-content2">
                    <div class="review-container row">
                      <img class="col-lg-12 review-background" src="https://img.freepik.com/premium-vector/modern-colorful-blue-technology-wide-banner-background-abstract-background-banner-design-web-banner-texture-header-website-vector-abstract-graphic-design-pattern-background-template_181182-16324.jpg" alt="Background Image">
                        <div class="testimonial-image-container">
                            <img class="testimonial-image" src="https://yt3.googleusercontent.com/OvyupgLYH05byQQoYNw6BtXoCw1ygFYTMtGhk0vOTaOii8U9x5NYK1R4JD7FJAUCouqy_8JA=s900-c-k-c0x00ffffff-no-rj" alt="Testimonial Image">
                        </div>
                        <div class="testimonial-content">
                            <blockquote>
                              "I recently used a medical appointment website to schedule, and it was such a convenient experience! Scheduling the appointment was a breeze, and the confirmation email was a great reminder. I will definitely be using this website for all of my future medical appointments.
                                <br>
                                <cite>Chou Jay, 2016</cite>
                            </blockquote>   
                        </div>
                    </div>
                </div>
            </section>
            </div>
          </div>
          <div class="review-btn">
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <i class="fa-solid fa-chevron-left fa-4x control-icon"></i>
            </button>
          </div>
          <div class="review-btn">
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <i class="fa-solid fa-chevron-right fa-4x control-icon"></i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section id="book-appointment">
      <div class="body-content">
        <div class="row">
          <div class="col-lg-6 booking-background">
          </div>
          <div class="col-lg-6 form-container">
            <div class="form-tittle">
              <h1>Book Now</h1>
              <p>Get your appointment ready in a few clicks!</p>
            </div>
            <div class="book-form">
              <form action="../Routing/route.php" method="post">
                <label class="form-label" for="dateToday">Appointment Date:</label>
                <input class="form-control" type="date" name="booking-date" id="dateToday" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>
                <label class="form-label" for="timeToday">Appointment Time:</label>
                <input class="form-control" type="time" name="booking-time" id="timeToday" required>
                <label class="form-label" for="serviceType">Service Type:</label><br>
                <select class="form-select" name="service-type" id="serviceType" required>
                  <option selected disabled value="">...</option>
                  <option value="Consultation">Consultation</option>
                  <option value="Medical Check Ups">Medical Check Ups</option>
                  <option value="Simple Treatements">Simple Treatements</option>
                </select> 
                <label class="form-label" for="releventInfo">Additional information (Optional):</label>
                <textarea class="form-control" name="additional-info" id="releventInfo" cols="30" rows="7"></textarea>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Agree" id="checkAgree" required>
                  <label class="form-check-label" for="checkAgree">
                    Agree to terms and conditions
                  </label>
                </div>
                <hr>
                <input id="booking-btn" class="btn btn-lg btn-primary" name="booking-submit" type="submit" value="Book Now" required>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="join-our-team">
        <div class="container-fluid body-content">
            <h1>Join Our Team</h1>
            <hr class="hr1">
            <p>Join our team at our medical appointment website and make a difference in the healthcare industry!</p>
            <div class="join-team-container">
                <h2>Interested In Joining Us?</h2>
                <hr class="hr2">
                <p>"Are you passionate about providing top-notch customer service and making a positive impact in the healthcare industry? If so, we want you to join our team at our medical appointment website! We are always looking for talented and dedicated individuals to help us deliver a seamless and efficient experience for our patients. As a member of our team, you'll have the opportunity to work with a talented and supportive group of professionals and make a difference in the lives of our users. If you are interested in joining us, please submit your resume and cover letter for review. We can't wait to see what you can bring to the table!"</p>
                <button class="btn btn-primary btn-lg btn-join-team" onclick="location.href='mailto:carehealing@gmail.com'">
                    Send Us A Message!
                </button>
            </div>
        </div>
    </section>

    <section id="faq">
        <div class="container-fluid body-content">
            <h1>FAQ</h1>
            <hr>
            <div class="accordion accordion-flush faq-content" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      How do I schedule an appointment through the website?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      To schedule an appointment, you will need to create an account on the website and then search for providers in your area. Once you find a provider that meets your needs, you can choose a date and time that works for you and book the appointment directly through the website.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Is it safe to enter my personal and medical information on the website?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      Yes, the website uses secure servers and encryption technology to protect your personal and medical information. Your information will only be shared with the provider you are seeing and the relevant medical staff.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Can I use the website to schedule appointments for urgent or emergency care?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      No, the website is not designed for urgent or emergency care. If you are experiencing a medical emergency, you should call 911 or go to the nearest emergency department.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Can I use the website to schedule appointments for my family members?
                      </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        Yes, you can use the website to schedule appointments for your family members as long as you have their consent. You will need to create separate accounts for each family member, but you can manage all of the appointments through your own account.
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Can I cancel or reschedule an appointment through the website?
                      </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        Yes, you can cancel or reschedule an appointment through the website as long as you do so within the required timeframe. You will need to log into your account and follow the prompts to cancel or reschedule the appointment.
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Do I need to pay for my appointment through the website?
                      </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        It depends on the provider and your insurance plan. Some providers may require payment at the time of the appointment, while others may bill your insurance company directly. You can check with the provider directly or contact your insurance company to find out how payment will be handled.
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSeven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Can I see my medical records or test results through the website?
                      </button>
                    </h2>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        It depends on the provider and the specific information you are looking for. Some providers may allow you to access certain medical records or test results through the website, while others may require you to visit the office in person or call for the information.
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Is the website available 24/7?
                      </button>
                    </h2>
                    <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        The website itself is generally available 24/7, but the providers and medical staff may not be available at all times. If you have an urgent need or question, you should contact the provider directly or seek appropriate medical attention.
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingNine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Can I use the website to request a prescription refill?
                      </button>
                    </h2>
                    <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        It depends on the provider and their specific policies. Some providers may allow you to request a prescription refill through the website, while others may require you to visit the office in person or call for the refill. You can check with the provider directly to find out what options are available.
                      </div>
                    </div>
                </div>
              </div>
        </div>
    </section>

    <footer id="footer">
      <div class="container-fluid body-content">
        <img class="footer-logo" src="illustration/companylogo.png" alt="Company Logo">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 follow-us footer-container">
            <h4>Follow Us</h4>
            <i class="fa-brands fa-youtube fa-2x"></i><a href="#">Youtube</a><br>
            <i class="fa-brands fa-facebook fa-2x"></i><a href="#">Facebook</a><br>
            <i class="fa-brands fa-square-instagram fa-2x"></i><a href="#">Instagram</a><br>
            <i class="fa-brands fa-twitter fa-2x"></i><a href="#">Twiiter</a><br>
          </div>
          <div class="col-lg-4 col-md-6 footer-container">
            <h4>Our Contacts</h4>
            <div class="footer-contact">
              <i class="fa-solid fa-house-user fa-2x contact-icon"></i>
              <div>Lot 5, Lorong Sultan Ismail 4/6,<br>Pahang Darul Makmur,<br>72464, Jerantut</div>
            </div>
            <div class="footer-contact">
              <i class="fa-solid fa-phone fa-2x contact-icon"></i>
              <div>Yong Yip Ong: 012-345-6789<br>Zhi Yue Wai: 019-876-6543</div>
            </div>
          </div>
          <div class="col-lg-4 footer-container">
            <h4>Quick Nav</h4>
            <ul class="quick-nav">
              <li class="list-item">
                <a href="#">Home</a>
              </li>
              <li class="list-item">
                <a href="#">About Us</a>
              </li>
              <li class="list-item">
                <a href="#">Contact Us</a>
              </li>
              <li class="list-item">
                <a href="#">Book an Appointment</a>
              </li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="footer-copyright">
          &#169; Copywrite 2022, All Right Reserved by CareHealing
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="Javascript\index.js"></script>
</body>
</html>