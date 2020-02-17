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
      <th><center>รายละเอียด</center></th>
      <th><center>ลบ</center></th>
    </tr>
  </thead>
                
  <?php 
    while($row=mysqli_fetch_assoc($result))
    {
      $delete_status = $row['delete_status'];
      if($delete_status == 'N'){ 
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
      <td><?php echo $name_problem ?></td>
      <td><?php echo $name_las ?></td>
      <td><?php echo $mobilephone ?></td>
      <td><?php echo $name ?></td>
      <td><?php echo $code_project ?></td>
      <td color="<?=$tl;?>"><?php echo $status ?> </td>                                        
      <td><center><a href="details_problem.php?Det=<?php echo $ID_problem ?>">View</a></center></td>
      <td><center><a href="testdelete.php?Del=<?php echo $ID_problem ?> " data-toggle="modal" data-target="#deleteModal">Delete</a></center></td>     
    </tr>
    </tbody>
  <?php 
    }
    }
  ?>
</table>
              </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">คุณแน่ใจหรือไม่?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">คุณแน่ใจหรือไม่ ว่าคุณต้องการลบข้อมูลนี้</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-danger" href="testdelete.php?Del=<?php echo $ID_problem ?> ">Delete</a>
      </div>
    </div>
  </div>
</div>
