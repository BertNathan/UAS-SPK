<?= $this->extend('layouts/auth_layout') ?>

<?= $this->section('content') ?>

<div class="container-fluid vh-100 d-flex flex-column p-0">

    <!-- Header -->
    <div class="py-4 text-center header-login">

        <div class="fw-semibold title-top">
            SISTEM PENDUKUNG KEPUTUSAN
        </div>

        <div class="fw-bold title-bottom">
            Pemilihan Tempat Magang Terbaik untuk Jurusan Teknik Komputer dan Jaringan
        </div>

    </div>

    <!-- Login -->
    <div class="flex-grow-1 d-flex justify-content-center align-items-start pt-5">

        <div class="login-box">

            <h1 class="mb-5 fw-bold">
    Login
</h1>

<?php if(session()->getFlashdata('error')): ?>

<div class="login-alert">

    <i class="bi bi-exclamation-circle-fill"></i>

    <?= session()->getFlashdata('error') ?>

</div>

<?php endif; ?>

<form action="/cekLogin" method="post">

                <input
                    type="text"
                    name="username"
                    class="form-control input-login"
                    placeholder="Username"
                    required
                >

                <input
                    type="password"
                    name="password"
                    class="form-control input-login mt-4"
                    placeholder="Password"
                    required
                >

                <button class="btn btn-login mt-4">

                    Login

                </button>

            </form>

        </div>

    </div>

</div>

<style>

.header-login{

    background:#17375E;
    color:white;

    border-radius:0 0 12px 12px;

}

.title-top{

    color:#4F8EDC;
    font-size:28px;

}

.title-bottom{

    font-size:30px;

}

.login-box{

    width:420px;

    text-align:center;

}

.input-login{

    border:none;

    border-radius:15px;

    background:#D9D9D9;

    height:55px;

    padding-left:20px;

}

.input-login:focus{

    box-shadow:none;

    background:#D9D9D9;

}

.btn-login{

    width:100%;

    height:55px;

    border-radius:15px;

    background:#2F80ED;

    color:white;

    font-weight:600;

}

.btn-login:hover{

    background:#1E6FDB;

    color:white;

}
.login-alert{

    background:#FFECEC;

    color:#D32F2F;

    border:1px solid #F5C2C2;

    border-radius:12px;

    padding:12px 16px;

    margin-bottom:20px;

    font-size:14px;

    font-weight:500;

    text-align:left;

}

</style>

<?= $this->endSection() ?>