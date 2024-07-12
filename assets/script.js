document.querySelectorAll('.navbar__link').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


document.querySelector(".scroll-top").addEventListener("click", function () { document.body.scrollIntoView({ block: "start", behavior: "smooth" }) });