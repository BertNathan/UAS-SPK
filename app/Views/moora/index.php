<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('content') ?>

<h2 class="dashboard-title mb-0">
    Perhitungan MOORA
</h2>

<p class="text-secondary mb-4">
    Multi-Objective Optimization on the basis of Ratio Analysis
</p>

<!-- Matriks Keputusan -->
<div class="page-card mb-4">

    <h5 class="fw-bold mb-3">
        Matriks Keputusan
    </h5>

    <table class="table table-hover align-middle">

        <thead>

            <tr>

                <th>Alternatif</th>

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

                <td class="fw-semibold text-primary">

                    <?= $a['kode_alternatif'] ?>

                </td>

                <?php foreach($kriteria as $k): ?>

                    <td class="text-center">

                        <?= $matriks[$a['id_alternatif']][$k['id_kriteria']] ?? 0 ?>

                    </td>

                <?php endforeach; ?>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

<!-- Normalisasi -->
<div class="page-card mb-4">

    <h5 class="fw-bold mb-3">
        Normalisasi MOORA
    </h5>

    <table class="table table-hover align-middle">

        <thead>

            <tr>

                <th>Alternatif</th>

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

                <td class="fw-semibold text-primary">

                    <?= $a['kode_alternatif'] ?>

                </td>

                <?php foreach($kriteria as $k): ?>

                    <td class="text-center">

                        <?= number_format(
                            $normalisasi[$a['id_alternatif']][$k['id_kriteria']],
                            4
                        ) ?>

                    </td>

                <?php endforeach; ?>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

<!-- Matriks Terbobot -->
<div class="page-card mb-4">

    <h5 class="fw-bold mb-3">
        Matriks Normalisasi Terbobot
    </h5>

    <table class="table table-hover align-middle">

        <thead>

            <tr>

                <th>Alternatif</th>

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

                <td class="fw-semibold text-primary">

                    <?= $a['kode_alternatif'] ?>

                </td>

                <?php foreach($kriteria as $k): ?>

                    <td class="text-center">

                        <?= number_format(
                            $terbobot[$a['id_alternatif']][$k['id_kriteria']],
                            4
                        ) ?>

                    </td>

                <?php endforeach; ?>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

<!-- Nilai Yi -->
<div class="page-card">

    <h5 class="fw-bold mb-3">
        Nilai Yi
    </h5>

    <table class="table table-hover align-middle">

        <thead>

            <tr>

                <th>Alternatif</th>

                <th class="text-center">
                    Nilai Yi
                </th>

            </tr>

        </thead>

        <tbody>

        <?php foreach($hasil as $h): ?>

            <tr>

                <td>

                    <?= $h['alternatif'] ?>

                </td>

                <td class="text-center fw-semibold">

                    <?= number_format($h['yi'],4) ?>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

<?= $this->endSection() ?>