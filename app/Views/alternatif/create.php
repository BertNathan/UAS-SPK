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
            Tambah Alternatif
        </h2>

        <p class="text-secondary mb-0">
            Tambahkan tempat magang baru
        </p>

    </div>

</div>

<div class="page-card">

<form action="/alternatif/store" method="post">

    <div class="mb-3">

        <label class="form-label">

            Kode Alternatif

        </label>

        <input
            type="text"
            name="kode_alternatif"
            class="form-control"
            placeholder="Contoh: A6"
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
            placeholder="Masukkan nama tempat magang"
            required>

    </div>

    <button class="btn btn-primary-custom">

        <i class="bi bi-floppy"></i>

        Simpan

    </button>

    <a href="/alternatif"
       class="btn btn-outline-secondary ms-2">

        Kembali

    </a>

</form>

</div>

<?= $this->endSection() ?>