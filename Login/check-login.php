<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>ล็อคอินสำเร็จ</title>

</head>

<body>
  <?php
  include "../connect.php";
  session_start();


  $stmt = $pdo->prepare("SELECT * FROM employee WHERE Emuser = ? AND Empass = ?");
  $stmt->bindParam(1, $_POST["Emuser"]);
  $stmt->bindParam(2, $_POST["Empass"]);
  $stmt->execute();
  $row = $stmt->fetch();

  echo $_POST['Emuser'];
  echo $_POST['Empass'];
  $_SESSION['fullname'] = $row['Emuser'];

  if (!empty($row)) {
    $_SESSION["fullname"] = $row["Emuser"];
    $_SESSION["Emuser"] = $row["Emuser"];
    header("Location:../manager/html");
  } else {
    header("Location:index.php");
  }

  ?>

</body>

</html>