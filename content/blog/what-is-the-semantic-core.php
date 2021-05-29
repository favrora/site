<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>What is the semantic core of the site?</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="The semantic core is a set of words and phrases that reflect the subject matter and structure of the site. Favrora blog.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/what-is-the-semantic-core">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="What is the semantic core of the site?">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/what-is-the-semantic-core">
  <meta property="og:image" content="https://favrora.com/src/img/blog/what-is-the-semantic-core/1.jpg">
  <meta property="article:published_time" content="2021-04-02">
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

$page_id = 24;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>What is the semantic core of the site?</h1>
    <span class="date">
      2 April 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/what-is-the-semantic-core/1.jpg" alt="What is the semantic core of the site?" class="w-400">


    <p><strong>The semantic core</strong> is a set of words and phrases that reflect the subject matter and structure of the site. Semantics is a branch of linguistics that studies the semantic content of language units.</p>

    <p>Composing the semantic core, you answer the global question: what information can be found on the site. Since one of the main principles of business and marketing is customer focus, the creation of the semantic core can be viewed from the other side. You need to determine which search terms are used by users to search for information that will be published on the site.</p>


    <h2>What is it for?</h2>

    <p>The construction of a semantic core solves another problem. We are talking about the distribution of search phrases across the pages of the resource. By working with the engine, you determine which page is the most accurate for a particular search query or group of queries.</p>

    <p>There are two approaches to solving this problem. The first involves the creation of a site structure based on the results of the analysis of user search queries. In this case, the semantic core defines the framework and architecture of the resource.</p>

    <p>The second approach involves preliminary planning of the resource structure before analyzing search queries. In this case, the semantic core is distributed over the finished framework.</p>

    <p>Both approaches work in one way or another. But it is more logical to first plan the structure of the site, and then determine the requests by which users will be able to find this or that page.</p>

    <p>In this case, you remain proactive: you yourself choose what you want to tell potential customers. If you adjust the resource structure to the keys, then you remain an object and react to the environment, rather than actively changing it.</p>

    <p>The difference between SEO and marketing approaches to building a core needs to be clearly emphasized here. Here's the logic of a typical old-school SEO: to create a website, you need to find keywords and select phrases that will just get to the top of the results.</p>

    <p>After that, you need to create a site structure and distribute the keys across the pages. The page content needs to be optimized for key phrases.</p>

    <p>This is the logic of a businessman or a marketer: you need to decide what information to broadcast to the audience using the site. To do this, you need to know your industry and business well.</p>

    <p>First, you need to plan a rough site structure and a preliminary list of pages. After that, when building a semantic core, you need to find out how the audience searches for information. With the help of content, you need to answer the questions that the audience asks.</p>

    <p>What are the negative consequences of using the "SEO" approach in practice? Due to the development according to the principle of "dancing from the stove", the information value of the resource decreases.</p>

    <p>The business must shape trends and choose what to say to customers. A business should not limit itself to reactions to the statistics of search phrases and create pages only for the sake of optimizing the site for some key.</p>

    <p>Due to the peculiarities of approaches to promotion, representatives of the old school SEO unreasonably weed out some of the promising search queries. This is due to high competitiveness or low KEI, low frequency, junk keys, etc.</p>

    <p>There are no junk or too competitive keys. At Texterra, we have a radically different approach to website promotion - the emphasis is on the widest possible semantic core.</p>

    <p>The planned result of building a semantic core is a list of key queries distributed across the pages of the site. It contains page URLs, search queries and an indication of their frequency.</p>


    <h2>How to build a site structure</h2>

    <p>The site structure is a hierarchical page layout. With its help, you solve several problems: you plan the logic of information presentation, ensure the usability and compliance of the site with the requirements of search engines.</p>

    <p>Any convenient tool will do to create the structure: a spreadsheet editor, your favorite text editor, or you can even draw by hand on a piece of paper. The main thing, when planning the hierarchy of the future site, is to answer yourself two questions:</p>


    <h3>What information do you want to communicate to users?</h3>

    <p>Where is it better to place this or that information block? Imagine that you have a small pastry shop website. It includes information pages, a publications section and a showcase or product catalog.</p>

    <p>For further work with the semantic core, arrange the site structure in the form of a table. In it, indicate the names of the pages and indicate their subordination. Also include columns in the table for page URLs, keywords, and frequency.</p>

    <p><b>Analytics systems</b>. If you are building a semantic core for an existing site, use the analytics systems "Yandex.Metrica" or Google Analytics. With their help, you can determine what search phrases are used by the existing audience of the project.</p>

    <p>Data on popular search queries can be obtained from Yandex and Google webmasters' offices. In Search Console, the information is located under Search Traffic - Search Query Analysis. In the "Webmaster" use the section "Search queries - Popular queries".</p>


    <h2>Analysis services for competing websites</h2>

    <img src="/src/img/blog/what-is-the-semantic-core/2.jpg" alt="Analysis services for competing websites" class="w-400">

    <p>Competitor sites are a great source of keyword ideas. If you are interested in a specific page, you can manually determine the search phrases for which it is optimized.</p>

    <p>To find the main keys, it is usually enough to read the material or check the content of the keywords meta tag in the page code. You can also use services for semantic analysis of texts, for example, Istio or Advego.</p>


    <h2>Remove inappropriate search phrases</h2>

    <p>This is the most time consuming stage of working with the kernel. You need to manually remove inappropriate search phrases from the kernel.</p>

    <p>Do not use frequency, concurrency, or other purely "SEO" metrics as a criterion for evaluating keys. What phrases can be safely excluded from the list? Here are some examples:</p>


    <h2>Keys mentioning competing brands</h2>

    <p>Keys that mention products or services that you do not sell or plan to sell. Keys that include the words "inexpensive", "cheap", "with a discount." If you are not dumping, cut off those who love the cheap so as not to spoil the behavioral metrics.</p>

    <p>Duplicate keys. For example, of the three keys “custom-made cakes for a birthday”, “cakes to order for the day” and “cakes to order for birth”, it is enough to leave the first one.</p>

    <p>Keys mentioning inappropriate regions or addresses. For example, if you serve residents of the Northern District of Cherepovets, the key "cakes to order industrial district" is not suitable for you.</p>


  </div>

  <?php
  $cmtx_identifier = '22';
  $cmtx_reference  = 'What is the semantic core of the site?';
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
      "@id": "https://favrora.com/blog/what-is-the-semantic-core"
    },
    "headline": "What is the semantic core of the site?",
    "description": "The semantic core is a set of words and phrases that reflect the subject matter and structure of the site. Favrora blog.",
    "image": "https://favrora.com/src/img/blog/what-is-the-semantic-core/1.jpg",
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
    "datePublished": "2021-04-02",
    "dateModified": "2021-04-16"
  }
</script>

<?php include $_SERVER['DOCUMENT_ROOT'].'/template/footer.php' ?>

</body>
</html>