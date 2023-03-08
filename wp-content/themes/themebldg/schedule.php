<!DOCTYPE html>
<html lang ="en">
    <?php include('schedule_header.php') ?>
    <body>
           <?php include('schedule_navbar.php') ?>
            <div class="main-banner"> </div>
            <div class="container">
                        <h2 class="feature-title">Featured Events</h2>
                    
                    <div class="product-section">
                            <div class="product"> 
                                <a href="product1.php">
                                <img class="product-image" src="./image/ev6.png" alt="Bread">
                                <h2 class="product-name">Event Name</h2>
                                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis a assumenda nesciunt sunt consectetur iusto, minus.</p>
                                </a>
                            </div>

                        <div class="product">
                            <a href="product2.php">
                            <img class="product-image" src="./image/ev2.png" alt="Bread">
                            <div class="product-name">Event Name</div>
                            <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis a assumenda nesciunt sunt consectetur iusto, minus.</div>
                            </a>
                        </div>

                        <div class="product">
                            <a href="product3.php">
                            <img class="product-image" src="image/ev3.png" alt="Bread">
                            <div class="product-name">Event Name</div>
                            <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis a assumenda nesciunt sunt consectetur iusto, minus.</div>
                            </a>
                        </div>

                        <div class="product">
                            <a href="product4.php">
                            <img class="product-image" src="./image/ev4.png" alt="Bread">
                            <div class="product-name">Event Name</div>
                            <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis a assumenda nesciunt sunt consectetur iusto, minus.</div>
                            </a>
                        </div>

                        <div class="product">
                            <a href="product4.php">
                            <img class="product-image" src="./image/ev5.png" alt="Bread">
                            <div class="product-name">Product Name</div>
                            <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis a assumenda nesciunt sunt consectetur iusto, minus.</div>
                            </a>
                        </div>

                    </div>
            </div>
            <div class="map-address-section">
                <p class="address">Leon Kilat St, Cebu City, 6000 Cebu</p>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.567473599768!2d123.89407751458458!3d10.296391292648345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99bfcc60d650d%3A0x5ee73506c68dd233!2sCebu%20Eastern%20College!5e0!3m2!1sen!2sus!4v1678004053216!5m2!1sen!2sus">
                        </iframe>
                    </div>
                </div>
            
            </div>
            <?php include ('schedule_footer.php') ?>
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