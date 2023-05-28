<?php
include 'koneksi.php';
$halaman = "Golongan Obat";
if (isset($_POST['Simpangolongan'])) {
  $id_gol = $_POST['id_gol'];
  $gol_obat = $_POST['gol_obat'];
  mysqli_query($koneksi, "INSERT INTO golongan VALUES('$id_gol','$gol_obat')");
  header("location:golongan.php?pesan=input");
}
if (isset($_POST['Editgolongan'])) {
  $id_gol = $_POST['id_gol'];
  $gol_obat = $_POST['gol_obat'];

  mysqli_query($koneksi, "UPDATE golongan SET gol_obat='$gol_obat' WHERE id_gol='$id_gol'");
  header("location:golongan.php?pesan=edit");
}
if (isset($_GET['id_gol'])) {
  $id_gol = $_GET['id_gol'];

  mysqli_query($koneksi, "DELETE FROM golongan WHERE id_gol='$id_gol'");
  header("location:golongan.php?pesan=hapus");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rosant Farma | Manajemen Data</title>

  <?php include "css.php"; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>


    <?php include "navbar.php"; ?>
    <?php include "sidebar.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Golongan Obat</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Golongan Obat</a></li>
                <li class="breadcrumb-item active"><?= $halaman; ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
              <?php
              if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "input") {
                  echo "
              <marquee>
            <div class='alert alert-warning alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-info'></i> Data Berhasil Ditambahkan</h4>
            </div>
            </marquee>
              ";
                } else if ($_GET['pesan'] == "edit") {
                  echo "
              <marquee>
            <div class='alert alert-warning alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-info'></i> Data Berhasil Diedit</h4>
            </div>
            </marquee>
              ";
                } else if ($_GET['pesan'] == "hapus") {
                  echo "
              <marquee>
            <div class='alert alert-warning alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-info'></i> Data Berhasil Dihapus</h4>
            </div>
            </marquee>
              ";
                }
              }
              ?>
              <div class="row no-print">
                <div class="col-12">
                  <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#inputgolongan"><i class="far fa-plus-square"></i> Tambah Data</a>
                </div>
              </div>
              <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Golongan Obat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $data = mysqli_query($koneksi, "SELECT * FROM `golongan`");
                  $no = 1;
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $d['gol_obat']; ?></td>
                      <td>
                        <a href="" data-toggle="modal" data-target="#editgolongan<?php echo $no; ?>" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i> Edit</a>
                        <a href="" data-toggle="modal" data-target="#deletegolongan<?php echo $no; ?>" class="btn btn-danger"><i class="nav-icon fas fa-trash-alt"></i> Hapus</a>
                      </td>
                    </tr>

                    <div class="modal fade" id="editgolongan<?php echo $no; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit golongan Obat</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="#">
                              <?php
                              $id_gol = $d['id_gol'];
                              $query = "SELECT * FROM golongan WHERE id_gol='$id_gol'";
                              $result = mysqli_query($koneksi, $query);
                              while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="ID golongan">No</label>
                                    <input type="text" class="form-control" id="id_gol" value="<?= $row['id_gol']; ?>" name="id_gol" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label for="golongan Obat">golongan Obat</label>
                                    <input type="text" class="form-control" id="gol_obat" value="<?= $row['gol_obat']; ?>" name="gol_obat" required>
                                  </div>
                                  <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="Editgolongan">Simpan</button>
                                  </div>
                                </div>
                                <!-- /.card-body -->
                              <?php } ?>
                            </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                    <div class="modal fade" id="deletegolongan<?php echo $no; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Delete Data golongan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h4 align="center">Apakah anda yakin ingin menghapus golongan obat <strong><?php echo $d['gol_obat']; ?></strong>?</h4>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                            <a href="golongan.php?id_gol=<?php echo $d['id_gol']; ?>" class="btn btn-primary">Delete</a>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                  <?php } ?>
                </tbody>
                <tfoot>
                  <th>No</th>
                  <th>Golongan Obat</th>
                  <th>Action</th>
                </tfoot>
              </table>
            </section>
            <!-- /.Left col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <div class="modal fade" id="inputgolongan">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah golongan Obat</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="#">
              <div class="card-body">
                <div class="form-group">
                  <label for="golongan Obat">Golongan Obat</label>
                  <input type="text" class="form-control" id="gol_obat" value="<?= $row['gol_obat']; ?>" name="gol_obat" required>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="Simpangolongan">Simpan</button>
                </div>

              </div>
              <!-- /.card-body -->
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- /.content-wrapper -->
    <?php include "footer.php"; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": []
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>