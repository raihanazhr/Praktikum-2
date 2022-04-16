<?php
//buka class buah 
class buah {
    // buat properti
    public $name;
    protected $color;
    private $berat;

    //buat method 
    public function set_color($c){
        return $this->color = $c;
    }
    public function set_berat($b){
        return $this->berat = $b;
    }
}
// buat objek
$mangga = new buah();
echo $mangga -> name = 'mangga';
echo "<br/>";
echo $mangga -> set_color('hijau');
echo "<br/>";
echo $mangga -> set_berat('300 kg');

?>