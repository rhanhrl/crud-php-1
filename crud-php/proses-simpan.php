 <!-- Aplikasi CRUD
 sample code
 -->

<?php
// memanggil file mahasiswa.php
require_once 'mahasiswa.php';

if (isset($_POST['simpan'])) {
    // membuat objek mahasiswa
    
    $mahasiswa = new mahasiswa();
    
    // ambil data hasil submit dari form
        $nim           = trim($_POST['nim']);
	$nama          = trim($_POST['nama']);
	$tempat_lahir  = trim($_POST['tempat_lahir']);

	$tanggal       = $_POST['tanggal_lahir'];
	$tgl           = explode('-',$tanggal);
	$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];

	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama         = $_POST['agama'];
	$alamat        = trim($_POST['alamat']);
	$no_telepon    = $_POST['no_telepon'];

    // insert data siswa
    //    $mahasiswa->insert($nim,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat,$no_telepon);
    $mahasiswa->insert($nim,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat,$no_telepon);
}			
?>