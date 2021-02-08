<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    $_SESSION["cklawiatura"] = 150;
    $_SESSION["cmysz"] = 80;
    $_SESSION["cssd"] = 599;
    $_SESSION["chdd"] = 250;
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprzęt komputerowy</title>
</head>
<body>
    <form action="wynik.php" method="get">
        <label for="klawiatura">Klawiatura 150 zł:</label>
        <input type="number" name="klawiatura">
        <br>
        <label for="mysz">Mysz 80 zł:</label>
        <input type="number" name="mysz">
        <br>
        <label for="ssd">Dysk SSD 599 zł:</label>
        <input type="number" name="ssd">
        <br>
        <label for="hdd">Dysk HDD 250 zł:</label>
        <input type="number" name="hdd">
        <br>
        <input type="checkbox" name="regulamin">
        <label for="regulamin">Zapoznałem się z regulaminem</label>
        <br>
        <input type="submit" value="Prześlij">
    </form>
</body>
</html>
