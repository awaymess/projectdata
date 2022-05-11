<?php include "connect.php" ;
session_start();
$user = $_SESSION['cususer'];

?>

<?php

$stmt = $pdo->prepare("INSERT INTO orders VALUES ('', (SELECT MAX(Rid) from receipt), ?, ?, ?,?,?,?,?,?,'$user',?)");


$stmt->bindParam(1, $_POST["nameorder"]);
$stmt->bindParam(2, $_POST["typeorder"]);
$stmt->bindParam(3, $_POST["priceorder"]);
$stmt->bindParam(4, $_POST["quaor"]);
$stmt->bindParam(5, $_POST["totalor"]);
$stmt->bindParam(6, $_POST["addonorder"]);
$stmt->bindParam(7, $_POST["addonwiporder"]);
$stmt->bindParam(8, $_POST["sizeorder"]);
$stmt->bindParam(9, $_POST["status"]);

$stmt->execute(); // เริ่มเพิ่มข้อมูล
// echo "<a href='cart.php?CusTelorder=$_POST[CusTelorder]'>ย้อนกลับ</a>";
header("location: shop.php");
?>
