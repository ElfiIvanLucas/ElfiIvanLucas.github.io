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

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <!-- App -->
    <script src="js/app.js"></script>;
    </script>
</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/nav.html'; ?>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Welkom bij <span>Jansdijk Implant Solutions</span></h1>
            <p>Uw partner in hoogwaardige tandheelkundige implantaten en oplossingen.</p>
            <a href="onzeproducten.php" class="cta">Bekijk Onze Producten</a>
        </main>
    </section>

    <!-- Productcategorie Section -->

<section id="products" class="products" x-data="products">
    <h2><span>Onze</span> Productcategorieën</h2>
    <p>Ontdek onze uitgebreide selectie van tandheelkundige implantaten en gerelateerde producten,
        ontworpen om aan al uw behoeften te voldoen.</p>

        <div class="row">
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                
                <div class="product-image">
                    <img src="images/implant.png" alt="Implantaten"/>
                </div>

                <div class="product-content">
                    <h3>- Implantaten -</h3>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                
                <div class="product-image">
                    <img src="images/noxi.jpg" alt="Noxi"/>
                </div>
    
                <div class="product-content">
                    <h3>- Noxi -</h3>
                </div>
            </div>

        </div>

        
       
</section>

    <!-- Productcategorie end -->

    <!-- Footer -->
    <?php include 'includes/footer.html'; ?>




    <!-- modal box item detail start -->
<div class="modal"  id="item-detail-modal">
    <div class="modal-container">
        <a href="#" class="close-icon"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="images/implant.png" alt="Implantaten"/>
            <div class="product-content">
                <h3>- Implantaten -</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.</p>
                
            <div class="product-price">€ 100,00 <span>€ 150,00</span></div>
            <a href="#"><i data-feather="shopping-cart"></i><span>Add to Cart</span></a>
            </div>    
           
            
        </div>
    </div>
</div>
        

    <!-- modal box item detail end -->
    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>

    <!-- My JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>