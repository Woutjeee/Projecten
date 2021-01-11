<!DOCTYPE html>
<html>
    <?php include "includes/head.php" ?>
    <body>
        <?php include "includes/header.php" ?>
        <div class="field">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full width images and numbers and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <a href="https://www.voedingscentrum.nl/recepten/gezond-recept/pannenkoek-gevuld-met-fruit.aspx"><img src="images/kinderen/pancake.jpg" style="width: 100%;"></a>
                    <div class="text">Pannenkoek gevuld met fruit</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <a href="https://www.voedingscentrum.nl/recepten/gezond-recept/geglaceerde-pastinaak.aspx"><img src="images/kinderen/patat-biefstuk.jpg" style="width: 100%;"></a>
                    <div class="text">Biefstuk met patat</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <a href="https://www.voedingscentrum.nl/recepten/gezond-recept/down-underburger-met-ananas-kruidensalsa.aspx"><img src="images/kinderen/underburger.jpg" style="width: 100%;"></a>
                    <div class="text">Down Underburger</div>
                </div>

                <!-- next and previous button -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- the dots and circles -->
            <div style="text-align: center;">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </body>
</html>