<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $ID_user = $_GET['ID'];
        $name_las = $_POST['name1'];
        $nickname = $_POST['name2'];
		$position = $_POST['name3'];
        $mobilephone = $_POST['name4'];
        $username = $_POST['name5'];
        $password = $_POST['name6'];
        
        $query = " UPDATE tb_user SET name_las = '".$name_las."',
        nickname='".$nickname."',
        position='".$position."',
        mobilephone='".$mobilephone."',
        username='".$username."',
        password='".$password."' where ID_user='".$ID_user."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:table.php");
			
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