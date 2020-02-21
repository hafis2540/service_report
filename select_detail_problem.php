<?php                       
     include 'connection.php';   
?>

<?php  
 if(isset($_POST["ID_problem"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM tb_problem WHERE ID_problem = '".$_POST["ID_problem"]."'";  
      $result = mysqli_query($con, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["name_problem"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>status</label></td>  
                     <td width="70%">'.$row["status"].'</td>  
                </tr>    
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>