<?php session_start();  
 include("connection.php");

  $ID_user = $_SESSION['ID_user'];
  $name_las = $_SESSION['name_las'];
  $level = $_SESSION['level'];
  if($level!='Supervisor'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gray-900" id="page-top ">
	<?
	include 'connect.php';
	?>
    
	<table border="0">
			<tr>
				<td width="50"></td>
				<td colspan="3" width="1300" height="50"></td>
				<td width="50"></td>
			</tr>
			<tr>
				<td width="200"></td>
				<td colspan="3" width="1300" height="600">
					<div class="card shadow mb-4">
					<div class="card-header py-3">
					  <h5 class="m-0 font-weight-bold text-gray-800">แจ้งรายละเอียดงาน</h5>
					</div>
					<div class="card-body">
					  <div class="table-responsive">
							<table border="0" align="center">
								<div>
                                    
								<form action="insert_problem.php" name="Form_Member" method="post">
								<tr>
									<td width="500" height="50">ปัญหา
									<input type="text" class="form-control" name="name_problem" value=""/>
									<input type="hidden" class="form-control" name="ID_status" value="1"/>
									</td>
									<td width="50"></td>
									<!-- <td width="500">สถานที่
										<input type="text" class="form-control" required name="name_location" placeholder=""/>
									</td> -->


									<td width="500" height="50" >ผู้รับงาน
										<select name="ID_user" class="form-control">
						                    <option value="">-เลือกข้อมูล-</option>
						                    <option value="7">ฮาฟิส บินสาแล๊ะ</option>
						                    <option value="15">เกษม เสมสำราญ</option>
						                    <option value="16">ประยุทธ์ จันโอชา</option>
						           
      									</select>
									</td>
								</tr>
								<tr>
									<td width="500" height="50" >ชื่อโปรเจค
										<select name="ID_project" class="form-control">
									        <option value="">-เลือกข้อมูล-</option>
									        <option value="1">BOI-DMSMA61</option>
									        <option value="2">NS-YMSRTK</option>
									        
									    </select>
									</td>
									<td width="50"></td>
									<td width="500">รายละเอียดงาน
										<textarea class="form-control" required name="detail_problem" rows="3" placeholder=""></textarea>
									</td>
								</tr>
								
								<tr>
									
									
									<td width="500" height="50" >สถานที่
										<select name="ID_location" class="form-control">
                                            <option value="">-เลือกข้อมูล-</option>
						                    <option value="1">หนองแขม</option>
									        <option value="2">สายไหม</option>
									        <option value="3">รัชวิภา</option>
									        <option value="4">อ่อนนุช</option>
						           
      									</select>
									</td>
									
								</tr>
								
								<tr>
									<td align="center" colspan="3">
										<input type="submit" name="submit" value="บันทึก" class="btn btn-primary"/>&nbsp;&nbsp;
										<a href=javascript:history.back(1)><input type="button" name="reset" value="ยกเลิก" class="btn btn-danger"/></a>
									</td>
									
								</tr>
								</form>

								
							  </div>
							</table>
                        </div>
                        </div>
                    </div>
				</td>
				<td width="200"></td>
			</tr>
			<tr>
				<td width="50"></td>
				<td colspan="3" width="1300" height="50"></td>
				<td width="50"></td>
			</tr>
</table>
    
    
    
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
