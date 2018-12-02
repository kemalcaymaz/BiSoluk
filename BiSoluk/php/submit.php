<?php
$hbaslik = array();
$dbaslik = array();

$hkisametin = array();
$dkisametin = array();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    for($x = 0; $x<3; $x++){

        if (empty($_POST["hbaslik" . $x])) {
            array_push($hbaslik,"");
        } else {
            array_push($hbaslik,test_input($_POST["hbaslik".$x]));
        }

        if (empty($_POST["hkisametin" . $x])) {
            array_push($hkisametin,"");
        } else {
            array_push($hkisametin,test_input($_POST["hkisametin".$x]));
        }

        if (empty($_POST["dbaslik" . $x])) {
            array_push($dbaslik,"");
        } else {
            array_push($dbaslik,test_input($_POST["dbaslik".$x]));
        }
        if (empty($_POST["dkisametin" . $x])) {
            array_push($dkisametin,"");
        } else {
            array_push($dkisametin,test_input($_POST["dkisametin".$x]));
        }
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


    $conn = new mysqli('localhost', 'root', '', 'bisoluk');
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$conn->query("SET NAMES UTF8");
   for($x = 0; $x < 3; $x++){
       if (!empty($dbaslik[$x]) && !empty($dkisametin[$x])) {
       $sql = "UPDATE duyurular SET baslik='$dbaslik[$x]', KisaMetin = '$dkisametin[$x]' WHERE konum = $x+1 ";

       if ($conn->query($sql) === TRUE) {

       } else {
           echo "Duyurular güncellenirken hata meydana geldi";
       }
   }}

for($x = 0; $x < 3; $x++) {

    if (!empty($hbaslik[$x]) && !empty($hkisametin[$x])) {
        $sql = "UPDATE haberler SET baslik='$hbaslik[$x]', kisametin = '$hkisametin[$x]' WHERE konum = $x+1 ";

        if ($conn->query($sql) === TRUE) {

        } else {
            echo "Haberler güncellenirken hata meydana geldi";
        }
    }
}
echo "Güncelleme işlemi bitti";

    $conn->close();
