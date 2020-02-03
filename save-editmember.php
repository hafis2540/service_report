<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include("connection.php");  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลักและไม่แก้ไขข้อมูล
$ID_user = $_GET['ID_user'];

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	// $ID_user = $_POST["ID_user"];
	// $name_las = $_POST["name_las"];
    // $nickname = $_POST["nickname"];
    // $position = $_POST["position"];
    // $mobilephone = $_POST["mobilephone"];
    // $level = $_POST["level"];
	// $username = $_POST["username"];
	// $password = $_POST["password"];	
	

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE tb_user SET  
            ID_user='$ID_user' ,
			name_las='$name_las' ,
			nickname='$nickname' , 
			position='$position' ,
			mobilephone='$mobilephone' ,
			level='$level' ,
            username='$username' ,
            password='$password'   
			WHERE ID_user='$ID_user' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'table.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
        echo "window.location = 'show-editmember.php'; ";
	echo "</script>";
}
?>