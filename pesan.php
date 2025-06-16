<?php
include("koneksi.php");

$nama_pengirim = $_POST["nama_pengirim"];
$email_pengirim = $_POST["email_pengirim"];
$judul_pesan = $_POST["judul_pesan"];
$pesan = $_POST["pesan"];
$date = getdate(date("U"));
$tgl_pesan = "$date[year]-$date[mon]-$date[mday] $date[hours]:$date[minutes]:$date[seconds]";

// Prepare statement
$sql = "INSERT INTO pesan (nama_pengirim, email_pengirim, judul_pesan, pesan, tgl_pesan)
        VALUES (?, ?, ?, ?, ?)";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("sssss", $nama_pengirim, $email_pengirim, $judul_pesan, $pesan, $tgl_pesan);

// Output HTML with SweetAlert
echo "<!DOCTYPE html><html><head>
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
      </head><body>";

if ($stmt->execute()) {
    echo "<script>
    Swal.fire({
      icon: 'success',
      title: 'Berhasil!',
      text: 'Pesan berhasil dikirim!',
    }).then(function() {
      window.location.href = 'kontak.php';
    });
    </script>";
} else {
    echo "<script>
    Swal.fire({
      icon: 'error',
      title: 'Gagal!',
      text: 'Pesan gagal dikirim: " . htmlspecialchars($stmt->error) . "',
    }).then(function() {
      window.location.href = 'contak.php';
    });
    </script>";
}

echo "</body></html>";
$stmt->close();
?>
