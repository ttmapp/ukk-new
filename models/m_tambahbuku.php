<?php
// Pastikan file koneksi sudah di-include
require_once 'm_koneksi.php';

class Buku extends m_koneksi {

    public function tambahBuku($id_buku, $judul_buku, $pengarang, $penerbit, $stok) {
        $conn = new m_koneksi();
        // 1. Menyiapkan Query dengan Prepared Statements (Lebih Aman dari SQL Injection)
        $sql = "INSERT INTO buku (id_buku, judul_buku, pengarang, penerbit, stok) VALUES (?, ?, ?, ?)";
        $album = $_POST['album'];
        $poto = $_FILES['foto']['tmp_name'];

        $can = array('jpg', 'png', 'jpeg');
        $x = explode('.', '$foto');
        $ekstensi = strtolower(end($x)); 
        $tmp = $_FILES['foto']['tmp_name'];

        if (in_array($ekstensi, $can) == true ){
        move_uploaded_file($tmp, '../assets/img/' . $foto) ;
       
        $foto->insert($id_buku=0, $judul_buku, $pengarang, $penerbit, $stok); 
        echo '<script>alert' ('foto telah berhasil ditambahkan');
        document.location.href = '../public/tambah_buku.php'


        }
        // 2. Menggunakan properti $conn dari parent class m_koneksi
        $stmt = $this->conn->prepare($sql);

        // 3. Bind parameter (s = string, i = integer)
        $stmt->bind_param("sssi",$id_buku, $judul_buku, $pengarang, $penerbit, $stok);

        // 4. Eksekusi dan cek keberhasilan
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
