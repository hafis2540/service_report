<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $ID_user = $_GET['ID'];
        $name_las = $_POST['name'];
        $nickname = $_POST['email'];
        $position = $_POST['age'];
        
        $query = " UPDATE tb_user SET name_las = '".$name_las."', nickname='".$nickname."',position='".$position."' where ID_user='".$ID_user."'";
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
        header("location:testtable.php");
    }


?>