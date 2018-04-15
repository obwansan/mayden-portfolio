const homePageIntro = document.querySelector(".homePageIntro");
const overlay = document.querySelector(".overlay");

// homePageText.addEventListener('click', function() {
//     if(overlay.style.display = "none") {
//         overlay.style.display = "block";
//         homePageText.style.display = "none";
//     }
// });
//
// overlay.addEventListener('click', function() {
//      if(overlay.style.display = "block") {
//          overlay.style.display = "none";
//          homePageText.style.display = "block";
//      }
// });

var i = 0;
var txt = 'Hi, you have landed on the home page of Kevin O\'Brien, Web Developer, expert multi-plate spinner and all-round good egg.\n' +
    'To find out more about me, check out my work and even contact me, click one of the stylish icons in the top right-hand corner.';
var speed = 50; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
    if (i < txt.length) {
        document.getElementById("homePageIntro").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}


