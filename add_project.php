<meta charset="UTF-8">
<?php

include("connection.php");

$sql = "INSERT INTO tb_project (code_project, name_project, office_name) 
		VALUES('".$_POST["code_project"]."', '".$_POST["name_project"]."', '".$_POST["office_name"]."')";
		
		$result = mysqli_query($con, $sql) or die (mysqli_error($con) . "<br>$sql");
	
	mysqli_close($con);
	
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จแล้วครับ');";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('ผิดผลาดกรุณาลองใหม่อีกครั้ง');";
	echo "</script>";
}

?>