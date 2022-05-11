<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>ล็อคอินสำเร็จ</title>
  <link rel="stylesheet" href="stylecheck.css">

</head>

<body>
  <?php
  include "../connect.php";
  session_start();

  

  $stmt = $pdo->prepare("SELECT * FROM employee WHERE Emuser = 1 AND Empass = 1");
  $stmt->bindParam(1, $_post["Emuser"]);
  $stmt->bindParam(2, $_post["Empass"]);
  $stmt->execute();
  $row = $stmt->fetch();

  if (empty($_SESSION["Emuser"])) {
    header("location: index.php");
  } else {
    // header("location: lostpass-form.php");
  }

  if (!empty($row)) {
    $_SESSION["Empass"] = $row["Empass"];
    $_SESSION["Emuser"] = $row["Emuser"];
    // echo "<br><br><span class='echolost1'>" . "เข้าสู่ระบบสำเร็จ" . "</span><br><br>";
    // echo "<div class='los'>" . "<a href='user-home.php?username=$row[username]'>บัญชีผู้ใช้</a>" . "</div><br>";
    // echo "<div class='los'>" . "<a href='index.php'>หน้าหลัก</a>" . "</div><br>";
    header("Location:../index.php");
    
  } else {
    // header("location: index.php");
    echo "<br><br><span class='echolost1' >" . "ไม่สำเร็จ ชื่อหรือรหัสผ่านไม่ถูกต้อง" . "</span><br><br>";
    echo "<span class='los'>" . "<a href='javascript:history.go(-1)'>เข้าสู่ระบบอีกครั้ง</a>" . "</span>";
  }
  ?>

</body>

</html>