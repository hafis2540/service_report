<?php
      include('connection.php');

      $query = "SELECT * FROM tb_project ORDER BY ID_project asc" or die("Error:" . mysqli_error());

      $result = mysqli_query($con, $query);
            
          
             echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>"; 

                 echo "<thead>"; 
                   echo "<tr>
                      <th>N.O</th>
                      <th>ชื่อบริษัท โครงการ</th>
                      <th>รหัสโครงการ</th>
                      <th>ชื่อเต็มโครงการ</th>
                      <th>แก้ไข</th>
                      <th>ลบ</th>
                    </tr>";
                    echo "</thead>";
                
                while($row = mysqli_fetch_array($result)) { 
                  echo "<tbody>";
                  
                    echo "<tr>";
                    echo "<td>" .$row["ID_project"] . "</td>";
                    echo "<td>" .$row["office_name"] . "</td>";
                    echo "<td>" .$row["code_project"] . "</td>";
                    echo "<td>" .$row["name_project"] . "</td>";
                    
                    //แก้ไข
                    echo "<td align='center'><a href='edit_project.php?ID=$row[0]'>
                          <span class='fa fa-edit' style='font-size:18px'  title='แก้ไข'></span></a></td> "; 
  
                    //ลบข้อมูล
                    echo "<td align='center'><a href='product_del.php?member_id=$row[0]' onclick=\"return confirm('คุณต้องการลบใช่หรือไม่ ? !!!')\">
                          <span class='glyphicon glyphicon-trash' style='font-size:18px ;color:red' title='ลบ' ></span></a></td> ";
  
                    echo "</tr>";
                  
                  echo "</tbody>";
                }
                echo "</table>";
               
      mysqli_close($con);
?>