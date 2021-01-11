<!DOCTYPE html>
<html>
    <?php include "includes/head.php" ?>
    <body>
        <div class="container">
            <?php include "includes/header.php" ?>

            <div class="column-a">
               <h3 class="header-center">De schijf van vijf</h3>

               <p>
                   Op deze website kunt u wat tips en recpeten vinden die erg gezond zijn en ook lekker! veder kunt u uw BMI berekenen en links naar websites vinden
                   die u helpen afvallen. Er staat ook een quiz op deze website om te kijken hoe gezond u eet. Deze kunt u vinden onder de pagina Quiz.
               </p>


               <p>
                    We hebben er allemaal wel over gehoord, de schijf van 5 maar wat staat er ook alweer allemaal in?
                    In de schijf van vijf staan vijd dingen die het belangerijkste zijn voor ons lichaam en dit bestaat uit,
                    <ol>
                        <li>Groente/Fruit</li>
                        <li>Veel volkoren</li>
                        <li>Plantaardige producten</li>
                        <li>Zachte en vloeibaare vetten</li>
                        <li>Dorstlessers zonder zuiker</li>
                    </ol>
                    Als je de goede hoeveelheid van deze producten iedere dag eet ben je goed bezig.
                    Je zal je als je daarnaast 3 keer per week sport erg goed voelen.
                    <br>
                    Maar wat voor produten zitter er in de schijf van vijf dan?
                    <ol>
                        <li><a href="https://www.voedingscentrum.nl/nl/gezond-eten-met-de-schijf-van-vijf/wat-staat-er-in-de-vakken-van-de-schijf-van-vijf/groente-en-fruit.aspx">Hier een link naar tips voor groente en fruit.</a></li>
                        <li><a href="https://www.voedingscentrum.nl/nl/gezond-eten-met-de-schijf-van-vijf/wat-staat-er-in-de-vakken-van-de-schijf-van-vijf/smeer-en-bereidingsvetten.aspx">Hier een link naar tips voor smeer en bereidingsvetten.</a></li>
                        <li><a href="https://www.voedingscentrum.nl/nl/gezond-eten-met-de-schijf-van-vijf/wat-staat-er-in-de-vakken-van-de-schijf-van-vijf/vis-peulvruchten-vlees-ei-noten-en-zuivel.aspx">Vis, peulvruchten, vlees, ei, noten, zuivel</a></li>
                    </ol>
               </p>
            </div>

            <div class="column-b">
               <h3 class="header-center">De sleutel tot gezond eten en de BMI Calculator</h3>
               <p>
                    Lekker eten, we houden er allemaal van maar het nadeel van lekker
                    eten is toch dat we een probleem met overgewicht in onze maatschapij aan het krijgen zijn. Om te weten of je een gezond
                    gewicht heb kunnen we onze BMI berekenen. Vul hieronder uw gegevens in om te kijken of u een gezonde BMI heb.
               </p>
               <form name="bmiForm" action="bmicalc.php" onsubmit="return validate()" method="post">
                    <div class="gewicht-box">
                        <label for="gewicht">Gewicht </label>
                        <input type="text" id="gewicht" name="gewicht">
                    </div>
                    <div class="lengte-box">
                        <label for="lengte">Lengte </label>
                        <input type="text" id="lengte" name="lengte" class="lengteText">
                    </div>
                    <div class="leeftijd-box">
                        <label for="leeftijd">Leeftijd</label>
                        <input type="text" name="leeftijd" id="leeftijd" class="leeftijd-box">
                    </div>
                    <br>
                    <button name="bereken" value="Bereken" id="button">Bereken</button>
                    <p>U heeft een gewicht ingevuld van : <span id="gewichtInput">hier komt uw ingevulde gewicht te staan.</span> kg</p>
                    <p>U heeft een lengte ingevuld van : <span id="lengteInput">hier komt uw ingevulde lengte te staan.</span> cm</p>
                    <p>U heeft een leeftijd ingevuld van : <span id="leeftijdInput">hier komt uw ingevulde leeftijd te staan.</span></p>
                    <p id="bmi_nodig">De BMI berekening is niet nodig voor uw leeftijd.</p>
                    <br>
                    <br>
               </form>
            </div>
        </div>
    </body>
</html>
