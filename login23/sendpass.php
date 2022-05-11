<head>
   <meta charset="utf-8">
   <title></title>
   <link rel="stylesheet" href="stylecheck.css">
</head>
<?php

include "connect.php";
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ? AND email = ? AND mobile = ?");
$stmt->bindParam(1, $_POST["username"]);
$stmt->bindParam(2, $_POST["email"]);
$stmt->bindParam(3, $_POST["mobile"]);

$stmt->execute();
$row = $stmt->fetch();
session_start();

if (!empty($row)) {
  $_SESSION["email"] = $row["email"];
  $_SESSION["username"] = $row["username"];
  $_SESSION["mobile"] = $row["mobile"];
  
  echo "<span class='echolost1'>" . "รหัสผ่านของคุณคือ" ."<br>".$row["password"]. "</span>";
  echo "<span class='los'>" . "<a href='login-form.php'>เข้าสู่ระบบ</a>" . "</span>";

} 
else {
  echo "<span class='echolost1' >" . "ไม่สำเร็จ  Username หรือ Email ไม่ถูกต้อง" . "</span><br><br>";
  echo "<span class='los'>" . "<a href='javascript:history.go(-1)'>ลองอีกครั้ง</a>" . "</span>";
}
?>
