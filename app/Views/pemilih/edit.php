<!-- app/Views/pemilih/edit.php -->

<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1>Edit Pemilih</h1>

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

    <!-- Form Edit Pemilih -->
    <?= form_open('/pemilih/update/' . $pemilih['id']) ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $pemilih['nama'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="<?= $pemilih['nik'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="kecamatan_id" class="form-label">Kecamatan</label>
            <!-- Tampilkan dropdown kecamatan -->
            <select class="form-select" id="kecamatan_id" name="kecamatan_id" required>
                <?php foreach ($kecamatan as $kec): ?>
                    <option value="<?= $kec['id'] ?>" <?= ($kec['id'] == $pemilih['kecamatan_id']) ? 'selected' : '' ?>>
                        <?= $kec['nama'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="desa_id" class="form-label">Desa</label>
            <!-- Tampilkan dropdown desa -->
            <select class="form-select" id="desa_id" name="desa_id" required>
                <?php foreach ($desa as $ds): ?>
                    <option value="<?= $ds['id'] ?>" <?= ($ds['id'] == $pemilih['desa_id']) ? 'selected' : '' ?>>
                        <?= $ds['nama'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="tps" class="form-label">TPS</label>
            <input type="text" class="form-control" id="tps" name="tps" value="<?= $pemilih['tps'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <?= form_close() ?>
<?= $this->endSection() ?>
