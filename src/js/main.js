/******************
*** Main JS
*******************/
let cookieDiv = document.getElementById('cookie');

// Mobile menu
function mobileMenu() {
  document.getElementById('m-overlay').classList.toggle('active');
  document.getElementById('m-menu-ic').classList.toggle('active');
  document.getElementById('body').classList.toggle('fixed');
}


// Scroll to top
function scrollToTop() {
  document.getElementById("header").scrollIntoView();
}

// send email with product
function sendEmail(data, url, success) {
  const params = typeof data == 'string' ? data : Object.keys(data).map(
    function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
  ).join('&');

  const xhr = new XMLHttpRequest();
  xhr.open('POST', url, true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState > 3 && xhr.status == 200) { success(xhr.responseText); }
  };
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.send(params);
  return xhr;
}

// Close cookie popup
function closeCookiePopup() {
  cookieDiv.style.display = 'none';
  localStorage.setItem('cookiePopup','shown');
}

// Show cookie popup
if(localStorage.getItem('cookiePopup') !== 'shown') {
  window.addEventListener("scroll", function scrollListener() {
    if (window.scrollY > 500) {
      cookieDiv.style.display = 'block';
      window.removeEventListener("scroll", scrollListener);
    }
  }, false);
}


// Fix menu after scrolled header
window.onscroll = function() {fixMenu()};

// Get the header
const header = document.getElementById("header"),
      menu = document.getElementById("menu");

// Get the offset position of the navbar
const sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function fixMenu() {
  if (window.pageYOffset > sticky + '80') {
    menu.classList.add("fixed");
  } else {
    menu.classList.remove("fixed");
  }
}