function faq() {
    let faq = document.querySelectorAll(".faqContainer .faq");

    for (let i = 0; i < faq.length; i++) {
        faq[i].addEventListener("click", () => {
            faq[i].classList.toggle("faq_active");
        });
    }
}
faq();