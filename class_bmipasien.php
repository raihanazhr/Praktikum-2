<?php
require_once 'class_pasien.php';
require_once 'class_bmi.php';

class Bmipasien extends Pasien{
    public $bmi;
    public $pasien;

    function __construct($bmi, $pasien){
        $this->bmi = $bmi;
        $this->pasien = $pasien;
    }
}
?>
<?php

$pasien1 = new Pasien();
$pasien1->tgl_lahir ='2001';
$pasien1->nama ='aani';
$pasien1->gender ='P';
$pasien1->tmp_lahir ='Bogor';

$pasien2 = new Pasien();
$pasien2->tgl_lahir ='2002';
$pasien2->nama ='Akmal';
$pasien2->gender ='L';
$pasien2->tmp_lahir ='Jakarta';

$pasien3 = new Pasien();
$pasien3->tgl_lahir = isset($_POST['tgl']) ? $_POST['tgl'] : '' ;
$pasien3->nama = isset($_POST['nama']) ? $_POST['nama'] : '' ;
$pasien3->gender = isset($_POST['gender']) ? $_POST['gender'] : '' ;
$pasien3->tmp_lahir = isset($_POST['tmpt']) ? $_POST['tmpt'] : '' ;

$hasil1 = new Bmi('60','170');
$hasil2 = new Bmi('80','175');
$hasil3 = new Bmi($_POST['berat'], $_POST['tinggi']);



$hasilPasien1 = new Bmipasien($hasil1,$pasien1);
$hasilPasien2 = new Bmipasien($hasil2, $pasien2);
$hasilPasien3 = new Bmipasien($hasil3, $pasien3);
$ar_bmi = [$hasilPasien2,$hasilPasien1,$hasilPasien3];
?>
    <form method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl" name="tgl" placeholder="Masukkan Tanggal Lahira" type="text" aria-describedby="tglHelpBlock" class="form-control"> 
      <span id="tglHelpBlock" class="form-text text-muted">YY-MM-DD</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmpt" class="col-4 col-form-label">Temapat Lahir</label> 
    <div class="col-8">
      <input id="tmpt" name="tmpt" placeholder="Masukkan Tempat Lahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Gender</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="p"> 
        <label for="gender_0" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="l"> 
        <label for="gender_1" class="custom-control-label">Laki - Laki</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <input id="berat" name="berat" type="text" aria-describedby="beratHelpBlock" class="form-control"> 
      <span id="beratHelpBlock" class="form-text text-muted">*kg</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" type="text" aria-describedby="tinggiHelpBlock" class="form-control"> 
      <span id="tinggiHelpBlock" class="form-text text-muted">*cm</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<br>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Gender</th>
            <th>Berat</th>
            <th>Tinggi</th>
            <th>BMI</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php $no=1; ?>
    <?php foreach($ar_bmi as $obj){ ?>
        <tr>
            <td><?= $no;?></td>
            <td><?= $obj->pasien->nama;?></td>
            <td><?= $obj->pasien->tgl_lahir;?></td>
            <td><?= $obj->pasien->tmp_lahir;?></td>
            <td><?= $obj->pasien->gender;?></td>
            <td><?= $obj->bmi->berat ." kg";?></td>
            <td><?= $obj->bmi->tinggi ." cm";?></td>
            <td><?= $obj->bmi->hitungBmi();?></td>
            <td><?= $obj->bmi->status();?></td>
        </tr>
            <?php $no++; }?>
    </tbody>
</table>