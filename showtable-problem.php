                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N.O</th>
                      <th><center>ปัญหา</center></th>
                      <th><center>ชื่อผู้แจ้ง</center></th>
                      <th><center>เบอร์ติดต่อ</center></th>
                      <th><center>ประเภทงาน</center></th>
                      <th><center>โครงการ</center></th>
                      <th><center>สถานะ</center></th>
                      <th><center>เวลาการแจ้ง</center></th>
                      <th><center>ลบ</center></th>
                    </tr>
                  </thead>
                
                  <?php
              while($row=mysqli_fetch_assoc($result))
                  {
                      $ID_problem = $row['ID_problem'];
                      $name_problem = $row['name_problem'];
                      $name_las = $row['name_las'];
                      $mobilephone = $row['mobilephone'];
                      $name = $row['name'];
                      $code_project = $row['code_project'];
                      $status = $row['status'];
                        {
                        if($status == "รอการตรวจสอบ") $tl="#FF0000"; // สีดำ
                        if($status == "กำลังดำเนินการ") $tl="#000000"; // สีแดง
                        if($status == "แก้ไขเรียบร้อย") $tl="#FF6600"; // สีส้ม
                        }
                 ?>
                  <tbody>
                    <tr>
                                        <td><?php echo $ID_problem ?></td>
                                        <td><a href="show-problem.php?GetID=<?php echo $ID_problem ?>"  class="view_deta1"><?php echo $name_problem ?></a></td>
                                        <td><?php echo $name_las ?></td>
                                        <td><?php echo $mobilephone ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $code_project ?></td>
                                        <td color="<?=$tl;?>"><?php echo $status ?> </td>                                        
                                        <td><center><a href="show-editmember.php?GetID=<?php echo $ID_user ?>">View</a></center></td>
                                        <td><center><a href="testdelete.php?Del=<?php echo $ID_user ?>">Delete</a></center></td>
                                    
                      
                    </tr>
                  </tbody>
                  <?php 
                  }
                  ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <html>
        <script src="dist/js/sb-admin-2.js"></script>
    <script>
     $(document).ready(function(){
       $('.view_data1').click(function(){
         var uid=$(this).attr("id");
         $.ajax({
           url:"view_details-Booking.php",
           method :"post",
           data:{id:uid},
           success:function(data){
             $('#detail').html(data);
              $('#dataModal').modal('show');
           }
         });
       });
     });
     </script>
        </html>
