<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>What is retargeting? Everything you need to know</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="Retargeting is an advertising tool that allows you to reach an audience that has already visited the advertised site. Ads are displayed on sites that are part of ad networks.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/what-is-retargeting">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="What is retargeting? Everything you need to know">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/what-is-retargeting">
  <meta property="og:image" content="https://favrora.com/src/img/blog/what-is-retargeting/1.jpg">
  <meta property="article:published_time" content="2021-06-19">
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

$page_id = 32;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>What is retargeting? Everything you need to know</h1>
    <span class="date">
      19 June 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/what-is-retargeting/1.jpg" alt="What is retargeting? Everything you need to know" class="w-400">

    <p>Retargeting is an advertising tool that allows you to reach an audience that has already visited the advertised site. Ads are shown on sites that are part of ad networks. Google Adwords calls this technology remarketing and supports impressions on search.</p>


    <h2>Principle of operation</h2>

    <p>Retargeting works like this. A special code is placed on the advertiser's website (for in Google Adwords - a remarketing code). At the moment of performing some action or just visiting, it is triggered and saves information from the user's browser, which will then help to find it.</p>

    <p>On the sites participating in the advertising network, a code is placed that reads this information, and if there is a match, the ad is displayed to the desired user.</p>


    <h2>What tasks can be solved</h2>

    <p>Ad impressions to those who have already had experience with a product, service, or brand can:</p>

    <ul>
      <li>"Put the squeeze" on before buying. According to statistics, the percentage of abandoned "Carts" with unpaid goods or started but not completed applications is simply enormous. Ads are a way to remind you of yourself, push you into action, build brand / quality confidence;</li>

      <li>stimulate upselling. If some related products or services were not ordered immediately, their offer (especially with a discount) may end up with a purchase;</li>

      <li>maintain the loyalty of regular customers. A reminder of yourself, especially when backed up by a special offer, increases the chances of repeat sales;</li>

      <li>contribute to the growth of brand awareness. Many buyers are distrustful of unknown products and companies. Periodic screenings on other resources can promote gradual memorization and build confidence;</li>

      <li>involve in the buying cycle. With the help of a built-up series of retargeting ads and in the presence of competent segmentation, you can gradually generate interest in the advertised object.</li>
    </ul>

    <p>These tasks help to solve different retargeting methods.</p>


    <h2>Types of retargeting</h2>

    <img src="/src/img/blog/what-is-retargeting/2.jpg" alt="What is retargeting? Everything you need to know" class="w-400">

    <p>Broadly speaking, retargeting can be:</p>

    <ul>
      <li>behavioral. The classic version based on a visit to the site in the past;</li>
      <li>search. It differs in that ads can be shown on search results pages, as well as using keywords for targeting;</li>
      <li>dynamic. The difference between this and other types is that ads are personalized for each specific visitor;</li>
      <li>for users of mobile applications.</li>
    </ul>

    <p>The possibilities and principles of implementation may differ in different advertising systems.</p>


    <h2>So Google Adwords uses the following types of retargeting:</h2>

    <ul>
      <li>standard. Visitors who have previously interacted with the site will see advertisements on other resources and in applications;</li>
      <li>dynamic. The ads will contain exactly those goods and services that users were interested in;</li>
      <li>for video. This means that ads will be displayed on YouTube, Display Network sites and in their videos, in apps. Condition - viewing the advertiser's video or channel on YouTube;</li>
      <li>by email addresses. Ads will be displayed in Google services to users who are logged in under the email addresses added by the advertiser in the campaign settings.</li>
    </ul>

    <p>Different conditions can be combined at the same time for more accurate segmentation.</p>


    <h2>On-site targeting</h2>

    <p>On-site targeting is clearly aimed at users who have already visited your site. It doesn't matter if they bought goods or services, or performed other actions without placing an order.</p>

    <p>Working with this category of users not only allows you to increase conversions, but also retains those potential customers who are already interested in your brand's products or services.</p>


    <h2>Off-site targeting</h2>

    <p>If earlier retargeting was limited only to the behavior of users on the site, today everything has changed dramatically, as more and more users spend time on social networks. This means that it is no longer effective to communicate about brands and their products in the same place.</p>

    <p>Instead, it is necessary to expand the scope of information delivery. In other words, bring work to sites that do not belong to the brand. Popular social networks like Facebook quickly realized this and started working on engagement targeting.</p>

    <p>In other words, brands push users to retarget based on how they interacted with the platform as it relates to their page, as well as events and other brand-related elements that Facebook controls. This opens up many new possibilities for off-site retargeting.</p>


    <h2>Remarketing and Retargeting: The Difference</h2>

    <p>Marketers spend a lot of time testing audiences, coming up with a new creative approach, or just getting hung up on numbers. And despite all this long process, not so many users who clicked on an ad turn into buyers.</p>

    <p>And even if you get consistently high traffic, these visitors may never turn into buyers or sales. Few visitors from all traffic flow make purchases or checkout the first time they land on the page. The problem is that, living in an era when you can track and analyze anything, we are very easily distracted and can forget about what remarketing is and what its real role is.</p>

    <p>The point is that you need to attract people and create a positive opinion about your product or company before they go to your site. This means that it is best to target your targeting not at attracting everyone in a row, but at working with those who have already visited your site more than once, placed an order, made an online purchase, or interacted with your online resource in a different digital format.</p>

    <p>Both remarketing and retargeting work to attract these customers. And this is very important, since it is this target audience that is more likely to make repeat purchases than new visitors who first came to your site. Therefore, such a strategy can play a key role in building a plan to promote your business.</p>


    <h2>The blurred line between remarketing and retargeting</h2>

    <p>If the two tools used to exist separately, they have become almost interchangeable lately. The reason is that platforms like Facebook and Google Ads have added a new feature to target a customer list. This means that email is no longer the only and separate repository of information from paid media.</p>

    <p>After you upload the list of email addresses, the platform will match them with usernames, and the resulting matches will be used to serve ads. This is the difference between targeting, which involves the use of email and regular sending of messages by email, but with paid advertising, and marketing.</p>


    <h2>Conclusions</h2>

    <p>Every year it becomes more and more difficult to distinguish between these two concepts. Perhaps this is because these tools have similar goals and strategies, the end result of which is to increase conversions among those who have already bought and will buy something from your brand again.</p>

  </div>

  <?php
  $cmtx_identifier = '30';
  $cmtx_reference  = 'What is retargeting? Everything you need to know';
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
      "@id": "https://favrora.com/blog/what-is-retargeting"
    },
    "headline": "What is retargeting? Everything you need to know",
    "description": "Retargeting is an advertising tool that allows you to reach an audience that has already visited the advertised site. Ads are displayed on sites that are part of ad networks.",
    "image": "https://favrora.com/src/img/blog/what-is-retargeting/1.jpg",
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
    "datePublished": "2021-06-19",
    "dateModified": "2021-06-19"
  }
</script>

<?php include $_SERVER['DOCUMENT_ROOT'].'/template/footer.php' ?>

</body>
</html>