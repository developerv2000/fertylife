document.querySelectorAll('.navbar__link').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

document.querySelector(".scroll-top").addEventListener("click", function () { document.body.scrollIntoView({ block: "start", behavior: "smooth" }) });

// Function to check if the user has scrolled to the bottom
function checkScroll() {
    const sticky = document.querySelector('.sticky-bottom');
    const scrollPosition = window.scrollY + window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;

    if (scrollPosition >= documentHeight) {
        sticky.classList.add('sticky-bottom--fixed');
    } else {
        sticky.classList.remove('sticky-bottom--fixed');
    }
}

// Add an event listener to the window scroll event
window.addEventListener('scroll', checkScroll);