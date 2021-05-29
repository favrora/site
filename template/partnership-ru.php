<!DOCTYPE html>
<html lang="ru">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Партнерская программа Favrora</title>

  <!-- meta seo -->
  <meta name="robots" content="index, follow">
  <meta name="description" content="Создайте реферальную ссылку и зарабатывайте, привлекая клиентов на наш сайт! Зарабатывай до 3000$, мы будем платить вам за каждого клиента...">
  <meta name="theme-color" content="#0077FF">
  <link rel="canonical" href="https://favrora.com/partnership-ru">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="Партнерская программа Favrora">
  <meta property="og:site_name" content="Favrora">
  <meta property="og:url" content="https://favrora.com/partnership-ru">
  <meta property="og:image" content="https://favrora.com/src/img/about.jpg">
  <meta property="og:locale" content="ru_RU">

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

    <h1>Создать реферальную ссылку</h1>

    <div id="emailDiv">
      <label for="userEmail">Ваш email:</label><br>
      <input id="userEmail" type="email" name="userEmail" placeholder="Ваш email..."><br>

      <button id="createLink" onclick="checkEmail()">Создать</button>

      <p>Если кто-то купит наши услуги по вашей реферальной ссылке, мы заплатим вам 30% от стоимости приобретенной услуги. Мы сами свяжемся с вами по электронной почте, если получим платеж.</p>

      <p>Стоимость нашей услуги колеблется от 300 до 10 000 долларов. Таким образом, вы гарантированно получите не менее 90 долларов за каждого привлеченного клиента. В среднем клиенты платят нам 1400 долларов. Так что ждите больших наград!</p>

      <p>Вы помогаете нам привлекать клиентов - а мы платим вам за каждого привлеченного клиента. Взаимовыгодное сотрудничество!</p>
    </div>

    <div id="linkDiv">
      <span>Реферальная ссылка была отправлена на электронную почту: <span id="enteredEmail"></span></span><br><br>

      <p>Пожалуйста, проверьте свою электронную почту!</p>
    </div>

    <div id="infoDiv"></div>

    <a href="https://favrora.com/partnership">Английская версия страницы</a>

  </div>

</div>


<?php include 'footer.php' ?>


<!-- Additional Js -->
<script src="/src/js/partnership-ru.js"></script>

</body>
</html>