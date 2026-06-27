<?= $this->extend('layouts/user_layout') ?>

<?= $this->section('content') ?>

<h2 class="dashboard-title">

Selamat Datang!

</h2>

<a href="/user/alternatif"
class="menu-card">

Lihat Tempat Magang

</a>

<a href="/user/ranking"
class="menu-card">

Lihat Hasil Ranking

</a>

<?= $this->endSection() ?>