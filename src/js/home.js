/******************
**** Home JS
*******************/

const mailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

function send() {
  const userName = document.getElementById('name').value,
    userEmail = document.getElementById('email').value,
    budget = document.getElementById('budget').value,
    siteLink = document.getElementById('site_link').value,
    userMessage = document.getElementById('message').value,
    infoField = document.getElementById("infoEmail"),
    btnSend = document.getElementById("btn-send"),
    refLink = window.location.href;

  // Check all input
  if(userName.length === 0) {
    infoField.innerHTML = "Please, enter your name.";
  } else if (budget === '') {
    infoField.innerHTML = "Please, select your budget.";
  } else if (siteLink === '') {
    infoField.innerHTML = "Please, write your site link.";
  } else if (userMessage === '') {
    infoField.innerHTML = "Please, write your message.";
  } else if (userEmail.match(mailFormat)) {
    send();
  } else {
    infoField.innerHTML = "You have entered an invalid email address!";
  }

  function send() {
    sendEmail({
        userName: userName,
        userEmail: userEmail,
        budget: budget,
        siteLink: siteLink,
        userMessage: userMessage,
        refLink: refLink
      }, 'https://favrora.com/backend/send-request',
      function() {
        infoField.innerHTML = "Your email successful send. Please wait for our reply, we will reply to you within 2 days.";
        btnSend.classList.add('disable');
        sendAutoAnswer()
      });
  }

  function sendAutoAnswer() {
    sendEmail({
        userName: userName,
        userEmail: userEmail
      }, 'https://favrora.com/backend/answering-machine',
      function() {
        // if successful send
      });
  }
}

function selectOption(i) {
  document.getElementById('budget').options[i].selected = 'selected';
  document.getElementById("contact").scrollIntoView();
}

/*
function saveEmail() {
  const inputEmail = document.getElementById('emailSubscribe').value,
    errorSubscribe = document.getElementById('errorSubscribe'),
    subsBtn = document.getElementById('subsBtn');

  if (inputEmail.match(mailFormat)) {
    errorSubscribe.innerHTML = "You email was saved. Thanks!";
    subsBtn.classList.add('disable');
    sendEmail({
        subscEmail: inputEmail
      }, 'https://favrora.com/backend/subsc-email',
      function() {
        // if successful send
      });
  } else {
    errorSubscribe.innerHTML = "Incorrect email address!";
  }
}*/


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

const contactBtn = document.getElementById("contactBtn"),
  contactSection = document.getElementById("contact");

contactBtn.addEventListener('click', () => {

  window.scroll({
    behavior: 'smooth',
    left: 0,
    top: contactSection.offsetTop - 80
  });
});