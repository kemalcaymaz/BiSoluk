<?php
$name = $email = $product = $preference = $phone = $amount = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (!empty($_POST["name"])) {
      $name = test_input($_POST["name"]);
  }

  if (!empty($_POST["email"])) {
      $email = test_input($_POST["email"]);
  }

  if (!empty($_POST["phone"])) {
      $phone = test_input($_POST["phone"]);
  }

  if(!empty($_POST["product"])){
      $product = test_input($_POST["product"]);
  }

  if (!empty($_POST["amount"])) {
      $amount = test_input($_POST["amount"]);
  }
  
  if (!empty($_POST["preference"])) {
    $preference = test_input($_POST["preference"]);
  }
  
  if (!empty($_POST["product"])) {
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
/*Sending "Destek Ol" form to database*/
if(isset($name) && isset($email) && isset($phone) && isset($product) && isset($amount)) {
    $conn = new mysqli('localhost', 'root', '', 'bisoluk');
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->query("SET NAMES UTF8");
    $sql = "INSERT INTO destekform (isim, mail,telefon,teis, urun, miktar)
VALUES ('$name', '$email', '$phone','$preference','$product','$amount')";

    if ($conn->query($sql) === TRUE) {
        echo "Form başarıyla gönderildi. Anasayfaya yönlendirileceksiniz.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
else {
   die('Gönderilecek Form Eksik Veriye Sahip');
}