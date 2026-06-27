<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('content') ?>

<h2 class="dashboard-title">

Dashboard Admin

</h2>

<p class="text-muted mb-4">

Selamat Datang,
<b><?= session()->get('username') ?></b>

</p>

<div class="row g-4">

<div class="col-md-3">

<div class="stat-card">

<i class="bi bi-folder-fill"></i>

<h3>5</h3>

<p>Alternatif</p>

</div>

</div>

<div class="col-md-3">

<div class="stat-card">

<i class="bi bi-list-check"></i>

<h3>4</h3>

<p>Kriteria</p>

</div>

</div>

<div class="col-md-3">

<div class="stat-card">

<i class="bi bi-pencil-square"></i>

<h3>20</h3>

<p>Penilaian</p>

</div>

</div>

<div class="col-md-3">

<div class="stat-card">

<i class="bi bi-trophy-fill"></i>

<h3>5</h3>

<p>Ranking</p>

</div>

</div>

</div>

<hr class="my-5">

<h4 class="mb-4">

Menu Cepat

</h4>

<div class="dashboard-menu">

<a href="/alternatif" class="menu-card">

<i class="bi bi-folder-fill"></i>

Kelola Data Alternatif

</a>

<a href="/kriteria" class="menu-card">

<i class="bi bi-list-check"></i>

Kelola Data Kriteria

</a>

<a href="/penilaian" class="menu-card">

<i class="bi bi-pencil-square"></i>

Kelola Data Penilaian

</a>

<a href="/moora" class="menu-card">

<i class="bi bi-calculator"></i>

Perhitungan MOORA

</a>

<a href="/ranking" class="menu-card">

<i class="bi bi-trophy-fill"></i>

Lihat Hasil Ranking

</a>

</div>

<?= $this->endSection() ?>