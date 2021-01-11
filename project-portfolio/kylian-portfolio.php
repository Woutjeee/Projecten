<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css"/>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script defer type="text/javascript" src="javascript/javascript.js"></script>
        <title>Portfolio | Kylian</title>
    </head>
    <body>
      <div class="container-achtergrond">
        <header>
            <div id="Textdiv">
                 Portfolio Kylian
            </div>
            <div id="Text-second-above">My first Portfolio by Kylian Bielsma 130924</div>
            <div class="container-3">
        <div class="nav" id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="wout-portfolio.php">Portfolio | Wout</a></li>
                <li><a href="kylian-portfolio.php">Portfolio | Kylian</a></li>
            </ul>
        </div>
        <img src="images/Kylian-portfolio-fotos/achtergrond.png" class="mypicture"/>
    </div>
        </header>
        <Main>
        <hr>
            <div id="textbox2" data-aos="fade right">
                <div class="Text-first-below">Past Successes</div>
                <div class="Text-second-below">Look to the past to inspire the future!</div>
            </div>

            <div class="fotobox">
                <div class="foto1" data-aos="fade-right">

                </div>

                <div class="foto2" data-aos="fade-down">

                </div>

                <div class="foto3" data-aos="fade-left">

                </div>
            </div>
            <hr>
            <div class="border">
            <div class="border2">
            <div class="pages">
            <div class="fotobox2">
              <H1>The template is Essential</H1>
              <h3>Choosing the right template is key, here are a few below.</h3>
            </div>
            </div>
            <br><br><br>

                <!-- Slideshow container -->
              <div class="slideshow-container">

              <!-- De foto's met nummer en tekst -->
              <div class="mySlides fade">
                <div class="numbertext">1 / 5</div>
                <img src="images/Kylian-portfolio-fotos/fotos2.png" style="width:100%">
              </div>

                <div class="mySlides fade">
                  <div class="numbertext">2 / 5</div>
                  <img src="images/Kylian-portfolio-fotos/fotos1.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">3 / 5</div>
                  <img src="images/Kylian-portfolio-fotos/fotos3.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">4 / 5</div>
                  <img src="images/Kylian-portfolio-fotos/fotos4.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">5 / 5</div>
                  <img src="images/Kylian-portfolio-fotos/fotos5.png" style="width:100%">
                </div>

                <!-- Volgende en vorige knopje -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>

              <!-- De cirkels -->
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                  </div>
                </div>
              </div>
              <hr>
              <div>
                <h1 class="fotobox2">Contact</h1>
              </div>
              <div class="container2">
                <div class="container-in">
                  <form>
                      <label for="fname">Voornaam</label>
                      <input type="text" id="fname" name="firstname" placeholder="jouw naam is..">

                      <label for="lname">Achternaam</label>
                      <input type="text" id="lname" name="lastname" placeholder="Jouw achternaam is..">

                      <label for="country">Land</label>
                      <select id="country" name="country">
                          <option value="Nederland">Nederland</option>
                      </select>

                      <label for="subject">Onderwerp</label>
                      <textarea id="subject" name="subject" placeholder="Schrijf hier uw bericht.." style="height:200px"></textarea>
                      <input type="submit" value="Submit">
                  </form>
                </div>
              </div>
        </Main>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({offset: 300,
                     duration: 1000});
        </script>
        </div>
    </body>
</html>
