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

const orderImage1 = document.querySelector('.order__image-1');
const orderImage2 = document.querySelector('.order__image-2');

// Function to toggle classes
function toggleClasses() {
    orderImage1.classList.toggle('order__image--focused');
    orderImage1.classList.toggle('order__image--blured');
    orderImage2.classList.toggle('order__image--focused');
    orderImage2.classList.toggle('order__image--blured');
}

// Add event listeners to images
orderImage1.addEventListener("click", toggleClasses);
orderImage2.addEventListener("click", toggleClasses);