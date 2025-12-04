<?php
$ad       = isset($_POST["ad"]) ? $_POST["ad"]: "adınızı yazınız !";
$mail     = $_POST["mail"];
$bolum    = $_POST["bolum"];
$cinsiyet = $_POST["cinsiyet"];
$yurt     = isset($_POST["yurt"]) ? $_POST["yurt"] : null;

echo $ad . "<br>";
echo $mail . "<br>";
echo $bolum . "<br>";
echo $cinsiyet . "<br>";

if (isset($yurt)) {
    echo "Yurt dışına çıktınız!";
} else {
    echo "Yurt dışına çıkmamışsınız?";
}
?>