<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>How To Conduct A Link Audit - Favrora</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="How To Conduct A Link Audit? Link auditing is the process of analyzing links pointing to your site in order to find potential problems.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/how-to-conduct-a-link-audit">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="How To Conduct A Link Audit - Favrora">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/how-to-conduct-a-link-audit">
  <meta property="og:image" content="https://favrora.com/src/img/blog/how-to-conduct-a-link-audit/1.jpg">
  <meta property="article:published_time" content="2021-03-20">
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

$page_id = 20;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>How To Conduct A Link Audit - Favrora</h1>
    <span class="date">
      20 March 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/how-to-conduct-a-link-audit/1.jpg" alt="How To Conduct A Link Audit - Favrora" class="w-400">


    <p>Many people are probably familiar with the "letters of happiness" that Google sent out, notifying webmasters about being caught in fraudulent activities with links that violate the "Requirements for the quality of the site."</p>

    <p>To prevent the site from falling under the filters and arousing the suspicions of search engines, the anchor list should look as natural as possible.</p>

    <p>Naturalness of the link profile In the anchor list, it is desirable to have all the variants of the text of the links - not only in the form of search queries, but also without anchor, diluted, in the form of picture links. So, what you need to pay attention to when analyzing the anchor list:</p>


    <h3>1. Percentage of brand anchors</h3>

    <p>This can be the name of the company or brand, the name of the site, the name of the head and other signs of belonging to the company. </p>


    <h3>2. Percentage of anchorless anchors</h3>

    <p>Links with frequently used words such as "here", "here", "in more detail", "on the site"; links in the form of a site or page address (with https: // and without, with and without www, with and without a slash at the end), indicating the geographic area in the link text. If the percentage is small, increase it.</p>


    <h3>3. Percentage of graphic links</h3>

    <p>These can be image links or banners, which are a good tool for diluting the anchor list and making the link mass appear natural. Search engines use the Alt attribute as a text anchor. If there is no Alt attribute, then the surrounding text, the page title, can be used.</p>


    <h3>4. Percentage of search queries and their variations</h3>

    <p>These are the exact occurrence of the search query, keyword modifications, synonyms, alternative words, inaccurate occurrences of the promoted query, link texts with dilution of auxiliary words. If a site has a high percentage of similar links, the chances are high that the site will be filtered.</p>


    <h3>5. No overspam of the anchor list</h3>

    <p>Spam anchor list contains an excessive number of occurrences of promoted phrases in link anchors.</p>


    <h3>6. Grammatically correct link texts</h3>

    <p>Write links texts that are literate from the point of view of the English language. The use of morphological unnatural constructions in the anchor, clearly designed for search robots, is unacceptable.</p>

    <p>In the following example, there is no explicit keyword spam, but search queries are used in spam constructions and there are practically no non-anchor links:</p>

    <ul>
      <li>General recommendations for the approximate percentage of links in the anchor list: direct entry of key queries - up to 10%</li>
      <li>branded keywords - about 10%</li>
      <li>Keyword modifications, synonyms, alternative words, inaccurate occurrences of the promoted query, link texts with dilution with auxiliary words - 40-50%</li>
      <li>non-anchor links for new sites should be up to 50% of the anchor list, for old ones - up to 30%. Equal distribution of link purchases Another important point to pay attention to is the even distribution of link purchases between all promoted pages.</li>
    </ul>


    <h2>What problems can you face?</h2>

    <img src="/src/img/blog/how-to-conduct-a-link-audit/2.jpg" alt="How To Conduct A Link Audit - Favrora" class="w-400">

    <p>Very often in audits, we are faced with a predominance in the links of the main page of the site, which informs the search engines about an unnatural increase in the link mass. Also, do not focus the entire link mass only on the promoted pages.</p>

    <p>The donor page is not in the search engine index The first thing to do is to remove links from non-indexed pages.  You can manually check the presence of a page in the SERP using Google advanced search. Enter in the Google search box "site: yoursite.com" and you will see which pages were indexed and added to the search.</p>

    <p>This is the most time consuming, but also the surest way to check page indexing.  But with large quantities, this approach becomes extremely ineffective, so it would be more expedient to choose a convenient program or service, for example, YCCY.</p>

    <p>This analysis is important, since in our practice at least 10% of purchased links are missing in the index of Google, which means that at least 10% of the promotion budget is wasted.</p>

    <p>Be sure to check donors for viruses (by Google), since such sites can badly affect the credibility of the promoted resource.</p>

    <p>From links located on low-quality donors, you must refuse or contact the owner of the resource with a request to remove the link.  Remember that you need to remove links gradually, since the "blinking" of the link mass is negatively perceived by search engines, informing them that links are growing in an unnatural way.  As a result, site positions can sag or "stick" in certain positions.</p>

    <p>The page under the filter "You are the last", if the document is not in the search for a part of the text in quotation marks, it is not in the first places in the search results, or it is only present in the additional results "show everything without exception".</p>


    <h2>Conclusion</h2>

    <p>To protect your resource from falling under the sanctions of search engines, you should carry out competent external website optimization. Make a bet not on quantitative, but on qualitative composition of links. And for this you need to constantly analyze the link mass.</p>

    <p>Pay attention to links that are on non-themed pages or contain a frequently repeated keyword in the anchor list. Classify all links leading to your site, clean up low-quality links, while continuing to build up the link mass on high-quality donor pages.</p>

  </div>

  <?php
  $cmtx_identifier = '18';
  $cmtx_reference  = 'How To Conduct A Link Audit';
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
      "@id": "https://favrora.com/blog/how-to-conduct-a-link-audit"
    },
    "headline": "How To Conduct A Link Audit - Favrora",
    "description": "How To Conduct A Link Audit? Link auditing is the process of analyzing links pointing to your site in order to find potential problems.",
    "image": "https://favrora.com/src/img/blog/how-to-conduct-a-link-audit/1.jpg",
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
    "datePublished": "2021-03-20",
    "dateModified": "2021-04-16"
  }
</script>

<?php include $_SERVER['DOCUMENT_ROOT'].'/template/footer.php' ?>

</body>
</html>