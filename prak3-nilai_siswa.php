<?php
    require_once 'header.php';
?>
<?php
  require_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 03</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Praktikum 03</a></li>
              <li class="breadcrumb-item active"><a href="#">Hasil Nilai</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->  
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hasil Nilai</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = $uts + $uas + $tugas;
$_nilai = $total/3;
$hasil_ujian = kelulusan($_nilai);
$peringkat = grade($_nilai);

echo "Nama : $nama_siswa";
echo "<br/>Mata kuliah : $mata_kuliah";
echo "<br/>Nilai uts : $uts";
echo "<br/>Nilai uas : $uas";
echo "<br/>Nilai tugas : $tugas";
echo "<br/>Grade : $peringkat";
echo "<br/>data diproses $proses";
echo "<br/>Keterangan lulus : $hasil_ujian";

?>
<?php
function kelulusan($_nilai){
    if ($_nilai > 55){
        return 'anda lulus';
    }else{
        return 'anda tidak lulus';
    }      
}
function grade($_nilai){
    if ($_nilai >=85){
        return "A";
    }elseif ($_nilai >= 70){
        return "B";
    }elseif ($_nilai >= 56){
        return "C";
    }elseif ($_nilai >= 36){
        return "D";
    }elseif ($_nilai >= 10){
        return "E";
    }else{
        return "tidk ada nilai";
    }
}
?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    require_once 'footer.php';
  ?>