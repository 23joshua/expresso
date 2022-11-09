// ===========================================================
// Slides background
// ===========================================================
let i = 0;
let images = [];
let slideTime = 3000; // 3 seconds
let banner = document.querySelector('.banner')
images[0] = '/ecs/themes/webecs/assets/img/home.webp';
images[1] = '/ecs/themes/webecs/assets/img/home-02.webp';
images[2] = '/ecs/themes/webecs/assets/img/home-03.webp';
images[3] = '/ecs/themes/webecs/assets/img/home-04.webp';

function changePicture() {
    banner.style.backgroundImage = `url(${images[i]})`;

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }

    setTimeout(changePicture, slideTime);
}

window.addEventListener("load", changePicture);