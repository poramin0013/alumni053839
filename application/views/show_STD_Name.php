<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>หน้าแรก</title>

	
</head>
<body>
<table border="1" style="width:100%">
  <tr>
    <th>รหัสนักศึกษา</th>
    <th>คำนำหน้า</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>เพศ</th>
    <th>รหัสบัตรประชาชน</th>
    <th>วัน/เดือน/ปีเกิด</th>
  </tr>
<?php
        foreach($MA->result() as $row){
?>
<tr>
    <td><center><?php echo $row->STD_ID ?></center></td>
    <td><center><?php echo $row->title?></center></td>
    <td><center><?php echo $row->name ?></center></td>
    <td><center><?php echo $row->lastname ?></center></td>
    <td><center><?php echo $row->gender ?></center></td>
    <td><center><?php echo $row->C_ID ?></center></td>
    <td><center><?php echo $row->BD ?></center></td>
  </tr>
  <?php
         }

    ?>
    </table>
</body>
</html>