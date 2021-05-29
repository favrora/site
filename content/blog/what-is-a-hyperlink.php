<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>What is a hyperlink? All about hyperlinks</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="On a website, a hyperlink (or link) is an element such as a word or button that redirects you to another resource when clicked.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/what-is-a-hyperlink">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="What is a hyperlink? All about hyperlinks">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/what-is-a-hyperlink">
  <meta property="og:image" content="https://favrora.com/src/img/blog/what-is-a-hyperlink/1.jpg">
  <meta property="article:published_time" content="2021-03-24">
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

$page_id = 22;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>What is a hyperlink? All about hyperlinks</h1>
    <span class="date">
      24 March 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/what-is-a-hyperlink/1.jpg" alt="What is a hyperlink? All about hyperlinks" class="w-400">


    <p>A hyperlink is often located in the text or in the picture and gives us the opportunity, by clicking on it, to go to a third-party resource or to another page of our project.</p>

    <p>The above link can be inserted into any part of the HTML document. And hyperlinks can help you not only shrink the canvas of solid, ugly text, but also increase the number of views on your other posts.</p>

    <p>As you may have noticed, the part of the text where the hyperlink is now located has changed its color to blue, or another contrasting shade, and was highlighted with an underline. This is the default. Also, in some cases, it is possible to display a frame or change the appearance of your cursor on hover. This, as they say, is already a matter of technology.</p>


    <h2>About broken hyperlinks</h2>

    <p>Here, I think everyone understands what this is about. But just in case, I will mention that a broken link, or in our case, a hyperlink, is the one that leads straight to nowhere. For example, you inserted a link to a document located at the time of writing your text in the cloud storage.</p>

    <p>And after the publication, due to inattention or urgent need, you took and without looking deleted that original file. The remaining hyperlink in the text will not disappear anywhere. It will remain until you edit it or delete it at all. Until this moment, she will be considered a bat, and there is no point in waiting for useful actions from her.</p>

    <p>The maximum functionality of a broken hyperlink is to transfer the user to a new page with an error code in full screen. Although someone may like this. Suddenly this is an artistic idea of the author.</p>


    <h2>Types of hyperlinks</h2>

    <p>So, there are different types of hyperlinks. I counted at least four different species and put them together for you in one list. Right here:</p>

    <ul>
      <li>anchor - a type of links that stands out for its design;</li>
      <li>non-anchor - designed as a URL;</li>
      <li>external - lead to third-party documents, web pages or resources;</li>
      <li>internal - carry out user navigation within your site, articles, publications, files, etc;</li>
    </ul>


    <h2>Why are hyperlinks useful?</h2>

    <p>We have disassembled the basics, mastered the materiel, now let's go over the zone where the hyperlinks live. They can be found not only online, but also in ordinary desktop applications. For example, take the entire office suite from Microsoft. Word, Excel and even PowerPoint can use them.</p>

    <p>But what can we say on trifles, hyperlinks are used even in Outlook. In the case of online - they are generally everywhere, as I said a little above.</p>

    <p>You have every right to ask me, why should hyperlinks be inserted into the presentation? This is a logical question, so do not be afraid and write in the comments all your thoughts on this matter. First, everything is correct. You can live without hyperlinks in your presentation. </p>

    <p>And it will even be quite a good option. And most people have never inserted such elements into a "PPT" or "PPTX" file at all. But in certain cases, it can be incredibly handy!</p>

    <p>Imagine you work as an analyst for a large international corporation. You have an urgent task. Let it be a quarterly report on all your company's overseas sales.</p>

    <img src="/src/img/blog/what-is-a-hyperlink/2.jpg" alt="Why are hyperlinks useful?" class="w-400">

    <p>He was asked to prepare in a presentation format so that it would be convenient, and most importantly, to clearly demonstrate the effectiveness of the firm's work at the upcoming meeting of the heads of all departments. Everything is ready, you are a highly qualified specialist, of course.</p>

    <p>However, the presentation is catastrophically overloaded with information, and there were not 10 slides or 20 slides, but all 50 or even several hundred. Most of the entire speech is occupied by dry numbers, which, of course, could be aesthetically visualized, but the management wants to see pure statistics, and not just diagrams and graphs.</p>

    <p>In this case, you can simply put all the numbers and calculations on a third-party resource, on a USB flash drive, hard drive or in cloud storage. And in the presentation itself, insert links to specific data.</p>

    <p>A clever technique will prompt you to choose which hyperlink format you prefer:</p>

    <ul>
      <li>link to the slide (for example, if you have placed all boring and uninteresting numbers and letters on the last slides, so as not to get confused);</li>
      <li>go to a web page (cloud storage also goes here);</li>
      <li>sending a letter by e-mail (in our case, this option is not very relevant, unless during the presentation of your report you suddenly decide to remind your best friend about the upcoming party ...).</li>
    </ul>


    <h2>Conclusion</h2>

    <p>To protect your resource from falling under the sanctions of search engines, you should carry out competent external website optimization. Make a bet not on quantitative, but on qualitative composition of links.</p>

    <p>And for this you need to constantly analyze the link mass. Pay attention to links that are on non-themed pages or contain a frequently repeated keyword in the anchor list. Classify all links leading to your site, clean up low-quality links, while continuing to build up the link mass on high-quality donor pages.</p>



  </div>

  <?php
  $cmtx_identifier = '20';
  $cmtx_reference  = 'What is a hyperlink?';
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
      "@id": "https://favrora.com/blog/what-is-a-hyperlink"
    },
    "headline": "What is a hyperlink? All about hyperlinks",
    "description": "On a website, a hyperlink (or link) is an element such as a word or button that redirects you to another resource when clicked.",
    "image": "https://favrora.com/src/img/blog/what-is-a-hyperlink/1.jpg",
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
    "datePublished": "2021-03-24",
    "dateModified": "2021-04-16"
  }
</script>

<?php include $_SERVER['DOCUMENT_ROOT'].'/template/footer.php' ?>

</body>
</html>