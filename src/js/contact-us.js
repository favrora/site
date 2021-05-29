/******************
*** Contact JS
*******************/

function send() {
  const userName = document.getElementById('name').value,
    userEmail = document.getElementById('email').value,
    department = document.getElementById('department').value,
    emailTitle = document.getElementById('title').value,
    userMessage = document.getElementById('message').value,
    btnSend = document.getElementById("btn-send"),
    mailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
    infoField = document.getElementById("infoEmail");

  if(userEmail.match(mailFormat)) {
    contactUs();
    return true;
  } else {
    infoField.innerHTML = "You have entered an invalid email address!";
    return false;
  }

  function contactUs() {
    sendEmail({
        userName: userName,
        userEmail: userEmail,
        department: department,
        emailTitle: emailTitle,
        userMessage: userMessage
      }, 'https://favrora.com/backend/contact-us',
      function() {
        infoField.innerHTML = "Your email successful send. Please wait for our reply, we will reply to you within 2 days.";
        btnSend.classList.add('disable');
      });
  }
}