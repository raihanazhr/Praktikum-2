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
              <li class="breadcrumb-item active"><a href="praktikum5-1.php">AccountBank</a></li>
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
                <h3 class="card-title">AccountBank</h3>

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
class Account{
    public $nomor;
    public $saldo;
    public $nama;

    public function __construct($nomor,$saldo){
        $this->nomor = $nomor;
        $this->saldo = $saldo;

    }
    public function deposit($uang){
        $this->saldo = $this->saldo + $uang;
    }
    public function witdrawl($uang){
        $this->saldo = $this->saldo - $uang;
    }
    public function cetak(){
        echo 'Nommor account : '.$this->nomor;
        echo '<br>Saldonya : '.$this->saldo;
    }
    public function getsaldo(){
        return $this->saldo;
    }
    public function data(){
        echo "{$this->nomor} {$this->nama} {$this->saldo}";
    }
}

class AccountBank extends Account{
    public function nabung($uang){
        echo " Nabung ". number_format ($uang) ." <br>";
    }
    public function tarik($uang){
        echo " Tarik Uang ". number_format ($uang) ."<br>";
    }
    public function tf($uang){
        echo " transfer ". number_format ($uang) ." ke kurniawan dan 500,000 ke budi <br>";
    }
   public $customer;
   function __construct($nomor,$saldo,$nasabah){
    parent::__construct($nomor,$saldo);
    $this->nasabah = $nasabah;
   }
   public function transfer($rekening_tujuan,$uang){
    $rekening_tujuan->deposit($uang);
    $this->witdrawl($uang);
    
   }
   public function cetak(){
    parent::cetak();
    echo '<br>Nasabah : '.$this->nasabah;
   }
}
?>
<?php
$nasabah1 = new accountBank("", "Ahmad", "");
$nasabah1->data();
$nasabah1->nabung(1000000);

$nasabah2 = new accountBank("", "Bagas","" );
$nasabah2->data();
$nasabah2->tarik(2500000);

$nasabah3 = new accountBank("", "ahmad","" );
$nasabah3->data();
$nasabah3->tf(1500000);
?>

<?php
$nasabah1 = new AccountBank("C001", 6000000, "Ahmad");
$nasabah2 = new AccountBank("C002", 5350000, "Budi");
$nasabah3 = new AccountBank("C003", 2500000, "Kurniawan");
$ar_nasabah = [$nasabah1,$nasabah2,$nasabah3];
?>
<br>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>NO</th>
            <th>No. Account</th>
            <th>Nama</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($ar_nasabah as $nsb){
        ?>
        <tr>
            <td><?= $nomor?></td>
            <td><?=$nsb->nomor?></td>
            <td><?=$nsb->nasabah?></td>
            <td><?=$nsb->getSaldo()?></td>
        </tr>
        <?php
             $nomor++;    
            }
        ?>
    </tbody>
    </table>
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