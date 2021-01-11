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
                    <a href="https://www.voedingscentrum.nl/recepten/gezond-recept/aziatische-roerbakreepjes-met-paddenstoelen-.aspx"><img src="images/vlees/aziatische-roerbakreepjes.jpg" style="width: 100%;"></a>
                    <div class="text">Aziatische roerbakreepjes</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <a href="https://www.voedingscentrum.nl/recepten/gezond-recept/biefstuk-met-sjalotjes.aspx"><img src="images/vlees/bief.jpg" style="width: 100%;"></a>
                    <div class="text">Biefstuk met sjalotjes</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <a href="https://www.voedingscentrum.nl/recepten/gezond-recept/burger-met-groente-en-yoghurtdip.aspx"><img src="images/vlees/burger.jpg" style="width: 100%;"></a>
                    <div class="text">Burger met groente en yoghurtdip</div>
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