<?php
session_start();

if(!$_GET["regulamin"] || $_GET["klawiatura"] < 0 || $_GET["mysz"] < 0 || $_GET["ssd"] < 0 || $_GET["hdd"] < 0)
{
    header("Location: ./formularz.php");
}
else
{
    echo "Cena produktów: " . ($_GET["klawiatura"] * $_SESSION["cklawiatura"] + $_GET["mysz"] * $_SESSION["cmysz"] + $_GET["ssd"] * $_SESSION["cssd"] + $_GET["hdd"] * $_SESSION["chdd"]). " zł";
}
?>
