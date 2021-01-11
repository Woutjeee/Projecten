<!DOCTYPE html>
<html lang="en">
<head>
    <script defer src="javascript/animatie-home.js"></script>
    
    <?php include "php/head.php" ?>
    <title>Home</title>
</head>
<body>
    <div class="container">
        <?php include "php/nav-bar.php" ?>

        <div class="header">
            <div class="head-background">
                <img src="images/home-header-pic.jpg" alt="boat-on-sand">
            </div>

            <div class="header-text">
                <h1 class="btext">Bestevaer</h1>
            </div>
        </div>

        <div class="bestevaer-info">
            <div class="main">
                <h1>Wat wij doen</h1>
                <br>
                <p class="text-wie-wij-zijn">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id lacinia lectus. 
                    Etiam nisi nulla, bibendum ac tempus vestibulum, condimentum vitae quam.
                    Nam hendrerit dui sit amet est convallis, a mollis turpis ultricies. 
                    Nullam egestas ante dolor, nec mollis ex imperdiet ut. Nulla mi neque, 
                    eleifend sed sagittis ac, auctor a nulla. Vivamus elit magna, tempor eget tincidunt a, 
                    fermentum eu metus. Vivamus aliquam magna id viverra aliquam. 
                    In porttitor ligula ante, ut mollis lacus accumsan lacinia.
                </p>
            </div>

            <div class="berekenen">
                <h1>Wat bereken wij voor u</h1>
                <br>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id lacinia lectus. 
                    Etiam nisi nulla, bibendum ac tempus vestibulum, condimentum vitae quam.
                    Nam hendrerit dui sit amet est convallis, a mollis turpis ultricies. 
                    Nullam egestas ante dolor, nec mollis ex imperdiet ut. Nulla mi neque, 
                    eleifend sed sagittis ac, auctor a nulla. Vivamus elit magna, tempor eget tincidunt a, 
                    fermentum eu metus. Vivamus aliquam magna id viverra aliquam. 
                    In porttitor ligula ante, ut mollis lacus accumsan lacinia.
                </p>
            </div>

            <div class="contact-main">
                <h1>Contact</h1>
                <br>
                <p>Tel : +31 6123456789</p>
                <p>Email : bestevae@hotmail.com</p>
            </div>
            <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4D1F00" fill-opacity="1" d="M0,64L24,64C48,64,96,64,144,96C192,128,240,192,288,208C336,224,384,192,432,186.7C480,181,528,203,576,186.7C624,171,672,117,720,117.3C768,117,816,171,864,192C912,213,960,203,1008,218.7C1056,235,1104,277,1152,288C1200,299,1248,277,1296,256C1344,235,1392,213,1416,202.7L1440,192L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
        </div>
    </div>
    <script src="javascript/anime/anime.min.js"></script>
</body>
</html>