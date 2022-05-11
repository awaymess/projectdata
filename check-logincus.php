<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>ล็อคอินสำเร็จ</title>
  <link rel="stylesheet" href="stylecheck.css">

</head>

<body>
  <?php
  include "connect.php";
  session_start();
  
  $stmt = $pdo->prepare("SELECT * FROM customer WHERE cususer = ? AND custel = ?");
  $stmt->bindParam(1, $_POST["cususer"]);
  $stmt->bindParam(2, $_POST["custel"]);
  $stmt->execute();
  $row = $stmt->fetch();

  echo $_POST['cususer'];
  echo $_POST['custel'];
  $_SESSION['fullname'] = $row['cususer'];

  if (!empty($row)) {
    $_SESSION["fullname"] = $row["cususer"];
    $_SESSION["cususer"] = $row["cususer"];
    header("Location:no_id.php");
  } else {
    header("Location:login1.php");
  }

  ?>

</body>

</html>