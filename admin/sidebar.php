<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="images/rosantt.png" alt="Apotek Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Rosant Farma</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">

        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="index.php" class="nav-link <?php if ($halaman == "Data Obat") {
                                                echo "active";
                                              } ?>">
            <i class="nav-icon fas fa-capsules"></i>
            <p>
              Data Obat
              <i class="right fas fa-angle-<?php if ($halaman == "Data Obat") {
                                              echo "right";
                                            } else {
                                              echo "left";
                                            } ?>"></i>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="jenis.php" class="nav-link <?php if ($halaman == "Jenis Obat") {
                                                echo "active";
                                              } ?>">
            <i class="nav-icon fas fa-capsules"></i>
            <p>
              Jenis Obat
              <i class="right fas fa-angle-<?php if ($halaman == "Jenis Obat") {
                                              echo "right";
                                            } else {
                                              echo "left";
                                            } ?>"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="golongan.php" class="nav-link <?php if ($halaman == "Golongan Obat") {
                                                    echo "active";
                                                  } ?>">
            <i class="nav-icon fas fa-capsules"></i>
            <p>
              Golongan Obat
              <i class="right fas fa-angle-<?php if ($halaman == "Golongan Obat") {
                                              echo "right";
                                            } else {
                                              echo "left";
                                            } ?>"></i>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="bentuk.php" class="nav-link <?php if ($halaman == "Bentuk Obat") {
                                                  echo "active";
                                                } ?>">
            <i class="nav-icon fas fa-capsules"></i>
            <p>
              Bentuk Obat
              <i class="right fas fa-angle-<?php if ($halaman == "Bentuk Obat") {
                                              echo "right";
                                            } else {
                                              echo "left";
                                            } ?>"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>