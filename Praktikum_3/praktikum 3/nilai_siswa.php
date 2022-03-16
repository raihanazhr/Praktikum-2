<?php
require_once'libfungsi.php';
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = $uts + $uas + $tugas;
$_nilai = $total/3;
$hasil_ujian = kelulusan($_nilai);
$peringkat = grade($_nilai);

echo "Nama : $nama_siswa";
echo "<br/>Mata kuliah : $mata_kuliah";
echo "<br/>Nilai uts : $uts";
echo "<br/>Nilai uas : $uas";
echo "<br/>Nilai tugas : $tugas";
echo "<br/>Grade : $peringkat";
echo "<br/>data diproses $proses";
echo "<br/>Keterangan lulus : $hasil_ujian";

?>