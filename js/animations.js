const container = document.querySelector(".container");
const homePageIntro = document.querySelector(".homePageIntro");
const homePageIntroCont = document.querySelector(".homePageIntroCont");
const overlay = document.querySelector(".overlay");
const introBtn = document.querySelector(".introBtn");

var clickCounter = 0;
var i = 0;
var txt = 'Hi, it may look like an aquarium with no fish, but actually it\s my home page...I\'m a full-stack Web Developer ' +
    '(no, really, I am...see those symbols rotating around...) and you can find out more about me, check out my work and ' +
    'even contact me by clicking one of the stylish icons in the top right-hand corner.';
var speed = 50; /* The speed/duration of the effect in milliseconds */

function resetPage() {
    if(clickCounter > 0) {
        homePageIntroCont.style.marginTop = '200px';
        homePageIntro.innerHTML = 'Where am I?';
        introBtn.style.display = "block";
    }
}

function displayIntroTxt() {
    clickCounter ++;
    homePageIntroCont.style.marginTop = '170px';
    homePageIntro.innerHTML = '';
    introBtn.style.display = "none";
    typeWriter();
}

function typeWriter() {
    if (i < txt.length) {
        homePageIntro.innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

introBtn.addEventListener('click', displayIntroTxt);
homePageIntro.addEventListener('click', resetPage);









