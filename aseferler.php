<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anadolu Seferleri</title>
</head>
<body>
<?php
session_start();
if($_POST){ /// post dönüyorsa devam et
    echo "<link rel=\"stylesheet\" href=\"seferler.css\">";
$anerden = $_POST['anerden']; 
$anereye = $_POST['anereye'];
$gidis = $_POST['gidiş'];
$dönüs = $_POST['dönüş'];

if($anerden == "İzmir" && $anereye == "İstanbul" && $gidis == "2021-12-21" && $dönüs == "2021-12-22"){ 
$conn = new mysqli("localhost", "root", "", "otogar");
$conn->set_charset("utf8");
$sonuc = $conn->query("SELECT * FROM saatler WHERE id=0");
 while($cikti = $sonuc->fetch_array()){
    echo "<h1>Firma İsmi: " . $cikti["firma_isim"] . "<br />  Saat: " . $cikti["saat"] . "<br /> Tarih: " . $cikti["tarih"] . "<br/> </h1> <button type=\"button\" onClick=\"parent.location='koltuksec.php'\">Koltuk Seç</button>" ;
}
$_SESSION['nerden'] = $anerden;
$_SESSION['nereye'] = $anereye;
$_SESSION['gidis'] = $gidis;
$_SESSION['dönüs'] = $dönüs;
$_SESSION['firma'] = "Anadolu";
$sonuc->close();
$conn->close();
}
elseif($anerden == "İzmir" && $anereye == "Ankara" && $gidis == "2021-12-22" && $dönüs == "2021-12-23"){
    $conn = new mysqli("localhost", "root", "", "otogar");
    $conn->set_charset("utf8");
    $sonuc = $conn->query("SELECT * FROM saatler WHERE id=1");
    while($cikti = $sonuc->fetch_array()){
        echo "<h1>Firma İsmi: " . $cikti["firma_isim"] . "<br />  Saat: " . $cikti["saat"] . "<br /> Tarih: " . $cikti["tarih"] . "<br/> </h1> <button type=\"button\" onClick=\"parent.location='koltuksec.php'\">Koltuk Seç</button>" ;
    }
    $_SESSION['nerden'] = $anerden;
    $_SESSION['nereye'] = $anereye;
    $_SESSION['gidis'] = $gidis;
    $_SESSION['dönüs'] = $dönüs;
    $_SESSION['firma'] = "Anadolu";   
    $sonuc->close();
    $conn->close();
}
elseif($anerden == "İstanbul" && $anereye == "İzmir" && $gidis == "2021-12-23" && $dönüs == "2021-12-24"){
    $conn = new mysqli("localhost", "root", "", "otogar");
    $conn->set_charset("utf8");
    $sonuc = $conn->query("SELECT * FROM saatler WHERE id=2");
     while($cikti = $sonuc->fetch_array()){
        echo "<h1>Firma İsmi: " . $cikti["firma_isim"] . "<br />  Saat: " . $cikti["saat"] . "<br /> Tarih: " . $cikti["tarih"] . "<br/> </h1> <button type=\"button\" onClick=\"parent.location='koltuksec.php'\">Koltuk Seç</button>" ;
    }
    $_SESSION['nerden'] = $anerden;
    $_SESSION['nereye'] = $anereye;
    $_SESSION['gidis'] = $gidis;
    $_SESSION['dönüs'] = $dönüs;
    $_SESSION['firma'] = "Anadolu";
    $sonuc->close();
    $conn->close();
}
elseif($anerden == "İstanbul" && $anereye == "Ankara" && $gidis == "2021-12-25" && $dönüs == "2021-12-26"){
    $conn = new mysqli("localhost", "root", "", "otogar");
    $conn->set_charset("utf8");
    $sonuc = $conn->query("SELECT * FROM saatler WHERE id=3");
     while($cikti = $sonuc->fetch_array()){
        echo "<h1>Firma İsmi: " . $cikti["firma_isim"] . "<br />  Saat: " . $cikti["saat"] . "<br /> Tarih: " . $cikti["tarih"] . "<br/> </h1> <button type=\"button\" onClick=\"parent.location='koltuksec.php'\">Koltuk Seç</button>" ;
    }
    $_SESSION['nerden'] = $anerden;
    $_SESSION['nereye'] = $anereye;
    $_SESSION['gidis'] = $gidis;
    $_SESSION['dönüs'] = $dönüs;
    $_SESSION['firma'] = "Anadolu";
    $sonuc->close();
    $conn->close();
}
}
?>
</body>
</html>