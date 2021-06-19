<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>What is SSL and what is it for?</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="SSL certificates are data files that electronically bind an encryption key to company information. In this article, we will explain why we need SSL.">
  <meta name="theme-color" content="#0077FF">
  <meta name="author" content="https://www.linkedin.com/in/favrora/">
  <link rel="canonical" href="https://favrora.com/blog/what-is-ssl">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="What is SSL and what is it for?">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/blog/what-is-ssl">
  <meta property="og:image" content="https://favrora.com/src/img/blog/what-is-ssl/1.jpg">
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

$page_id = 35;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);

?>


<!-- Content Section -->
<div class="container">
  <div class="content">

    <h1>What is SSL and what is it for?</h1>
    <span class="date">
      19 June 2021 | Author: Alina Nikolaevna |
      <?php
      $total_page_views = total_views($conn, $page_id); // Returns total views of this page
      echo "<img src='/src/img/svg/eye.svg' alt='Eye icon' class='eye-icon'>" . $total_page_views;
      ?>
    </span>

    <img src="/src/img/blog/what-is-ssl/1.jpg" alt="What is SSL and what is it for?" class="w-400">

    <p>SSL is a cryptographic encryption protocol that ensures data security. Simply put, an SSL certificate is a validation mark that ensures your site is safe for visitors. The fact that SSL is installed and the resource is protected is indicated by the "lock" in the browser line. But why can't the site work securely right away? And what does “safe” mean in general? Let's figure it out.</p>

    <p>When you register a domain, bind it to your hosting and publish your site, it runs over HTTP (HyperText Transfer Protocol) by default.</p>

    <p>HTTP is an application data transfer protocol that was used at the dawn of the Internet. It still functions properly (data is still being transmitted with its help), but it has a big drawback.</p>

    <p>The data that is transmitted using this protocol is not protected from third parties. In practice, this means that any request coming to the site http://site.com can be intercepted by attackers. For example, in cases when the user enters the bank card number on the site for payment.</p>

    <p>Fraudsters will use the stolen information for their own ends, but claims and negativity will not go to them, but to the site on which the information was leaked - they did not protect customers.</p>

    <p>The fact that the HTTP protocol is not recommended for use in modern realities is confirmed in the interface of browsers. Such a warning in Google Chrome accompanies sites using an insecure protocol.</p>

    <p>In addition to the vulnerability, a site without an SSL certificate is subject to another problem. Since 2014, the largest search engines Yandex and Google have pessimized (dropped in the search results) websites that work over HTTP. Therefore, in a highly competitive cluster, sites with HTTP in the address bar can “lose” to protected resources.</p>

    <p><strong>SSL certificates</strong> are needed to avoid the above. Once you've connected your SSL certificate to your site, you can begin replacing insecure HTTP with the secure HTTPS (HyperText Transfer Protocol Secure). So business owners who want their company's websites not to be overlooked by clients and search engines cannot do without SSL.</p>


    <h2>Translating a website to HTTPS consists of two stages:</h2>

    <ul>
      <li>Purchase a suitable SSL certificate.</li>
      <li>SSL connection to the site and setup.</li>
    </ul>

    <p>Both stages require technical expertise. We recommend that you contact the specialists of the company where you buy SSL, or the developers of your site for help.</p>


    <h2>About buying an SSL certificate</h2>

    <p>An SSL certificate for a domain is issued and paid for one or two years. After expiration, it must be renewed.</p>

    <p>First, choose a certificate that suits your business goals. SSL certificates come in several types: Domain Validation SSL (DV SSL), Organization Validation SSL (OV SSL), and Extended Validation SSL (EV SSL).</p>

    <img src="/src/img/blog/what-is-ssl/2.jpg" alt="What is SSL and what is it for?" class="w-400">

    <ul>
      <li>DV SSL - basic certificates that only confirm ownership of the domain. Typically used for information projects (blogs, information sites and portfolio sites). Issued within 1-3 days.</li>
      <li>OV SSL - standard certificates available only to legal entities. They confirm ownership of the domain and the existence of the organization. Used for business websites and online stores. Issued within 3-10 days.</li>
      <li>EV SSL - extended certificates that are also available only to legal entities. They differ from OV SSL in greater reliability: when issuing a certificate, the company's activities are carefully checked. In addition, EV SSL visually confirms the high reliability of the site by highlighting it in green in the address bar in most browsers. This type of certificate is recommended for banks and e-commerce platforms. Issued within 10-14 days.</li>
    </ul>

    <p> Order a certificate that suits your project in terms of security level. Issuing an SSL certificate is the first step towards a reliable website. Further actions require special knowledge in the IT field. If you do not feel competent in hosting management and settings in the CMS administration panel, contact the site developers.</p>


    <h2>How to translate a website to HTTPS</h2>

    <p>Website translation to HTTPS consists of 2 stages:</p>

    <ul>
      <li>Installing an SSL certificate on the site.</li>
      <li>Redirecting requests from HTTP to HTTPS and eliminating mixed content.</li>
    </ul>


    <h2>SSL installation</h2>

    <p>After issuing the SSL certificate, you need to install it on the site. DV SSL are installed automatically. You can manually install certificates of other types using the appropriate instructions from the section Obtaining and installing an SSL certificate.</p>


    <h2>Redirecting a site from HTTP to HTTPS and eliminating mixed content</h2>

    <p>After installation, your site will be available at https://site.com. But that's not all. It is necessary that requests for all site files are also redirected over HTTPS. If you are using shared hosting, follow the instruction Configuring a site to work over HTTPS. If you are using a different type of hosting or hosting from a different provider, refer to the help articles or developer help.</p>

    <p>By following the steps described, you will get a completely secure site.</p>


    <h2>Once again the importance of SSL</h2>

    <p>Connecting SSL and configuring HTTPS connection is a resource-intensive procedure. It may seem that security concerns primarily concern the owners of commercial sites (large online stores, banks, etc.), who are exposed to reputational and financial risks. But non-commercial projects also need protection.</p>

    <p>Even if users do not buy anything on an unsecured site, they can become victims of hackers. For example, when scammers replace the original content of the site and add third-party advertising instead. Or they steal visitors' cookies and use this information to plant targeted ads.</p>

    <p>The vast majority of sites that are indexed by Google already run over HTTPS (93% as of June 2021). Cybersecurity is a trend that business owners should not ignore. By taking care of setting up an SSL certificate, you will get a reliable website and protect your customers, as well as increase brand loyalty.</p>

  </div>


  <?php
  $cmtx_identifier = '33';
  $cmtx_reference  = 'What is SSL and what is it for?';
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
      "@id": "https://favrora.com/blog/what-is-ssl"
    },
    "headline": "What is SSL and what is it for?",
    "description": "SSL certificates are data files that electronically bind an encryption key to company information. In this article, we will explain why we need SSL.",
    "image": "https://favrora.com/src/img/blog/what-is-ssl/1.jpg",
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