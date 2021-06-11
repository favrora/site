<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Mistakes of web designers</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="If you're a designer with a deep hatred of layout designers and want to know how to turn their lives into endless pain and suffering, read on.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/mistakes-of-web-designers">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="Mistakes of web designers">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/mistakes-of-web-designers">
  <meta property="og:image" content="https://favrora.com/src/img/blog/mistakes-of-web-designers/1.png">
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

$page_id = 30;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>Mistakes of web designers</h1>
    <span class="date">
      12 June 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/mistakes-of-web-designers/1.png" alt="Mistakes of web designers" class="w-400">

    <p>Typically, the designer and layout designer work in tandem, because they have a common goal. But there are times when, instead of friendship and mutual understanding, a real war arises.</p>

    <p>If you're a designer with a deep hatred of layout designers and want to know how to turn their lives into endless pain and suffering, read on.</p>


    <h2>Do not use grids under any circumstances</h2>

    <p>Oh, your Bootstrap and vertical grids and guides. They have filled the entire planet and leave no room for creativity. Not! Let's not simplify life so much and speed up the work of layout designers, let them torment themselves by measuring every element, button and padding.</p>

    <p>And if the element is 293 pixels wide and 241 pixels high, that's great. Hmm, but what about the indentation? Not a problem! Left padding is 9 pixels, bottom padding is 12 pixels. Sumptuously!</p>


    <h2>No uniformity</h2>

    <p>What do we have here? A series of three homogeneous elements? Hmm, the best thing is to make them as different as possible. To begin with, they should by no means be of the same width (and occupy 4 columns of the grid, which we are not using). Well, in the second row, we will make the inner indentation on top more than the other two. Ideally!</p>


    <h2>Adaptability</h2>

    <p>It is not necessary to draw separate layouts for the tablet and mobile versions (most often it really is not necessary, for us, layout designers, it is easier and faster to independently decide how to adapt this or that page for mobile devices, we are experienced), but if we do it, then we will shuffle elements so that the layout designer has to write additional elements to display only in the mobile version.</p>

    <p>And let's make the layout as complicated as possible! Let's add curly backgrounds to the elements, place the elements at random, distort them beyond recognition, let the layout designer sit and think about how to adapt all this splendor to the most popular screen resolutions.</p>


    <h2>Kaleidoscope in decoration</h2>

    <p>When there is no single sequence, and different pages get a different design, are opposed in design, then, at least, the user will be confused. It may seem that the person has switched to another resource. If the navigation changes along with the design, important elements move, this will lead to misunderstanding and rejection.</p>

    <p>Therefore, such extreme solutions should be avoided:</p>

    <ul>
      <li>Keep the color scheme on all pages.</li>
      <li>Control the vertical and horizontal distances between elements. They must be equal.</li>
      <li>Maintain a unified navigation system.</li>
      <li>Maintain the consistency of headings, link designs, icons, shapes.</li>
    </ul>

    <img src="/src/img/blog/mistakes-of-web-designers/2.jpg" alt="Mistakes of web designers" class="w-400">

    <h2>Don't attach fonts</h2>

    <p>The list of "safe fonts" is not our topic. The meager Google Fonts, where you can find fonts and colors for every taste, also does not satisfy our needs and interferes with the flight of imagination.</p>

    <p>Allow the layout designer to embark on an exciting journey across the Internet in search of non-standard fonts, download them separately and convert them into all the necessary formats. And it doesn't matter that after converting and connecting the font may not look the same as in the layout, you just need to look better.</p>


    <h2>Don't use SVG</h2>

    <p>We don't need this SVG of yours! We have PNG. And if you do use it, then let it be "like" SVG! Special design magic transforms real SVG into SVG with PNG easily and naturally.</p>


    <h2>Style guide</h2>

    <p>Do not attach or reflect in the layout how certain elements and their states should look like on hover / click / focus. The layout designer is not only able to choose the right colors himself, to apply shadows, but he also loves to do it.</p>

    <p>And if for some reason he cannot do it the first time, then the second time, when he receives a task with the client's edits, he will select more carefully. And he will love this business even more.</p>


    <h2>Pixel Perfect</h2>

    <p>Pixel to the left, pixel to the right - shot! Together with elements 293 pixels wide and 241 pixels high and margins of 9 and 12 pixels, these two words will turn a day (or even a couple that will be spent on the layout of this magnificence) into a well-known substance into TK.</p>


    <h2>Make all indents the same</h2>

    <p>If you have decided that all the padding will be 10px, well then follow it. Don't make one indent of 10px and the other 30px. Again, I suggest you use the 960 grid system, it will automatically arrange all your elements in an attractive way. Let's finally look at some more examples.</p>


    <h2>Follow one style</h2>

    <p>Follow one alignment principle. Don't align one element to the left and the other to the right; this will only confuse the reader. Therefore, if you have aligned all the text to the left, then place the headings and all other elements of the page in the same manner. Only by gaining enough experience can you break this rule without harming the site.</p>


    <h2>Alignment</h2>

    <p>Alignment is the placement of an object (or group) relative to other objects. Alignment involves the use of frames and grids in the work. Remember that the placement of design elements not only influences the mood of the entire page, but also helps to clearly and effectively communicate the essence of the content.</p>


    <h2>Adjusting the correct line height</h2>

    <p>The height of the lines also determines the distance between the lines. When I design a page in Photoshop, the font size is usually 12px, and the line heights are 16-18 px. All text is typed with '' antialias '' disabled - which allows us to get a preliminary point-by-point view of how it will actually look in the browser.</p>


    <h2>For designers</h2>

    <p>Please take note of the above. You will greatly simplify the life of layout designers if you apply fonts to the layout, draw states of elements, use grids (including vertical ones) and if you forget such a phenomenon as Pixel Perfect. And most importantly, don't complicate your layouts, think about how the site should look on mobile devices.</p>

    <p>Now for the most important tip: learn the layout. Yes, you should know the basics of layout if you call yourself a web designer. You don't need to know everything, learn the box model, item positioning, and how item inference loops work. Not knowing the basics of layout by web designers is the biggest mistake and the most common reason for the increase in the number of errors in layouts. And also the main reason for the decrease in the number of nerve cells in layout designers.</p>

    <p>If there is little knowledge or experience, there are some questions, show it to the layout designers before agreeing on the layout with the client. Everyone will be better and no one will get hurt.</p>

  </div>

  <?php
  $cmtx_identifier = '28';
  $cmtx_reference  = 'Mistakes of web designers';
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
      "@id": "https://favrora.com/blog/mistakes-of-web-designers"
    },
    "headline": "Mistakes of web designers",
    "description": "If you're a designer with a deep hatred of layout designers and want to know how to turn their lives into endless pain and suffering, read on.",
    "image": "https://favrora.com/src/img/blog/mistakes-of-web-designers/1.png",
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