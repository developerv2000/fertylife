document.querySelectorAll('.navbar__link').forEach(anchor => {
    console.log(anchor);
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});