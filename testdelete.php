<?php 

        require_once("connection.php ");
        $datetimenow = date("Y-m-d");
        if(isset($_GET['Del']))
        {
            $ID_user = $_GET['Del'];
            // $query = " DELETE from tb_user where ID_user = '".$ID_user."'";
            $query = " UPDATE tb_problem SET delete_status = 'Y', delete_userID = '".$ID_user."' WHERE ID_problem = '".$_GET['Del']."' " ;
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:supervisor.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:view.php");
        }

?>