<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 01</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Praktikum 01</a></li>
              <li class="breadcrumb-item active"><a href="#">Array Buah</a></li>
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
                <h3 class="card-title">Array Buah</h3>

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
    $ar_buah = ["pepaya", "Mangga", "Pisang", "jambu"];
    //cetak buah index ke 2
    echo "ini adalah hasil data data buah dalam array";
    echo "<br/>$ar_buah[2]";

    //cetak jumlah buah 
    echo '<br/>Jumlah buah ' .count($ar_buah);

    //cetak seluruh buah
    echo "<ol>";
    foreach ($ar_buah as $buah) {
        echo "<li>$buah</li>";
    }
    echo "</ol>";
    //=================================================
    //tambahkan buah
    $ar_buah[]="durian";
    //hapus buah
    unset($ar_buah[1]);
    //ubah buah index ke dua menjadi manggis
    $ar_buah[2] = "manggis";
    //cetak seluruh buah dengan index nya
    echo "<ul>";
    foreach ($ar_buah as $k => $v) {
        echo "<li>buah index - $k adalah $v </li>";
    }
    echo "</ul>"
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