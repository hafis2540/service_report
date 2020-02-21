<?php
      include('connection.php');

//TEST
$query = " SELECT *
FROM tb_problem as p
INNER JOIN tb_project as pro ON p.ID_project = pro.ID_project
INNER JOIN tb_user as u ON p.ID_user = u.ID_user
INNER JOIN tb_job_type as j ON p.ID_type = j.ID_type
INNER JOIN tb_status as s ON p.ID_status = s.ID_status
ORDER BY p.ID_project asc " or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);

?>
            
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr align="center">
                      <th>N.O</th>
                      <th>ปัญหา</th>
                      <th>ชื่อผู้แจ้ง</th>
                      <th>เบอร์ติดต่อ</th>
                      <th>สถานะ</th>
                      <th>แก้ไข / ลบ</th>
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
        $status = $row['ID_status'];
        
  ?>
  <tbody>
    <tr align="center">
      <td><?php echo $ID_problem ?></td>
      <td><a href="#" id="<?php echo $ID_problem ?>" class="view_data"><?php echo $name_problem ?></a></td>
      <td><?php echo $name_las ?></td>
      <td><?php echo $mobilephone ?></td>
      <td>
                  <?php
                        if($status==1){
                          echo "<button type='button' class='btn btn-danger'>รอดำเนินการ</button>";
                        }
                        elseif ($status==2) {
                        echo "<button type='button' class='btn btn-primary'>กำลังดำเนินการ</button>";
                        }
                        elseif ($status==3) {
                        echo "<button type='button' class='btn btn-success'>ดำเนินการเรียบร้อย</button>";
                        } 
                  ?>
      </td>                                        
      <td>
        <a href="#" data-toggle="modal" data-target="#deleteModal"><button type="button" class="btn btn-warning">แก้ไข</button></a>
        <a href="#" data-toggle="modal" data-target="#cancelModal"><button type="button" class="btn btn-danger">ยกเลิกงาน</button></a>

      </td>      
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
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">รายละเอียด ปัญหา</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="detail_detail">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary">แก้ไข</button>
      </div>
    </div>
  </div>
</div>

          <!-- cancel Modal-->
          <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                              aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">คุณต้องการยกเลิกใชหรือไม่</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                  </div>
                                    <div class="modal-body">
                                         <form action="canceltest.php" method="POST" name="add" class="form-horizontal" id="add">
                                              <div class="form-group">
                                                <label for="message-text" class="col-form-label">กรุณากรอกหมายเหตุ:</label>
                                                <textarea type="text" name="cancel_text" class="form-control" id="cancel_text" required minlength="2"></textarea>
                                              </div>
                                         </form>
                                    </div>
                                  <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                                    <a class="btn btn-primary" href="canceltest.php">Save</a>
                                  </div>
                                    
                                </div>
                              </div>
                            </div>



<!-- js ajax detail modal -->
<script>
  $(document).ready(function(){
    $('.view_data').click(function(){
      $('#detailModal').modal("show");
    });
  });
</script>

<script>
  $(document).ready(function(){
    $('.view_data').click(function(){
       var ID_problem = $(this).attr("id");  
            $.ajax({  
                 url:"select_detail_problem.php",  
                 method:"post",  
                 data:{ID_problem:ID_problem},  
                 success:function(data){  
                      $('#detail_detail').html(data);  
                     $('#dataModal').modal("show");  
                 }  
           });  
    });  
  });  
 </script>