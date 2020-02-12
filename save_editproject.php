<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $ID_project = $_GET['ID'];
        $code_project = $_POST['code1'];
        $name_project = $_POST['code2'];
		$office_name = $_POST['code3'];
        
        
        $query = " UPDATE tb_project SET code_project = '".$code_project."',name_project='".$name_project."',office_name='".$office_name."' where ID_project='".$ID_project."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:project.php");
			
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    


?>