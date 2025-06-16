<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $deskripsi_kontak = $_POST['deskripsi_kontak'];
    $alamat = $_POST['alamat'];
    $peta = $_POST['peta'];
    

    if (empty($deskripsi_kontak) || empty($alamat) || empty($peta)) {
        echo "<script>alert('Semua field harus diisi!');</script>"; 
    } else {
        $sql = "INSERT INTO kontak (deskripsi_kontak, alamat, peta) VALUES (?, ?, ?)";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("sss", $deskripsi_kontak, $alamat, $peta);

        if ($stmt->execute()) {
            echo "<script>alert('Pesan berhasil dikirim!');</script>";
            echo "<script>window.location.href = 'C:\xampp\htdocs\Hanif_10SIJA2\index.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

?>
