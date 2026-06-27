<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('content') ?>

<h2 class="dashboard-title mb-4">
    Data Kriteria
</h2>

<div class="page-card">

    <table class="table table-hover align-middle">

        <thead>

            <tr>

                <th width="70">No</th>

                <th width="100">Kode</th>

                <th>Nama Kriteria</th>

                <th width="120">Bobot</th>

                <th width="140">Atribut</th>

            </tr>

        </thead>

        <tbody>

        <?php $no = 1; ?>

        <?php foreach($kriteria as $k): ?>

        <tr>

            <td><?= $no++ ?></td>

            <td><?= $k['kode_kriteria'] ?></td>

            <td><?= $k['nama_kriteria'] ?></td>

            <td><?= number_format($k['bobot'], 2) ?></td>

            <td>

                <?php if(strtolower($k['atribut']) == 'benefit'): ?>

                    <span class="badge-benefit">

                        Benefit

                    </span>

                <?php else: ?>

                    <span class="badge-cost">

                        Cost

                    </span>

                <?php endif; ?>

            </td>

        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

<?= $this->endSection() ?>