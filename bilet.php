<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilet Al</title>
</head>
<body>
   
    <?php 
    session_start();
    echo "<link rel=\"stylesheet\" href=\"bilet.css\">";
    $firma = $_SESSION['firma'];
    $eposta = $_SESSION['eposta'];
    $isim = $_SESSION['isim'];
    $soyisim = $_SESSION['soyisim'];
    $kalkis = $_SESSION['nerden'];
    $varis = $_SESSION['nereye'];
    $tarih = $_SESSION['gidis'];
    $tel = $_SESSION['tel'];
    
    
    foreach($_REQUEST as $koltuk){
        echo  "<h1>Firma İsmi: " . $_SESSION['firma'] . "<br />  Kalkış Noktası: " . $_SESSION['nerden'] . "<br />Varış Noktası: " . $_SESSION['nereye'] . "<br/> Gidiş Tarihi: " . $_SESSION['gidis'] . "<br />  Dönüş Tarihi: " . $_SESSION['dönüs'] . "<br /> Koltuk Numarası: " . $koltuk . "<br/>" ."<br />  ~~~~Müşteri Bilgileri~~~~ " .  "<br/>" ."<br/> İsim: " . $_SESSION['isim'] . "<br /> Soyisim: " . $_SESSION['soyisim'] . "<br /> E-posta: " . $_SESSION['eposta'] . "<br />Telefon Numarası: " . $_SESSION['tel'] . "<br /></h1>" ;
        $conn = mysqli_connect("localhost", "root", "", "otogar");
        $conn->set_charset("utf8");
        $kullaniciekle="INSERT INTO biletler(firma_isim, eposta, isim, soyisim, koltuknumarasi, kalkis, varis, tarih, tel_no) 
        VALUES ('$firma','$eposta','$isim','$soyisim','$koltuk','$kalkis','$varis','$tarih','$tel')";
        
        $sonuc = $conn->query($kullaniciekle);
    }
    
    /*if ($sonuc==0)
     echo "Eklenemedi, kontrol ediniz";
    else
     echo "Başarıyla eklendi";*/

    ?>
    
</body>
</html>