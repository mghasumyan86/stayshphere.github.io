<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
    <title>StaySphere B&B - Rooms</title>
    <style>
        #text-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1 id="homeHeader">StaySphere B&B - Rooms</h1>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="documentation.html">Documentation</a></li>
            </ul>
        </nav>
    </header>

    <br><br>

    <section id="room-gallery">
        <h2>Room Gallery</h2> <!-- Added heading for context -->
        <div id="slideshow-container">
            <!-- Slides go here -->
            <div class="gallery-item fade">
                <img src="images/welcome.jpg" alt="Welcome">
            </div>
            <div class="gallery-item fade">
                <img src="images/suite.jpg" alt="Room 1">
            </div>
            <div class="gallery-item fade">
                <img src="images/single.jpg" alt="Room 2">
            </div>
            <div class="gallery-item fade">
                <img src="images/double.jpg" alt="Room 3">
            </div>
            <div class="gallery-item fade">
                <img src="images/masterRoom.jpg" alt="Room 4">
            </div>
        </div>
    </section>

    <br><br>

    <!-- Initialize the image slider script -->
    <script>
        // JavaScript for a simple image slideshow
        let currentSlide = 0;
        const slides = document.querySelectorAll('.gallery-item');

        function hideAllSlides() {
            slides.forEach((slide) => {
                slide.style.display = 'none';
            });
        }

        function showSlides() {
            hideAllSlides();

            // Update the current slide
            currentSlide = (currentSlide + 1) % slides.length;

            // Show the current slide
            slides[currentSlide].style.display = 'block';

            setTimeout(showSlides, 5000); // Change slide every 5 seconds
        }

        // Initial call to showSlides to set up the first slide
        showSlides();
    </script>

    <!-- Room Descriptions -->
    <section id="text-container">
        <!-- Single Room Description -->
        <div>
            <h3>Single Room</h3>
            <p>Welcome to our charming single room – a cozy retreat perfect for solo travelers<br> or those seeking a peaceful getaway. This thoughtfully<br> designed space features a comfortable single bed,<br> soft linens, and warm decor to make you feel right at home.<br> Whether you're traveling for business or leisure,<br> our single room offers tranquility and comfort for a delightful stay.</p>
            <br><br>
        </div>

        <!-- Double Room Description -->
        <div>
            <h3>Double Room</h3>
            <p>Our double room offers a spacious and inviting retreat for couples or friends traveling together.<br> Relax in the comfort of a well-appointed room with a queen-size bed, cozy furnishings, and a welcoming atmosphere.<br> The thoughtful design provides ample space for relaxation and unwinding.<br> Enjoy modern amenities, including a private bathroom, complimentary coffee station, and a cozy seating area. </p>
            <br><br>
        </div>

        <!-- Luxury Suite Description -->
        <div>
            <h3>Luxury Suite</h3>
            <p>Indulge in the epitome of opulence with our Luxury Suite.<br> This spacious retreat is designed to provide an unforgettable experience for those seeking the finest accommodations.<br> The en-suite bathroom boasts a spa-like atmosphere,<br> complete with a jacuzzi tub and premium toiletries.<br> Enjoy personalized service and make your stay truly exceptional in our Luxury Suite.</p>
            <br><br>
        </div>

        <!-- Master Room Description -->
        <div>
            <h3>Master Room</h3>
            <p>Experience unparalleled comfort and sophistication in our Master Room, a haven for relaxation and rejuvenation.<br> This thoughtfully appointed room is perfect for discerning<br> travelers seeking a blend of luxury and warmth.<br> The Master Room features a private sitting area, ideal for unwinding with a good book or sipping a cup of coffee.<br> Impeccable service and attention to detail ensure a delightful stay in our Master Room, making it a home away from home.</p>
            <br><br>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 StaySphere B&B <br>
            Vancouver, BC - 604-687-1000- staysphere@gmail.com</p>
    </footer>
</body>

</html>
