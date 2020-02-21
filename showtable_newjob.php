<?php
      include('connection.php');

//TEST
$query = " SELECT *
FROM tb_problem as p
INNER JOIN tb_project as pro ON p.ID_project = pro.ID_project
INNER JOIN tb_user as u ON p.ID_user = u.ID_user
INNER JOIN tb_location as l ON p.ID_location = l.ID_location
WHERE ID_status='1'
ORDER BY ID_problem asc " or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);

?>
            
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr align="center">
      <th>งาน</th>
      <th>ปัญหา</th>
      <th>ชื่อผู้แจ้ง</th>
      <th>โครงการ</th>
      <th>สถานที่</th>
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
      $name_location = $row['name_location'];
      $code_project = $row['code_project'];
      $status = $row['ID_status'];
      // $status = 1; // ลองเปลี่ยนตัวเลขตรงนี้นะครับ เพื่อทดสอบ if else ที่เราได้เขียนไว้

  ?>
  <tbody>
    <tr align="center">
    <?php if($status=="1") {;?>
                      <td>
                        <a href="update_status.php?id=<?php echo $ID_problem;?>">
                            <button type="submit" class="btn btn-success" name="status">รับงาน</button></a>
                      <?php };?>    
      <td><a href="#" id="<?php echo $ID_problem ?>" class="view_data"><?php echo $name_problem ?></a></td>
      <td><?php echo $name_las ?></td>
      <td><?php echo $code_project ?></td>
      <td><?php echo $name_location ?></td>

      <td><?php if($status==1){
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
        <a href="show-editmember.php?GetID=<?php echo $ID_user ?>"><button type="button" class="btn btn-warning">แก้ไข</button></a>
        <a href="testdelete.php?Del=<?php echo $ID_user ?>"><button type="button" class="btn btn-danger">ลบ</button></a>
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

