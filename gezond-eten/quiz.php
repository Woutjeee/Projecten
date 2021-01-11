<!DOCTYPE html>
<html>
    <?php include "includes/head.php" ?>
    <body>
        <?php include "includes/header.php" ?>
        <div class="container">

            <div class="questions">
                <p>We vragen hier 4 vragen om te kijken of u een beetje een idee heb van wat gezond heb.</p>
                <p>Als u meer informatie wilt over dit soort dingen kunt u op het navigatie knopje 'Overige Info' klikken</p>
            </div>

            <form class="myForm" onsubmit="return false">
                <!-- Questions Div -->
                <div class="questions">
                    <!-- Questions One -->
                    <div id="q-1" class="ques">
                        <label for="questionOne">Is ontbijt overslaan erg? : </label>
                        <br>
                        <input type="radio" name="radio" id="correct-1">
                        <label for="radio-1" id="groen-q1">Ja</label>
                        <br>
                        <input type="radio" name="radio">
                        <label for="radio-2">Nee</label>
                        <br>
                        <input type="radio" name="radio">
                        <label for="radio-2">Je kan het ontbijt soms overslaan.</label>
                        <p id="c1"></p>
                    </div>
                    <!-- Questions Two -->
                    <div id="q-2" class="ques">
                        <label for="questionTwo">Is een tosti minder gezond dan een dubbele boterham met kaas en ham? : </label>
                        <br>
                        <input type="radio" name="radio-1">
                        <label for="radio-1">Ja</label>
                        <br>
                        <input type="radio" name="radio-1">
                        <label for="radio-2">Nee</label>
                        <br>
                        <input type="radio" name="radio-1" id="correct-2">
                        <label for="radio-3" id="groen-q2">Even gezond</label>
                        <p id="c2"></p>
                    </div>
                    <!-- Questions Three -->
                    <div id="q-2" class="ques">
                        <label for="questionTwo">Welke vitamine maak je aan onder invloed van zonlicht? : </label>
                        <br>
                        <input type="radio" name="radio-2">
                        <label for="radio-1">Vitamine A</label>
                        <br>
                        <input type="radio" name="radio-2">
                        <label for="radio-2">Vitamine B</label>
                        <br>
                        <input type="radio" name="radio-2">
                        <label for="radio-3">Vitamine C</label>
                        <br>
                        <input type="radio" name="radio-2" id="correct-3">
                        <label for="radio-3" id="groen-q3">Vitamine D</label>
                        <p id="c3"></p>
                    </div>
                    <!-- Questions Four -->
                    <div id="q-2" class="ques">
                        <label for="questionTwo">Hoeveel koppen koffie mag een gezonde volwassene per dag drinken? : </label>
                        <br>
                        <input type="radio" name="radio-3">
                        <label for="radio-1">Twee</label>
                        <br>
                        <input type="radio" name="radio-3" id="correct-4">
                        <label for="radio-2" id="groen-q4">Vier</label>
                        <br>
                        <input type="radio" name="radio-3">
                        <label for="radio-3">Zes</label>
                        <p id="c4"></p>
                    </div>

                    <button id="contButton" class="button-quiz" onclick="checkQuiz()">Controleer</button>
                </div>
            </form>
        </div>
    </body>
</html>
