<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Website redesign services | Increase your site income</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="Looking for website redesign services? Favrora has a team of experienced web designers offering website redesign services to help drive revenue.">
  <meta name="theme-color" content="#0077FF">
  <link rel="canonical" href="https://favrora.com/">
  <meta name="google-site-verification" content="NJ3FjzzHl--FoV4VPdWMYXyow12z1_1le2s0Dx4G5mE" />

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Website redesign services - Favrora">
  <meta property="og:description" content="We do website redesign, increase the income of your website through a new and modern design. Website redesign services.">
  <meta property="og:url" content="https://favrora.com/">
  <meta property="og:image" content="https://favrora.com/src/img/preview.jpg">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:locale" content="en_US">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:creator" content="favrora_com">

  <!-- favicon -->
  <link rel="shortcut icon" href="/src/img/icon.png">

  <!-- css -->
  <link rel="stylesheet" href="/src/css/home/animate.css">
  <link rel="stylesheet" href="/src/css/home/LineIcons.2.0.css">
  <link rel="stylesheet" href="/src/css/home/bootstrap-4.5.0.min.css">
  <link rel="stylesheet" href="/src/css/home/default.css">
  <link rel="stylesheet" href="/src/css/home.css">
  <link rel="stylesheet" href="/src/css/home/owl.carousel.css">

  <!-- Global site tag (gtag.js) - Google Analytics --
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YZM6DLXFVW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YZM6DLXFVW');
  </script>
  -->

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(75593677, "init", {
      clickmap:true,
      trackLinks:true,
      accurateTrackBounce:true,
      webvisor:true
    });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/75593677" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
</head>
<body>


<?php

require_once('template/backend/db-connect.php'); // Database connection file
require_once('template/backend/count-view.php'); // PHP functions file

$page_id = 10;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>

<!--
<?php
$total_page_views = total_views($conn, $page_id); // Returns total views of this page
echo "Main page views count: " . $total_page_views;
?>-->

<!--====== PRELOADER PART START ======-->
<div class="preloader">
  <div class="loader">
    <div class="ytp-spinner">
      <div class="ytp-spinner-container">
        <div class="ytp-spinner-rotator">
          <div class="ytp-spinner-left">
            <div class="ytp-spinner-circle"></div>
          </div>
          <div class="ytp-spinner-right">
            <div class="ytp-spinner-circle"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->
<header class="header-area">
  <div class="navbar-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/">
              <img src="/src/img/wlogo.png" alt="Logo" title="Favrora">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
              <ul id="nav" class="navbar-nav ml-auto" >
                <li class="nav-item active"><a href="/" title="Home">Home</a></li>
                <li class="nav-item"><a href="/blog" title="Blog">Blog</a></li>
                <li class="nav-item"><a href="/partnership" title="Partnership">Partnership</a></li>
                <li class="nav-item"><a href="/about" title="About us">About us</a></li>
                <li class="nav-item"><a href="/contact-us" title="Contact">Contact</a></li>
              </ul>
            </div>
          </nav>
          <!-- navbar -->
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- navbar area -->
  <div id="home" class="header-hero bg_cover" style="background-image: url('/src/img/home/banner-bg.svg')">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="header-hero-content text-center">
            <h1 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Website redesign services</h1>
            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Modern attractive website design has a positive effect on behavioral factors, contributes to the growth of the site's position in search engines and provides an increase in sales.</p>
            <button id="contactBtn" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Buy services</button>
          </div>
          <!-- header hero content -->
        </div>
        <!-- header hero img -->
        <div class="col-lg-6">
          <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
            <img src="/src/img/laptop.png" alt="Laptop">
          </div>
        </div>
      </div>
    </div>
    <!-- container -->
    <div id="particles-1" class="particles"></div>
  </div>
  <!-- header hero -->
</header>
<!--====== HEADER PART ENDS ======-->


<!--====== COOKIE PART START ======-->
<div id="cookie">
  <div class="cookie-close"></div>
  <img class="cookie-img" src="/src/img/wlogo.png" alt="Favrora logo">
  <p>By using our site you agree to our use of cookies to deliver a better site experience.</p>
  <button id="cookieBtn">OK</button>
</div>
<!--====== COOKIE PART ENDS ======-->


<!--====== SERVICES PART START ======-->
<section id="features" class="services-area pt-120">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="section-title text-center pb-40">
          <div class="line m-auto"></div>
          <h3 class="title wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">A clean and simple design<span> will increase your website's income!</span></h3>
        </div>
        <!-- section title -->
      </div>
    </div>
    <!-- row -->
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-7 col-sm-8">
        <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="services-icon">
            <img class="shape" src="/src/img/home/services-shape.svg" alt="shape">
            <img class="shape-1" src="/src/img/home/services-shape-1.svg" alt="shape">
            <i class="lni lni-baloon"></i>
          </div>
          <div class="services-content mt-30">
            <h4 class="services-title">We do everything on time</h4>
            <p class="text">We have all the necessary resources and technologies to complete the site redesign work on time. For failure to comply with obligations on time, we are financially liable, which is documented in the contract.</p>
          </div>
        </div>
        <!-- single services -->
      </div>
      <div class="col-lg-4 col-md-7 col-sm-8">
        <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="services-icon">
            <img class="shape" src="/src/img/home/services-shape.svg" alt="shape">
            <img class="shape-1" src="/src/img/home/services-shape-2.svg" alt="shape">
            <i class="lni lni-cog"></i>
          </div>
          <div class="services-content mt-30">
            <h4 class="services-title">We make websites more convenient</h4>
            <p class="text">We modernize the company's website taking into account modern trends in interface design and usability and increase your sales.</p>
          </div>
        </div>
        <!-- single services -->
      </div>
      <div class="col-lg-4 col-md-7 col-sm-8">
        <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
          <div class="services-icon">
            <img class="shape" src="/src/img/home/services-shape.svg" alt="shape">
            <img class="shape-1" src="/src/img/home/services-shape-3.svg" alt="shape">
            <i class="lni lni-bolt-alt"></i>
          </div>
          <div class="services-content mt-30">
            <h4 class="services-title">Optimizing for promotion</h4>
            <p class="text">Redesign work is carried out taking into account the requirements of SEO-optimization. You can rest assured that the resource will not lose its position in the search results.</p>
          </div>
        </div>
        <!-- single services -->
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>
<!--====== SERVICES PART ENDS ======-->

<!--====== BRAND PART START ======-->
<div class="brand-area pt-90">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="section-title text-center pb-40">
          <div class="line m-auto"></div>
          <h3 class="title">We are trusted</h3>
        </div>
        <!-- section title -->
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
          <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="/src/img/home/brand-1.png" alt="brand">
          </div>
          <!-- single logo -->
          <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
            <img src="/src/img/home/brand-2.png" alt="brand">
          </div>
          <!-- single logo -->
          <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <img src="/src/img/home/brand-3.png" alt="brand">
          </div>
          <!-- single logo -->
          <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
            <img src="/src/img/home/brand-4.png" alt="brand">
          </div>
          <!-- single logo -->
          <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="/src/img/home/brand-5.png" alt="brand">
          </div>
          <!-- single logo -->
        </div>
        <!-- brand logo -->
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</div>
<!--====== BRAND PART ENDS ======-->


<!--====== ABOUT PART START ======-->
<section id="about" class="about-area pt-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-title">
            <div class="line"></div>
            <h3 class="title">Reliable redesign services <span> of Favrora company</span></h3>
          </div>
          <!-- section title -->
          <p class="text">Payment for the work done occurs at the very end, after you accept the new design, you will need to pay to the Favrora team and the repository with the new design will be transferred to your account. We guarantee 100% customer satisfaction. We also sign a contract with the client. The contract is legally binding.</p>
        </div>
        <!-- about content -->
      </div>
      <div class="col-lg-6">
        <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
          <img src="/src/img/home/about1.svg" alt="about">
        </div>
        <!-- about image -->
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
  <div class="about-shape-1">
    <img src="/src/img/home/about-shape-1.svg" alt="shape">
  </div>
</section>
<!--====== ABOUT PART ENDS ======-->

<!--====== ABOUT PART START ======-->
<section class="about-area pt-70">
  <div class="about-shape-2">
    <img src="/src/img/home/about-shape-2.svg" alt="shape">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-lg-last">
        <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-title">
            <div class="line"></div>
            <h3 class="title">Income growth <span> after website redesign</span></h3>
          </div>
          <!-- section title -->
          <p class="text">On average, after a website redesign, we see a 17% increase in revenue within a few months. This is a very good result. Our team will increase the income of your project by implementing a new design.</p>
        </div>
        <!-- about content -->
      </div>
      <div class="col-lg-6 order-lg-first">
        <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
          <img src="/src/img/home/about2.svg" alt="about">
        </div>
        <!-- about image -->
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>
<!--====== ABOUT PART ENDS ======-->


<!--====== TESTIMONIAL PART START class="container" ======-->
<section id="testimonial">
  <div class="gtco-testimonials">
    <h2 class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">Our clients say</h2>
    <div class="owl-carousel owl-carousel1 owl-theme wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
      <div>
        <div class="card text-center"><img class="card-img-top" src="/src/img/clients/1.jpg" alt="Favrora clients avatar">
          <div class="card-body">
            <h5>Ronne Galle<br>
              <span>Project Manager</span></h5>
            <p class="card-text">Favrora is an absolute pleasure to work with. Hands down the most friendly, knowledgeable, and interactive company out there servicing in web design. Would recommend 10/10 times!</p>
          </div>
        </div>
      </div>
      <div>
        <div class="card text-center"><img class="card-img-top" src="/src/img/clients/2.jpg" alt="Favrora clients avatar">
          <div class="card-body">
            <h5>Missy Limana<br>
              <span>Engineer</span></h5>
            <p class="card-text">Favrora helped our non-profit build a beautiful, compelling website–one time, on budget, and with quick, responsive support. Highly recommend!!!</p>
          </div>
        </div>
      </div>
      <div>
        <div class="card text-center"><img class="card-img-top" src="/src/img/clients/3.jpg" alt="Favrora clients avatar">
          <div class="card-body">
            <h5>Martha Brown<br>
              <span>Project Manager</span></h5>
            <p class="card-text">Just had our website re-designed by Favrora and I could not be more pleased with the outcome as well as the process. Their team was always upbeat and patient with all my requests and their work quality was excellent. Great job from start to finish!</p>
          </div>
        </div>
      </div>
      <div>
        <div class="card text-center"><img class="card-img-top" src="/src/img/clients/4.jpg" alt="Favrora clients avatar">
          <div class="card-body">
            <h5>Hanna Lisem<br>
              <span>Project Manager</span></h5>
            <p class="card-text">I have worked extensively with Favrora. I can, with confidence, give them my highest recommendation. They are creative, professional and highly responsive to what I asked them to accomplish.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--====== TESTIMONIAL PART ENDS ======-->


<!--====== VIDEO COUNTER PART START ======-->
<section id="facts" class="video-counter pt-50 pb-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
          <img class="dots" src="/src/img/home/dots.svg" alt="dots">
          <div class="video-wrapper">
            <div class="video-image">
              <img src="/src/img/home/video.jpg" alt="video">
            </div>
            <div class="video-icon">
              <a href="https://www.youtube.com/watch?v=c_pTydwnp58" target="_blank" class="video-popup"><i class="lni lni-play"></i></a>
            </div>
          </div>
          <!-- video wrapper -->
        </div>
        <!-- video content -->
      </div>
      <div class="col-lg-6">
        <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
          <div class="counter-content">
            <div class="section-title">
              <div class="line"></div>
              <h3 class="title">Cool facts <span> about Favrora</span></h3>
            </div>
            <!-- section title -->
            <p class="text">Our team employs professional programmers and designers who know how to create a beautiful design and increase website income.</p>
          </div>
          <!-- counter content -->
          <div class="row no-gutters">
            <div class="col-6">
              <div class="single-counter d-flex align-items-center">
                <div class="d-flex counter-items">
                  <img src="/src/img/home/satisfied-client.svg" alt="Satisfied client icon">
                  <div class="m-left-20">
                    <span class="count"><span class="counter">97</span>%</span>
                    <p class="text">Satisfied client</p>
                  </div>
                </div>
              </div>
              <!-- single counter -->
            </div>
            <div class="col-6">
              <div class="single-counter d-flex align-items-center">
                <div class="d-flex counter-items">
                  <img src="/src/img/home/finished-project.svg" alt="Finished project icon">
                  <div class="m-left-20">
                    <span class="count"><span class="counter">38</span></span>
                    <p class="text">Achievements</p>
                  </div>
                </div>
              </div>
              <!-- single counter -->
            </div>
            <div class="col-6">
              <div class="single-counter d-flex align-items-center">
                <div class="d-flex counter-items">
                  <img src="/src/img/home/team-members.svg" alt="Team Members icon">
                  <div class="m-left-20">
                    <span class="count"><span class="counter">6</span></span>
                    <p class="text">Team Members</p>
                  </div>
                </div>
              </div>
              <!-- single counter -->
            </div>
            <div class="col-6">
              <div class="single-counter d-flex align-items-center">
                <div class="d-flex counter-items">
                  <img src="/src/img/home/our-blog-posts.svg" alt="Our Blog Posts">
                  <div class="m-left-20">
                    <span class="count"><span class="counter">40</span></span>
                    <p class="text">Our Blog Posts</p>
                  </div>
                </div>
              </div>
              <!-- single counter -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- counter wrapper -->
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>
<!--====== VIDEO COUNTER PART ENDS ======-->


<!--====== SEND REQUEST PART START  ======-->
<section id="contact">
  <div class="container">
    <h2 class="pb-20 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.3s">Send a request for website redesign</h2>

    <p class="wow fadeInUpBig pb-20" data-wow-duration="1s" data-wow-delay="0.4s">In the form, please enter the official email address of your site, for example: "name@mysite.com". So we can be sure that you really own this site.</p>

    <div class="row">
      <div class="col-md-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
        <label for="name">Your Name</label>
        <div>
          <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
        </div>
      </div>

      <div class="col-md-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
        <label for="email">Your Email</label>
        <div>
          <input type="email" id="email" name="visitor_email" placeholder="john.doe@site.com" required>
        </div>
      </div>

      <div class="col-md-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
        <label for="budget">Your budget</label>
        <select id="budget" name="client_budget" required>
          <option value="">Choose an approximate budget</option>
          <option value="300$ - 1500$">300$ - 1500$</option>
          <option value="800$ - 2000$">800$ - 2000$</option>
          <option value="1200$ - 10 000$">1200$ - 10 000$</option>
          <option value="Not sure">Not sure</option>
        </select>
      </div>

      <div class="col-md-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
        <label for="site_link">A link to your site that needs to be redesigned.</label>
        <div>
          <input type="text" id="site_link" name="site_link" required placeholder="site.com" pattern=[A-Za-z0-9\s]{8,60}>
        </div>
      </div>

      <div class="col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
        <label for="message">What do you want to redesign?</label>
        <div>
          <textarea id="message" name="visitor_message" placeholder="I want to redesign my homepage..." required></textarea>
        </div>
      </div>

      <div class="col-12 submit-div wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <button id="btn-send" class="main-btn" onclick="checkRecaptcha()">Send</button>
        <div class="g-recaptcha" data-sitekey="6LfLTiYbAAAAALl0NmKLsaZHNu81zUqwGIAPMGg0"></div>
        <div id="infoEmail"></div>
      </div>

      <div class="col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
        <img class="blue-airplane" src="/src/img/home/blue-airplane.png" alt="Blue paper airplane">
      </div>

      <img class="red-airplane" src="/src/img/home/red-airplane.png" alt="Red paper airplane">
    </div>
  </div>
</section>
<!--====== SEND REQUEST PART END ======-->


<!--====== FOOTER PART START ======-->
<footer id="footer" class="footer-area">
  <div class="container">
    <span style="display: none">
      <!--
      <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
      <div class="row">
        <div class="col-lg-6">
          <div class="subscribe-content mt-20">
            <h2 class="subscribe-title">Subscribe Our Newsletter <span>get regular updates</span></h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="subscribe-form mt-20">
            <input id="emailSubscribe" type="text" placeholder="Enter email">
            <button id="subsBtn" class="main-btn" onclick="saveEmail()">Subscribe</button>
          </div>
          <div id="errorSubscribe"></div>
        </div>
      </div>
      !-- row --
    </div> -->
    </span>
    <!-- subscribe area -->
    <div class="footer-widget pb-20">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="footer-about mt-10 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <a class="logo" href="/">
              <img src="/src/img/wlogo.png" alt="logo">
            </a>
            <p class="text">Our company Favrora makes a website redesign, we increase your site's income through a new and modern design. The main goal of our team is to make as many sites as beautiful and convenient as possible.</p>
          </div>
          <!-- footer about -->
        </div>
        <div class="col-lg-5 col-md-7 col-sm-7">
          <div class="footer-link d-flex mt-20 justify-content-md-between">
            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="footer-title">
                <h4 class="title">Quick Link</h4>
              </div>
              <ul class="link">
                <li><a href="/" title="Home">Home</a></li>
                <li><a href="/blog" title="Blog">Blog</a></li>
                <li><a href="/partnership" title="Partnership">Partnership</a></li>
              </ul>
            </div>
            <!-- footer wrapper -->
            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="footer-title">
                <h4 class="title">Resources</h4>
              </div>
              <ul class="link">
                <li><a href="/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
                <li><a href="/projects/avatar-maker" title="Avatar Maker">Avatar Maker</a></li>
                <li><a href="/about" title="About us">About us</a></li>
                <li><a href="/contact-us" title="Contact">Contact</a></li>
              </ul>
            </div>
            <!-- footer wrapper -->
          </div>
          <!-- footer link -->
        </div>
        <div class="col-lg-3 col-md-5 col-sm-5">
          <div class="footer-contact mt-20 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
            <div class="footer-title">
              <h4 class="title">Contact Us</h4>
            </div>
            <ul class="contact pt-10">
              <li>Favrora.com</li>
              <li>NY city, USA</li>
            </ul>
          </div>
          <!-- footer contact -->
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- footer widget -->
    <div class="footer-copyright">
      <div class="row">
        <div class="col-md-6">
          <div class="copyright">
            <p class="text">Copyright © <?php echo date("Y"); ?>. All Rights Reserved by Favrora.</p>
          </div>
        </div>

        <div class="col-md-6">
          <ul class="social">
            <li><a href="https://twitter.com/favrora_com" title="Twitter" target="_blank"><i class="lni lni-twitter-filled"></i></a></li>
            <li><a href="https://www.instagram.com/favrora_com/" title="Instagram" target="_blank"><i class="lni lni-instagram-filled"></i></a></li>
            <li><a href="https://www.linkedin.com/company/favrora/" title="Linkedin" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- footer copyright -->
  </div>
  <!-- container -->
  <div id="particles-2"></div>
</footer>
<!--====== FOOTER PART ENDS ======-->


<!--====== Jquery js ======-->
<script src="/src/js/home/vendor/jquery-3.5.1-min.js"></script>
<script src="/src/js/home/vendor/modernizr-3.7.1.min.js"></script>

<!--====== Counter Up js ======-->
<script src="/src/js/home/waypoints.min.js"></script>
<script src="/src/js/home/jquery.counterup.min.js"></script>

<!--====== wow js ======-->
<script src="/src/js/home/wow.min.js"></script>
<!--====== Particles js ======-->
<script src="/src/js/home/particles.min.js"></script>
<!--====== Main js ======-->
<script src="/src/js/home/main.js"></script>

<!--====== Main js ======-->
<script src="/src/js/home/owl.carousel.min.js"></script>
<script src="/src/js/home.js"></script>


<!--====== Bootstrap js ======
<script src="/src/js/home/popper.min.js"></script>
<script src="/src/js/home/bootstrap-4.5.0.min.js"></script>-->

<!--====== Scrolling Nav js ======-->
<!--====== Plugins js ======-->
<!--
<script src="/src/js/home/jquery.easing.min.js"></script>

<script src="/src/js/home/plugins.js"></script>

<script src="/src/js/home/scrolling-nav.js"></script> -->



<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
  function checkRecaptcha() {
    const response = grecaptcha.getResponse(),
      infoField = document.getElementById("infoEmail");

    if (response.length == 0) {
      infoField.innerHTML = "Please go through the captcha to submit the form!";
    } else {
      send();
    }
  }
</script>


<!--====== Live Chat js ======-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6077018ef7ce1827093a6331/1f38ds5nk';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>
<!--End of Tawk.to Script-->

</body>
</html>