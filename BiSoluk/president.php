<?php
require_once('php/authenticate.php');
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<title>President of Presidents</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
       td{width: 45%;
       height: auto;}
        input{
            width: 75%;
            height: 100%;
            font-weight: bold;
        }
        textarea{
            height: 100%;
            width: 75%;
        }
    </style>
</head>
<body>
<!-- Getting footer forms from DB -->
<h1>Gelen İletişim Formları</h1>
<?php
$conn = new mysqli('localhost','root','','bisoluk');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM footerform";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo "ID: " . $row["id"] . " - İsim: " . $row["isim"] . " - Mail: " .$row["mail"]. " - Konu: " .$row["konu"] ." - İleti:
    " . $row["ileti"] . " - Tarih: " . $row["tarih"] . "<br>";
}
?>
<!-- Getting support forms from DB -->
<h1>Gelen Destek Formları</h1>
<?php
$conn = new mysqli('localhost','root','','bisoluk');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM destekform";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo "ID: " . $row["id"] . " - İsim: " . $row["isim"] . " - Mail: " .$row["mail"]. " - Telefon: ". $row["telefon"] . "
    - Tercih Edilen İletişim Şekli: " . $row["teis"] . " - Ürün: " .$row["urun"] ." - Miktar: " . $row["miktar"] . " - Tarih: " . $row["tarih"] . "<br>";
}
?>
<?php include 'php/index-sql.php';?>
<form action="php/submit.php" method="post">
<table>
    <tr>  <!-- Getting announcements and news from DB and creating input fields to update them -->
            <h1>Duyurular</h1>
            <table>
                <tr>
                    <td>
                        <figure><img src="<?=$duyuru[0]["gorsel"]?>" alt=""/></figure></td>
                    <td></td>
                </tr>
                <tr>
                    <td><h2><?=$duyuru[0]["baslik"]?></h2></td>
                    <td><input type="text" name="dbaslik0" placeholder="Başlık"></td>
                </tr>
                <tr>
                    <td><p><?=$duyuru[0]["kisametin"]?></p></td>
                    <td><textarea placeholder="Kısa Metin" name="dkisametin0" ></textarea></td>
                </tr>

                <tr>
                    <td>
                        <figure><img src="<?=$duyuru[1]["gorsel"]?>" alt=""/></figure></td>
                    <td></td>
                </tr>
                <tr>
                    <td><h2><?=$duyuru[1]["baslik"]?></h2></td>
                    <td><input type="text" name="dbaslik1" placeholder="Başlık"></td>
                </tr>
                <tr>
                    <td><p><?=$duyuru[1]["kisametin"]?></p></td>
                    <td><textarea placeholder="Kısa Metin" name="dkisametin1" ></textarea></td>
                </tr>

                <tr>
                    <td>
                        <figure><img src="<?=$duyuru[2]["gorsel"]?>" alt=""/></figure></td>
                    <td></td>
                </tr>
                <tr>
                    <td><h2><?=$duyuru[2]["baslik"]?></h2></td>
                    <td><input type="text" name="dbaslik2" placeholder="Başlık"></td>
                </tr>
                <tr>
                    <td><p><?=$duyuru[2]["kisametin"]?></p></td>
                    <td><textarea placeholder="Kısa Metin" name="dkisametin2" ></textarea></td>
                </tr>
            </table>
        
    </tr>
    <tr>
        <h1>Haberler</h1>
        <table>
            <tr>
                <td>
                    <figure><img src="<?=$haber[0]["gorsel"]?>" alt=""/></figure></td>
                <td></td>
            </tr>
            <tr>
                <td><h2><?=$haber[0]["baslik"]?></h2></td>
                <td><input type="text" name="hbaslik0" placeholder="Başlık"></td>
            </tr>
            <tr>
                <td><p><?=$haber[0]["kisametin"]?></p></td>
                <td><textarea placeholder="Kısa Metin" name="hkisametin0" ></textarea></td>
            </tr>

            <tr>
                <td>
                    <figure><img src="<?=$haber[1]["gorsel"]?>" alt=""/></figure></td>
                <td></td>
            </tr>
            <tr>
                <td><h2><?=$haber[1]["baslik"]?></h2></td>
                <td><input type="text" name="hbaslik1" placeholder="Başlık"></td>
            </tr>
            <tr>
                <td><p><?=$haber[1]["kisametin"]?></p></td>
                <td><textarea placeholder="Kısa Metin" name="hkisametin1" ></textarea></td>
            </tr>

            <tr>
                <td>
                    <figure><img src="<?=$haber[2]["gorsel"]?>" alt=""/></figure></td>
                <td></td>
            </tr>
            <tr>
                <td><h2><?=$haber[2]["baslik"]?></h2></td>
                <td><input type="text" name="hbaslik2" placeholder="Başlık"></td>
            </tr>
            <tr>
                <td><p><?=$haber[2]["kisametin"]?></p></td>
                <td><textarea placeholder="Kısa Metin" name="hkisametin2" ></textarea></td>
            </tr>
        </table>

    </tr>
</table>
    <input type="submit" value="Kaydet">
    </form>
</body>
</html>
