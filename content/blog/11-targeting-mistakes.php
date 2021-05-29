<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>11 common mistakes in targeting</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="In this post, I will cover common targeting and testing mistakes. Common mistakes when launching ad campaigns.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/11-targeting-mistakes">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="11 common mistakes in targeting">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/11-targeting-mistakes">
  <meta property="og:image" content="https://favrora.com/src/img/blog/11-targeting-mistakes/1.jpg">
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

$page_id = 17;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>11 common mistakes in targeting</h1>
    <span class="date">
      20 March 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/11-targeting-mistakes/1.jpg" alt="11 common mistakes in targeting" class="w-400">


    <h2>1. Lack of segmentation</h2>

    <p>The basic skill that every newbie needs to master is the ability to segment your audience. Regardless of the product or service that you are promoting, you need to accurately understand the target portrait of the client who will be ready to buy it. After all, the main advantage of targeted advertising is that it can hit exactly the target - your audience, however, if it is chosen incorrectly, then all other actions will be completely missed.</p>

    <p>It often happens that the same product has several types of completely different audiences. For example, let's say you set up an ad for a store that makes women's jewelry. At the same time, potential clients are not only women, but also men, who can purchase the product as a gift. These are completely different audience segments, with different needs and interests, and accordingly, settings, creatives and everything else will be different.</p>

    <p>A popular mistake among beginner targeting experts is that they try to create a universal ad in order to capture everyone at once, but with this approach, you will not hook anyone. Develop an individual approach for each "avatar", and you will already significantly increase the chances of success.</p>


    <h2>2. Misunderstanding of USP</h2>

    <p>A unique selling proposition is the hallmark of any brand. Before setting up the target itself or creating creatives, it is very important to understand what are the strengths of the product or service being promoted, what is its advantage over competitors. Only if you know why people should choose you can you find the right approach and convey the main message to them. If you are setting up custom advertising, it is worth asking the customer for this information.</p>

    <p>For example, for the same jewelry store: perhaps they have special materials that do not lose their attractiveness even with regular wear, or unique designer models that you can buy only from them and be like no one else. Or perhaps there is a custom engraving service. All this can be profitably presented in advertising.</p>


    <h2>3. Lack of analysis of competitors, copying other people's advertising approaches</h2>

    <p>This point is directly related to the previous one, nevertheless, it is often overlooked by novice targeting experts. If you have not conducted a competitor analysis, you will not be able to determine the advantages that will set you apart from their background.</p>

    <p>During the preparatory phase, be sure to think about not only how best to present brand value in your ad, but also how to avoid copying other people's strategies. At the same time, nobody forbids to be inspired by the decisions of competitors.</p>


    <h2>4. Using more than 20% of the text on the creative</h2>

    <p>The more text you write, the less coverage you will expect. Do not try to cram as much information into your ad, otherwise you will face one of the most common targeting mistakes. Its purpose is to reach the right audience, not to reveal all your advantages and benefits to them. Ads Manager has a creative center where you can check if there is a lot of text in the picture.</p>


    <h2>5. Adding too many interests</h2>

    <p>One of the most common targeting mistakes is using a huge number of leads. Here the principle “the more, the better” works exactly the opposite. Identify the main interests of your target audience and do not try to add everything that comes to mind about their other hobbies, this spreads attention and only leads to a drain on the budget. Again, segment, segment and segment again.</p>


    <h2>6. Lack of testing advertising approaches</h2>

    <p>Not only beginner targetologists, but also experienced specialists cannot always find a selling bundle the first time. That is why it is so important not to rush and devote time and a certain part of the budget to testing. Trust me, this will save you a lot of money and nerve cells over a long distance.</p>

    <p>For comparison, you can use the dynamic creatives option (in this mode, Facebook takes as a basis different parts of the ad you created and combines them with each other in search of the most effective link).</p>

    <p>For example, when advertising a store with jewelry, you do not know which image will work best: just a demonstration of products from different angles, a subject photo session of the product against a beautiful original background, or a high-quality photo on a model - dynamic creatives will help you.</p>


    <h2>7. Wrongly chosen advertising goals</h2>

    <p>There are many types of ad campaign goals in targeting, and they exist for a reason. Each of them is suitable for some tasks and disastrous or simply ineffective for others. Therefore, do not be lazy and study in what situations it is worth using this or that "Objective".</p>

    <p>For example, if you need transitions to the site, be sure to select "Traffic", while for advertising, the target action of which is to leave contacts on the site or buy a product, you need to use "Conversions". If we collect user data through a lead form, we take the goal "Lead Generation".</p>


    <h2>8.Pixel is not used if there is a website</h2>

    <p>If targeted advertising leads to a website, it is very important to use Pixel. It is not difficult to do this, however, it has a huge impact on the results. The pixel can be used for retargeting to show repeated ads to those who have already performed certain actions on the site (for example, placed an order, visited some pages of the site, etc.).</p>

    <p>But besides this, Pixel analyzes the audience that performed the targeted action, and then looks for similar people.</p>


    <h2>9.No UTM markup</h2>

    <p>One of the most common targeting mistakes is ignoring Yandex.Metrica and Google Analytics, which help analyze the effectiveness of advertisements. Even a beginner with these services will be able to determine which one brings the most applications.</p>


    <h2>10.Wrong ad placements are selected or selected automatically</h2>

    <p>Targeting gives you the opportunity to choose among a variety of placements (places to place an advertisement). Very often the reason why the target does not work is the wrong placement for the right audience. Analyze where your potential customers spend more time: on Facebook or Instagram, more often they watch the feed or stories.</p>

    <p>Also, beginners often completely forget that placements can be changed and simply leave the automatic settings, as a result of which the advertising budget is spent in the wrong place.</p>


    <h2>11. The limits on the advertising budget are not specified</h2>

    <p>A beginner targeting specialist needs to develop the habit of setting daily budget limits, otherwise there is a high probability of quickly draining all the money allocated for advertising. Alternatively, if you have more than one campaign running at the same time, you can set a daily limit for the entire ad group.</p>

    <p>So the funds will be rationally placed between different advertisements and most of them will be spent on those that give the best efficiency. Choose the amount depending on your goals and capabilities</p>
  </div>

  <?php
  $cmtx_identifier = '15';
  $cmtx_reference  = '11 common mistakes in targeting';
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
      "@id": "https://favrora.com/blog/11-targeting-mistakes"
    },
    "headline": "11 common mistakes in targeting",
    "description": "In this post, I will cover common targeting and testing mistakes. Common mistakes when launching ad campaigns.",
    "image": "https://favrora.com/src/img/blog/11-targeting-mistakes/1.jpg",
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