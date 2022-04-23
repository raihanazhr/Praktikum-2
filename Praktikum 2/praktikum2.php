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
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Praktikum 02</a></li>
              <li class="breadcrumb-item active"><a href="index.php">Form belanja</a></li>
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
                <h3 class="card-title">Form Belanja</h3>

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
              <div class="row">
	<div class="col-md-8">
    <form method="POST" action="hasilprak2.php">
<div class="container">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</div>
</form>
</div>
<div class="col-md-4">
    <ul class="list-group">
      <li class="list-group-item active" aria-current="true">Daftar Harga</li>
      <li class="list-group-item">TV : 4.200.000</li>
      <li class="list-group-item">Kulkas : 3.100.000</li>
      <li class="list-group-item">Mesin Cuci : 3.800.000</li>
      <li class="list-group-item active" aria-current="true">Harga dapat berubah setiap saat</li>
  </ul>
</div>
</div>
</div>
</div>
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