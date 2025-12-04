<html>
<head>
<title>
Bu sayfa silinmeli !
</title>
</head>

<body>
<form action="adsoyademailsifre.php" method="POST">
    Adınız ve soyadınız : <input type="text" name="ad"><br>
    Yasınız: <input type="number" name="yas"><br>
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
    
	ilgi alanlarınız : <br>
	spor <input type="checkbox" name="ilgi[]" value="spor"><br>
	muzik <input type="checkbox" name="ilgi[]" value="muzik"><br>
	yazılm <input type="checkbox" name="ilgi[]" value="yazılım"><br>
	kitap okuma <input type="checkbox" name="ilgi[]" value="kitap Okuma"><br>
	puzzle yapmak <input type="checkbox" name="ilgi[]" value="puzzle"><br>
	oyun oynamak <input type="checkbox" name="ilgi[]" value="oyun oynamak"><br><br>
	
    <input type="submit" value="Gönder">
  </form>
<?php 





?>
</body>

</html>