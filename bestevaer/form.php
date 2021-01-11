<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "php/head.php" ?>
    <title>Document</title>
</head>
<body>
    <div class="ocean">
        <?php include "php/nav-bar.php" ?>
        <div class="container-bereken">
            <div class="bereken-form">
                <form action="berekening.php" method="get" class="actualForm">
                    <label for="ingenomenLading">Hoe zwaar is de boot nu in tonnen : </label>
                    <input type="text" name="ingenomenLading" id="ingenomenLading"><br><br>
                    <label for="">Hoeveel word er nu geladen in tonnen : </label>
                    <input type="text" name="hoeveelGeladen" id="hoeveelGeladen"><br><br>
                    <label for="seizoenen">Seizoen : </label>
                    <select name="seizoenen" id="seizoenen">
                        <option value="lente">Lente</option>
                        <option value="zomer">Zomer</option>
                        <option value="herfst">Herfst</option>
                        <option value="winter">Winter</option>
                    </select><br><br>
                    <label for="waterType">Water soort : </label>
                    <select name="waterType" id="waterType">
                        <option value="zout">Zout</option>
                        <option value="zoet">Zoet</option>
                    </select><br><br>
                    <label for="shipType">Welk schip : </label>
                    <select name="shipType" id="shipType">
                        <option value="bestevaer">Bestevaer</option>
                        <option value="trapezitza">Trapezitza</option>
                        <option value="jonniRitscher">Jonni Ritscher</option>
                        <option value="wilsonFinnfjord">Wilson Finnfjord</option>
                        <option value="maryMaersk">Mary Maersk</option>
                        <option value="cmaCgmTurquoise">CMA CGM TURQUOISE</option>
                    </select><br><br>
                    <button id="brkn-btn" type="button" onclick="sendData()">Bereken</button>
                </form>
            </div>
            <div class="result">
                <h1 class="result-header">Resultaat : </h1>
                <div class="results">
                    <p id="maxGewicht"></p>
                    <p id="vrachtZwaarte"></p>
                    <p id="totLaadRuimte"></p>
                    <p id="howMuchBeingLoaded"></p>
                    <p id="selectedSeason"></p>
                    <p id="selectedWaterType"></p>
                    <p id="selectedShip"></p>
                    <a id="linkToShip" href="">Link naar schip</a>
                    <p id="toHeavy"></p>
                </div>
            </div>
        </div>
    </div>
    <script defer src="javascript/anime/anime.min.js"></script>
</body>
</html>