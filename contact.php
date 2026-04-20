<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jansdijk Implant Solutions</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">

    <!-- feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Styles -->
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/contact.css">
</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/nav.html'; ?>

    <!-- Hero Section -->
    <section id="contact" class="contact hero">
        <main class="contact">
            <h1><span>Contact</span> Ons</h1>
            <p>Heeft u vragen of opmerkingen? Neem gerust contact met ons op!</p>
        </main>

<div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.2268810484197!2d6.18832837702497!3d52.002743574396334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c79a215700c76d%3A0xe157673f4e0a8d9e!2sRijksweg%2054%2C%206997%20CA%20Hoog-Keppel!5e0!3m2!1sen!2snl!4v1776369273320!5m2!1sen!2snl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>


    <form action="">
    
    <div class="input-group">
        <i data-feather="user"></i>
        <input type="text" placeholder="Naam">
    </div>
    <div class="input-group">
        <i data-feather="mail"></i>
        <input type="text" placeholder="Email">
    </div>
    <div class="input-group">
        <i data-feather="phone"></i>
        <input type="text" placeholder="Telefoon">
    </div>
    
    <button type="submit" class="btn">Verstuur</button>
    </form>
</div>

    </section>

    <!-- Footer -->
    <?php include 'includes/footer.html'; ?>

    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>

    <!-- My JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>