<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>หน้าแรก</title>

	
</head>
<body>
<br><br><br><br><br><br><br><br>
<center><form method="get" action="../Alumni/search_STD_ID">
<td>รหัสนักศึกษา     :<input name="STD_ID" type="text" size="30" maxlength="9" /></td>
&nbsp;<button type="submit" class="btn btn-primary">ค้นหา</button></a>
  </form></center>

  <br><br>
<center><form method="get" action="../Alumni/search_Name">
<td>ชื่อนักศึกษา     :<input name="name" type="text" size="30" maxlength="30" /></td>
&nbsp;<button type="submit" class="btn btn-primary">ค้นหา</button></a>
  </form></center>

  
</body>
</html>