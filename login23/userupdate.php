<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylecheck.css">

</head>
<?php
include "connect.php";
$stmt = $pdo->prepare("UPDATE member SET  password = ?, name = ?, address = ?, mobile = ?, email = ? WHERE username = ?");
// username = ?, $stmt->bindParam(1, $_POST["username"]);
$stmt->bindParam(1, $_POST["password"]);
$stmt->bindParam(2, $_POST["name"]);
$stmt->bindParam(3, $_POST["address"]);
$stmt->bindParam(4, $_POST["mobile"]);
$stmt->bindParam(5, $_POST["email"]);
$stmt->bindParam(6, $_POST["username"]);
$stmt->execute();
$row = $stmt->fetch();

echo "<br><br><span class='echolost1'>" . "แก้ไขข้อมูลสำเร็จ" . "</span><br><br>";
echo "<span class='los'>" . "<a href='user-home.php?username=$_POST[username]'>ย้อนกลับ</a>" . "</span><br>";
?>
