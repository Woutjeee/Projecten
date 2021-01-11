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
                    <a href="https://www.voedingscentrum.nl/recepten/gezond-recept/-vis-met-zeewiercrunch.aspx"><img src="images/vis/zeewier.jpg" style="width: 100%;"></a>
                    <div class="text">Vis met zeewiercrunch</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <a href="https://www.voedingscentrum.nl/recepten/gezond-recept/broodje-met-zalm-en-ei.aspx"><img src="images/vis/zalm en ei.jpg" style="width: 100%;"></a>
                    <div class="text">Broodje met zalm en ei</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <a href="https://www.voedingscentrum.nl/recepten/gezond-recept/franse-sperziebonensalade-met-vis.aspx"><img src="images/vis/franse-vis.jpg" style="width: 100%;"></a>
                    <div class="text">Franse sperziebonensalade met vis</div>
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