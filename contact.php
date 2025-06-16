<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $deskripsi_kontak = $_POST['deskripsi_kontak'];
    $alamat = $_POST['alamat'];
    $peta = $_POST['peta'];

    // Output HTML first
    echo "<!DOCTYPE html><html><head>
          <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          </head><body>";

    // Validation
    if (empty($deskripsi_kontak) || empty($alamat) || empty($peta)) {
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Gagal!',
          text: 'Semua field harus diisi!',
        }).then(function() {
          window.location.href = 'kontak.php';
        });
        </script>";
    } else {
        $sql = "INSERT INTO kontak (deskripsi_kontak, alamat, peta) VALUES (?, ?, ?)";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("sss", $deskripsi_kontak, $alamat, $peta);

        if ($stmt->execute()) {
            echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'Berhasil!',
              text: 'Data berhasil disimpan!',
            }).then(function() {
              window.location.href = 'index.php';
            });
            </script>";
        } else {
            echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Gagal!',
              text: 'Terjadi kesalahan: " . htmlspecialchars($stmt->error) . "',
            }).then(function() {
              window.location.href = 'kontak.php';
            });
            </script>";
        }

        $stmt->close();
    }

    echo "</body></html>";
}
?>
