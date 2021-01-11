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
                    <a href="https://www.voedingscentrum.nl/recepten/gezond-recept/groentegoulash-met-linzen.aspx"><img src="images/vega/vega-goulash.jpg" style="width: 100%;"></a>
                    <div class="text">Groenten Goulash</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <a href="https://www.voedingscentrum.nl/recepten/gezond-recept/drie-bonenchili.aspx"><img src="images/vega/drie-bonen.jpg" style="width: 100%;"></a>
                    <div class="text">Drie bonenchilli</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <a href="https://www.voedingscentrum.nl/recepten/gezond-recept/spaanse-tortilla-met-bosuitjes.aspx"><img src="images/vega/spaanse-tort.jpg" style="width: 100%;"></a>
                    <div class="text">Spaanse tortilla</div>
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