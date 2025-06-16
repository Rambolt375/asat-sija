<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $tentang = $_POST['tentang'];
    $profesi = $_POST['profesi'];
    $deskripsi_profesi = $_POST['deskripsi_profesi'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $website = $_POST['website'];
    $gelar = $_POST['gelar'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $kota = $_POST['kota'];
    $freelance = $_POST['freelance'];
    $keterangan_about = $_POST['keterangan_about'];
    $keterangan_skill = $_POST['keterangan_skill'];
    $skill = $_POST['skill'];
    $url_hero = $_POST['url_hero'];
    $url_foto = $_POST['url_foto']; 

    if (empty($nama_depan) || empty($nama_belakang) || empty($tentang) || empty($profesi) || empty($deskripsi_profesi) || empty($tgl_lahir) || empty($website) || empty($gelar) || empty($hp) || empty($email) || empty($kota) || empty($freelance) || empty($keterangan_about) || empty($keterangan_skill) || empty($skill) || empty($url_hero) || empty($url_foto)) {
        echo "<script>alert('Semua field harus diisi!');</script>";
    } else {
        // Perbaikan menggunakan prepared statement
        $sql = "INSERT INTO biodata (nama_depan, nama_belakang, tentang, profesi, deskripsi_profesi, tgl_lahir, website, gelar, hp, email, kota, freelance, keterangan_about, keterangan_skill, skill, url_hero, url_foto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("sssssssssssssssss", $nama_depan, $nama_belakang, $tentang, $profesi, $deskripsi_profesi, $tgl_lahir, $website, $gelar, $hp, $email, $kota, $freelance, $keterangan_about, $keterangan_skill, $skill, $url_hero, $url_foto);

        if ($stmt->execute()) {
            echo "<script>alert('Pesan berhasil dikirim!');</script>"
            . "<script>window.location.href = 'kontak.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

?>
