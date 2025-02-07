window.addEventListener('load', function () {
    registerServiceWorker();
    initializeCollapsibleElements();
    initializeNavbarLinks();
    initializeOrderImages();
});

/**
 * Registers a Service Worker for Progressive Web Apps (PWA).
 * This function checks if the browser supports Service Workers and, if so, registers
 * a Service Worker script located at the root of the site. It logs the registration
 * status to the console.
 *
 * Service Workers are used to manage caching, background sync, and other features
 * to enhance the user experience in web applications.
 */
function registerServiceWorker() {
    if ('serviceWorker' in navigator) {
        // Register the Service Worker script located at the root of the site
        navigator.serviceWorker.register(`${document.location.origin}/service-worker.js`)
            .then(function (registration) {
                // Log success message if the registration is successful
                console.log('Service worker registration succeeded:', registration);
            })
            .catch(function (error) {
                // Log error message if the registration fails
                console.log('Service worker registration failed:', error);
            });
    } else {
        // Log a message if Service Workers are not supported by the browser
        console.log('Service workers are not supported.');
    }
}

/**
 * Initializes collapsible elements on the page.
 * This function adds click event listeners to elements with the attribute
 * `data-click-action="toggle-collapse"`. It handles the toggling of a collapsible
 * element's visibility by adjusting its height and toggling the `collapse--open` class.
 *
 * It also ensures that the inline style for height is removed after the transition
 * duration to allow dynamic content height adjustments.
 */
function initializeCollapsibleElements() {
    const collapseTogglers = document.querySelectorAll('[data-click-action="toggle-collapse"]');

    collapseTogglers.forEach(toggler => {
        toggler.addEventListener('click', function () {
            const collapse = document.querySelector(toggler.dataset.collapseSelector);
            const isOpen = collapse.classList.contains('collapse--open');

            if (!isOpen) {
                // If not open, set the height to scrollHeight to expand
                collapse.style.height = collapse.scrollHeight + 'px';
            } else {
                // If open, prepare to collapse by setting the height to its current value
                collapse.style.height = collapse.scrollHeight + 'px';
                // Trigger reflow to ensure the transition happens
                collapse.offsetHeight; // Force a repaint
                // Set the height to 0px for smooth collapsing
                collapse.style.height = '0px';
            }

            collapse.classList.toggle('collapse--open');

            // Remove the inline height style after the transition duration (300ms)
            removeElementStylePropertyDelayed(collapse, 'height', 300);
        });
    });
}

/**
 * Function to remove a specific inline style property of an element after a certain duration.
 * @param {HTMLElement} element - The DOM element whose style property should be removed.
 * @param {string} property - The CSS property to remove (e.g., 'height', 'width').
 * @param {number} duration - The duration in milliseconds to wait before removing the property.
 */
function removeElementStylePropertyDelayed(element, property, duration) {
    setTimeout(() => {
        // Remove the specified inline style property from the element
        element.style[property] = '';
    }, duration);
}

function initializeNavbarLinks() {
    document.querySelectorAll('.navbar__link').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
}

// Initialize scroll top button
document.querySelector(".scroll-top").addEventListener("click", function () {
    document.body.scrollIntoView({ block: "start", behavior: "smooth" });
});

function initializeOrderImages() {
    const orderImage1 = document.querySelector('.order__image-1');
    const orderImage2 = document.querySelector('.order__image-2');

    // Add event listeners to images
    orderImage1.addEventListener("click", toggleClasses);
    orderImage2.addEventListener("click", toggleClasses);

    // Function to toggle classes
    function toggleClasses() {
        orderImage1.classList.toggle('order__image--focused');
        orderImage1.classList.toggle('order__image--blured');
        orderImage2.classList.toggle('order__image--focused');
        orderImage2.classList.toggle('order__image--blured');
    }
}

// Function to check if the user has scrolled to the bottom
function checkScroll() {
    const notification = document.querySelector('.fixed-notification');
    const scrollPosition = window.scrollY + window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;

    if (scrollPosition >= documentHeight) {
        notification.classList.add('fixed-notification--fixed');
    } else {
        notification.classList.remove('fixed-notification--fixed');
    }
}

// Add an event listener to the window scroll event
window.addEventListener('scroll', checkScroll);


// Initialize navbar toggler
document.querySelector('.navbar-toggler').addEventListener('click', (evt) => {
    const toggler = evt.currentTarget;
    toggler.classList.toggle('navbar-toggler--active');
});
