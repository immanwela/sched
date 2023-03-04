<!DOCTYPE html>
    <html lang="en">
        <head>
            <title> Text Slider </title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/slick.css">
            <link rel="stylesheet" href="css/slick-theme.css">
            <link rel="stylesheet" href="css/exampleslider1.css">
        </head>

    <body>
    
        <div class="container">

            <div class ="card">

                <div class="text-box">
                        <h2> Free flat web design template </h2>
                        <h3> crafted with love by antoni7 </h3>
                </div>

                <div class="text-box2">
                        <h2> Free flat web design template </h2>
                        <h3> crafted with love by antoni7 </h3>
                </div>

                <div class="text-box3">
                        <h2> Free flat web design template </h2>
                        <h3> crafted with love by antoni7 </h3>
                </div>


                <div class="text-box4">
                        <h2> Free flat web design template </h2>
                        <h3> crafted with love by antoni7 </h3>
                </div>


            </div>

        </div>






        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>


        <script type="text/javascript">
            $(document).ready(function(){
                $('.card').slick({
                    dots: true,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    autoplay: true,
                    autoplay: 1000
                });
            });
    
        </script>

    </body>


</html>
