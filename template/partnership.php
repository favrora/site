<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Partnership | Favrora</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="Create a referral link and earn by attracting customers to our site! Mutually beneficial cooperation. Earn up to $ 3000, we will pay you for each client...">
  <meta name="theme-color" content="#0077FF">
  <link rel="canonical" href="https://favrora.com/partnership">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="Favrora affiliate program">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/partnership">
  <meta property="og:image" content="https://favrora.com/src/img/about.jpg">
  <meta property="og:locale" content="en_US">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:creator" content="favrora_com">

  <!-- favicon -->
  <link rel="shortcut icon" href="/src/img/icon.png">

  <!-- css -->
  <link rel="stylesheet" href="/src/css/main.css">
  <link rel="stylesheet" href="/src/css/partnership.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YZM6DLXFVW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YZM6DLXFVW');
  </script>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
     m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(75593677, "init", {
     clickmap:true,
     trackLinks:true,
     accurateTrackBounce:true,
     webvisor:true
   });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/75593677" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
</head>
<body id="body">

<?php include 'header.php' ?>


<!-- Partnership Section -->
<div class="container">
  <div id="partnership">

    <h1>Create referral link</h1>

    <div id="emailDiv">
      <label for="userEmail">Your email</label><br>
      <input id="userEmail" type="email" name="userEmail" placeholder="Your email..."><br>

      <button id="createLink" onclick="checkEmail()">Create</button>

      <p>If someone buys our services using your referral link, we will pay you 30% of the purchased service. We will contact you by email ourselves if we receive any payment.</p>

      <p>The cost of our service ranges from $300 to $10,000. Therefore, you are guaranteed to receive at least $90 per attracted client. On average, clients pay us $1400. So expect big rewards!</p>

      <p>You help us to attract clients - and we pay you for each attracted client. Mutually beneficial cooperation!</p>
    </div>

    <div id="linkDiv">
      <span>Referral link was sent to email: <span id="enteredEmail"></span></span><br><br>

      <p>Please check your email!</p>
    </div>

    <div id="infoDiv"></div>

    <a href="https://favrora.com/partnership-ru">Russian version of the page</a>
  </div>
</div>


<?php include 'footer.php' ?>


<!-- Additional Js -->
<script src="/src/js/partnership.js"></script>

<!--====== Live Chat js ======-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6077018ef7ce1827093a6331/1f38ds5nk';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>
</html>