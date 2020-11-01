<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>หน้าแรก</title>

	
</head>
<body>
<center><form method="post" action="../Alumni/insert_Register">
    <table width="50%" border="0">
    <tr>
    <td>รหัสนักศึกษา</td>
    <td><input name="STD_ID" type="text" id="STD_ID" size="30" maxlength="9"/></td>
  </tr>
  <tr>
    <td>รหัสผ่าน</td>
    <td><input name="Password" type="password" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>คำนำหน้า</td>
    <td><input name="title" type="text" maxlength="6"/></td>
  </tr>
  <tr>
    <td>ชื่อ</td>
    <td><input name="name" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>นามสกุล</td>
    <td><input name="lastname" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>เพศ</td>
    <td><input type="radio" name="gender" value="ชาย" />
    <label for="radio">ชาย</label>
    <input type="radio" name="gender" value="หญิง" />
    <label for="radio2">หญิง</label></td>
  </tr>
  <tr>
    <td>เลขบัตรประจำตัวประชาชน</td>
    <td><input name="C_ID" type="text" id="C_ID" size="30" maxlength="13"/></td>
  </tr>
  <tr>
    <td>วัน/เดือน/ปีเกิด</td>
    <td><label for="Date_Of_Birth"></label><input type="date" name="BD"  /></td>
  </tr>
  <tr>
    <td>บ้านเลขที่</td>
    <td><input name="HOME_N" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>หมู่</td>
    <td><input name="MOO" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>ตำบล</td>
    <td><input name="KT" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>อำเภอ</td>
    <td><input name="KA" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>จังหวัด</td>
    <td><input name="CH" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>รหัสไปรษณีย์</td>
    <td><input name="HOME_P" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>ตำแหน่ง</td>
    <td><input name="POS" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>ชื่อบริษัทบริษัท</td>
    <td><input name="W_N" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>บ้านเลขที่บริษัท</td>
    <td><input name="W_P" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>หมู่</td>
    <td><input name="W_MOO" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>ตำบล</td>
    <td><input name="W_KT" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>อำเภอ</td>
    <td><input name="W_KA" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>จังหวัด</td>
    <td><input name="W_CH" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>รหัสไปษณีย์</td>
    <td><input name="W_C" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>ปีที่จบ</td>
    <td><input name="YEARCON" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td><input name="email" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>เบอร์โทรศัพท์</td>
    <td><input name="tel" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>Facebook</td>
    <td><input name="facebook" type="text" size="30" maxlength="30"/></td>
  </tr>
  <tr>
    <td>Line</td>
    <td><input name="line" type="text" size="30" maxlength="30"/></td>
  </tr>
  </table>
<center><input name="submit" type="submit" value="สมัครสมาชิก" /></center>
</form></center></center>
<br>
  
    
</body>
</html>