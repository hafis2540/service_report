<?php
  include('connection2.php');


  $query = "SELECT * FROM tb_appoint ORDER BY appoint_id asc" or die("Error:" . mysqli_error());

$result = mysqli_query($con, $query); 




echo "<table class='table table-bordered  table-hover table-striped' align='center'>
  ";

    echo"<tr align='center'>
      <th><center>ลำดับที่.</center></th>
      <th>วันที่การนัดหมาย</th>
      <th>เวลาการนัดหมาย</th>
      <th>เรื่องการนัดหมาย</th>
      <th>สถานทีการนัดหมาย</th>
      <th>แก้ไข</th>
      <th>ลบ</th>
      
    </tr>";
 
  while($row = mysqli_fetch_array($result)) { 
    echo "<tr>";
     echo "<td>" .$row["appoint_id"] . "</td>";
     echo "<td>" .$row["appoint_date"] . "</td>";
     echo "<td>" .$row["appoint_time"] . "</td>";
     echo "<td>" .$row["appoint_list"] . "</td>";
     echo "<td>" .$row["appoint_location"] . "</td>";

     ///แก้ไขข้อมูล
  echo "<td align='center'><a href='edit_project.php?ID=$row[0]'>
  <span class='fa fa-edit' style='font-size:18px'  title='แก้ไข'></span></a></td> "; 
  
  //ลบข้อมูล
  echo "<td align='center'><a href='product_del.php?member_id=$row[0]' onclick=\"return confirm('คุณต้องการลบใช่หรือไม่ ? !!!')\">
  <span class='glyphicon glyphicon-trash' style='font-size:18px ;color:red' title='ลบ' ></span></a></td> ";
  
 
    echo "</tr>";
  }

  
echo "</table>";
mysqli_close($con);
?>