 
<!--
    CRUD DENGAN OOP-PHP NATIVE
 -->
 
<?php
//menyiapankan class database
class database {
    
	// menyiapkan attribut untuk keperluan open database
        // attribut disesuaikan dengan kebutuhan karakteristik dari class yang akan di bangun
        // pada umumnya membuakan database diperlukan nama host,user,password dan nama database 
    
	private $dbHost     = "localhost";
	private $dbUser     = "root";
	private $dbPassword = "";
	private $dbName     = "dbsiswa";
	
	public function connect() {
            
		// koneksi ke DATABASE mysql 
                // menggunakan mysqli 
                
		$mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);	

		// cek koneksi berhasil atau tidak
		if ($mysqli->connect_error){
			echo "Gagal terkoneksi ke database : (".$mysqli->connect_error.")";
		}  
		
		// nilai kembalian bila koneksi berhasil
		return $mysqli;
	}
}
?>