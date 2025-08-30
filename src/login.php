<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
      $_SESSION['user'] = $user['name'];
      header("Location: admin/index.php");
      exit;
    } else {
      echo "<script>alert('Password salah!');</script>";
    }
  } else {
    echo "<script>alert('Email tidak ditemukan!');</script>";
  }
}
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link CSS (pastikan output.css ada di folder src) -->
  <link href=" ./output.css" rel="stylesheet">
</head>
<body>
  <div class="min-h-screen flex items-center justify-center bg-blue-500">
    <div class="flex w-full max-w-5xl bg-white rounded-2xl overflow-hidden shadow-2xl">
      
      <!-- Left Image Section -->
      <div class="hidden md:flex w-1/2 relative">
        <img src="image/image.png" alt="Login Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-opacity-30 flex flex-col items-center justify-center text-center p-6">
          <h1 class="text-white text-4xl font-bold font-serif">Selamat Datang</h1>
          <p class="text-white mt-3 text-lg">
            Travel is the only purchase that enriches you in ways<br> beyond material wealth
          </p>
        </div>
      </div>
  
      <!-- Right Form Section -->
      <div class="w-full md:w-1/2 flex flex-col justify-center px-8 py-12">
        <h2 class="text-3xl font-bold text-blue-600 mb-6 text-center">Welcome</h2>
        <p class="text-gray-500 text-center mb-8">Login with Email</p>
  
        <form method="POST" class="space-y-5">
          <!-- Email Input -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <div class="flex items-center border rounded-lg px-3">
              <span class="material-icons text-gray-400 mr-2">email</span>
              <input type="email" name="email" placeholder="thisuix@mail.com" required class="w-full py-2 outline-none">
            </div>
          </div>
  
          <!-- Password Input -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <div class="flex items-center border rounded-lg px-3 py-2">
              <button type="button" onclick="togglePassword()" class="mr-2 focus:outline-none">
                <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.052 10.052 0 012.478-4.362m3.79-2.623A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.956 9.956 0 01-4.202 5.037M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M3 3l18 18" />
                </svg>
              </button>
              <input id="password" type="password" name="password" placeholder="********"
                required class="w-full outline-none bg-transparent" />
            </div>
          </div>
  
          <div class="flex justify-end">
            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot your password?</a>
          </div>
  
          <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            LOGIN
          </button>
        </form>
  
        <!-- OR Divider -->
        <div class="flex items-center my-6">
          <hr class="flex-grow border-gray-300">
          <span class="px-3 text-sm text-gray-500">OR</span>
          <hr class="flex-grow border-gray-300">
        </div>
  
        <!-- Social Login -->
        <div class="flex justify-center gap-4">
          <button class="p-3 bg-gray-100 rounded-full hover:bg-gray-200">
            <img src="https://img.icons8.com/color/32/google-logo.png"/>
          </button>
          <button class="p-3 bg-gray-100 rounded-full hover:bg-gray-200">
            <img src="https://img.icons8.com/fluency/32/facebook-new.png"/>
          </button>
          <button class="p-3 bg-gray-100 rounded-full hover:bg-gray-200">
            <img src="https://img.icons8.com/ios-filled/32/mac-os.png"/>
          </button>
        </div>
  
        <!-- Register Link -->
        <p class="text-sm text-gray-600 text-center mt-6">
          Don’t have an account? <a href="register.php" class="text-blue-600 font-medium hover:underline">Register Now</a>
        </p>
      </div>
    </div>
  </div>

  <!-- Toggle Password -->
  <script>
    function togglePassword() {
      const password = document.getElementById("password");
      const eyeOpen = document.getElementById("eyeOpen");
      const eyeClosed = document.getElementById("eyeClosed");

      if (password.type === "password") {
        password.type = "text";
        eyeOpen.classList.add("hidden");
        eyeClosed.classList.remove("hidden");
      } else {
        password.type = "password";
        eyeOpen.classList.remove("hidden");
        eyeClosed.classList.add("hidden");
      }
    }
  </script>
</body>
</html>
