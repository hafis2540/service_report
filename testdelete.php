<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $ID_user = $_GET['Del'];
            $query = " DELETE from tb_user where ID_user = '".$ID_user."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:testtable.php");
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