const homePageText = document.querySelector(".homePageText");
const overlay = document.querySelector(".overlay");

homePageText.addEventListener('click', function() {
    if(overlay.style.display = "none") {
        overlay.style.display = "block";
        homePageText.style.display = "none";
    }
});

overlay.addEventListener('click', function() {
     if(overlay.style.display = "block") {
         overlay.style.display = "none";
         homePageText.style.display = "block";
     }
});



