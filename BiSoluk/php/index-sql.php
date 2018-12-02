<!Doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8"/>

</head>
<?php
/**
 * Created by PhpStorm.
 * User: ÇAYMAZ
 * Date: 27.11.2018
 * Time: 20:08
 */
$conn = new mysqli('localhost', 'root', '', 'bisoluk');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->query("SET NAMES UTF8");
/* Getting slider photo sources from DB*/
$sql = "SELECT id, gorsel, alternatif FROM slider where aktif=1 ORDER BY sira";
$slider = $conn->query($sql);
/*Getting announcements from DB*/
$duyuru = array();
for($x = 1; $x<4; $x++) {
    $sql = "SELECT id, baslik, kisametin, gorsel FROM duyurular where konum=$x";
    $result = $conn->query($sql);
    $result = $result->fetch_assoc();
    $duyuru[] = $result;
}
/*Getting news from DB */
$haber = array();
for($x = 1; $x<4; $x++) {
    $sql = "SELECT id, baslik, kisametin, gorsel FROM haberler where konum=$x";
    $result = $conn->query($sql);
    $result = $result->fetch_assoc();
    $haber[] = $result;
}


$conn->close();?>
</html>
