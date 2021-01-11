<?php
    $gewicht = $_POST["gewicht"];
    $lengte = $_POST["lengte"];
    $bmi = 0;
    $uitkomst = "";
    $advies = "";
    $overige = "";

    $bmi = $gewicht / ($lengte * $lengte);
    $bmi = round($bmi, 1, PHP_ROUND_HALF_DOWN);
    if($bmi < 18.5){
        $uitkomst = "ondergewicht<br>";
        $advies = "Ik adviseer u om met iemand in contact te komen die u kan helpen gezond gewicht er bij te krijgen.";
        $overige = 'Ik heb hieronder een aantal links voor u geplaatst die misschien handig zijn voor u.<br>
        <a href="https://www.voedingscentrum.nl/nl/service/vraag-en-antwoord/afvallen-en-gewicht/gezond-aankomen.aspx">Gezond Aankomen</a><br>
        <a href="https://www.kiwienzo.nl/gezond-aankomen/">Gezond Aankomen Recepten</a><br>';
    } elseif($bmi >= 18.5 && $bmi < 25) {
        $uitkomst = "goed gewicht<br>";
        $advies = "U doet het goed!";
        $overige = "U doet het precies goed! ga vooral zo door. <br>";
    } elseif($bmi >= 25 && $bmi < 27) {
        $uitkomst = "Licht overgewicht<br>";
        $advies = "Ik geef u het advies om iets gezonder te gaan leven. En misschien opzoek te gaan naar een boek die u helpt met gezonder te eten zodat u op die manier kan gaan afvallen.";
    } elseif($bmi >= 27 && $bmi < 30) {
        $uitkomst = "matig overgewicht<br>";
        $advies = "Ik geef u het advies om met een dieëtist in contact te gaan. En als u daar geen behoefte aan heeft een personal trainer te nemen zodat die u kan helpen.";
    } elseif ($bmi >= 30 && $bmi < 40){
        $uitkomst = "ernstig overgewicht";
        $advies = "Ik zou als ik u was vragen om hulp en een dietist";
    } else {
        $uitkomst = "Gevaarlijk overgewicht";
        $advies = "Ik zou als ik jou was zo snel mogelijk naar een dieteist gaan en vragen wat er aan drastiche maatregelen kunnen worden veranderd.";
    }

    //echo "U heeft een gewicht van $gewicht kilo ingevuld<br>";
    //echo "U heeft een lengte van $lengte m ingevuld<br>";
    //echo "$overige <br>";

    //echo "U hebt een BMI van $bmi dus u heeft $uitkomst<br>$advies";

?>

<!DOCTYPE html>
<html>
    <?php include "includes/head.php" ?>
    <body>
        <div class="container">
            <?php include "includes/header.php" ?>
            <div class="column-a">
                <h2>Uw resultaten van de BMI calculatie</h2>

                <p><?php echo "U heeft een gewicht van $gewicht kilo ingevuld<br>"; ?></p>
                <p><?php echo "U heeft een lengte van $lengte m ingevuld<br>"; ?></p>
                <p><?php echo "$overige <br>"; ?></p>
                <p><?php echo "U hebt een BMI van $bmi dus u heeft $uitkomst<br>$advies"; ?></p>
            </div>
        </div>
    </body>
</html>