<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>หน้าแรก</title>
    <br><br><br><br><br><br><br><br><br>
<center><form name="form1" method="post" action="../Alumni/Check_Login">
				<input name="STD_ID" type="text" placeholder="กรุณากรอกรหัสนักศึกษา">
				<br><br>	
                <input name="Password" type="password" placeholder="กรุณากรอกรหัสผ่าน">
                <br><br>
                <input class="button" type="submit" name="login"  value="Login" />
				<a href="../Alumni/index"><button type="button" class="btn btn-primary">ย้อนกลับ</button></a>
                </form>
<br>
    
</form></center>
	
</head>
<body>

</body>
</html>