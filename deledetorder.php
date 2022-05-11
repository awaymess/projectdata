<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("DELETE FROM orders WHERE idorder=?");
$stmt->bindParam(1, $_GET["idorder"]);
if ($stmt->execute()) 
    header("location: cart.php");
?>