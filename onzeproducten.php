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
    <link rel="stylesheet" href="styles/product.css">
</head>
<body>
    <!-- Navbar -->
    <?php include 'includes/nav.html'; ?>

    <!-- Product Section -->

    
    <section id="navigation" class="ctg-nav">
        <main class="categorie nav">
            <div id="ctg-navigation-main-bar" class="ctg-navigation">
                    <button type="button" id="ctg-menu" class="cta ctg-menu" aria-label="Open categorieën" aria-haspopup="dialog" aria-controls="ctg-modal" aria-expanded="false">
                        <i data-feather="menu"></i>
                        <span>Categorieën</span>
                    </button>
            </div>
        </main>
    </section>

    <section id="producten" class="hero product ">
        <main class="product">
            <h1>IMPLANTATEN</h1>
              
            <div class ="implant-categorie">
                <h2>Categorieën</h2>
            </div>

            
            <div class="product-card">
                
                <div class="product-image">
                    <img src="images/prama slim power.jpg" alt="Prama Slim Power"/>
                </div>

                <div class="product-content">
                    <h3>- Prama Slim Power -</h3>
                </div>
            </div>


            <div class="product-card">
                
                <div class="product-image">
                    <img src="images/prama power.jpg" alt="Prama Power"/>
                </div>

                <div class="product-content">
                    <h4>- Prama Power -</h4>
                </div>
            </div>

            <div class="product-card">
                
                <div class="product-image">
                    <img src="images/prama rf-rf sl power.jpg" alt="rf-rf sl power"/>
                </div>

                <div class="product-content">
                    <h5>- Prama RF-RF SL Power -</h5>
                </div>

            </div>
            
            <div class="product-card">
                
                <div class="product-image">
                    <img src="images/prama power nasal &pterygoid implants.jpg" alt="Prama Power Nasal & Pterygoid Implants"/>
                </div>

                <div class="product-content">
                    <h6>- Prama Power Nasal & Pterygoid Implants -</h6>
                </div>
            </div>

        </main>
    </section>
<!-- Product Section End -->

    <!-- Categories Modal -->
    <div class="ctg-modal" id="ctg-modal" aria-hidden="true">
        <div class="ctg-modal-panel" role="dialog" aria-modal="true" aria-label="Categorieën">
            <button type="button" class="close-icon" id="ctg-modal-close" aria-label="Sluit categorieën">
                <i data-feather="x"></i>
            </button>
            <aside class="ctg-modal-sidebar">
                <a href="#" class="is-active">Implantaten</a>
                <a href="#">Noxi</a>
                <a href="#">Youse</a>
                <a href="#">Digitale oplossingen</a>
                <a href="#">Assortiment</a>
                <a href="#">Service</a>
            </aside>
            <div class="ctg-modal-content">
                <h2>Implantaten</h2>
                <div class="ctg-modal-grid">
                    <div class="ctg-modal-column">
                        <h3>Prama Power</h3>
                        <a href="#">Short Neck h 1.80mm</a>
                        <a href="#">Regular Neck h 2.80mm</a>
                        <a href="#">Long Neck h 3.80mm</a>
                        
                    </div>
                    <div class="ctg-modal-column">
                        <h3>Prama Slim Power ⌀ 3.30mm</h3>
                        <a href="#">Short Neck h 1.80mm</a>
                        <a href="#">Regular Neck h 2.80mm</a>
                        
                    </div>
                    <div class="ctg-modal-column">
                        <h3>Prama RF-RF SL Power</h3>
                        <a href="#">Optie 9</a>
                        <a href="#">Optie 10</a>
                        <a href="#">Optie 11</a>
                        <a href="#">Optie 12</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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