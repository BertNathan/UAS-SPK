<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('content') ?>

<h2 class="dashboard-title mb-0">
    Data Penilaian
</h2>

<p class="text-secondary mb-4">
    Isi nilai untuk setiap kriteria (skala 1–5)
</p>

<div class="page-card">

<form action="/penilaian/store" method="post">

<table class="table align-middle table-hover">

    <thead>

        <tr>

            <th width="320">
                Alternatif
            </th>

            <?php foreach($kriteria as $k): ?>

                <th class="text-center">
                    <?= $k['kode_kriteria'] ?>
                </th>

            <?php endforeach; ?>

        </tr>

    </thead>

    <tbody>

    <?php foreach($alternatif as $a): ?>

        <tr>

            <td>

    <span style="color:#2F80ED;font-weight:600;">

        <?= $a['kode_alternatif'] ?>

    </span>

    <?= $a['nama_alternatif'] ?>

</td>

            <?php foreach($kriteria as $k): ?>

            <td class="text-center">

                <input
                    type="number"
                    min="1"
                    max="5"
                    required
                    class="matrix-input"
                    name="nilai[<?= $a['id_alternatif'] ?>][<?= $k['id_kriteria'] ?>]">

            </td>

            <?php endforeach; ?>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>

<div class="mt-4">

    <h6 class="fw-bold mb-2">
        Keterangan
    </h6>

    <ul class="list-unstyled mb-0">

        <?php foreach($kriteria as $k): ?>

        <li class="mb-1">

            <span class="fw-semibold text-primary">

                <?= $k['kode_kriteria'] ?>

            </span>

            —

            <?= $k['nama_kriteria'] ?>

        </li>

        <?php endforeach; ?>

    </ul>

</div>

<button type="submit" class="btn btn-primary-custom mt-3">

    <i class="bi bi-floppy-fill"></i>

    Simpan Penilaian

</button>

</form>

</div>

<?= $this->endSection() ?>