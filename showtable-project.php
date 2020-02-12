<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N.O</th>
                      <th>ชื่อบริษัท โครงการ</th>
                      <th>รหัสโครงการ</th>
                      <th>ชื่อเต็มโครงการ</th>
                      <th>แก้ไข</th>
                      <th>ลบ</th>
                    </tr>
                  </thead>
                  
                  <?php 
                  

                  while($row=mysqli_fetch_assoc($result))
                  {
                      $ID_project = $row['ID_project'];
                      $office_name = $row['office_name'];
                      $code_project = $row['code_project'];
                      $name_project = $row['name_project'];
                                       
                  ?>
                  <tbody>
                    <tr>
                                        <td><?php echo $ID_project ?></td>
                                        <td><?php echo $office_name ?></td>
                                        <td><?php echo $code_project ?></td>
                                        <td><?php echo $name_project ?></td>
                                                                              
                                        <td><a href="show_editproject.php?GetID=<?php echo $ID_project ?>">
                                        <span class='fa fa-edit' style='font-size:18px'  title='แก้ไข'></span>
                                        </a></a></td>
                                        <td><a href="testdelete.php?Del=<?php echo $ID_project ?>">Delete</a></td>
                                    
                      
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