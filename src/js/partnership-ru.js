/******************
 **** Partnership JS
 ********************/

const mailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
    infoDiv = document.getElementById("infoDiv"),
    emailDiv = document.getElementById("emailDiv"),
    enteredEmail = document.getElementById("enteredEmail");

function checkEmail() {
    const userEmail = document.getElementById('userEmail').value;

    if (userEmail.match(mailFormat)) {
        infoDiv.innerHTML = "";
        creatUrl(userEmail);
    } else {
        infoDiv.innerHTML = "Пожалуйста, напишите правильный адрес электронной почты!";
        infoDiv.style.color = 'red';
    }
}

function creatUrl(userEmail) {
    let linkDiv = document.getElementById('linkDiv'),
        refLink = 'https://favrora.com/?refLink=' + generateLink(6);

    sendEmail({
            userEmail: userEmail,
            refLink: refLink
        }, 'https://favrora.com/backend/partnership-url',
        function () {
            linkDiv.style.display = 'block';
            emailDiv.style.display = 'none';
            enteredEmail.innerHTML = userEmail;
            sendUrl(userEmail, refLink);
        });
}

function sendUrl(userEmail, refLink) {
    sendEmail({
            userEmail: userEmail,
            refLink: refLink
        }, 'https://favrora.com/backend/send-partnership-url-ru',
        function () {
            // if success
        });
}

function generateLink(maxLengthPass) {
    let collectionOfLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",
        uniqueLink = "",
        size = collectionOfLetters.length;

    for (let i = 0; i < maxLengthPass; ++i) {
        uniqueLink = uniqueLink + collectionOfLetters.charAt(Math.floor(Math.random() * size));
    }

    return uniqueLink;
}
