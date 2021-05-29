<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Does colour gamma matter?</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="In this article, we will figure out whether the color scheme matters for website design. We will study the theory and psychology of colors.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/does-colour-gamma-matter">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="Does colour gamma matter?">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/does-colour-gamma-matter">
  <meta property="og:image" content="https://favrora.com/src/img/blog/does-colour-gamma-matter/1.jpg">
  <meta property="article:published_time" content="2021-03-12">
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

$page_id = 7;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>Does colour gamma matter?</h1>
    <span class="date">
      12 March 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/does-colour-gamma-matter/1.jpg" alt="Does colour gamma matter?" class="w-400">

    <p>Have you ever noticed that fast food outlets use the same palette? Red and yellow shades prevail, few brands that do not use these colors are replacing them with orange, pink and other warm, vibrant colors. This is because they follow Color Theory. It states that certain colors have the ability to evoke certain feelings, emotions or behavior in people. If you know these hidden properties, you can use them on your site to achieve the desired result, like fast food companies do.</p>

    <p>It turns out that red acts as a stimulant (inducing appetite, awakening hunger) and draws attention to itself, while yellow creates a sense of speed and urgency. Classic examples are McDonald's, KFC, Stardog! S.</p>

    <p>Now think about your own website and its design. With a high degree of probability, in the process of its creation, the colors were chosen without taking into account the Color Theory, making do with the usual colors of your brand.</p>

    <p>Once you become familiar with this theory, you can analyze how visitors feel on your site and make the psychology of color work for you.</p>


    <h2>What is Color Theory</h2>

    <p>An interesting fact that few people know about is that artists have been using Color Theory for hundreds of years. But the history of its application in business and marketing is much shorter.</p>

    <p>One of the first modern interpretations of Color Theory was written about a century ago by Albert Munsell. Munsell came up with a three-component model to describe color properties, in which color is revealed using three concepts - value / value (English value), hue (English hue) and saturation / brightness (English croma).</p>

    <p>In the past few decades, the use of Color Theory has come to internet marketing as well. Web designers have had to work hard to describe the understanding of how the human brain perceives colors in a digital context.</p>


    <h2>Why Apply Color Theory to Your Websites</h2>

    <p>Nowadays, Color Theory is becoming more and more relevant in the field of Internet marketing due to the growing importance of bounce rate and other interaction statistics. When a visitor decides in a split second whether to trust a site or not, every little thing matters. And the application of Color Theory in practice in this case can have a decisive impact on the mind of the visitor, forcing him to stay on the page.</p>

    <p>When creating websites, designers use Color Theory to improve aesthetics, page readability, and more importantly, to get the desired psychological impact. Instead of using colors that just look good, you can base your designs on real-world effects - using the experience of research on how color affects our thinking. By relying on Color Theory, you can maximize user engagement and minimize the likelihood that they will not be interested.</p>


    <h2>How to choose colors for a website</h2>

    <p>It's tempting to use minimal design when designing your website. Modesty is attractive because you can choose what the user will turn their attention to first - highlighting the necessary content in the right places on the page. But playing with color combinations you get one of the easiest ways to make your site stand out from the general gray Internet.</p>

    <p>Using contrasting colors will help with this, and your site will seem fresh and interesting to users. Our brains naturally interpret contrasting colors as crisp and bold designs, making landing pages appear more appealing.</p>

    <p>How do you find complementary but contrasting colors? Use a color wheel. The color wheel is a proven tool that is used to show the relationship between primary, secondary, and tertiary colors. But do not choose colors that are opposite each other on the color wheel - the contrast will be too aggressive. There are many variations of this tool on the Internet that will help you choose bright, contrasting, but compatible colors.</p>


    <h2>Psychology of color</h2>

    <p>Let's move on to the most important thing in this article - the main postulates of the Color Theory.</p>

    <p>All the colors of the spectrum are uniquely beautiful, but at the same time, each of them affects the human mood and emotions in its own way.</p>


    <h2>Mood and emotions</h2>

    <p>Take a break from business for a minute and think about the colors that you use, look around your site and imagine - what feelings do you want to evoke in the user?</p>


    <h3>Red</h3>
    <p>Red is intuitive, the color of physical strength. Blood color. When you look at red, your pulse quickens, a sense of urgency arises; color gives courage, strength and awakens a rebellious spirit - this is one of the most powerful colors.</p>

    <h3>Orange</h3>
    <p>Orange is another aggressive color that symbolizes a call to action, although it seems more carefree, warmer and safer than red. It is very good when combined with blue.</p>

    <h3>Yellow</h3>
    <p>Yellow is the color of youth. It symbolizes optimism and playfulness, creativity and spontaneity. Yellow is a bold color. He is not aggressive, but very noticeable.</p>

    <h3>Green</h3>
    <p>Green is associated with money (for obvious reasons), but this is not the most important thing. Rather, green is a calming, natural color that can associate your site with a sense of security and tranquility. Green is a great choice if you want to instill a sense of trust in your visitors.</p>

    <h3>Blue</h3>
    <p>Blue is the color of sincerity. The color of the water and the sky, as well as the main color of the Internet (remember what the default link color is). For this reason, its uniqueness in the online business is not as great as that of other colors. In this color, with a minimum of impulsiveness and spontaneity, it is associated with logic and coolness.</p>

    <h3>The black</h3>
    <p>First-class, sophisticated color, luxury color. It testifies to professionalism, taste, makes you feel all the sophistication of the proposal. Regarded as a masculine counterpart to pink, and may slightly alienate female audiences.</p>

    <h3>Purple</h3>
    <p>In a way, purple works like a combination of blue and green, giving your page a sense of security and safety. This color carries a slight touch of mysticism, but at the same time it conveys the developer's honest intentions.</p>


    <h2>Theory of Colors in Website Design</h2>

    <p>All the text above fits into a simple idea - the right color combination on landing pages has a big impact on the bounce rate and conversion.</p>

    <p>Using the basic rules of Color Theory when developing your website design will help you increase its attractiveness to your visitors. In an area where it takes a few seconds from success to failure, using a competent color management strategy, you can significantly increase conversion. Color schemes are one of the most overlooked ways to influence the attractiveness of your website in the eyes of your visitors. Color Theory will help you understand how users feel when they first look at your site.</p>

  </div>

  <?php
  $cmtx_identifier = '6';
  $cmtx_reference  = 'Does colour gamma matter?';
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
      "@id": "https://favrora.com/blog/does-colour-gamma-matter"
    },
    "headline": "Does colour gamma matter?",
    "description": "In this article, we will figure out whether the color scheme matters for website design. We will study the theory and psychology of colors.",
    "image": "https://favrora.com/src/img/blog/does-colour-gamma-matter/1.jpg",
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
    "datePublished": "2021-03-12",
    "dateModified": "2021-04-16"
  }
</script>

<?php include $_SERVER['DOCUMENT_ROOT'].'/template/footer.php' ?>

</body>
</html>