const container = document.querySelector(".container");
const homePageIntro = document.querySelector(".homePageIntro");
const homePageIntroContainer = document.querySelector(".homePageIntroContainer");
const introBtn = document.querySelector(".introBtn");
const symbolContainer = document.querySelector(".symbolContainer");

var clickCounter = 0;
var i = 0;
var txt = 'Hi. It may look like an aquarium with no fish, but actually this is my home page...I\'m a full-stack Web Developer ' +
    'and you can find out more about me, check out my work and ' +
    'even contact me by clicking on the stylish icons in the top right-hand corner...or, if you came here by mistake, here\'s a fun video of ' +
    'sharks in a real aquarium...';
var speed = 50; /* The speed/duration of the effect in milliseconds */

function resetPage() {
    if(clickCounter > 0) {
        homePageIntroContainer.style.marginTop = '200px';
        homePageIntro.innerHTML = 'Where am I?';
        introBtn.style.display = "block";
        symbolContainer.style.display = "none";
    }
}

function displayIntroTxt() {
    clickCounter ++;
    homePageIntroContainer.style.marginTop = '150px';
    homePageIntro.innerHTML = '';
    introBtn.style.display = "none";
    symbolContainer.style.display = "block";
    typeWriter();
}

function typeWriter() {
    if (i < txt.length) {
        homePageIntro.innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
    // insert picture of a shark that's a link to vid
}

introBtn.addEventListener('click', displayIntroTxt);
homePageIntro.addEventListener('click', resetPage);
