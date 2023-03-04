<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Carousel</title>


        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
        <link rel="stylesheet" href="css/carousel.css">
    </head>

    <body>

        <div class="container">

            <div class="image-box1"> 
                <img src="image/product1.jpg" alt="image1">
                <img src="image/product2.jpg" alt="image1">
                <img src="image/product3.jpg" alt="image1">
                <img src="image/product4.jpg" alt="image1">
                <img src="image/product4.jpg" alt="image1">

            </div>


            <div class="image-box2"> 
                <img src="image/product1.jpg" alt="image1">
                <img src="image/product2.jpg" alt="image1">
                <img src="image/product3.jpg" alt="image1">
                <img src="image/product4.jpg" alt="image1">
            

            </div>

            <div class="image-box3"> 
                <img src="image/product1.jpg" alt="image1">
                <img src="image/product2.jpg" alt="image1">
                <img src="image/product3.jpg" alt="image1">
                <img src="image/product4.jpg" alt="image1">
                <img src="image/product4.jpg" alt="image1">

            </div>
            <div class="container-box4">
            <div class="image-box4"> 
                <img src="image/product1.jpg" alt="image1">
                <img src="image/product2.jpg" alt="image1">
                <img src="image/product3.jpg" alt="image1">
                <img src="image/product4.jpg" alt="image1">
                <img src="image/product4.jpg" alt="image1">

            </div>
            </div>
        </div>


        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.image-box1').slick({
                    dots: true,
                    infinite: true,
                    slidesToShow: 4,
                    arrows: true,
                    slidesToScroll: 1,
                });
            });
    
        </script>

        <script>

            $('.image-box2').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            arrows: true
            });

        </script>

        <script>

            $('.image-box3').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true
            });
                    
        </script>

        <script>

            $('.image-box4').slick({
            infinite: true,
            speed: 500,
            fade: true,
            autoplay: true,
            autoplay: 2000,
            cssEase: 'linear',
            arrows: true
            });

        </script>

    </body>

</html>