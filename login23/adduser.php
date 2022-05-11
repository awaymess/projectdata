<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stylecheck.css">
</head>

<body>
    <?php

    session_start();
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("INSERT INTO member VALUES (?,?,?,?,?,?)");
    $stmt->bindParam(1, $_POST["username"]);
    $stmt->bindParam(2, $_POST["password"]);
    $stmt->bindParam(3, $_POST["name"]);
    $stmt->bindParam(4, $_POST["address"]);
    $stmt->bindParam(5, $_POST["mobile"]);
    $stmt->bindParam(6, $_POST["email"]);

    if (trim($_POST["username"]) == "") {
            echo "<span class='echolost1'>" . "กรุณากรอกชื่อบัญชีผู้ใช้" . "</span>";
            echo "<span class='los '>" . "<a href=\"javascript:history.go(-1)\">ย้อนกลับ</a>" . "</span>";
            exit();
        }
    if (trim($_POST["password"]) == "") {
            echo "<span class='echolost1'>" . "กรุณากรอกรหัสผ่าน" . "</span>";
            echo "<span class='los '>" . "<a href=\"javascript:history.go(-1)\">ย้อนกลับ</a>" . "</span>";
            exit();
        }
    if (trim($_POST["name"]) == "") {
            echo "<span class='echolost1'>" . "กรุณากรอกชื่อ-สกุล" . "</span>";
            echo "<span class='los '>" . "<a href=\"javascript:history.go(-1)\">ย้อนกลับ</a>" . "</span>";
            exit();
        }
    if (trim($_POST["address"]) == "") {
            echo "<span class='echolost1'>" . "กรุณากรอกที่่อยุ่" . "</span>";
            echo "<span class='los '>" . "<a href=\"javascript:history.go(-1)\">ย้อนกลับ</a>" . "</span>";
            exit();
        }
    if (trim($_POST["email"]) == "") {
            echo "<span class='echolost1'>" . "กรุณากรอก Email" . "</span>";
            echo "<span class='los '>" . "<a href=\"javascript:history.go(-1)\">ย้อนกลับ</a>" . "</span>";
            exit();
        }
    if (trim($_POST["mobile"]) == "") {
            echo "<span class='echolost1'>" . "กรุณากรอกเบอร์โทรศัพท์" . "</span>";
            echo "<span class='los '>" . "<a href=\"javascript:history.go(-1)\">ย้อนกลับ</a>" . "</span>";
            exit();
        }
        
    $stmt->execute();
    echo "<span class='echolost1'>" . "สมัครสมาชิกสำเร็จ" . "</span>";
    echo "<span class='los'>" . "<a href='login-form.php'>เข้าสู่ระบบ</a>" . "</span><br>";

    ?>
</body>

</html>