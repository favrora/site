<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>7 Big Bad AB Testing Mistakes: Experts Experience</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="There are hundreds of ways to mess up a split test. In this article, you will see the 7 biggest AB testing mistakes made by well-known marketers.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/7-big-bad-ab-testing-mistakes">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="7 Big Bad AB Testing Mistakes: Experts Experience">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/7-big-bad-ab-testing-mistakes">
  <meta property="og:image" content="https://favrora.com/src/img/blog/ab-testing-errors/1.jpg">
  <meta property="article:published_time" content="2021-06-11">
  <meta property="article:author" content="https://www.linkedin.com/in/favrora/">
  <meta property="og:locale" content="en_US">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:creator" content="favrora_com">

  <!-- favicon -->
  <link rel="shortcut icon" href="/src/img/icon.png">

  <!-- css -->
  <link rel="stylesheet" href="/src/css/main.css">
  <link rel="stylesheet" href="/src/css/blog-page.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YZM6DLXFVW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YZM6DLXFVW');
  </script>
</head>
<body id="body">

<?php include $_SERVER['DOCUMENT_ROOT'].'/template/header.php';

require_once($_SERVER['DOCUMENT_ROOT'].'/template/backend/db-connect.php'); // Database connection file
require_once($_SERVER['DOCUMENT_ROOT'].'/template/backend/count-view.php');  // PHP functions file

$page_id = 26;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>7 Big Bad AB Testing Mistakes: Experts Experience</h1>
    <span class="date">
      11 June 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/ab-testing-errors/1.jpg" alt="7 Big Bad AB Testing Mistakes: Experts Experience" class="w-400">

    <p>Optimizing conversions using A/B tests is far from an exact science, and even experts with many years of experience and understanding of user psychology once made mistakes. Yes, and they continue to make them.</p>

    <p>There are hundreds of ways to mess up a split test, so much so that it will do more harm than good. In this article, you will see 7 grandiose AB-testing mistakes made by well-known marketers.</p>


    <h2>Pip Laia, ConversionXL: Stopped tests too early</h2>

    <p>"When I started working, my main mistake was the testing period was too short. I've been rolling it out literally for days, as soon as I thought I "saw a trend". This, of course, is complete bullshit – you should not do this.</p>

    <p>The optimal tactic is to calculate in advance the minimum time and volume of traffic that is necessary to ensure a representative sample. And the longer the testing period – the better. Let it cover the full cycle of business processes, all days of the week, all traffic sources, and even all phases of the moon – that's why you conduct tests to identify factors that affect user behavior on the site."</p>


    <h2>Craig Sullivan, Optimiseordie: Did not integrate test data with Google Analytics</h2>

    <p>"The most dangerous mistake in A / B testing is not fully understanding what you are doing. I felt it on my own skin.</p>

    <p>We conducted a split test, and although the first results were encouraging, in the end, there was no significant difference between the options. This was strange, because we used completely different content in the compared versions.</p>

    <p>I checked the settings of the program responsible for traffic distribution – everything was in order. I checked the browser settings, consulted with the developers, with colleagues – no result.</p>

    <p>Fortunately, we had several custom variables set up in Google Analytics that we wanted to use to track the behavior of different groups of our target audience. Analyzing this data, I noticed something strange.</p>

    <p>The split test assumes that the traffic is divided approximately equally between the two options being compared. While Google Analytics showed that more than 80% of users saw both versions of the tested page.</p>

    <p>So the programmers found an error – they made the setting so that cookies were reset after the end of the session. Since then, I always coordinate all the settings with the programmers. And, of course, I don't trust data obtained only from one source."</p>

    <img src="/src/img/blog/ab-testing-errors/2.jpg" alt="AB Testing Mistakes: Experts Experience" class="w-400">


    <h2>Alkhan Keser, Widerfunnel.com: I was interested in design, not conversion optimization</h2>

    <p>"I once spent several weeks designing two variants of a landing page. I participated in this project both as a designer and as a developer, and I tried to make the landing pages bright and memorable. I was sure that the new design would give at least a 20% increase in conversion.</p>

    <p>Alas, the hopes were not fulfilled. I had to move on to more detailed tests, which taught me a lot. I found out how powerful the selling title works, how important the main text on the page is. Now I understand that it was not necessary to focus on the design."</p>

    <p>Joe Harvey, Conversion Sciences: made a website that is not able to generate revenue
    "The main principle of optimizers is the same as that of doctors: do no harm. In our case, this means that A / B tests should not prevent the site from earning money. Yes, some of the options will give a conversion rate lower than the control version. But in the long run, testing should recoup costs and lead to an increase in conversion rates.</p>

    <p>But sometimes one inaccuracy can negate all your efforts. In my practice, there was a case that I still remember with a shudder. We made a tiny mistake on the landing page. All they did was mix up two numbers... in the phone number.</p>

    <p>By the time we discovered the error, we had lost hundreds of calls from potential customers. It was a lesson for life."</p>


    <h2>Andre Mori, WebArts.de: tracked incorrect KPIs</h2>

    <p>"A couple of years ago I was asked:" What is the main KPI when evaluating A / B tests?". The answer seems to be obvious-conversion. But after thinking about it seriously, I came to the conclusion that we overestimate the value of this indicator. The main thing is the real profit of the business. We strive to increase sales, but in practice, conversion growth does not always give it.</p>

    <p>Here are the results of the landing page tests we conducted recently:</p>

    <ul>
      <li>Option 1: focus on discounts: +13% to conversion, -14% to net profit.</li>
      <li>Option 2: focus on product benefits: +41% conversion rate, + 22% net profit.</li>
    </ul>

    <p>As you can see, Option 1 also showed an increase in conversion, but at the same time the site was in the red in terms of profit. And in Option 2, the profit did not grow as much as the conversion rate.</p>

    <p>Now I no longer consider conversion as the main indicator of efficiency. What's more important is why we do it."</p>

    <img src="/src/img/blog/ab-testing-errors/3.jpg" alt="AB Testing Mistakes: Experts Experience" class="w-400">


    <h2>John Ekman, Conversionista: I chose not the best period for testing</h2>

    <p>"I will tell you about the two biggest failures:</p>

    <p>The first error: we chose an unsuccessful period for testing. We conducted a split test for an online stationery store. The optimal duration was chosen-more than a month, but this month fell on Christmas and New Year's holidays. You know, the data obtained during this period turned out to be unrepresentative.</p>

    <p>Second error: the page template was confused with a specific version. Some projects, such as online stores, use multiple templates, which are then used to create thousands of individual pages. And when you run a split test, you need to work at the template level, because each page individually accounts for only a small part of the traffic.</p>

    <p>Once we conducted a similar experiment for an online store, but we made a mistake in the options settings. As a result, all the product cards made according to the test template began to display the same price. Horror! I had to urgently curtail testing. Fortunately, the mistake was noticed quickly enough, and it did not have time to lead to serious consequences."</p>


    <h2>Michael Ogard, ContentVerve.com: I ran A / B tests without a clear idea</h2>

    <p>"When I first started doing A / B testing, there was little available material on this topic, so I had to learn from my own experience. Many times I felt like a complete idiot, but looking back, I am grateful for all these mistakes. They taught me to anticipate the consequences of my actions and to attach due importance to the preparatory stages of the work.</p>

    <p>As Abraham Lincoln said, " Give me six hours to cut down a tree – and I'll spend the first four hours sharpening an axe."</p>

    <p>Most of my mistakes at the early stage were due to the fact that I was cutting at the back: I took up the work without having sufficient initial data and a clear understanding of what I wanted to achieve.</p>

    <p>I just pounded on the wood with a blunt axe in the hope that it would eventually give up and fall. I thought the best way to optimize conversion was to run as many tests as possible.</p>

    <p>But after many years of trial and error, it dawned on me that the most successful tests are those based on preliminary calculations, insight, and clear hypotheses... well, plus a little luck and intuition.</p>

    <p>To continue the Lincoln metaphor, developing the basic idea of a split test makes your axe really sharp, and allows you to quickly and effortlessly cut down a tree. Yes, analyzing hypotheses is much more difficult than testing everything. However, the result is much more impressive."</p>


  </div>

  <?php
  $cmtx_identifier = '24';
  $cmtx_reference  = '7 Big Bad AB Testing Mistakes: Experts Experience';
  include $_SERVER['DOCUMENT_ROOT'].'/content/ads/box.php';
  ?>

</div>
<!--/Content Section -->

<!-- Schema org -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "https://favrora.com/blog/7-big-bad-ab-testing-mistakes"
    },
    "headline": "7 Big Bad AB Testing Mistakes: Experts Experience",
    "description": "There are hundreds of ways to mess up a split test. In this article, you will see the 7 biggest AB testing mistakes made by well-known marketers.",
    "image": "https://favrora.com/src/img/blog/ab-testing-errors/1.jpg",
    "author": {
      "@type": "Organization",
      "name": "Favrora"
    },
    "publisher": {
      "@type": "Organization",
      "name": "Favrora",
      "logo": {
        "@type": "ImageObject",
        "url": "https://favrora.com/src/img/icon.png"
      }
    },
    "datePublished": "2021-06-11",
    "dateModified": "2021-06-11"
  }
</script>

<?php include $_SERVER['DOCUMENT_ROOT'].'/template/footer.php' ?>

</body>
</html>