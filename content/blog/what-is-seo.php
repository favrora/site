<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>What is SEO? Search Engine Optimization 2021 - Favrora</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="SEO (Search Engine Optimization) is a comprehensive development and promotion of a website to reach the first positions in search engine results.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/what-is-seo">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="What is SEO? Search Engine Optimization 2021">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/what-is-seo">
  <meta property="og:image" content="https://favrora.com/src/img/blog/what-is-seo/1.jpg">
  <meta property="article:published_time" content="2021-03-10">
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

$page_id = 2;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>What is SEO? Search Engine Optimization 2021</h1>
    <span class="date">
      10 March 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/what-is-seo/1.jpg" alt="Search Engine Optimization 2021" class="w-400">

    <p><strong>SEO (Search Engine Optimization)</strong> is a comprehensive development and promotion of a website to reach the first positions in search engine results.</p>

    <p>The higher a site is in Google search results, the more people it attracts to the site. Therefore, works on:</p>

    <ul>
      <li>increasing the correspondence of pages to search queries (relevance),</li>
      <li>optimization of structure and content,</li>
      <li>improvement of commercial factors,</li>
      <li>optimization of the page code,</li>
      <li>build-up of external factors of the resource's significance.</li>
    </ul>

    <p><b>SEO optimization</b> has two main components: internal and external. It is important that both are given sufficient attention, otherwise effective promotion cannot be achieved.</p>


    <h2>Internal optimization</h2>

    <p>As part of the implementation of this component of SEO, the state of the site improves, and as a result, it moves up in the search engine results. For internal optimization, it is necessary to carry out the following work:</p>

    <ul>
      <li>select the keywords suitable for the promotion of your resource and make up a semantic core of them;</li>
      <li>fix technical errors, including in the code, increase loading speed and get rid of broken pages;</li>
      <li>optimize images posted on the site so that pages load faster;</li>
      <li>improve the usability of the resource. Webmasters, as a rule, undeservedly ignore this aspect of optimization. But today it is not enough to hastily prepare a landing page; attention is required to the visitor's comfort and design.  So, for example, it is better to make buttons not angular, but rounded.  As the research results show, users click on them many times more often, and this is an important conversion factor;</li>
      <li>optimize the structure of the site (make its map);</li>
      <li>carry out a linking (using reciprocal links to link the pages of the resource);</li>
      <li>work on description, title and headings in H1 – H6 format.</li>
    </ul>

    <p>There is a little secret.  Images for placement on the site can be optimized using Photoshop tools. Select "Save for web" from the menu, and this will save you two problems at once:</p>

    <ul>
      <li>the volume and weight of the image will decrease;</li>
      <li>the color scheme will be corrected and the display on the monitor will be improved.</li>
    </ul>


    <h2>External optimization</h2>

    <p>Ten years ago, such optimization consisted only in the accumulation of links, but now much more careful and delicate work is needed with the use of new tools that meet the requirements of search engines.  Only the goal has not changed - to gain link mass.</p>

    <p>As part of external optimization, the following works are carried out:</p>

    <ul>
      <li>preparing and placing content that can interest users.  They will spread information and thereby increase the number of links on the Internet;</li>
      <li>the site is registered in specialized directories.  When choosing such sites, you should give preference to those that are not too spammed and relevant in the subject;</li>
      <li>links are posted in web 2.0 media.  We are talking about platforms on which users have the opportunity to post their content, usually created on their own.</li>
      <li>the resource is actively popularized through thematic blogs and forums.</li>
    </ul>

    <p>Taking these measures, it is possible to analyze in parallel how competing resources are untwisted.  It's worth doing this on a monthly basis.</p>


    <h2>SEO optimization techniques</h2>

    <img src="/src/img/blog/what-is-seo/2.png" alt="SEO optimization techniques" class="w-400">

    <h3>White optimization</h3>
    <p>It includes improving the site: its design, usability, content quality.  Optimization by mentioning the resource in various press releases and reviews is also considered white.  An important area of   honest promotion</p>

    <h3>Gray optimization</h3>
    <p>In this case, SEOs are already using some tricks.  The texts posted on the site contain specially selected keywords, which can be searched for by potential clients.  Such requests may not look very natural, so the copywriter should try to write the most organic text that can interest the reader.</p>

    <h3>Black optimization</h3>
    <p>This kind of SEO is completely illegal, and the search engines punish it severely.  An example of black promotion is the creation of doorway sites that are optimized for one request in order to become the leaders in search results.</p>

    <p>Another technique is cloaking, the essence of which is to demonstrate to the robot one resource, and to the user another, with completely different content.</p>


    <h2>Optimization process control</h2>

    <p>Having determined the amount of work required and choosing a SEO, you need to let him know that the solution to the tasks set will be controlled.  Specify the frequency of submission of reports on the work done (once a week or a month) and be sure to analyze them. To control the SEO work really effectively, we recommend following these recommendations:</p>

    <ul>
      <li>watch for changes in the position of the site pages for key queries from the semantic core.  They may not immediately reach the top, but the promotion should be clear;</li>
      <li>with proper optimization, the role of traffic coming from organic search results grows;</li>
      <li>watch your link building build.  It's good if you have access to your personal account on the exchange where the links were bought.  In it, you can make sure that the purchased links are there and they are permanent;</li>
      <li>it is also important to control the visibility of the resource in search engines, to estimate the number of search queries, in response to which your site is displayed in the search results.  You can use Rush Analytics or Serpstat for this.</li>
    </ul>


    <h2>Bonus - tricks</h2>

    <p>Concluding the story about SEO, one cannot but recall some of the tricks of <b>professional SEO</b>.  Not everyone is familiar with these techniques, so you won't have much competition.</p>

    <ul>
      <li>Islands with content.  When difficulties arise with the promotion of a site in search engines, you can use other opportunities to become the leader of the search results.  Create a YouTube channel or social media group.  Search engines index them on a par with sites, and there is a good chance of getting to the top.  The fact is that when starting a search, they try to show the user at least one link to a social network.</li>
      <li>Extend your domain to 3 years.  This will increase the trust of search engines to your resource.
      <li>Mark the location of your company on search engine maps.  Search engines are promoting their services, and this should be used.</li>
      <li>Include a search term in your website URL.  Ideal if the URL will be your main target request.</li>
      <li>Post a privacy policy on the website.  Its presence demonstrates your concern for user rights.</li>
    </ul>

  </div>

  <?php
  $cmtx_identifier = '1';
  $cmtx_reference  = 'What is SEO?';
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
      "@id": "https://favrora.com/blog/what-is-seo"
    },
    "headline": "What is SEO? Search Engine Optimization 2021",
    "description": "SEO (Search Engine Optimization) is a comprehensive development and promotion of a website to reach the first positions in search engine results.",
    "image": "https://favrora.com/src/img/blog/what-is-seo/1.jpg",
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
    "datePublished": "2021-03-10",
    "dateModified": "2021-04-16"
  }
</script>

<?php include $_SERVER['DOCUMENT_ROOT'].'/template/footer.php' ?>

</body>
</html>