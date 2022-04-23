<?php 
class Bmi{
    public $berat;
    public $tinggi;
    
    function __construct($berat, $tinggi){
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
    public function hitungBmi(){
        return $this->berat / (($this->tinggi/100)**2); 
    }
    public function status(){
        if($this->hitungBmi() < 18.5 && $this->hitungBmi() >= 0){
            echo "Kekurangan Berat Badan";
        }elseif($this->hitungBmi() < 24.9){
            echo "Normal";
        }elseif($this->hitungBmi() < 29.9){
            echo "Kelebihan Berat Badan";
        }elseif($this->hitungBmi() > 30){
            echo "Obesitas";
        }else {
            echo $this->hitungBmi(). "Tidak termasuk kedalam golongan";
        }
    }
}
?>