<!DOCTYPE html>
<html lang ="en">
    <?php include('bakery_header.php') ?>
    <body>
           <?php include('bakery_navbar.php') ?>
            <div class="main-banner">
                <div class="text-box">
                <h2 class="text-title">Welcome to Bakery</h2>
                <p class="text-description">ベーカリーは過去数年の歴史にまで及ぶことができます。ローマ人は最初にベーキングの芸術を持って来て、グローバリゼーションのためにそれは世界中に広がりました。焼き菓子は健康的で、美味しく、風味豊かです。彼らは結婚式、パーティー、社交的なごちそうなどの特別な機会に需要があります。</p>
                </div>
            </div>
            <div class="container">
                        <h2 class="feature-title">Featured Products</h2>
                    
                    <div class="product-section">
                            <div class="product"> 
                                <a href="product1.php">
                                <img class="product-image" src="./image/product1.jpg" alt="Bread">
                                <h2 class="product-name">Product Name</h2>
                                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis a assumenda nesciunt sunt consectetur iusto, minus.</p>
                                </a>
                            </div>

                        <div class="product">
                            <a href="product2.php">
                            <img class="product-image" src="./image/product2.jpg" alt="Bread">
                            <div class="product-name">Product Name</div>
                            <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis a assumenda nesciunt sunt consectetur iusto, minus.</div>
                            </a>
                        </div>

                        <div class="product">
                            <a href="product3.php">
                            <img class="product-image" src="image/product3.jpg" alt="Bread">
                            <div class="product-name">Product Name</div>
                            <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis a assumenda nesciunt sunt consectetur iusto, minus.</div>
                            </a>
                        </div>

                        <div class="product">
                            <a href="product4.php">
                            <img class="product-image" src="./image/product4.jpg" alt="Bread">
                            <div class="product-name">Product Name</div>
                            <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis a assumenda nesciunt sunt consectetur iusto, minus.</div>
                            </a>
                        </div>

                        <div class="product">
                            <a href="product4.php">
                            <img class="product-image" src="./image/product4.jpg" alt="Bread">
                            <div class="product-name">Product Name</div>
                            <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis a assumenda nesciunt sunt consectetur iusto, minus.</div>
                            </a>
                        </div>

                    </div>
            </div>
            <div class="map-address-section">
                <p class="address">Gagfa, F. Cabahug St, Cebu City, 6000 Cebu</p>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" id="gmap_canvas" src="https://maps.google.com/maps?q=gagfa&t=&z=13&ie=UTF8&iwloc=&output=embed">
                        </iframe>
                    </div>
                </div>
            
            </div>
            <?php include ('bakery_footer.php') ?>
            <script>
                window.onscroll = function() {myFunction()};
                
                var header = document.getElementById("myNavbar");
                var sticky = header.offsetTop;
                
                function myFunction() {
                  if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                  } else {
                    header.classList.remove("sticky");
                  }
                }
                
                document.getElementById("myBtn").onclick = function() {myfunction()};
                
                function myfunction() {
                  document.getElementById("myDropdown").classList.toggle("show");
                }    
                </script>

                <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
                <script type="text/javascript" src="js/slick.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $('.product-section').slick({
                            dots: true,
                            infinite: true,
                            slidesToShow: 4,
                            arrows: true,
                            slidesToScroll: 1,
                            responsive: [
                                {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                    infinite: true,
                                    dots: true
                                }
                                },
                                {
                                breakpoint: 750,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1
                                }
                                },
                                {
                                breakpoint: 550,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                                },
                                // You can unslick at a given breakpoint now by adding:
                                // settings: "unslick"
                                // instead of a settings object
                            ]
                        });
                    });
                </script>
                
    </body>

</html>