<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('content') ?>

<div class="d-flex align-items-center mb-4">

    <a href="/alternatif"
       class="text-decoration-none text-dark me-3"
       style="font-size:22px;">

        <i class="bi bi-arrow-left"></i>

    </a>

    <div>

        <h2 class="dashboard-title mb-0">
            Edit Alternatif
        </h2>

        <p class="text-secondary mb-0">
            Perbarui data tempat magang
        </p>

    </div>

</div>

<div class="page-card">

    <form action="/alternatif/update/<?= $alternatif['id_alternatif'] ?>" method="post">

        <div class="mb-3">

            <label class="form-label">
                Kode Alternatif
            </label>

            <input
                type="text"
                name="kode_alternatif"
                class="form-control"
                value="<?= $alternatif['kode_alternatif'] ?>"
                required>

        </div>

        <div class="mb-4">

            <label class="form-label">
                Nama Tempat Magang
            </label>

            <input
                type="text"
                name="nama_alternatif"
                class="form-control"
                value="<?= $alternatif['nama_alternatif'] ?>"
                required>

        </div>

        <button type="submit" class="btn btn-primary-custom">

            <i class="bi bi-floppy"></i>

            Update

        </button>

        <a href="/alternatif"
           class="btn btn-outline-secondary ms-2">

            Kembali

        </a>

    </form>

</div>

<?= $this->endSection() ?>