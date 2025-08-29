
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'header.php';?> 

<div class="container mt-4">
  <h1 class="text-2xl font-bold mb-4">Dokumen</h1>

  <!-- CARD -->
  <div class="row mb-4">
    <div class="col-md-3 mb-3">
      <div class="card shadow-lg rounded-2xl p-4 text-center bg-purple-500 text-white">
        <p class="text-sm">Jumlah Dokumen CV</p>
        <h2 class="text-3xl font-bold">10</h2>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card shadow-lg rounded-2xl p-4 text-center bg-purple-500 text-white">
        <p class="text-sm">Jumlah Dokumen Tender</p>
        <h2 class="text-3xl font-bold">10</h2>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card shadow-lg rounded-2xl p-4 text-center bg-purple-500 text-white">
        <p class="text-sm">Jumlah Dokumen Laporan</p>
        <h2 class="text-3xl font-bold">10</h2>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card shadow-lg rounded-2xl p-4 text-center bg-purple-500 text-white">
        <p class="text-sm">Total Semua Dokumen</p>
        <h2 class="text-3xl font-bold">30</h2>
      </div>
    </div>
  </div>

  <!-- TOMBOL TAMBAH -->
  <a href="tambah_dokumen.php" class="btn btn-success mb-3 flex items-center gap-2 px-3 py-2 rounded-lg shadow">
    <i class="fas fa-plus"></i> Tambah Dokumen
  </a>

  <!-- TABEL -->
  <div class="card shadow rounded-2xl">
    <div class="card-body">
      <table class="table table-bordered text-center align-middle">
        <thead class="bg-gray-100">
          <tr>
            <th>No</th>
            <th>Nama Dokumen</th>
            <th>Jenis</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td class="font-medium">Kontrak A</td>
            <td><span class="badge bg-primary">Kontrak</span></td>
            <td>26/08/2025</td>
            <td><span class="px-2 py-1 rounded-lg bg-green-500 text-white text-xs">Valid</span></td>
            <td><button class="btn btn-sm btn-primary">Edit</button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Tender B</td>
            <td><span class="badge bg-warning">Tender</span></td>
            <td>27/08/2025</td>
            <td><span class="px-2 py-1 rounded-lg bg-red-500 text-white text-xs">Perlu Verifikasi</span></td>
            <td><button class="btn btn-sm btn-secondary">Edit</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include 'footer.php';?>
</body>
</html>