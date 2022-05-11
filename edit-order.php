<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("UPDATE orders SET nameorder=? ,typeorder=? , priceorder=? , quaor=? ,totalor=?,addonorder=?,addonwiporder=?,sizeorder=? WHERE idorder=?");

$stmt->bindParam(1, $_POST["nameorder"]);
$stmt->bindParam(2, $_POST["typeorder"]);
$stmt->bindParam(3, $_POST["priceorder"]);
$stmt->bindParam(4, $_POST["quaor"]);
$stmt->bindParam(5, $_POST["totalor"]);
$stmt->bindParam(6, $_POST["addonorder"]);
$stmt->bindParam(7, $_POST["addonwiporder"]);
$stmt->bindParam(8, $_POST["sizeorder"]);
$stmt->bindParam(9, $_POST["idorder"]);
if ($stmt->execute())
header("location: cart.php");
// $row = $stmt->fetch();

// echo "แกไ้ขส";
?>