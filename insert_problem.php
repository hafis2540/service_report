<meta charset="UTF-8">
<?php

include("connection.php");

//ที่เราได้สร้างไว้ก่อนหน้า


$sql = "INSERT INTO tb_problem (ID_user, name_problem, ID_project, detail_problem, ID_location, ID_status) 
		    VALUES ('".$_POST["ID_user"]."', '".$_POST["name_problem"]."', '".$_POST["ID_project"]."', '".$_POST["detail_problem"]."', '".$_POST["ID_location"]."', '".$_POST["ID_status"]."')";
		
		$result = mysqli_query($con, $sql) or die (mysqli_error($con) . "<br>$sql");
			
		mysqli_close($con);
	
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จแล้วครับ');";
	echo "window.location = 'supervisor.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('ผิดผลาดกรุณาลองใหม่อีกครั้ง');";
	echo "</script>";
}

?>