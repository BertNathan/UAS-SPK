<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('content') ?>

<div class="page-header">

    <h2 class="dashboard-title mb-0">
        Data Alternatif
    </h2>

    <a href="/alternatif/create" class="btn-primary-custom">

        <i class="bi bi-plus-lg"></i>

        Tambah Alternatif

    </a>

</div>

<div class="page-card">

    <table class="table table-hover align-middle">

        <thead>

            <tr>

                <th width="70">No</th>

                <th width="100">Kode</th>

                <th>Nama Tempat Magang</th>

                <th width="180">Aksi</th>

            </tr>

        </thead>

        <tbody>

            <?php $no = 1; ?>

            <?php foreach($alternatif as $a): ?>

            <tr>

                <td><?= $no++ ?></td>

                <td><?= $a['kode_alternatif'] ?></td>

                <td><?= $a['nama_alternatif'] ?></td>

                <td>

                    <a href="/alternatif/edit/<?= $a['id_alternatif'] ?>"
                       class="btn btn-outline-primary btn-sm">

                        <i class="bi bi-pencil"></i>

                        Edit

                    </a>

                    <a href="/alternatif/delete/<?= $a['id_alternatif'] ?>"
                       class="btn btn-outline-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus data ini?')">

                        <i class="bi bi-trash"></i>

                        Hapus

                    </a>

                </td>

            </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</div>

<?= $this->endSection() ?>