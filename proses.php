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

    $target_dir = "upload/";

    $url_hero = "";
    if (isset($_FILES["url_hero"]) && $_FILES["url_hero"]["error"] == 0) {
        $hero_name = basename($_FILES["url_hero"]["name"]);
        $url_hero = $target_dir . $hero_name;
        move_uploaded_file($_FILES["url_hero"]["tmp_name"], $url_hero);
    }

    $url_foto = "";
    if (isset($_FILES["url_foto"]) && $_FILES["url_foto"]["error"] == 0) {
        $foto_name = basename($_FILES["url_foto"]["name"]);
        $url_foto = $target_dir . $foto_name;
        move_uploaded_file($_FILES["url_foto"]["tmp_name"], $url_foto);
    }

    // Start output
    echo "<!DOCTYPE html><html><head>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head><body>";

    if (
        empty($nama_depan) || empty($nama_belakang) || empty($tentang) || empty($profesi) || empty($deskripsi_profesi) ||
        empty($tgl_lahir) || empty($website) || empty($gelar) || empty($hp) || empty($email) || empty($kota) || 
        empty($freelance) || empty($keterangan_about) || empty($keterangan_skill) || empty($skill) ||
        empty($url_hero) || empty($url_foto)
    ) {
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Gagal!',
          text: 'Semua field dan gambar harus diisi!',
        }).then(function() {
          window.location.href = 'biodata.php';
        });
        </script>";
        echo "</body></html>";
        exit;
    }

    $sql = "INSERT INTO biodata (nama_depan, nama_belakang, tentang, profesi, deskripsi_profesi, tgl_lahir, website, gelar, hp, email, kota, freelance, keterangan_about, keterangan_skill, skill, url_hero, url_foto)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("sssssssssssssssss", 
        $nama_depan, $nama_belakang, $tentang, $profesi, $deskripsi_profesi,
        $tgl_lahir, $website, $gelar, $hp, $email, $kota, $freelance,
        $keterangan_about, $keterangan_skill, $skill, $url_hero, $url_foto
    );

    if ($stmt->execute()) {
        echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Berhasil!',
          text: 'Data berhasil disimpan!',
        }).then(function() {
          window.location.href = 'kontak.php';
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Gagal!',
          text: 'Data gagal disimpan: " . htmlspecialchars($stmt->error) . "',
        }).then(function() {
          window.location.href = 'biodata.php';
        });
        </script>";
    }

    echo "</body></html>";
    $stmt->close();
}
?>
