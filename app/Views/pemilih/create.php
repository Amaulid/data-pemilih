<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1>Form Tambah Pemilih</h1>

    <!-- Tampilkan notifikasi -->
    <?php if (session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= session('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?= session('error') ?>
        </div>
    <?php endif; ?>

    <!-- Tampilkan formulir tambah pemilih -->
    <form action="/pemilih/store" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" required>
        </div>
        <div class="mb-3">
            <label for="kecamatan_id" class="form-label">Kecamatan</label>
            <select class="form-select" id="kecamatan_id" name="kecamatan_id" required>
                <!-- Options akan diisi menggunakan Ajax -->
            </select>
        </div>
        <div class="mb-3">
            <label for="desa_id" class="form-label">Desa</label>
            <select class="form-select" id="desa_id" name="desa_id" required>
                <!-- Options akan diisi menggunakan Ajax -->
            </select>
        </div>
        <div class="mb-3">
            <label for="tps" class="form-label">TPS</label>
            <input type="text" class="form-control" id="tps" name="tps" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
<?= $this->endSection() ?>
