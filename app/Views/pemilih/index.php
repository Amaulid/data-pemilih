<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1>Daftar Pemilih</h1>

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

    <!-- Tampilkan data pemilih -->
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>TPS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($pemilih as $row): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['nik'] ?></td>
                    <!-- Tampilkan nama kecamatan -->
                    <td><?= $row['nama_kecamatan'] ?></td>
                    <!-- Tampilkan nama desa -->
                    <td><?= $row['nama_desa'] ?></td>
                    <td><?= $row['tps'] ?></td>
                    <td>
                        <a href="/pemilih/edit/<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="/pemilih/delete/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="/pemilih/create" class="btn btn-primary">Tambah Pemilih</a>
<?= $this->endSection() ?>
