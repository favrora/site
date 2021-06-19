<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>The 10 Biggest Mistakes on Your Portfolio</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="In this post, we provide a simple checklist of 10 common portfolio mistakes and how to fix them quickly and easily. We will help you create the perfect portfolio.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/10-mistakes-on-your-portfolio">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="The 10 Biggest Mistakes on Your Portfolio">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/10-mistakes-on-your-portfolio">
  <meta property="og:image" content="https://favrora.com/src/img/blog/portfolio-errors/1.jpg">
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

$page_id = 34;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>The 10 Biggest Mistakes on Your Portfolio</h1>
    <span class="date">
      19 June 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/portfolio-errors/1.jpg" alt="The 10 Biggest Mistakes on Your Portfolio" class="w-400">

    <p>There are many articles on the Internet on the topic "How to create a cool portfolio", but quite often we come across the same mistakes. We have written the most important ones in our article.</p>


    <h2>Too detailed</h2>

    <p>Option 1. Choosing works for the portfolio, the artist wanted to show his skills as widely as possible, including in painting and photography. To do this, he identified 8-10 works and put together a presentation that would fully demonstrate the range of his capabilities ... But in fact, it turned out to be too fragmented.</p>

    <p>Option 2. The artist has created several interconnected series. In a hurry to show everything he could do, the artist removed similar and collected completely different paintings. As a result, the portfolio gave the impression that he worked in many directions at once.</p>

    <p>It is not easy to choose the work for the portfolio that will make the most powerful impression and remain in the memory. Consistency is important here. Instead of taking different pieces, carefully select works that relate to each other and show your style. The aim is to clearly show that everything is done by one author and represents a whole series that convinces more than the sum of its parts.</p>


    <h2>Too the same</h2>

    <p>Another artist painted in a specific painting manner. Her textured abstract paintings were ideal for the corporate environment, and she worked consistently using subtle color palettes. However, after the selection, the series was so similar that the paintings seemed inseparable. Her choices were too much the same. The works had slight differences, but as if the same note was played over and over again.</p>

    <p>Then she decided to choose paintings from a different series, painted in the same painterly style, but with a different color palette. The vibrant color spots added to her presentation and brought her portfolio to life.</p>


    <h2>Too crowded</h2>

    <p>The third artist, also an abstract artist, showed the paintings on the art site, but was unhappy with their presentation. The home page featured a lot of artwork and the small images were too tightly packed. Because of this, it was difficult to discern the subtleties of her minimalism. All she had to do was show each painting as a separate piece, giving it space for air.</p>

    <p>The artist changed her website and increased the size of the works presented. She posted snapshots of fragments of works and photos of stages, and as a result, the impression of each work on the audience increased.</p>


    <h2>Wrong target audience</h2>

    <p>When you first launch a portfolio site, the first thing you should do is seek advice from family, friends, and coworkers. Therefore, it is natural that you strive, consciously or not, to do something that would cause "Wow!" they have a reaction.</p>

    <p>But this is not an audience to look up to. You need to know what a potential client or employer is looking for. They will treat your portfolio in a completely different way than a friend or colleague. For example, a friend will spend a long time looking at different sections of the site; and the client will quickly view the information he is interested in.</p>


    <h2>Too many jobs</h2>

    <p>Are you proud of everything you've done? This means that viewers want to see as much of your work as possible, right? Not at all.</p>

    <p>Potential clients and employers don't want to spend a ton of time browsing your directory looking for something they like. They will most likely take a look at a couple of jobs and make a quick decision. Therefore, you need to confidently choose the best job and place it in the spotlight.</p>

    <p>There are shoppers willing to rummage through the piles of cheap sale items, but when you enter a high-end store, you'll see a much smaller assortment of carefully selected items. Apply the same approach to your portfolio.</p>

    <p>There is no “perfect” number of works to show; it is different for every creative person. But one thing is for sure: the more you want to show your art, the more responsibly you need to approach your choice, given the importance and ease of perception of each work.</p>


    <h2>Lack of context</h2>

    <p>It makes no sense to post pictures by themselves, without explaining the context for which they were created.</p>

    <p>Let's go back to our potential client or employer. Ask yourself: what would they like to know? Most likely: when was the work created? How was it created? Is it all your work or a joint one (in which case, with whom and what is your role?) What was contained in the brief? Was the client satisfied? What was the work schedule? What parts of the project are not shown here?</p>

    <p>This is a necessary minimum, but more can be shown. Remember, in the classroom at school, you were required not only to give an answer, but to “show what you did”? This is a good rule of thumb for portfolio sites too.</p>

    <p>Therefore, if possible (check with the client first!), Provide full descriptions for the most important projects, including notes during development; first sketches; rejected ideas, etc.</p>

    <img src="/src/img/blog/portfolio-errors/2.jpg" alt="The 10 Biggest Mistakes on Your Portfolio" class="w-400">


    <h2>Too few jobs</h2>

    <p>The most common mistake for beginners is to include too many works in a portfolio. The other extreme is showing too little.</p>

    <p>Simply put, if the "Jobs" section of your site is empty, it won't make an impression. Not enough completed orders? It is appropriate to show student projects, especially if you clearly explain what the brief was and how you implemented it.</p>

    <p>Few student projects? Then just make a few of your own projects, call them "custom orders" and explain the train of thought for their implementation.</p>

    <p>Of course, a paid job in the real world is always preferable, but showing that you can work with a brief, even an imaginary one, is much better than leaving a blank space.</p>


    <h2>Unclear or incomplete personal information</h2>

    <p>Usually, in the About Me section, you need to provide a clear explanation of who you are and what you do.</p>

    <p>There is a tendency to just add a funny tag, something like "Designer for money." But if you are well known, you can do without it. If not, this is a great way to scare away both clients and employers.</p>

    <p>Another mistake is to make it difficult to find your contacts or, even worse, to give non-existent contacts.</p>

    <p>Of course, if you're an internationally renowned designer, you can refuse to give your email address and say, "Find me on Twitter." For everyone else, this is unacceptable, so just leave your email. If you are afraid of spam, you can always give your address in the form 'myname [at] gmail [dot com]'.</p>


    <h2>Lack of purpose</h2>

    <p>Many portfolio sites avoid obvious mistakes, but remain unsuccessful because it is not clear for what purpose they were made.</p>

    <p>But if you don't think about what you want to achieve on your site, how will you know what you have achieved? So before you start, sit down and think hard about your main goals.</p>

    <p>For example, if you want to get a permanent job, are you clear about this? People are not telepathic, unless you speak directly, they think you are happy to be a freelancer.</p>

    <p>Or do you mind getting more expensive orders? In this case, why not clearly state the preferred rates and, if possible, avoid long correspondence with people who want to deceive you and are simply wasting your time?</p>

    <p>Or, alternatively, at the moment you are not striving to work more, but simply want to gradually earn a name and reputation for yourself. In this case, you need to work for testimonials, press reviews and other "social proof" to support the name.</p>


    <h2>Doesn't work on mobile devices</h2>

    <p>Portfolios are best viewed on a large, wide screen. But there is no guarantee that this will be the case. Often, potential clients and employers browse portfolio sites on mobile devices. Therefore, you need to make sure that your portfolio doesn't look awful on the small screen.</p>

    <p>Most importantly, does your work look decent or is it shrinking to the point of disgrace? If the latter, then your site will not achieve the goal.</p>

    <p>Also, use Google Analytics to see how many people visit your site and which sections they are most interested in. Don't jump to conclusions, use the information to gradually improve the site and its content.</p>
  </div>

  <?php
  $cmtx_identifier = '32';
  $cmtx_reference  = 'The 10 Biggest Mistakes on Your Portfolio';
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
      "@id": "https://favrora.com/blog/10-mistakes-on-your-portfolio"
    },
    "headline": "The 10 Biggest Mistakes on Your Portfolio",
    "description": "In this post, we provide a simple checklist of 10 common portfolio mistakes and how to fix them quickly and easily. We will help you create the perfect portfolio.",
    "image": "https://favrora.com/src/img/blog/portfolio-errors/1.jpg",
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