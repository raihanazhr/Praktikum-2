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