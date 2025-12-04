<html>
<head>
<title>
Bu sayfa silinmeli !
</title>
</head>

<body>
<form action="adsoyademailsifre.php" method="POST">
    AD VE SOYADINIZ: <input type="text" name="ad"><br><br>
    
    E-posta: <input type="email" name="mail"><br><br>
    
    Okuduğunuz bölüm hangisidir? <br>
    <select name="bolum">
      <option value="bilgisayar">Bilgisayar</option>
      <option value="motor">Motor</option>
      <option value="elektrik">Elektrik</option>
      <option value="elektronik">Elektronik</option>
    </select><br><br>
    
    Cinsiyetiniz? <br>
    <input type="radio" name="cinsiyet" value="erkek"> Erkek
    <input type="radio" name="cinsiyet" value="kiz"> Kız <br><br>
    
    Hiç yurt dışına gittiniz mi? <br>
    <input type="checkbox" name="yurt" value="evet"> Evet <br><br>
    
    <input type="submit" value="Gönder">
  </form>
<?php 





?>
</body>

</html>