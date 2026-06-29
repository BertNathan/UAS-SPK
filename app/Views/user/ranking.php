<?= $this->extend('layouts/user_layout') ?>

<?= $this->section('content') ?>

<h2 class="dashboard-title mb-0">
    Hasil Ranking MOORA
</h2>

<p class="text-secondary mb-4">
    Peringkat berdasarkan nilai Yi tertinggi
</p>

<div class="page-card mb-4">

    <table class="table table-hover align-middle">

        <thead>

            <tr>

                <th width="120"class="text-center">
                    Ranking
                </th>

                <th>
                    Tempat Magang
                </th>

                <th width="180" class="text-center">
                    Nilai Yi
                </th>

            </tr>

        </thead>

        <tbody>

        <?php $rank = 1; ?>

        <?php foreach($hasil as $h): ?>

            <tr class="<?= $rank == 1 ? 'rank-1' : '' ?>">

                <td class="fw-bold text-center">
    <?= $rank ?>
</td>

                <td>

                    <?= $h['alternatif'] ?>

                </td>

                <td class="text-center fw-semibold">

                    <?= number_format($h['yi'],4) ?>

                </td>

            </tr>

        <?php $rank++; ?>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

<div class="alert alert-primary rounded-3">

    <h6 class="fw-bold mb-2">

        <i class="bi bi-trophy-fill"></i>

        Rekomendasi Tempat Magang Terbaik

    </h6>

    <p class="mb-0">

        <strong>

            <?= $hasil[0]['alternatif'] ?>

        </strong>

        dengan nilai

        <strong>

            Yi <?= number_format($hasil[0]['yi'],4) ?>

        </strong>

    </p>

</div>

<div class="mt-3">

    <a href="<?= base_url('cetak/ranking') ?>"
       class="btn-primary-custom">

        <i class="bi bi-printer-fill"></i>

        Cetak Hasil Ranking

    </a>

</div>

<?= $this->endSection() ?>