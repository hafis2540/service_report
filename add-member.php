<meta charset="UTF-8">
<?php

include("connection.php");

$sql = "INSERT INTO tb_user (name_las, nickname, position, level, mobilephone, username, password) 
		VALUES('".$_POST["name_las"]."', '".$_POST["nickname"]."', '".$_POST["position"]."', '".$_POST["level"]."', '".$_POST["mobilephone"]."', '".$_POST["username"]."', '".$_POST["password"]."')";
		
		$result = mysqli_query($con, $sql) or die (mysqli_error($con) . "<br>$sql");
	
	mysqli_close($con);
	
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จแล้วครับ');";
	echo "window.location = 'table.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('ผิดผลาดกรุณาลองใหม่อีกครั้ง');";
	echo "</script>";
}

?>