<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>What Are Keywords? How to Use Them for SEO</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="Keywords are the words and phrases that people type into search engines to find what they're looking for. SEO for keywords.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/what-are-keywords">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="What Are Keywords? How to Use Them for SEO">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/what-are-keywords">
  <meta property="og:image" content="https://favrora.com/src/img/blog/what-are-keywords/1.jpg">
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

$page_id = 23;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>What Are Keywords? How to Use Them for SEO</h1>
    <span class="date">
      24 March 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/what-are-keywords/1.jpg" alt="What Are Keywords? How to Use Them for SEO" class="w-400">


    <p>Keywords are words or phrases that help search engines find an article among millions of different texts. The job of a good writer is to write these phrases as naturally as possible.</p>

    <p>Most often, keywords are directly related to the subject of the text, so it is not so difficult to insert them into the text. However, there are situations when using a keyword you need to attract people for a similar, but not identical query.</p>


    <h2>How the keywords changed</h2>

    <p>Every copywriter has heard horror stories about keywords. Previously, search site algorithms performed much worse. They only needed the exact keywords in order to find the text on request. Because of this, many problems arose:</p>

    <p>Only literal use of keys. They could not be persuaded or changed. Because of this, it was often possible to come across text with completely inconsistent phrases, like "buy Peter's garage".</p>

    <p>The keywords were compiled exactly at the request of users. Because of this, it was often necessary to enter words with errors in the text, because that is how people searched for it in search engines.</p>

    <p>Another problem with netizens is the keyword writing style. If a person needs a brand catalog, then the request is made out as “Camomile shoes catalog”. It is almost impossible to organically fit such a phrase into the text.</p>

    <p>Now everything is different. Search engines have become smarter, they correct user errors and are able to recognize more than just the exact keys. Thanks to this, it has become more pleasant to read texts on the Internet, and it has become easier to work as a copywriter.</p>


    <h2>Types of keywords</h2>

    <p>To understand what keywords are, you need to carefully study their classification. The keywords are:</p>

    <ul>
      <li><strong>Informational</strong>. Most often, this is a whole phrase that can be left as a separate sentence or correctly entered. Example: How to start a business from scratch.</li>
      <li><strong>Navigational</strong>. Users write such requests when they want to find a specific page on the Internet. Example: Lego official site.</li>
      <li><strong>Transactional</strong>. Such keys contain a call for a specific action that the reader wants to take. Example: Order textbooks online.</li>
      <li><strong>Commercial</strong>. They contain a direct urge to buy, often with an additional incentive word. Example: Buy a discounted car.</li>
    </ul>


    <h2>What are the occurrences</h2>

    <p>Entry is how the keyword should be entered into the text. According to the type of entry, keywords are divided into five groups:</p>

    <h3>Exact</h3>

    <p>The key fits literally. It cannot be persuaded, broken up with punctuation marks. The most difficult type of keys to process. Example: "buy a car".</p>

    <h3>Imprecise</h3>

    <p>One or more words from the key must be inflected, but they cannot be swapped or separated using punctuation marks. Example: "buy cars"</p>

    <h3>Diluted</h3>

    <p>You need to insert other words into the key to make it look natural. You can also separate it with punctuation marks. Example: "buy a checked car".</p>

    <h3>Reverse entry</h3>

    <p>The key is flipped backwards in order to maintain the accuracy of the wording, while making it less noticeable. Most often broken with punctuation marks. Example: instead of "buy a car" write "buy a car".</p>

    <h3>Free (word form)</h3>

    <p>The contractor decides for himself how to insert the keyword. He can do it accurately, inaccurately or completely dilute, the main thing is to keep the meaning. Most often used in entertaining texts that do not include a direct call to do or buy something.</p>


    <h2>How should the keys be entered?</h2>

    <p>Regardless of the type of keyword entry, there are many rules for their design. It is important to observe them, first of all, so that the article looks organic.</p>

    <p>If you enter the keywords incorrectly, then the reader will see these technical constructions. As a result, this will lead to a decrease in the number of views.</p>


    <h2>Uniformity</h2>

    <p>Keys should be distributed throughout the text. Of course, you don't need to sit and calculate the symbols for the correct placement of keywords. However, if all the keys are collected in one part of the text, this leads to two problems at once.</p>

    <p>Keys should be distributed throughout the text. Of course, you don't need to sit and calculate the symbols for the correct placement of keywords. However, if all the keys are collected in one part of the text, this leads to two problems at once.</p>

    <p>One key, one sentence. The more keywords in one place, the more difficult it is to hide them. Customers and content managers specifically break search phrases into words and phrases to make them easier to hide.</p>

    <p>The offer should be useful first of all. Keyword is a small addition. If a part of the text is written only in order to enter the key, it will be noticeable.</p>

    <h3>Keeping the balance</h3>

    <img src="/src/img/blog/what-are-keywords/2.jpg" alt="What Are Keywords? How to Use Them for SEO" class="w-400">

    <p>In complex and complex sentences, keywords immediately catch the eye. The keynote seems to attract the attention of the reader, who has lost the semantic thread even in the first half of the text.</p>

    <p>At the same time, a simple sentence may simply not have enough words to organically enter the key. Therefore, you need to be careful when adjusting the size of parts of the text.</p>

    <h3>The call is the best place for the key</h3>

    <p>Do not forget that readers are not fools. They still understand that there must be keys in the text. Therefore, it is best to leave 1 or 2 keywords in the most conspicuous place so that they are quickly discovered and not searched by others. The invocation part is the best place to do this for a number of reasons:</p>

    <p>Fulfills the role of this block in the text. If the call says “Are you going to buy a refrigerator? Feel free to contact us! " This will not cause rejection in the reader. He understands that there should be a similar phrase in this part of the text.</p>

    <p>User priorities are taken into account. Keys are not created to be read, but primarily for search engines. Therefore, the keyword in the call, which is most often at the end of the text, is the best option. The reader has already received all the necessary information and the key will not cause rejection in him.</p>

    <p>Selection. Since the appeal is not the main part of the text in terms of information content, it can be highlighted. To do this, they use bold text or italics, add emoticons or other means that the article posting platform allows.</p>

  </div>

  <?php
  $cmtx_identifier = '21';
  $cmtx_reference  = 'What Are Keywords?';
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
      "@id": "https://favrora.com/blog/what-are-keywords"
    },
    "headline": "What Are Keywords? How to Use Them for SEO",
    "description": "Keywords are the words and phrases that people type into search engines to find what they're looking for. SEO for keywords...",
    "image": "https://favrora.com/src/img/blog/what-are-keywords/1.jpg",
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