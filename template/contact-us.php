<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Contact us | Favrora</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="Favrora is here to help. Find out about the different ways to contact us so that we can provide you with the support you need with our products.">
  <meta name="theme-color" content="#0077FF">
  <link rel="canonical" href="https://favrora.com/contact-us">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Contact us | Favrora">
  <meta property="og:description" content="Favrora is here to help. Find out about the different ways to contact us so that we can provide you with the support you need with our products.">
  <meta property="og:url" content="https://favrora.com/contact-us">
  <meta property="og:image" content="https://favrora.com/src/img/blogo.png">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:locale" content="en_US">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:creator" content="favrora_com">

  <!-- favicon -->
  <link rel="shortcut icon" href="/src/img/icon.png">

  <!-- css -->
  <link rel="stylesheet" href="/src/css/main.css">
  <link rel="stylesheet" href="/src/css/contact-us.css">

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

<?php include 'header.php' ?>


<!-- Contact us Section -->
<h1 class="h1-center">Contact us</h1>

<div class="container">
  <div id="contact" class="container center width-75">

    <div class="w-50">
      <label for="name">Your Name</label>
      <div>
        <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
      </div>
    </div>

    <div class="w-50">
      <label for="email">Your E-mail</label>
      <div>
        <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
      </div>
    </div>

    <div class="w-50">
      <label for="department">Select a Department:</label>
      <select id="department" name="concerned_department" required>
        <option>Select a Department</option>
        <option value="technical-support">Technical Support</option>
        <option value="ceo-founder">CEO & Founder at Favrora</option>
      </select>
    </div>

    <div class="w-50">
      <label for="title">Reason For Contacting Us</label>
      <div>
        <input type="text" id="title" name="email_title" required placeholder="Redesign my website" pattern=[A-Za-z0-9\s]{8,60}>
      </div>
    </div>

    <div class="w-100">
      <label for="message">Write your message</label>
      <div>
        <textarea id="message" name="visitor_message" placeholder="Write your message here..." required></textarea>
      </div>
    </div>

    <div class="w-100 submit-div">
      <div class="g-recaptcha" data-sitekey="6LfLTiYbAAAAALl0NmKLsaZHNu81zUqwGIAPMGg0"></div>
      <button id="btn-send" type="submit" onclick="checkRecaptcha()">Send</button>
      <div id="infoEmail"></div>
    </div>

  </div>
</div>

<script src="/src/js/contact-us.js"></script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
  function checkRecaptcha() {
    const response = grecaptcha.getResponse(),
      infoField = document.getElementById("infoEmail");

    if (response.length == 0) {
      infoField.innerHTML = "Please go through the captcha to submit the form!";
    } else {
      send();
    }
  }
</script>

<?php include 'footer.php' ?>

</body>
</html>