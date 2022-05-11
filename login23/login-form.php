<html>

<head>
   <meta charset="utf-8">
   <title></title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <form action="check-login.php" method="POST">

   <div class="login-box">
      
         <h1>เข้าสู่ระบบ</h1>
         <div class="textbox">
            <input type="text" placeholder="ชื่อบัญชีผู้ใช้" name="username">
         </div>

         <div class="textbox">
            <input type="password" placeholder="รหัสผ่าน" name="password"><br>
         </div>

         <input type="submit" class="btn" value="Login">

         <!-- <input type="button" class="regis" value="สมัครสมาชิก" ><br> -->
         <a href='register-form.html' class="regis">สมัครสมาชิก</a>
         <a href='lostpass-form.php' class="los">ลืมรหัสผ่าน</a>

      </div>
   </form>

</body>

</html>