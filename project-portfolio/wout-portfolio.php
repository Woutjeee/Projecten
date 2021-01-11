<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "includes/head.php" ?>
        <title>Portfolio | Wout Hiemstra</title>
    </head> 
<body>
    <div class="container-wout-portfolio">
        <?php include "includes/nav-menu.php" ?>
        <div class="picture-me">
            <img src="images/wout-portfolio-pcs/collage.jpg" />
            <p class="portHeader-text">Hi, I am Wout Hiemstra and this is my <b class="orange-text">Portfolio</b></p>
        </div>
        <main class="main">
            <div class="port-header">
                <p>Portfolio</p>
                <hr>
            </div>

            <div class="content-1" data-aos="fade-right">
                
            </div>

            <div class="content-2" data-aos="fade-down">
                
            </div>

            <div class="content-3" data-aos="fade-left">
                
            </div>
        </main>
        <div class="port-header">
            <p>Werkervaring</p>
            <hr>
        </div>
        <div class="werkervaring">
            <div class="electriecen" data-aos="fade-right">
                <div class="werk-tekst">
                    <p>
                        Before I started the software developer training, 
                        I worked in construction for four years me and my colleague mainly worked on new-build houses and apartments.
                        I enjoyed the job but after four years of doing the same thing over and over I felt like it was time for a change.
                        But knowing how electrics work will be usefull for the rest of my life.
                    </p>
                </div>

                <div class="elek-pic">
                    <img src="images/wout-portfolio-pcs/vloer.jpg" class="vloer-jpg" />
                </div>
            </div>

            <div class="programmeur" data-aos="fade-left">
                <div class="horeca-pic">
                    <img src="images/wout-portfolio-pcs/dub.jpg" class="dub"/>
                </div>

                <div class="dub-tekst">
                    <p>
                        Now a days I have a job at a pub, I do all sort of things there but I mainly am the guy
                        who stands in front of the door and lets people in.
                    </p>
                </div>
            </div>
        </div>

        <div class="port-header">
            <p>About Me</p>
            <hr>
        </div>

        <div class="about-me" data-aos="fade-right">
            <div class="about-me-text">
                <p>
                    You are punctual, have a great sense of justice, 
                    filled with jokes and remarks, kind to animals, 
                    and calm by nature! You love good food, you are not a fan of sports, 
                    but you are super handy on the computer! 
                    You have obtained your diploma in electrical engineering, 
                    so you are also skilled in that area! You love all genres of music, 
                    but you prefer (live) heavy metal! In the choices you make you do not 
                    let yourself be led by the &#39;mainstream&#39;! You do everything your 
                    way at your own pace!<br><br> -Wout's Mom
                </p>
            </div>

            <div class="about-me-pic">
                <div class="image-1">
                    <img src="images/wout-portfolio-pcs/meTwo.jpg" class="me-pic">
                </div>
            </div>
        </div>

        <div class="port-header">
            <p>Contact</p>
            <hr>
        </div>
        <div class="contact-holder">
            <div class="contact" data-aos="fade-up">
                <form action="contact.php" method="POST" class="co-form" name="contact_form">
                    <label for="name">Name : </label>
                    <input type="text" placeholder="name" name="name" id="name">
                    <br>
                    <br>
                    <label for="company">Company : </label>
                    <input type="text" name="company" placeholder="company" id="company">
                    <br>
                    <br>
                    <label for="e-mail">E-Mail : </label>
                    <input type="text" placeholder="e-mail" name="email" id="email">
                    <br>
                    <br>
                    <label for="message">Message :</label>
                    <textarea name="message" placeholder="Message" id="message"></textarea><br>
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 1000
        });
    </script>
</body>
</html>