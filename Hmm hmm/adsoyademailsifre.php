<?php
//Atamalar:
$ad       = !empty($_POST["ad"]) ? $_POST["ad"] : "adınızı yazınız !";
$yas      = $_POST["yas"];
$yazıyımmı = True;
$mail     = $_POST["mail"];
$bolum    = $_POST["bolum"];
$cinsiyet = !empty($_POST["cinsiyet"]) ? $_POST["cinsiyet"] : "cinsiyetinizi seciniz !";
$yurt     = isset($_POST["yurt"]) ? $_POST["yurt"] : null;
$ilgialan = !empty($_POST["ilgi"]) ? $_POST["ilgi"] : "ilgi alanlarınızı seciniz !";

//ad ve soyadlar
echo "adınız: " . $ad . "<br>";

//yas
echo "yasınız: ";
if(empty($yas)){
    echo "yasınızı yazınız !<br>";
}else{
    echo $yas . "<br>";
}

//mailler
echo "mailiniz: ";
if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    $yazıyımmı = false;
    echo "gecersiz email address.<br>";
}
if($yazıyımmı){
    echo $mail . "<br>";
}

//bolumler
echo "bolumunuz: " . $bolum . "<br>";

//cinsiyet
echo "cinsiyetiniz: " . $cinsiyet . "<br>";

//yurt dısı
echo "yurt dışına çıkma durumunuz: ";
if (isset($yurt)) {
    echo "Yurt dışına çıktınız!<br>";
} else {
    echo "Yurt dışına çıkmamışsınız?<br>";
}

//ilgiler
echo "ilgi alanlarınız: ";
if($ilgialan == "ilgi alanlarınızı seciniz !"){
    echo $ilgialan . "<br>";
}else{
    foreach ($ilgialan as $ilgi) {
        echo $ilgi . "<br>";
    }
}
?>