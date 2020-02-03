<?php 
session_start();
        if(isset($_POST['username'])){
                  include("connection.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM tb_user 
                  WHERE username='".$username."' 
                  AND password='".$password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["ID_user"] = $row["ID_user"];
                      $_SESSION["name_las"] = $row["name_las"];
                      $_SESSION["level"] = $row["level"];

                    if($_SESSION["level"]=="Admin"){ 

                        Header("Location: admin.php");
                      }
                    if ($_SESSION["level"]=="User"){ 

                        Header("Location: user.php");
                      }
                    if ($_SESSION["level"]=="Supervisor"){ 

                        Header("Location: supervisor.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>