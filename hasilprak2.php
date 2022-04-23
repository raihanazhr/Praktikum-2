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
            <h1>Praktikum 02</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Praktikum 02</a></li>
              <li class="breadcrumb-item active"><a href="#">Daftar Belanja</a></li>
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
                <h3 class="card-title">Daftar Belanja Customer</h3>

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
$customer = $_POST['nama'];
$pilihan_produk = $_POST['produk'];
$jumlah_produk = $_POST['jumlah'];
if ($pilihan_produk == 'TV'){
  $harga = 4200000;
}
elseif ($pilihan_produk == 'kulkas'){
  $harga = 3100000;
}
elseif ($pilihan_produk == 'mesin'){
  $harga = 3800000;
}
$total = $harga * $jumlah_produk;

echo "Nama Customer : $customer";
echo "<br/>Produk Pilihan : $pilihan_produk";
echo "<br/>Jumlah beli : $jumlah_produk";
echo "<br/>total : $total";

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