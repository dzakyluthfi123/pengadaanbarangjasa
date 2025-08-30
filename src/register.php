<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name  = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Hash password biar aman
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Cek email sudah ada atau belum
  $check = $conn->prepare("SELECT * FROM users WHERE email=?");
  $check->bind_param("s", $email);
  $check->execute();
  $result = $check->get_result();

  if ($result->num_rows > 0) {
    echo "<script>alert('Email sudah terdaftar, gunakan email lain!');</script>";
  } else {
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashedPassword);

    if ($stmt->execute()) {
      echo "<script>alert('Akun berhasil dibuat! Silakan login.'); window.location='login.php';</script>";
    } else {
      echo "<script>alert('Terjadi kesalahan, coba lagi.');</script>";
    }
  }
}
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Pastikan path CSS sesuai -->
  <link href=" ./output.css" rel="stylesheet">
</head>
<body>
  <div class="min-h-screen flex items-center justify-center bg-blue-500">
    <div class="flex w-full max-w-5xl bg-white rounded-2xl overflow-hidden shadow-2xl">
      
      <!-- Left Image Section -->
      <div class="hidden md:flex w-1/2 relative">
        <img src="image/image.png" alt="Register Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-opacity-30 flex flex-col items-center justify-center text-center p-6">
          <h1 class="text-white text-4xl font-bold font-serif">Buat Akun</h1>
          <p class="text-white mt-3 text-lg">Daftar untuk mulai login ke sistem</p>
        </div>
      </div>
  
      <!-- Right Form Section -->
      <div class="w-full md:w-1/2 flex flex-col justify-center px-8 py-12">
        <h2 class="text-3xl font-bold text-green-600 mb-6 text-center">Register</h2>
        <p class="text-gray-500 text-center mb-8">Isi data untuk membuat akun baru</p>
  
        <form method="POST" class="space-y-5">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <div class="flex items-center border rounded-lg px-3">
              <span class="material-icons text-gray-400 mr-2">person</span>
              <input type="text" name="name" placeholder="Nama Anda" required class="w-full py-2 outline-none bg-transparent">
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <div class="flex items-center border rounded-lg px-3">
              <span class="material-icons text-gray-400 mr-2">email</span>
              <input type="email" name="email" placeholder="you@mail.com" required class="w-full py-2 outline-none bg-transparent">
            </div>
          </div>
  
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <div class="flex items-center border rounded-lg px-3 py-2">
              <input id="password" type="password" name="password" placeholder="********" required class="w-full outline-none bg-transparent">
            </div>
          </div>
  
          <!-- Tombol Buat Akun -->
          <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            Buat Akun Dulu
          </button>
        </form>

        <!-- Link ke Login -->
        <p class="text-sm text-gray-600 text-center mt-6">
          Sudah punya akun? <a href="login.php" class="text-green-600 font-medium hover:underline">Login di sini</a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
