<?php
include "koneksi.php";
$halaman="Data Obat";

if(isset($_POST['SimpanObat'])){
  $id_gol = $_POST['id_gol'];
  $nama_obat = $_POST['nama_obat'];
  $id_jenis = $_POST['id_jenis'];
  $id_bentuk = $_POST['id_bentuk'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];
  $unit = $_POST['unit'];
  $rand = rand();
  $ekstensi = array('png','jpg','jpeg','gif','webp');
  $filename = $_FILES['img']['name'];
  $ukuran = $_FILES['img']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi)) {
echo "error";
}else{
if($ukuran < 208815000){
  $xx = $rand.'_'.$filename;
  move_uploaded_file($_FILES['img']['tmp_name'], 'obat/'.$rand.'_'.$filename);
mysqli_query($koneksi, "INSERT INTO obat
(id_obat,id_gol,nama_obat,id_jenis,id_bentuk,harga,stok,unit,img) 
VALUES (NULL,'$id_gol','$nama_obat','$id_jenis','$id_bentuk','$harga','$stok','$unit','$xx')");
  header("location:index.php?pesan=sukses");
}else{
  header("location:index.php?pesan=gagalukuran");
}
}
}
if(isset($_POST['EditObat'])){
  $id_obat = $_POST['id_obat'];
  $id_gol = $_POST['id_gol'];
  $nama_obat = $_POST['nama_obat'];
  $id_jenis = $_POST['id_jenis'];
  $id_bentuk = $_POST['id_bentuk'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];
  $unit = $_POST['unit'];
  $foto_baru = $_FILES['imgnew']['name'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($foto_baru != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg','webp','gif'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto_baru); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['imgnew']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$foto_baru; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
        if(is_file("obat/".$foto_baru)){
            unlink("obat/".$foto_baru);
        }
                  move_uploaded_file($file_tmp, 'obat/'.$nama_gambar_baru); //memindah file obat ke folder gambar
                    
                   $query  = "UPDATE obat SET 
                   id_gol = '$id_gol', nama_obat = '$nama_obat', 
                   id_jenis='$id_jenis', id_bentuk = '$id_bentuk', harga = '$harga', stok = '$stok', 
                   unit = '$unit',
                   img = '$nama_gambar_baru'";
                    $query .= "WHERE id_obat = '$id_obat'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='index.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE obat SET id_gol = '$id_gol', nama_obat = '$nama_obat', 
      id_jenis = '$id_jenis' , id_bentuk = '$id_bentuk', 
      harga = '$harga', stok = '$stok', unit='$unit'";
      $query .= "WHERE id_obat = '$id_obat'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
    }
}
if(isset($_GET['id_obat'])){
  $id_obat = $_GET['id_obat'];
  $cek = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM obat WHERE id_obat = '$id_obat'"));
  if($cek){
    if(is_file("obat/".$cek['img'])){
      unlink("obat/".$cek['img']);
    }
  }
  // menghapus data dari database
  $query = "DELETE FROM obat WHERE id_obat = '$id_obat'";

  if(mysqli_query($koneksi,$query)){
      header("location:index.php?pesan=hapus");
  }else{
      echo "gagal";
  }
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
            <h1 class="m-0"> Data Obat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Obat</a></li>
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
          if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "input"){
              echo "
              <marquee>
            <div class='alert alert-warning alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-info'></i> Data Berhasil Ditambahkan</h4>
            </div>
            </marquee>
              ";
            }else if($_GET['pesan'] == "edit"){
              echo "
              <marquee>
            <div class='alert alert-warning alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-info'></i> Data Berhasil Diedit</h4>
            </div>
            </marquee>
              ";
            }else if($_GET['pesan'] == "hapus"){
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
                  <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#inputobat"><i class="far fa-plus-square"></i> Tambah Data</a>
                </div>
              </div>
              <br>
           <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Obat</th>
                    <th>Jenis</th>
                    <th>Golongan</th>
                    <th>Bentuk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Ket.</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $data = mysqli_query($koneksi,"SELECT * FROM `obat` 
                      LEFT JOIN jenis ON `jenis`.`id_jenis`=`obat`.`id_jenis`
                      LEFT JOIN golongan ON `golongan`.`id_gol`=`obat`.`id_gol`
                      LEFT JOIN bentuk ON `bentuk`.`id_bentuk`=`obat`.`id_bentuk`");
                      $no=1;
                      while($d=mysqli_fetch_array($data)){
                    ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td>
                      <img src="obat/<?= $d['img']; ?>" width="120" height="120">
                    </td>
                    <td><?= $d['nama_obat']; ?></td>
                    <td><?= $d['jenis_obat']; ?></td>
                    <td><?= $d['gol_obat']; ?></td>
                    <td><?= $d['bentuk_obat']; ?></td>
                    <td><?= $d['harga']; ?></td>
                    <td><?= $d['stok']; ?></td>
                    <td><?= $d['unit']; ?></td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#editobat<?php echo $no; ?>" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i> Edit</a>
                      <a href="" data-toggle="modal" data-target="#deleteobat<?php echo $no; ?>" class="btn btn-danger"><i class="nav-icon fas fa-trash-alt"></i> Hapus</a>
                    </td>
                  </tr>

    <div class="modal fade" id="editobat<?php echo $no; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data Obat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form method="post" action="#" enctype="multipart/form-data">
              <?php
                $id_obat = $d['id_obat'];
                $query = "SELECT * FROM obat WHERE id_obat='$id_obat'";
                $result = mysqli_query($koneksi,$query);
                while ($row = mysqli_fetch_assoc($result)){
              ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="ID Obat">No</label>
                    <input type="text" class="form-control" id="id_obat" value="<?= $row['id_obat']; ?>" name="id_obat" readonly>
                  </div>
                  <div class="form-group">
                    <label for="Nama Obat">Nama Obat</label>
                    <input type="text" class="form-control" id="nama_obat" value="<?= $row['nama_obat']; ?>" name="nama_obat" required>
                  </div>
                  <div class="form-group">
                    <label for="Jenis Obat">Jenis Obat</label>
                    <select name="id_jenis" class="form-control" required>
                    <?php
                    $jeniss = mysqli_query($koneksi,"SELECT * FROM jenis");
                    while($jenis=mysqli_fetch_assoc($jeniss)){
                    ?>
                  <option value="<?php echo $jenis['id_jenis']; ?>" <?php if($row['id_jenis']==$jenis['id_jenis']){ echo "selected"; } ?> ><?php echo $jenis['jenis_obat']; ?></option>
                  <?php } ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="Golongan Obat">Golongan Obat</label>
                    <select name="id_gol" class="form-control" required>
                    <?php
                    $gols = mysqli_query($koneksi,"SELECT * FROM golongan");
                    while($gol=mysqli_fetch_assoc($gols)){
                    ?>
                  <option value="<?php echo $gol['id_gol']; ?>" <?php if($row['id_gol']==$gol['id_gol']){ echo "selected"; } ?> ><?php echo $gol['gol_obat']; ?></option>
                  <?php } ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="Bentuk Obat">Bentuk Obat</label>
                    <select name="id_bentuk" class="form-control" required>
                    <?php
                    $bentuks = mysqli_query($koneksi,"SELECT * FROM bentuk");
                    while($bentuk=mysqli_fetch_assoc($bentuks)){
                    ?>
                  <option value="<?php echo $bentuk['id_bentuk']; ?>" <?php if($row['id_bentuk']==$bentuk['id_bentuk']){ echo "selected"; } ?> ><?php echo $bentuk['bentuk_obat']; ?></option>
                  <?php } ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="Harga">Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga" value="<?= $row['harga']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="Stok">Stok</label>
                    <input type="number" name="stok" class="form-control" id="stok" value="<?= $row['stok']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="Ket">Ket.</label>
                    <input type="text" class="form-control" id="unit" name="unit" value="<?= $row['unit']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Gambar</label>
                    <br>
                    <img src="obat/<?php echo $row['img']; ?>" height="120" width="120">
                    <input type="file" name="imgnew" class="form-control-file">
                  </div>

                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="EditObat">Simpan</button>
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

<div class="modal fade" id="deleteobat<?php echo $no; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Data Obat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <h4 align="center" >Apakah anda yakin ingin menghapus obat <strong><?php echo $d['nama_obat'];?></strong>?</h4>
            </div>
            <div class="modal-footer justify-content-between">
              <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
              <a href="index.php?id_obat=<?php echo $d['id_obat']; ?>" class="btn btn-primary">Delete</a>
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
                  <th>Gambar</th>
                  <th>Nama Obat</th>
                  <th>Jenis</th>
                  <th>Golongan</th>
                  <th>Bentuk</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Ket.</th>
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
   <div class="modal fade" id="inputobat">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Obat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form method="POST" action="#" enctype="multipart/form-data">
             <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control-file" name="img" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Nama Obat">Nama Obat</label>
                    <input type="text" class="form-control" id="nama_obat" name="nama_obat" required>
                  </div>
                  <div class="form-group">
                    <label for="Jenis Obat">Jenis Obat</label>
                    <select name="id_jenis" class="form-control" required>
                    <?php
                    $jeniss = mysqli_query($koneksi,"SELECT * FROM jenis");
                    while($jenis=mysqli_fetch_assoc($jeniss)){
                    ?>
                  <option value="<?php echo $jenis['id_jenis']; ?>"><?php echo $jenis['jenis_obat']; ?></option>
                  <?php } ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="Golongan Obat">Golongan Obat</label>
                    <select name="id_gol" class="form-control" required>
                    <?php
                    $gols = mysqli_query($koneksi,"SELECT * FROM golongan");
                    while($gol=mysqli_fetch_assoc($gols)){
                    ?>
                  <option value="<?php echo $gol['id_gol']; ?>"><?php echo $gol['gol_obat']; ?></option>
                  <?php } ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="Bentuk Obat">Bentuk Obat</label>
                    <select name="id_bentuk" class="form-control" required>
                    <?php
                    $bentuks = mysqli_query($koneksi,"SELECT * FROM bentuk");
                    while($bentuk=mysqli_fetch_assoc($bentuks)){
                    ?>
                  <option value="<?php echo $bentuk['id_bentuk']; ?>"><?php echo $bentuk['bentuk_obat']; ?></option>
                  <?php } ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="Harga">Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga" required>
                  </div>
                  <div class="form-group">
                    <label for="Stok">Stok</label>
                    <input type="number" name="stok" class="form-control" id="stok" required>
                  </div>
                  <div class="form-group">
                    <label for="Ket">Unit (Keterangan)</label>
                    <input type="text" class="form-control" id="unit" name="unit" required>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="SimpanObat">Simpan</button>
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
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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
