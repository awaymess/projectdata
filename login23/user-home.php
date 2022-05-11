<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stylrlogout.css">
</head>

<body>
    <?php
    session_start();
    if (empty($_SESSION["username"])) {
        header("location: login-form.php");
    }
        
    $username = $_POST["username"];
    include "connect.php";
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_POST["username"]);
    $stmt->execute();
    $row = $stmt->fetch();

    ?>

    <span class='echot'><b><br>ตั้งค่าบัญชี</b><br><?= $_SESSION["fullname"] ?></span>
    <div class="box">
        <form action="userupdate.php" method="POST">
            
            <input type="hidden" name="username" value="<?= $row['username'] ?>" />

            <div class="textbox">
            <b>ชื่อบัญชีผู้ใช้ : </b><?= $_POST["username"] ?>
            <!-- <b>ชื่อบัญชีผู้ใช้ : </b><input type="text" value="." name="username" placeholder="ชื่อบัญชีผู้ใช้"> -->
            </div>

            <div class="textbox">
                <b>Email : </b><input type="text" value="<?= $row["email"] ?>" name="email" placeholder="Email">
            </div>
            <div class="textbox">
                <b>รหัสผ่าน : </b><input type="text" value="<?= $row["password"] ?>" name="password" placeholder="รหัสผ่าน">
            </div>
            <div class="textbox">
                <b>ชื่อผู้ใช้ : </b><input type="text" value="<?= $row["name"] ?>" name="name" placeholder="ชื่อผู้ใช้">
            </div>
            <div class="textbox">
                <b>ที่อยู่ : </b><input type="text" value="<?= $row["address"] ?>" name="address" placeholder="ที่อยู่">
            </div>
            <div class="textbox">
                <b>เบอร์โทรศัพท์ : </b><input type="text" value="<?= $row["mobile"] ?>" name="mobile" placeholder="เบอร์โทรศัพท์">
            </div>

            <input type="submit" class="btn" value="ยืนยัน">
            <!-- <span class='btn'><a href='login-form.php'>เข้าสู่ระบบ</a></span> หน้าหลัก index -->

        </form>
        <h2><b><span><a href='logout.php'>ออกจากระบบ</a></span></b></h2>


    </div>

</body>

</html>