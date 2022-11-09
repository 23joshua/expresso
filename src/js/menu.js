function toggle() {
    let nav = document.querySelector(".nav");
    let toggle = document.querySelector(".toggle");
    let header = document.querySelector(".header");

    toggle.addEventListener("click", () => {
        nav.classList.toggle("nav_active");
        header.classList.toggle("header_active");
    });
}

function menu() {
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('.nav a');

    for (let i = 0; i < menuItem.length; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].classList.add("a_active");
        }

    }
}

/**
 * n -> nav 
 * l -> links
 * ac -> active
 * */
function menuS(navLink, box, acNav, acBox) {
    let link = document.querySelectorAll(navLink);
    let article = document.querySelectorAll(box);

    for (let i = 0; i < link.length; i++) {
        link[i].addEventListener('click', function (e) {
            e.preventDefault()
            for (let y = 0; y < link.length; y++) {
                link[y].classList.remove(acNav)
            }
            this.classList.add(acNav)

            let dataFilter = this.getAttribute('data-filter')

            for (let k = 0; k < article.length; k++) {
                article[k].classList.remove(acBox)

                if (article[k].getAttribute('data-item') == dataFilter) {
                    article[k].classList.add(acBox)
                }
            }
        })
    }

}

menu();
toggle();
menuS('.homeQ', '.a_form', 'active_fHome', 'form_active');
menuS('.box', '.aboutText', 'active_box', 'active_boxText');
menuS('.boxAsideUS', '.us', 'active_boxAsideUS', 'active_us')
menuS('.ul-service li', '.serviceContent', 'li_active', 'active_serviceContent');