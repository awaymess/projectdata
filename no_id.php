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
    include "connect.php";
    session_start(); ?>

    <!-- <a href="shop.php?cususer=<?= $_SESSION['cususer'] ?>">แก้ไข</a> -->

    <?php
    
    $user = $_SESSION['cususer'];
    // echo $user;
    
    // $stmt = $pdo->prepare("SELECT * FROM customer WHERE cususer = ?");
    // $stmt->bindParam(1, $_POST["cususer"]);
    // $stmt->execute();
    // $row = $stmt->fetch();
    // echo $_SESSION['cususer'];
    // $stmt = $pdo->prepare("INSERT INTO orders (Rid,CusTel) VALUES ((SELECT MAX(Rid) from receipt),$user)");
    // $stmt->execute();

    $stmt = $pdo->prepare("INSERT INTO receipt (Rid,cususer) VALUES ('','$user')");
    $stmt->execute();
    header("Location:index.php");

    ?>

</body>

</html>