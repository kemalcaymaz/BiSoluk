<?php
$name = $email = $subject = $comment = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["name"])) {
    $name = "";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $email = "";
  } else {
    $email = test_input($_POST["email"]);
  }


  if (empty($_POST["comment"])) {
    $commentErr = "İleti alanı boş bırakılamaz.";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["subject"])) {
    $subject = "Diğer";
  } else {
    $subject = test_input($_POST["subject"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
/*Sending "Footer Form" to database*/
if(isset($name) && isset($email) && isset($subject) && isset($comment)) {
    $conn = new mysqli('localhost', 'root', '', 'bisoluk');
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->query("SET NAMES UTF8");
    $sql = "INSERT INTO footerform (isim, mail, konu, ileti)
VALUES ('$name', '$email', '$subject','$comment')";

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