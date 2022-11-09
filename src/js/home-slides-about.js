// ===========================================================
// Slides de fotos
// ===========================================================
let time = 2000;
let currentIndex = 0;
let aboutText = document.querySelectorAll(".vAbout");
let maxAboutText = aboutText.length;


function nextImage() {
    aboutText[currentIndex].classList.remove("active_vAbout")
    currentIndex++
    if (currentIndex >= maxAboutText) {
        currentIndex = 0
    }
    aboutText[currentIndex].classList.add("active_vAbout")
}

function starSlides() {
    setInterval(() => {
        nextImage();
    }, time);
}

window.addEventListener("load", starSlides);