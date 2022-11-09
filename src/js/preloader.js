let preloader = document.querySelector(".preloader");

function loader() {
    preloader.classList.add("disppear");
}

window.addEventListener("load", loader);