<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
</head>
<body>
  
  <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-500 to-indigo-700">
    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md">
      <!-- Judul -->
      <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
        🛡️ Register Admin
      </h2>
  
      <!-- Form Register -->
      <form action="#" method="POST" class="space-y-4">
        <!-- Nama Lengkap -->
        <div>
          <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
          <input type="text" name="name" placeholder="Masukkan nama lengkap"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
        </div>
  
        <!-- Username -->
        <div>
          <label class="block text-sm font-medium text-gray-700">Username</label>
          <input type="text" name="username" placeholder="Buat username"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
        </div>
  
        <!-- Email -->
        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" placeholder="contoh@email.com"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
        </div>
  
        <!-- Password -->
        <div>
          <label class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" name="password" placeholder="********"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
        </div>
  
        <!-- Konfirmasi Password -->
        <div>
          <label class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
          <input type="password" name="confirm_password" placeholder="********"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
        </div>
  
        <!-- Role -->
        <div>
          <label class="block text-sm font-medium text-gray-700">Role</label>
          <select name="role"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            <option value="admin">Admin</option>
            <option value="staff">Staff</option>
          </select>
        </div>
  
        <!-- Tombol Daftar -->
        <button type="submit"
          class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
          Daftar Sekarang
        </button>
  
        <!-- Link Login -->
        <p class="text-sm text-gray-600 text-center mt-4">
          Sudah punya akun?
          <a href="login.html" class="text-blue-600 font-medium hover:underline">Login disini</a>
        </p>
      </form>
    </div>
  </div>
  
</body>
</html>