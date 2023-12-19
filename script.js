/* eslint-env browser */
/* global document, setTimeout, Swiper */

document.addEventListener('DOMContentLoaded', function () {
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        const slides = document.querySelectorAll('.gallery-item');
        const roomDescriptionContainer = document.getElementById('room-description-container');

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }

        slideIndex++;

        if (slideIndex > slides.length) {
            slideIndex = 1;
        }

        slides[slideIndex - 1].style.display = 'block';

        // Display corresponding room description
        const roomDescription = slides[slideIndex - 1].getAttribute('data-description');
        roomDescriptionContainer.innerHTML = `<p>${roomDescription}</p>`;

        setTimeout(showSlides, 5000); // Change slide every 5 seconds (adjust as needed)
    }

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});
