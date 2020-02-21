<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="supervisor.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text"> <?php echo $level; ?> <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="supervisor.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>หน้าแรก</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <h6 align="center">รายการปัญหา</h6>
      </div>

      <!-- ส่วนของ Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>รายการปัญหาที่แจ้ง</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="supervisor.php">ปัญหาทั้งหมด</a>
            <a class="collapse-item" href="status_1.php">รอการดำเนินการ</a>
            <a class="collapse-item" href="showtable_status_2.php">กำลังดำเนินการ</a>
            <a class="collapse-item" href="showtable_status_3.php">ดำเนินการเรียบร้อย</a>
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