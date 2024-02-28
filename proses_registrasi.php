<?php
// Pastikan koneksi ke database telah diatur sebelumnya dalam file konfigurasi
include("db/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang dikirimkan melalui formulir registrasi
    $username = $_POST["username"];
    $password = md5($_POST["password"]); // Enkripsi password menggunakan md5
    $nama = $_POST["nama"];
    $nama_klub = $_POST["nama_klub"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $no_telpon = $_POST["no_telpon"];

    // Query SQL untuk memasukkan data ke dalam tabel pelanggan
    $query = "INSERT INTO pelanggan (username, password, nama, nama_klub, email, alamat, no_telpon) 
              VALUES ('$username', '$password', '$nama', '$nama_klub', '$email', '$alamat', '$no_telpon')";

    // Eksekusi query
    if (mysql_query($query)) {
        header("Location: registrasi_berhasil.php"); // Redirect ke halaman registrasi berhasil
    } else {
        echo "Registrasi gagal. Pesan error: " . mysql_error();
    }
}
?>
