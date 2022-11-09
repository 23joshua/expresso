// ===========================================================
// Slides about
// ===========================================================

let about = document.querySelectorAll(".aboutText");

function nextPrev() {
    let x = 0;
    let next = document.querySelector(".btn_next");
    let preview = document.querySelector(".btn_preview");
    
    next.addEventListener("click", () => {
        if (x >= about.length - 1) x = -1;
        x++;
        return aboutSlidesNext();
    });

    preview.addEventListener("click", () => {

        if (x <= 0) x = about.length;
        x--;
        return aboutSlidesPrev();
    });
}

function aboutSlidesNext() {
    about[currentIndex].classList.remove("active_boxText");
    currentIndex++
    if (currentIndex >= about.length) {
        currentIndex = 0
    }
    about[currentIndex].classList.add("active_boxText");
}

function aboutSlidesPrev() {
    about[currentIndex].classList.remove("active_boxText");
    currentIndex--
    if (currentIndex <= 0) {
        currentIndex = about.length-1
    }
    about[currentIndex].classList.add("active_boxText");
}

window.addEventListener("load", nextPrev);