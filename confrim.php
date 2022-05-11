<?php include "connect.php" ;
session_start();
$user = $_SESSION['cususer'];
?>
<?php
$stmt = $pdo->prepare("UPDATE orders SET status='1' WHERE cususer='$user'");

if ($stmt->execute())
header("location: thankyou.html");
// $row = $stmt->fetch();

// echo "แกไ้ขส";
?>