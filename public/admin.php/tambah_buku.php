<?php
include_once "../../controllers/c_buku.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku | Admin E-Perpus</title>
    <link rel="stylesheet" href="tambah_buku.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="admin-body">
<head>
    
</head>
<div class="sidebar">
    <h2>ADMIN</h2>
    <a href="?url=admin/dashboard" class="nav-item"><i class="fas fa-chart-pie"></i> Dashboard</a>
    <a href="?url=admin/kelola_buku" class="nav-item active"><i class="fas fa-book"></i> Kelola Buku</a>
    <a href="?url=admin/kelola_anggota" class="nav-item"><i class="fas fa-user-shield"></i> Kelola Anggota</a>
    <a href="?url=auth/login" class="nav-item logout"><i class="fas fa-power-off"></i> Logout</a>
</div>

<div class="main-content">
    <div class="header">
        <h1>Tambah Koleksi Baru</h1>
        <a href="?url=admin/kelola_buku" class="btn-back"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>

    <div class="form-container">
        <form action="../../controllers/c_buku.php?action=add" method="POST">
            <div class="form-grid">
                <div class="form-upload-section">
                    <div class="upload-box">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>Upload Cover Buku</p>
                        <input type="file" name="cover_buku">
                    </div>
                </div>

                <div class="form-inputs">
                    <div class="input-group">
                        <input type="text" name="id_buku" id="id_buku"  placeholder="Masukkan judul_buku lengkap..." hidden>
                    </div>
                    <div class="input-group">
                        <label><i class="fas fa-book"></i> judul_buku Buku</label>
                        <input type="text" name="judul_buku" id="judul_buku"  placeholder="Masukkan judul_buku lengkap..." required>
                    </div>

                    <div class="input-group">
                        <label><i class="fas fa-pen-nib"></i> pengarang / Pengarang</label>
                        <input type="text" name="pengarang" id="pengarang" placeholder="Nama pengarang..." required>
                    </div>

                    <div class="input-group">
                        <label><i class="fas fa-building"></i> Penerbit</label>
                        <input type="text" name="penerbit" id="penerbit"  placeholder="Nama perusahaan penerbit..." required>
                    </div>

                    <div class="input-row">
                        <div class="input-group">
                            <label><i class="fas fa-boxes"></i> Stok Buku</label>
                            <input type="number" name="stok" min="1" id="stok" placeholder="0" required>
                        </div>
                        <div class="input-group">
                            <label><i class="fas fa-tags"></i> Kategori</label>
                            <select name="kategori">
                                <option value="Sains">Sains</option>
                                <option value="Novel">Novel</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="Fiksi">Fiksi</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <label><i class="fas fa-align-left"></i> Sinopsis Singkat</label>
                        <textarea name="sinopsis" rows="4" placeholder="Tuliskan ringkasan cerita atau isi buku..."></textarea>
                    </div>

                    <button type="submit" name="add" value="kirim" class="btn-submit">
                        <i class="fas fa-save"></i> Simpan Koleksi
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>