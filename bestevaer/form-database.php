<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "php/head.php" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "php/nav-bar.php" ?>
    <div class="container-form-database">
        <form action="php/database.php" method="get">
            <label for="imo">IMO : </label>
            <input type="text" name="imo" id="imo"><br>

            <label for="boatName">Shipname : </label>
            <input type="text" name="boatName" id="Boatname"><br>

            <label for="boatName">DWT : </label>
            <input type="text" name="dwt" id="dwt"><br>

            <label for="boatName">GRT : </label>
            <input type="text" name="grt" id="grt"><br>

            <label for="boatName">Volume : </label>
            <input type="text" name="volume" id="volume"><br>

            <label for="boatName">Picture : </label>
            <input type="text" name="picture" id="picture"><br>




            <button type="submit" value="submit">Submit</button>
        </form>
    </div>
</body>
</html>