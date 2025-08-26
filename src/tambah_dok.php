<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./output.css" rel="stylesheet">
</head>
<body>
<html class="dark">
<head>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 transition-colors duration-500">
  <div class="p-6 min-h-screen">
    <div class="max-w-6xl mx-auto bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-6 transition-colors duration-500">
      <!-- Header -->
      <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">📂 Manajemen Dokumen</h2>
        <div class="flex items-center gap-2">
          <!-- Tombol Dark Mode -->
          <button onclick="toggleDarkMode()" class="px-3 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-lg">
            🌙 / ☀️
          </button>
          <button onclick="openModal()" class="px-4 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition">
            + Tambah Dokumen
          </button>
        </div>
      </div>

      <!-- Tabel Dokumen -->
      <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
          <thead class="bg-blue-600 text-white">
            <tr>
              <th class="px-4 py-3 text-left">No</th>
              <th class="px-4 py-3 text-left">Nama Dokumen</th>
              <th class="px-4 py-3 text-left">Jenis</th>
              <th class="px-4 py-3 text-left">Tanggal</th>
              <th class="px-4 py-3 text-left">Status</th>
              <th class="px-4 py-3 text-center">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition">
              <td class="px-4 py-3 text-gray-800 dark:text-gray-200">1</td>
              <td class="px-4 py-3 font-medium text-gray-800 dark:text-gray-100">Dokumen A</td>
              <td class="px-4 py-3 text-gray-600 dark:text-gray-300">Laporan</td>
              <td class="px-4 py-3 text-gray-600 dark:text-gray-300">26-08-2025</td>
              <td class="px-4 py-3">
                <span class="px-3 py-1 text-sm rounded-full bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-200">Aktif</span>
              </td>
              <td class="px-4 py-3 text-center space-x-2">
                <button class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Edit</button>
                <button class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600">Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal Tambah Dokumen -->
  <div id="modalDokumen" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl w-full max-w-lg p-6 transition-colors duration-500">
      <div class="flex justify-between items-center mb-4">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">➕ Tambah Dokumen</h3>
        <button onclick="closeModal()" class="text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-gray-100">&times;</button>
      </div>
      <form action="#" method="POST" class="space-y-4">
        <div>
          <label class="block text-gray-700 dark:text-gray-200">Nama Dokumen</label>
          <input type="text" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Masukkan nama dokumen">
        </div>
        <div>
          <label class="block text-gray-700 dark:text-gray-200">Jenis</label>
          <select class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <option value="">-- Pilih Jenis --</option>
            <option value="Laporan">Laporan</option>
            <option value="Surat">Surat</option>
            <option value="Kontrak">Kontrak</option>
          </select>
        </div>
        <div>
          <label class="block text-gray-700 dark:text-gray-200">Tanggal</label>
          <input type="date" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>
        <div>
          <label class="block text-gray-700 dark:text-gray-200">Status</label>
          <select class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <option value="Aktif">Aktif</option>
            <option value="Nonaktif">Nonaktif</option>
          </select>
        </div>
        <div class="flex justify-end space-x-2">
          <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-300 dark:bg-gray-600 dark:text-white rounded-lg hover:bg-gray-400 dark:hover:bg-gray-500">Batal</button>
          <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Simpan</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function openModal() {
      document.getElementById('modalDokumen').classList.remove('hidden');
    }
    function closeModal() {
      document.getElementById('modalDokumen').classList.add('hidden');
    }
    function toggleDarkMode() {
      document.documentElement.classList.toggle('dark');
    }
  </script>
</body>
</html>

</body>
</html>