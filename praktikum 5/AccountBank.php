<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5 - 0110121233</title>
</head>
<body>
    <h1 class="text-center">Account Bank</h1>
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
</body>
</html>