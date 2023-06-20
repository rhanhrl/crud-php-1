 <!-- Aplikasi CRUD
  sample Code
 -->

<?php
        
/* class siswa */
class mahasiswa {

    /* method untuk menampilkan data mahasiswa */
    function view() {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();
        
        // sql statement untuk mengambil semua data siswa
        
        $sql = "SELECT * FROM mahasiswa ORDER BY nim DESC ";

        $result = $mysqli->query($sql);

        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }

        // menutup koneksi database
        $mysqli->close();

        // nilai kembalian dalam bentuk array
        return $hasil;
    }

    /* Method untuk menyimpan data ke tabel mahasiswa */
    function insert($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $no_telepon) {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        $nim          = $mysqli->real_escape_string($nim);
        $nama         = $mysqli->real_escape_string($nama);
        $tempat_lahir = $mysqli->real_escape_string($tempat_lahir);
        $alamat       = $mysqli->real_escape_string($alamat);
        
        // sql statement untuk insert data siswa
        $sql = "INSERT INTO mahasiswa (nim  , nama, tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat,no_telepon) 
                              VALUES ('$nim','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat','$no_telepon')";

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 2 */
            header("Location: index.php?alert=2");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: index.php?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }

    /* Method untuk menampilkan data mahasiswa berdasarkan nim */
    function get_mahasiswa($nim) {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk mengambil data siswa berdasarkan nim
        $sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";

        $result = $mysqli->query($sql);
        $data   = $result->fetch_assoc();

        // menutup koneksi database
        $mysqli->close();
        
        // nilai kembalian dalam bentuk array
        return $data;
    }
    
    /* Method untuk mengubah data pada tabel mahasiswa */
    function update($nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $no_telepon, $nim) {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        $nama         = $mysqli->real_escape_string($nama);
        $tempat_lahir = $mysqli->real_escape_string($tempat_lahir);
        $alamat       = $mysqli->real_escape_string($alamat);

        // sql statement untuk update data siswa
        $sql = "UPDATE mahasiswa SET nama           = '$nama',
                                    tempat_lahir    = '$tempat_lahir',
                                    tanggal_lahir   = '$tanggal_lahir',
                                    jenis_kelamin   = '$jenis_kelamin',
                                    agama           = '$agama',
                                    alamat          = '$alamat',
                                    no_telepon      = '$no_telepon'
                              WHERE nim             = '$nim'"; 

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 3 */
            header("Location: index.php?alert=3");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: index.php?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }
    
    /* Method untuk menghapus data pada tabel mahasiswa */
    function delete($nim) {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk delete data siswa
        $sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 4 */
            header("Location: index.php?alert=4");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: index.php?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }
}
?>
