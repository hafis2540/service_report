<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N.o</th>
                      <th>ชื่อ-สกุล</th>
                      <th>ชื่อเล่น</th>
                      <th>ตำแหน่ง</th>
                      <th>เบอร์โทรศัพท์</th>
                      <th>สถานะ</th>
                      <th>ชื่อผู้ใช้</th>
                      <th>รหัสผ่าน</th>
                      <th>แก้ไข</th>
                      <th>ลบ</th>
                    </tr>
                  </thead>
                  
                  <?php 
                  

                  while($row=mysqli_fetch_assoc($result))
                  {
                      $ID_user = $row['ID_user'];
                      $name_las = $row['name_las'];
                      $nickname = $row['nickname'];
                      $position = $row['position'];
                      $mobilephone = $row['mobilephone'];
                      $level = $row['level'];
                      $username = $row['username'];
                      $password = $row['password'];
                  
                  ?>
                  <tbody>
                    <tr>
                                        <td><?php echo $ID_user ?></td>
                                        <td><?php echo $name_las ?></td>
                                        <td><?php echo $nickname ?></td>
                                        <td><?php echo $position ?></td>
                                        <td><?php echo $mobilephone ?></td>
                                        <td><?php echo $level ?></td>
                                        <td><?php echo $username ?></td>
                                        <td><?php echo $password ?></td>
                                        
                                        <td><a href="show-editmember.php?GetID=<?php echo $ID_user ?>">Edit</a></td>
                                        <td><a href="testdelete.php?Del=<?php echo $ID_user ?>">Delete</a></td>
                                    
                      
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