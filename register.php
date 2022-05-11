<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php

    session_start();
    include "connect.php";
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("INSERT INTO customer VALUES (?,?,?)");
    $stmt->bindParam(1, $_POST["custel"]);
    $stmt->bindParam(2, $_POST["cusname"]);
    $stmt->bindParam(3, $_POST["cususer"]);


    if (trim($_POST["custel"]) == "") {
            echo "<span class='echolost1'>" . "กรุณากรอกเบอร์โทร" . "</span>";
            echo "<span class='los '>" . "<a href=\"javascript:history.go(-1)\">ย้อนกลับ</a>" . "</span>";
            exit();
        }
    if (trim($_POST["cusname"]) == "") {
            echo "<span class='echolost1'>" . "กรุณากรอกชื่อ-สกุล" . "</span>";
            echo "<span class='los '>" . "<a href=\"javascript:history.go(-1)\">ย้อนกลับ</a>" . "</span>";
            exit();
        }
    if (trim($_POST["cususer"]) == "") {
            echo "<span class='echolost1'>" . "กรุณากรอกชื่อบัญชีผู้ใช้" . "</span>";
            echo "<span class='los '>" . "<a href=\"javascript:history.go(-1)\">ย้อนกลับ</a>" . "</span>";
            exit();
        }

    $stmt->execute();
    header("Location:login1.php");

    ?>
</body>

</html>