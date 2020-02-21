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
                      <th>สถานที่</th>
                      <th>แก้ไข</th>
                      <th>ลบ</th>
                    </tr>
                  </thead>
                  
                  <?php 
                  

                  while($row=mysqli_fetch_assoc($result))
                  {
                      $ID_location = $row['ID_location'];
                      $name_location = $row['name_location'];
                                       
                  ?>
                  <tbody>
                    <tr>
                                        <td><?php echo $ID_location ?></td>
                                        <td><?php echo $name_location ?></td>
                                        
                                                                              
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