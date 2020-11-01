<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>หน้าแรก</title>

	
</head>

<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<?php
  foreach($MA as $row){
  ?>
    <div class="container">
      <tr>
        <td>
            <th>
              <a class="title">รหัสนักศึกษา 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->STD_ID;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">คำนำหน้า
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->title;?></a>
              </a>
            </th>
            <br><br>
          
            <th>
              <a class="title">ชื่อ
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->name;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">นามสกุล 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->lastname;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">รหัสบัตรประชาชน 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->C_ID;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">วัน/เดือน/ปีเกิด 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->BD;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ปีที่จบ 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->YEARCON;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">บ้านเลขที่ 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->HOME_N;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">หมู่ 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->MOO;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ตำบล 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->KT;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">อำเภอ 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->KA;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">จังหวัด 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->CH;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">รหัสไปรษณีย์ 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->HOME_P;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ตำแหน่ง 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->POS;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ชื่อบริษัท 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->W_N;?></a>
              </a>
            </th>
            <br><br>
            <th>
              <a class="title">E-mail 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->email;?></a>
              </a>
            </th>
            <br><br>
            <th>
              <a class="title">เบอร์โทร 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->tel;?></a>
              </a>
            </th>
            <br><br>
            <th>
              <a class="title">Facebook 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->facebook;?></a>
              </a>
            </th>
            <br><br>
            <th>
              <a class="title">Line 
                <a class="input">: &nbsp;&nbsp;&nbsp; <?=$row->line;?></a>
              </a>
            </th>
            <br><br>
        </td>
      </tr>
    </div>
  <?php
  }
  ?>
</body>
</html>