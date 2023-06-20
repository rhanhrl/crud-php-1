 <!-- Aplikasi CRUD
 sample code
 -->

<?php
// memanggil file siswa.php
require_once 'mahasiswa.php';

if (isset($_GET['id'])) {
    // membuat objek siswa
    $mahasiswa = new mahasiswa();

	$nim = $_GET['id'];

	// delete data siswa
    $mahasiswa->delete($nim);
}					
?>