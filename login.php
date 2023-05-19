<?php
// Cek apakah ada data yang dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil nilai username dan password yang dikirim dari form
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  // Lakukan validasi login sesuai dengan logika yang Anda inginkan
  // Misalnya, cek username dan password dengan data yang ada di database
  if ($username === "admin" && $password === "password") {
    // Login berhasil
    echo "Login successful!";
    // Lakukan redirect ke halaman dashboard atau halaman lain yang diinginkan
    // header("Location: dashboard.php");
    // exit();
  } else {
    // Login gagal
    echo "Invalid username or password. Please try again.";
  }
}
?>
