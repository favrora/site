<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>All about fake reviews</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="Today we are going to talk about fake reviews written by your competitors. What to do with such a negative and how to recognize a fake read in today's article.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/all-about-fake-reviews">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="All about fake reviews">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/all-about-fake-reviews">
  <meta property="og:image" content="https://favrora.com/src/img/blog/all-about-fake-reviews/1.jpg">
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

$page_id = 27;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>All about fake reviews</h1>
    <span class="date">
      11 June 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/all-about-fake-reviews/1.jpg" alt="All about fake reviews" class="w-400">

    <p>Today we are going to talk about fake reviews written by your competitors. What to do with such a negative and how to recognize a fake - read in today's article.</p>


    <h2>Why competitors write fake reviews?</h2>

    <p>In order to stand out in the market, there are 2 ways: to make the business better than others, or to belittle the merits of competitors. Unclean entrepreneurs choose the second way - it is simpler, easier and faster.</p>

    <p>It is enough to place a dozen libels compromising a competitor on authoritative platforms and voila: his reputation is tarnished, and it is still a hassle to restore justice.</p>

    <p>The main purpose of custom reviews is to spoil the opinion of a competitor in the market. And, on the contrary, exaggerate their merits. Usually the work goes on two fronts: praising oneself and throwing mud at the rest of the market participants.</p>


    <h2>Who writes fake reviews?</h2>

    <p>Everything is extremely simple here: copywriters who want to earn an extra penny at any cost in excess on any exchange. They will write a review and post it where the customer says. This is very important: below we will tell you how and on what you can catch such would-be writers. How to recognize a fake review</p>

    <h3>Unnatural writing style</h3>

    <p>Negative reviews of competitors are written by copywriters according to a specific technical assignment. The customer specifies what and how to write, how much text should be, what product or service to criticize.</p>

    <p>Therefore, many of these comments are written as a carbon copy. Unusual turns of phrase and syllables are used - the reverse side of the professional copywriter deformation. Here's what a review like this might look like:</p>

    <p>“Terribly unskilled and blatantly untrained staff. I ordered a cell phone, but the delivery service worked with all the signs of amateurism and unprofessionalism: the courier did not warn about the delivery time of the order, although under the contract he was obliged to do this 30 minutes before arrival.</p>

    <p>The packaging of the goods was broken and had traces of mechanical damage. The technical support service is not responding, the chat staff is ignoring”.</p>

    <p>Agree, an ordinary person is unlikely to write that way. Rather, it will be something like:</p>

    <p>“The manager was naughty on the phone, although I just asked when the delivery would be. The courier waited for an hour, but he never called. The packaging was torn in two places.”</p>

    <p>True, it is not always possible to recognize a fake only by the style of the letter. Most likely, such a text was written by a beginner and for very little money. A professional writer will write in such a way that it will be completely invisible. She will even make mistakes to make the review seem more natural. Therefore, we move on to other signs.</p>

    <img src="/src/img/blog/all-about-fake-reviews/2.jpg" alt="fake reviews img" class="w-400">

    <h3>No details on product or purchase process</h3>

    <p>Sometimes a copywriter writes fake reviews in batches - several dozen a day. He has no time to go into details - everything is stated in general phrases. This is how it might look:</p>

    <p>“I bought a phone from this awful store. Not only did the order go on for 2 weeks, but they also brought the wrong model. The technical support manager cannot clearly explain what to do and how to return the money or make an exchange”.</p>

    <h3>Most likely real review</h3>

    <p>“On November 22, 2018, I ordered a Xiaomi Redmi 8 smartphone with 16 gigabytes of memory in the XXX online store. I waited 2 weeks, and Xiaomi came with 8 GB of memory. The order number is 49874567, the manager Irina worked with me”.</p>

    <h3>Review is too long</h3>

    <p>Often, fake reviews are like a whole story. The author starts from afar - he needs to write the number of characters indicated in the TK. So there are “I have long dreamed of wonderful, comfortable and beautiful garden furniture, and then my friend advised”, or “I am a professional athlete and have tried many models...”.</p>

    <p>Real buyers don't write like that and get straight to the point. In general, the shorter the review, the more likely it is genuine.</p>

    <h3>Reviews are written as if by a template</h3>

    <p>First, the purchase process is described, then the product, then there is a quote from the conversation with the manager, and at the end - advice never to buy in this online store. This is also the cost of writing several reviews for the same terms of reference.</p>

    <p>This is especially striking when such reviews are nearby and published at the same time.</p>

    <p>When reading such reviews, there is always a vague feeling that you have already read this somewhere. Caught yourself thinking - most likely, in front of you is a fake. It is useful to copy the review and punch it through a search or anti-plagiarism program.</p>

    <p>If the system finds the same text on other resources, this is 100% proof of fraud. In this case, the names, names and names of the goods can be changed, but this does not change the essence of the matter.</p>

    <img src="/src/img/blog/all-about-fake-reviews/3.jpg" alt="reviews" class="w-400">

    <h3>Solid negativity about you, and then an ode to a competitor</h3>

    <p>It rarely happens that the buyer does not like absolutely everything. Didn't like the product - the user will write about fast delivery and polite employees. In addition, popular sites for posting reviews have 2 columns: advantages and disadvantages. If the column "dignity" is empty or it is written that they have not been identified, it may be a fake.</p>

    <p>And if the picture is complemented by a detailed story about how a customer ordered a product in another store, where it was licked from head to toe, the likelihood of a fake increases by an order of magnitude. There is a link to a competitor - 100% fake.</p>

    <h3>The review was written from a fake account</h3>

    <p>Usually, real buyers are not lazy to register on the reviews site as expected: they write their real name and other data. Fakes, as a rule, come out under various nicknames. If you see that the review was written by spider666 or venom, it may be a fake.</p>

    <p>We also look at the number of reviews left by the user on the site. If there are several of them, they are most likely real. And when 10 negative reviews from 10 incomprehensible anonymous users appear on the site in one day, this is stuffing.</p>

    <p><strong>ATTENTION!</strong> None of the above signs say 100% that the review is fake, except for the last one. Everyone writes differently. In the end, an exchange copywriter can leave a real review, and the handwriting and writing style will be similar to what we talked about.</p>

    <p>In general, experts who have been working with reviews for a long time claim: the fake is immediately visible.</p>


    <h2>How to deal with fake reviews</h2>

    <p>Working out such reviews is no different from working with any other negative, but it has its continuation. We'll tell you what's what.</p>

    <h3>Leave a comment on behalf of the store</h3>

    <p>Spoiler alert: most fake commentators can be figured out at this stage: they have nothing to cover. Therefore, thank the person for the review and ask them for details of the purchase. Here are some examples.</p>

    <h3>1. "The manager got nasty on the phone."</h3>

    <p>What can be answered:</p>

    <p>“Hello spider666! Thanks for your feedback. We monitor the work of our employees and never allow such situations. The technical support service listened to the recordings of all conversations with customers on the day of writing the review, as well as 7 days before and 7 days after it. We have not identified anything similar to what you wrote about. Are you sure you bought from our store? Please write down the details: purchase date and order number. We will definitely check the information and take action.”</p>

    <h3>2. “They brought the wrong product”.</h3>

    <p>What can be answered:</p>

    <p>“Good afternoon, thank you for your opinion. All sales go through a product accounting system that excludes the possibility of errors and the human factor. If an error did occur, we would not have converged warehouse balances. We trusted the warehouse and the accounting system - everything is in order there, all positions converge. Please write information about the order and the date of purchase - we will figure it out."</p>

    <p>A real buyer will be happy to answer your review: that's why he wrote it. But the fake will definitely ignore the answer. Then you can proceed to the next step.</p>

    <h3>Contact the review moderation service on the site</h3>

    <p>If you suspect the review is unreliable, it makes sense to write to the technical support of the otzovik administration. Prepare evidence of why you think the review is fake. These could be signs of fake and technical details on your part. Justify why the situation described in the review could not have happened in principle.</p>

    <p>The administration of the review sites carefully monitors the accuracy of the information - this is their direct interest. If a resource is filled with fakes, it loses its credibility and no one will read it.</p>


    <h2>Why you shouldn't write fake reviews</h2>

    <p>First, it's not fair. It's like winning a paid duel: you seem to have defeated your opponent, but you don't feel the taste of victory. In principle, you should not get up on this road - this is a road to nowhere. Competition must be fair.</p>

    <p>Secondly, you can puncture and get the reputation of an online store, from which “all reviews are bought”. Not the best characteristic, you must agree. A large number of enthusiastic boilerplate comments arouses suspicion among both buyers and reviewers' moderators. This simply does not happen - there will always be dissatisfied people.</p>

    <p>Third, it costs money. Professionals charge a lot of money for writing a review, and ordering them from amateurs is pointless, we have already written why. It is better to spend this money for other purposes, for example, development and promotion.</p>

    <p>And we wish you only positive reviews and loyal customers. Good luck!</p>


  </div>

  <?php
  $cmtx_identifier = '25';
  $cmtx_reference  = 'All about fake reviews';
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
      "@id": "https://favrora.com/blog/all-about-fake-reviews"
    },
    "headline": "All about fake reviews",
    "description": "Today we are going to talk about fake reviews written by your competitors. What to do with such a negative and how to recognize a fake read in today's article.",
    "image": "https://favrora.com/src/img/blog/all-about-fake-reviews/1.jpg",
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