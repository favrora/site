<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Social Media Engagement: Everything You Need to Know</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="What is social media engagement? Social media engagement is the measurement of comments, likes, and shares. Everything you need to know in our article.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/social-media-engagement">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="Social Media Engagement: Everything You Need to Know">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/social-media-engagement">
  <meta property="og:image" content="https://favrora.com/src/img/blog/social-media-engagement/1.png">
  <meta property="article:published_time" content="2021-06-12">
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

$page_id = 29;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>Social Media Engagement: Everything You Need to Know</h1>
    <span class="date">
      12 June 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/social-media-engagement/1.png" alt="Social Media Engagement: Everything You Need to Know" class="w-400">

    <p>Engagement, Engagement Rate, ER is an SMM metric that is actively used in the market to assess the quality of brand pages. But, as practice shows, not everyone understands the meaning of this metric, and there are a lot of variations in calculating engagement.</p>

    <p>Different agencies, different brands, different services have their own "exceptionally correct" calculation method. We decided to express our point of view on engagement.</p>


    <h2>What is engagement?</h2>

    <p>A brand page on a social network should solve an important task - to involve the audience in communication and maintain it for as long as possible, telling about the brand, increasing its recognition and awareness of it.</p>

    <p>Communication takes place through the publication of content. If the content meets the interests and expectations of the audience, evokes certain emotions, then users react to it with likes, comments and reposts (reactions, actions). This is where the engagement metric comes in.</p>

    <p>Engagement is a quantitative characteristic that allows you to evaluate the quality of content in terms of getting feedback from users.</p>


    <h2>How is engagement measured?</h2>


    <p>The higher the engagement is, the better the communication with users is organized, that is, the more reactions the content evokes from the page subscribers.</p>

    <p>But engagement cannot be measured by the number of reactions alone. It is also necessary to take into account the size of the audience that is potentially in contact with the content.</p>

    <p>For example, 100 reactions to the content of a page with an audience of 500 people and the same 100 reactions to the content of a page with an audience of 500,000 people are different stories and different engagement.</p>

    <p>Obviously, in the first case, the audience is more involved than in the second. Thus, engagement is measured by the number of reactions, but in terms of one subscriber of the brand page. Engagement is the average number of reactions to content made by one average page subscriber.</p>


    <h2>Types of engagement</h2>

    <p>There are two types of engagement: Post Engagement Rate and Page Engagement Rate. These indicators are calculated both for a specific post or date (respectively), and on average for the analyzed period.</p>

    <img src="/src/img/blog/social-media-engagement/2.png" alt="Types of engagement" class="w-400">

    <h3>Post Engagement Rate</h3>

    <p>This metric is calculated on a per-post basis to identify the most engaging posts on a brand page.</p>

    <h3>Post Engagement Rate</h3>

    <p>Post Engagement Rate is the average number of reactions made by one average page subscriber to one particular post.</p>


    <h2>"100" or "100%"</h2>

    <p>The attentive reader has noticed a certain factor of "100" in the formulas for calculating engagement. What is this number and what is the meaning of it?</p>

    <p>Someone might say that this is interest. And he will be partly right, but only partly. Percentage is a fraction, a part of something similar. For example, there are men and women, and together they are an audience.</p>

    <p>The unit of measurement is the same for men, women, and the audience - a person. In this case, one can single out the percentage, share, part of women or part of men from the total 100 percent audience. But in the case of engagement, we correlate reactions and the number of subscribers, that is, quantities that have different units of measurement, of a different nature.</p>

    <p>Therefore, those who believe that "100%" is used in the formula are correct only if they make the following assumption: "1 reaction = 1 active community subscriber." That is, it is assumed that each individual reaction was made by a separately taken unique subscriber.</p>

    <p>Then, in the engagement formula, the units of measurement in the divisor and the dividend coincide (person), and the calculation of engagement is reduced to calculating the proportion (%) of active users from the total number of page subscribers.</p>

    <p>In this case, page engagement, equal to, for example, 6.79%, can be interpreted as follows: "Page engagement shows that unique active audiences make up 6.79% of the page's total subscribers."</p>

    <p>In practice, the same subscriber can make several reactions. Therefore, when calculating engagement, we divide exactly the reactions to subscribers.</p>

    <p>As a result, it turns out not a share, not a part, but the average number of reactions per one average subscriber of the page.</p>

    <p>In our case, the page engagement of 0.0679 is interpreted as follows: "Page engagement shows that, on average, one page subscriber makes 0.0679 reactions."</p>

    <p>Typically, engagement is a very small number. Therefore, for the convenience of working with numbers, for the convenience of analysis, we multiply it by 100 (per 100 page subscribers). And then the interpretation of engagement, already equal to 6.79, sounds like this: "Page engagement shows an average of 6.79 reactions per 100 page subscribers."</p>

    <img src="/src/img/blog/social-media-engagement/3.png" alt="Social media engagement" class="w-400">

    <h2>What should be the engagement?</h2>

    <p>Newbies in SMM often ask the question: what should be engagement, what is the “normal” meaning of engagement? It is impossible to give an unambiguous answer to this question. Engagement depends on the industry in which the brand is represented, on the size of the target audience on the social network, on the brand's content strategy, on the promotion budget, etc.</p>

    <p>The surest solution for identifying a benchmark for engagement (and other metrics) is to do a competitive analysis or benchmarking, that is, to assess what results the leaders in the industry are achieving.</p>


    <h2>Why is engagement falling? How to increase engagement?</h2>

    <p>The number of page subscribers is an important SMM metric. Each brand plans to increase this metric. But as the number of subscribers grows, Page Engagement and Post Engagement naturally fall (see Engagement Formula). And the growth rate of the new audience does not allow maintaining a proportional growth rate of reactions.</p>

    <p>There are several reasons why this happens:</p>

    <ul>
      <li>The fact is that the once active audience eventually ceases to respond to the new content of the brand page, it has a kind of blurring of focus. Therefore, to a greater extent, the new audience reacts to the content. Once we at JagaJam conducted research and as a result introduced such a concept as “active user lifetime”.</li>
      <li>The decline in engagement is exacerbated by a new social media policy. Social networks began to limit the ability to show content for free to all page subscribers. That is, not all page subscribers can see new brand content in their feed and react to it.</li>
    </ul>

    <p>Brands and agencies spend a lot of resources (time, money) preparing content. But all these expenses will be practically pointless if in the end no one sees this content, which means that no one will react to it.</p>

    <p>Yes, you can try to create viral content that will promote itself. But in most cases, to increase the reach of the audience, and therefore to increase engagement, there is a need for paid content promotion.</p>

    <p>In that case, is there any point in maintaining a brand page at all? It's much easier to just buy ads on social networks and drive traffic to the brand's website. There's a meaning!</p>

  </div>

  <?php
  $cmtx_identifier = '27';
  $cmtx_reference  = 'Social Media Engagement: Everything You Need to Know';
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
      "@id": "https://favrora.com/blog/social-media-engagement"
    },
    "headline": "Social Media Engagement: Everything You Need to Know",
    "description": "What is social media engagement? Social media engagement is the measurement of comments, likes, and shares. Everything you need to know in our article.",
    "image": "https://favrora.com/src/img/blog/social-media-engagement/1.png",
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
    "datePublished": "2021-06-12",
    "dateModified": "2021-06-12"
  }
</script>

<?php include $_SERVER['DOCUMENT_ROOT'].'/template/footer.php' ?>

</body>
</html>