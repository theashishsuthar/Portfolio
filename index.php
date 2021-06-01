<?php include "includes/header.php"; ?>

<?php

if (isset($_POST['query_submit'])) {

$echo = $_POST['query_submit'];

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "INSERT INTO contactus (name,email,subject,message,time) ";

$query .= "VALUES('{$name}','{$email}','{$subject}','{$message}',now())";

$create_user_query = mysqli_query($connection, $query);

if(!$create_user_query){
  echo "Something Went Wrong!!";
}

// echo "User Created: " . " " . "<a href='users.php'>View Users</a> ";
}

?>



  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <?php include "includes/topbar.php"; ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Ashish Suthar</h1>
      <p>I'm <span class="typed" data-typed-items="Developer,Designer, Freelancer,"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>I am 20 year old trainee pursuing my bachelors's degree for computer engineering at GEC, Gandhinagar.Web and mobile application developer by skills. Having an entrepreneurial mindset for bettering the world.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>My Info</h3>
            <p class="fst-italic">
              <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. -->
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>16 July 2001</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.loopvert.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+91 6354184237</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Gandhinagar, India</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelore</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>dev.ashishgajjar@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>
              <b>Objective</b> 3 years ago I started my development journey to make difference to better myself and make difference among the community. As a part of the journey, I started my learning journey with Web development and currently holding lots of markets demanding technology in my shield. A goal is to satisfy client requirements or organization demand by using 100 percent potential of my skill.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>No just in the test mode, I have implemented my below mentioned skills and developed many live projects for me and my clients.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

          <div class="progress">
              <span class="skill">Flutter <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <!-- <p>Go throu</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Ashish Suthar</h4>
              <p><em>Innovative and deadline-driven Flutter Mobile Application developer and UI/UX Designer with 2+ years of experience in designing and developing user-centered production project from initial concept to final and well-polished.</em></p>
              <ul>
                <li>Shivam Society,Secotor 27 Gandhinagar</li>
                <li>+91 6354184237</li>
                <li>sutharashish5656@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Currently Pusuing Bacherlors In Computer Engineering</h4>
              <h5>2021 - Current</h5>
              <p><em>Gujarat Technological University,Gujarat</em></p>
              <p>Currently in the final year of the collge pursuing my bachelors degree from GTU.</p>
            </div>
            <div class="resume-item">
              <h4>Higher Secondary Schooling</h4>
              <h5>2016-2018</h5>
              <p><em>Sarva Vidhyalay ,Kadi, Gujarat</em></p>
              <p>Completed Higher secondary education while maintaining a 79.80 percentage</p>
            </div>
            <div class="resume-item">
              <h4>Secondary Schooling</h4>
              <h5>2014-2016</h5>
              <p><em>PC Prajapati Highschool, Shankheswar, Patan</em></p>
              <p>Completed Higher secondary education while maintaining a 87.90 percentage</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Internship - Python</h4>
              <h5>2021 - Present</h5>
              <p><em>Silverwing Technologies PVT LTD, Ahmedabad, Gujarat </em></p>
              <ul>
                <li>Currently, I am doing my internship in Silverwing Pvt ltd with Python and web backend framework Django</li>
                
              </ul>
            </div>
            <div class="resume-item">
              <h4>Freelancer- Freelancer.com,upwork and fiverr</h4>
              <h5>2021 - Present</h5>
              <p><em>Freelancer.com </em></p>
              <ul>
                <li>I have recently joined Freelancer.com to explore new projects and challenges so that I can master my skill </li>
                <li>2 Projects completed</li>
                
              </ul>
            </div>
            <div class="resume-item">
              <h4>Launched Startup - Shoffer</h4>
              <h5>2021 - March</h5>
              <p><em>Shoffer</em></p>
              <ul>
                <li>Inspiring from the previous idea rent kent we have created an innovative solution for local business and customer.</li>
                <li><a href="https://github.com/theashishsuthar/shoffer">Read more</a></li>
                
              </ul>
            </div>
            <div class="resume-item">
              <h4>Launched Startup - Rentkent</h4>
              <h5>2020 - December</h5>
              <p><em>Rentkent.in </em></p>
              <ul>
                <li>Intending to create better transparency in the rental system and to support local businesses, we have built these applications.</li>
                <li><a href="https://github.com/theashishsuthar/rentkent">Read more</a></li>
                
              </ul>
            </div>
            <div class="resume-item">
              <h4>Launched Startup</h4>
              <h5>August-2019</h5>
              <p><em>Launched my startup of E-commerce local author book on WooCommerce</em></p>
              <ul>
                <li>In the second year of college, I have launched a startup that solved the problem of local books unavailability in Gujarat. So it was a new existing</li>
                <li>Site was built on wordpress famous support woocommmerce</li>
                <li>We have clearly made 2.5+ Lac turnover but due to covid we shutdown our operations</li>
                
              </ul>
            </div>
            <div class="resume-item">
              <h4>Completed internship in Web Development</h4>
              <h5>2018</h5>
              <p><em>Silverwing Technologies Pvt ltd,Ahem</em></p>
              <ul>
                <li>I have done an internship in web development at Silverwing Pvt ltd in 2019.</li>
                <li>During the internship, we dealt with HTML5, CSS, and Javascript.</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>This training also includes CSS popular framework Bootstrap</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>I have mentioned my skills and qualifications on this website. But it's understandable, if you are still in doubt. Here is my work which I have done until now. I am sure after going through it, you will be ready with your positive decision.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".App">App</li>
              <li data-filter=".Design">Design</li>
              <li data-filter=".Web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

 <?php 
 
 
 $work_query = "SELECT * FROM work";
 
 $work_query_fetch = mysqli_query($connection,$work_query);
 
 while($row = mysqli_fetch_assoc($work_query_fetch)){

  $work_id = $row["id"];
  $work_title = $row["title"];
  $work_description = $row["description"];
  $work_url = $row["url"];
  $work_image = $row["imageUrl"];
  $work_category = $row["category"];

 
 ?>



          <div class="col-lg-4 col-md-6 portfolio-item <?php echo $work_category; ?>">
            <div class="portfolio-wrap">
              <img src="images/<?php echo $work_image; ?>" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="images/<?php echo $work_image;?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $work_title; ?>"><i class="bx bx-plus"></i></a>
                <a href="<?php echo $work_url; ?>" title="<?php echo $work_description; ?>"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <?php  } ?>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p> Services where you can rely on me. Below are the services on which I can provide support for your beautiful idea.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><img src="https://img.icons8.com/color/48/000000/flutter.png"/></div>
            <h4 class="title"><a href="">Flutter Mobile App Development</a></h4>
            <!-- <p class="description">A skill which I loved most and confident about it. I can assure satisfaction from my work.I have worked with a dart,firebase, cloud messaging, and REST API</p> -->
            <p class="description">Experince <b> 2+ Years</b></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="https://img.icons8.com/nolan/64/web-design.png"/></div>
            <h4 class="title"><a href="">UI/UX Designing</a></h4>
            <!-- <p class="description">A hobby and learned these skills while playing with tools like Adobe XD and Figma. I have more concern about user experience rather than the user interface.</p> -->
            <p class="description">Experince <b> 1.5+ Years</b></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><img src="https://img.icons8.com/color/48/000000/nodejs.png"/></div>
            <h4 class="title"><a href="">Node Js</a></h4>
            <!-- <p class="description">Earlier learned this technology but still confident about it. Have done firebase messaging and eCommerce backend with a Node js</p> -->
            <p class="description">Experince <b> 6 Month</b></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><img src="https://img.icons8.com/fluent/48/000000/php.png"/></div>
            <h4 class="title"><a href="#">PHP</a></h4>
            <!-- <p class="description">Completed blogging site, portfolio site, and eCommerce site using this skill.</p> -->
            <p class="description">Experince <b> 1 Year</b></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><img src="https://img.icons8.com/color/48/000000/mongodb.png" alt=""></div>
            <h4 class="title"><a href="#">MongoDB</a></h4>
            <p class="description">Experince <b> 1 Year</b></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><img src="https://img.icons8.com/color/48/000000/javascript.png"/></div>
            <h4 class="title"><a href="#">Javascript</a></h4>
            <p class="description">Experince <b> 2 Year</b></p>
          </div>
          
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><img src="https://img.icons8.com/color/48/000000/firebase.png"/></div>
            <h4 class="title"><a href="">Firebase</a></h4>
            <p class="description">Experince <b> 2 Year</b></p>
          </div>
          
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><img src="https://img.icons8.com/color/48/4a90e2/python.png"/></div>
            <h4 class="title"><a href="">Python</a></h4>
            <!-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p> -->
            <p class="description">Experince <b> 6 Month</b></p>
          </div>

          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><img src="https://img.icons8.com/color/48/000000/bootstrap.png"/></div>
            <h4 class="title"><a href="">Bootstrap</a></h4>
            <!-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p> -->
            <p class="description">Experince <b> 3  Year</b></p>
          </div>
          
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <!-- <p>Feel free to reach out to me for any work,project or help</p> -->
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Shivam Society,Sector 28 Gandhinagar ,382029</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>sutharashish5656@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 6354184237</p>
              </div>

             

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d469829.8358646533!2d72.3305899153258!3d23.070899667345696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2e4fb7cd49d21891!2sKrishna%20PG%20Home!5e0!3m2!1sen!2sin!4v1622549233864!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="query_submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php include "includes/footer.php"; ?>