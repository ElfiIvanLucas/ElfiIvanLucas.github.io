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
    <link rel="stylesheet" href="styles/home.css">
</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/nav.html'; ?>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Welkom bij <span>Jansdijk Implant Solutions</span></h1>
            <p>Uw partner in hoogwaardige tandheelkundige implantaten en oplossingen.</p>
            <a href="#" class="cta">Bekijk Onze Producten</a>
        </main>
    </section>

    <!-- Productcategorie Section -->

<section id="productcategorie" class="productcategorie">
    <h2><span>Onze</span> Productcategorieën</h2>
    <p>Ontdek onze uitgebreide selectie van tandheelkundige implantaten en gerelateerde producten,
        ontworpen om aan al uw behoeften te voldoen.</p>

        <div class="row">
            <div class="categorie-card">
                <img src="styles/implantaten.jpg" alt="Implantaten">
                <h3 class="categorie-title">- Implantaten -</h3>
            </div>
            
        </div>
        <div class="row">
            <div class="categorie-card">
                <img src="styles/noxi.jpg" alt="Noxi">
                <h3 class="categorie-title">- Noxi -</h3>
            </div>
            
        </div>
</section>

    <!-- Productcategorie end -->

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