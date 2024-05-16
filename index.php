<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="container">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#groom">Groom</a></li>
                <li><a href="#bride">Bride</a></li>
                <li><a href="#reservation">Reservation</a></li>
            </ul>
        </div>
    </nav>

    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content">
            <h1>John & Jane's Wedding</h1>
            <p class="wedding-date">August 15, 2024</p>
            <div id="countdown"></div>
        </div>
    </header>

    <section id="groom" class="section">
        <div class="container">
            <h2>About the Groom</h2>
            <p>John is excited to start this new chapter of his life with Jane.</p>
        </div>
    </section>

    <section id="bride" class="section">
        <div class="container">
            <h2>About the Bride</h2>
            <p>Jane is looking forward to the special day when she marries John.</p>
        </div>
    </section>

    <section id="reservation" class="section">
        <div class="container">
            <h2>Reservation Details</h2>
            <p>Please RSVP by filling out the form below:</p>
            <form action="submit_reservation.php" method="post" class="reservation-form">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <input type="submit" value="Submit Reservation">
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 John & Jane's Wedding</p>
        </div>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
