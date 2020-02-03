<?php
session_start();
session_destroy();
	
echo "<script>alert('คุณออกจากระบบเรียบร้อยแล้ว');location.href='index.php';</script>";
?>