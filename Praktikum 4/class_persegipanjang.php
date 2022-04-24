<?php
class persegipanjang {
    private $panjang;
    private $luas;

    function __construct ($p, $l) {
        $this->panjang = $p;
        $this->luas = $l;
    }

    function getkeliling() {
        return 2 * ($this->panjang + $this->luas);
    }

    function getluas() {
        return $this->panjang * $this->luas;
    }
}
?>