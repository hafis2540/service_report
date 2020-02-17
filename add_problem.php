<!DOCTYPE html>
<html lang="en">

<?php session_start();  
 include("connection.php");

  $ID_user = $_SESSION['ID_user'];
  $name_las = $_SESSION['name_las'];
  $level = $_SESSION['level'];
  if($level!='User'){
    Header("Location: ../logout.php");  
  }  


          
?>


<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Report Test</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text"> <?php echo $level; ?> <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>หน้าแรก</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <h6 align="center">สมาชิก</h6>
      </div>

      <!-- ส่วนของ Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>สมาชิก</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="table.php">สมาชิกทั้งหมด</a>
          </div>
        </div>
      </li>
      
      <hr class="sidebar-divider d-none d-md-block">
      <div class="sidebar-heading">
        <h6 align="center">โครงการ</h6>
      </div>

      <!-- ส่วนของ Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
          aria-controls="collapsePages">
          <i class="fas fa-fw fa-cog"></i>
          <span>โครงการ</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="project.php">โครงการทั้งหมด</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-info topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ฮาฟิส บินสาแล๊ะ</span>
                <img class="img-profile rounded-circle" src="php-server/report/img/nack.jpg/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a> -->
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a> -->
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Admin Page</h1>
          <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <div class="form-group">
    <form action="add-problem.php" method="post" name="add" enctype="multipart/form-data" class="form-horizontal" id="add">
    <div class="form-group">
    <div class="col-sm-1 text-left"> </div>
    <div class="col-sm-4 text-left">
      <b> ชื่อผู้แจ้ง </b>
      <input type="hidden" value="<?php echo $ID_user; ?>" name="ID_user" required class="form-control"  placeholder=""    minlength="2" />
      <input value="<?php echo $name_las; ?>" disable required class="form-control"  placeholder=""    minlength="2" />
    </div>
    </div>


    <!-- <div class="form-group">
    <div class="col-sm-1 text-left"> </div>
    <div class="col-sm-4 text-left">
      <b> เบอร์ติดต่อ </b>
      <input  name="nickname" type="text" required class="form-control"  placeholder=""    minlength="2" />
    </div>
    </div> -->

    <div class="form-group">
    <div class="col-sm-1 text-left"> </div>
    <div class="col-sm-4 text-left">
      <b> เวลารับงาน </b>
      <input  name="job_date" type="date" required class="form-control"  placeholder=""    minlength="2" />
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-1 text-left"> </div>
    <div class="col-sm-4 text-left">
      <b> เวลาดำเนินการ </b>
      <input  name="job_proceed" type="date" required class="form-control"  placeholder=""    maxlength="10" />
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-1 text-left"> </div>
    <div class="col-sm-4 text-left">
      <b> สถานที่ </b>
      <select name="ID_location" class="form-control">
        <option value="">-เลือกข้อมูล-</option>
        <option value="1">หนองแขม</option>
        <option value="2">สายไหม</option>
        <option value="3">รัชวิภา</option>
        <option value="4">อ่อนนุช</option>
      </select>
    </div>
  </div>

    <div class="form-group">
    <div class="col-sm-1 text-left"> </div>
    <div class="col-sm-4 text-left">
      <b> สถานี 
      <input  name="station" type="text" required class="form-control"  placeholder=""    minlength="2" />
    </div>
    </div>


    <div class="col-sm-4 text-left">
      
      <input  name="status" value="รอการตรวจสอบ" type="hidden" required class="form-control"  placeholder=""    minlength="2" />
    </div>

            
  <div class="form-group">
    <div class="col-sm-1 text-left"> </div>
    <div class="col-sm-4 text-left">
      <b> โครงการ </b>
      <select name="ID_project" class="form-control">
        <option value="">-เลือกข้อมูล-</option>
        <option value="1">BOI-DMSMA61</option>
        <option value="2">NS-YMSRTK</option>
        
      </select>
    </div>
  </div>
  
<div class="form-group">
    <div class="col-sm-1 text-left"> </div>
        <div class="col-sm-4 text-left">
            <b> ประเภทงาน </b>
                <select name="ID_type" class="form-control">
                    <option value="">-เลือกข้อมูล-</option>
                    <option value="1">Incident</option>
                    <option value="2">Upgrade</option>
                    <option value="3">Replace</option>
                    <option value="4">PM</option>
                    <option value="5">Project</option>
                    <option value="6">Other</option>
      </select>
        </div>
</div>

<div class="form-group">
    <div class="col-sm-1 text-left"> </div>
    <div class="col-sm-4 text-left">
      <b> ปัญหา </b>
      <input  name="name_problem" type="text" required class="form-control"  placeholder=""    minlength="2" />
    </div>
</div>

<div class="form-group">
    <div class="col-sm-1 text-left"> </div>
    <div class="col-sm-4 text-left">
      <b> อุปกรณ์ที่เสีย </b>
      <input  name="equipment" type="text" required class="form-control"  placeholder=""    minlength="2" />
    </div>
</div>

<div class="form-group">
    <div class="col-sm-1 text-left"> </div>
    <div class="col-sm-4 text-left">
      <b> รหัสอุปกรณ์ </b>
      <input  name="code_equipment" type="text" required class="form-control"  placeholder=""    minlength="2" />
    </div>
</div>

<div class="form-group">
    <div class="col-sm-1 text-left"> </div>
    <div class="col-sm-4 text-left">

          <input type="file" name="fileupload">

</div>



<div class="form-group">
    <div class="col-sm-1"> </div>
    <div class="col-sm-5">
      <button type="submit" name="submit" value="Upload" class="btn btn-primary" id="btn">บันทึก
      </button>
    </div>
  </div>
  </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">คุณแน่ใจหรือไม่ ว่าคุณต้องการออกจากระบบ</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
