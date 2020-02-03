      <?php
      include('connection.php');

      $query = "SELECT * FROM tb_user ORDER BY ID_user asc" or die("Error:" . mysqli_error());

      $result = mysqli_query($con, $query);
            
          
             echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>"; 

                 echo "<thead>"; 
                   echo "<tr>
                      <th>N.O</th>
                      <th>ชื่อ-สกุล</th>
                      <th>ชื่อเล่น</th>
                      <th>ตำแน่ง</th>
                      <th>เบอร์โทรศัพท์</th>
                      <th>สถานะ</th>
                      <th>ชื่อผู้ใช้</th>
                      <th>รหัสผ่าน</th>
                      <th>แก้ไข</th>
                      <th>ลบ</th>
                    </tr>";
                    echo "</thead>";
                while($row = mysqli_fetch_array($result)) { 
                  echo "<tbody>";
                  
                    echo "<tr>";
                    echo "<td>" .$row["ID_user"] . "</td>";
                    echo "<td>" .$row["name_las"] . "</td>";
                    echo "<td>" .$row["nickname"] . "</td>";
                    echo "<td>" .$row["position"] . "</td>";
                    echo "<td>" .$row["mobilephone"] . "</td>";
                    echo "<td>" .$row["level"] . "</td>";
                    echo "<td>" .$row["username"] . "</td>";
                    echo "<td>" .$row["password"] . "</td>";
                    
                    //แก้ไข
                    echo "<td align='center'><a href='show-editmember.php?ID_user=$row[0]'>
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