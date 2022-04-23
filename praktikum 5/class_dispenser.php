<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 05</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Praktikum 05</a></li>
              <li class="breadcrumb-item active"><a href="praktikum5-2.php">Class Dispenser</a></li>
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
                <h3 class="card-title">Class Dispenser</h3>

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
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function set_vol($v){
        $this->volume = $v;
        echo "volume galonnya adalah {$this->volume} Ml";
        echo "<br/>";
    }
    public function set_harga($h){
        $this->hargaSegelas = $h;
        echo "Harga segelas nya adalah {$this->hargaSegelas} Rupiah";
        echo "<br/>";
    }
    public function set_volgelas($g){
        $this->volumeGelas = $g;
        echo "Andi beli air 1 gelas yang volumenya {$this->volumeGelas} Ml";
        echo "<br/>";
    }
    public function set_akhir(){
        $akhir = $this->volume - $this->volumeGelas;
        echo "hasil volume sekarang adalah {$akhir} ML";
    }
}
$air = new Dispenser();
echo "Nama Minuman Aqua";
echo "<hr/>";
echo $air -> set_vol('1000');
echo $air -> set_harga('3000');
echo $air -> set_volgelas('250');
echo $air -> set_akhir();

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