<meta charset="UTF-8">
<?php

include("connection.php");

//ที่เราได้สร้างไว้ก่อนหน้า
$fileupload = $_REQUEST['fileupload']; //รับค่าไฟล์จากฟอร์ม	

//ฟังก์ชั่นวันที่
    date_default_timezone_set('Asia/Bangkok');
	$date = date("Y-m-d");
	$time = time("H:i:s");
//ฟังก์ชั่นสุ่มตัวเลข
         $numrand = (mt_rand());
//เพิ่มไฟล์
$upload=$_FILES['fileupload'];
if($upload <> '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป 
$path="fileupload/";  

//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
 $type = strrchr($_FILES['fileupload']['name'],".");
	
//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
$newname = $date.$numrand.$type;
$path_copy=$path.$newname;
$path_link="fileupload/".$newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile



$sql = "INSERT INTO tb_problem (name_problem, job_date, job_proceed, ID_status, equipment, code_equipment, ID_project, ID_type, ID_user, ID_location, station,uploaded_on ,fileupload) 
		    VALUES ('".$_POST["name_problem"]."', '".$_POST["job_date"]."', '".$_POST["job_proceed"]."', '".$_POST["ID_status"]."', '".$_POST["equipment"]."', '".$_POST["code_equipment"]."', '".$_POST["ID_project"]."', '".$_POST["ID_type"]."', '".$_POST["ID_user"]."', '".$_POST["ID_location"]."', '".$_POST["station"]."','".$date."', '$newname')";
		
		$result = mysqli_query($con, $sql) or die (mysqli_error($con) . "<br>$sql");
			
		mysqli_close($con);
	
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จแล้วครับ');";
	echo "window.location = 'user.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('ผิดผลาดกรุณาลองใหม่อีกครั้ง');";
	echo "</script>";
}

?>