<?php 

    require_once("connection.php");

    $ID_problem = isset($_GET['id']) ? $_GET['id']:'';

        
        $ID_status = 2;
    
		$query= "UPDATE tb_problem SET  
                                    ID_status = '".$ID_status."'
                                   
				WHERE ID_problem = '".$ID_problem."'";

    
        //echo "-------$sql3--------";
        //echo "<br>";
    
        $result = mysqli_query($con,$query);

        if($result){
            echo "<script type='text/javascript'>";
            echo "alert('รับงานสำเร็จ');";
            echo "window.location = 'user.php'; ";
            echo "</script>";
            }
            else{
            echo "<script type='text/javascript'>";
            echo "alert('ผิดผลาดกรุณาลองใหม่อีกครั้ง');";
            echo "</script>";
        }
?>