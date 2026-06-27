<?= $this->extend('layouts/user_layout') ?>

<?= $this->section('content') ?>

<h2 class="dashboard-title mb-4">

    Daftar Tempat Magang

</h2>

<div class="page-card">

    <table class="table table-hover align-middle">

        <thead>

            <tr>

                <th width="70">
                    No
                </th>

                <th width="90">
                    Kode
                </th>

                <th>
                    Nama Tempat Magang
                </th>

            </tr>

        </thead>

        <tbody>

        <?php $no = 1; ?>

        <?php foreach($alternatif as $a): ?>

            <tr>

                <td>
                    <?= $no++ ?>
                </td>

                <td>
                    <?= $a['kode_alternatif'] ?>
                </td>

                <td>
                    <?= $a['nama_alternatif'] ?>
                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

<?= $this->endSection() ?>