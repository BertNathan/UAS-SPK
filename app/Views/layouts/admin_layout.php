<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>SPK Magang MOORA</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

*{
    font-family:Poppins,sans-serif;
}

body{
    background:#F4F8FD;
    margin:0;
}

.wrapper{

    display:flex;

    height:100vh;

    overflow:hidden;

}

.sidebar{

    position:fixed;

    top:0;

    left:0;

    width:220px;

    height:100vh;

    background:#163A63;

    color:white;

    display:flex;

    flex-direction:column;

    justify-content:space-between;

    padding:30px 20px;

}

.content{

    margin-left:220px;

    width:calc(100% - 220px);

    padding:25px;

    overflow-y:auto;

    height:100vh;

}

.dashboard-title{
    font-size:24px;

    font-weight:700;

    margin-bottom:40px;

}

.dashboard-menu{

    display:flex;

    flex-direction:column;

    gap:18px;

}

.menu-card{

    display:block;

    text-decoration:none;

    color:#000;

    background:white;

    border:2px solid #1E1E1E;

    border-radius:12px;

    padding:16px 20px;

    font-size:18px;

    font-weight:500;

    transition:.3s;

}

.menu-card:hover{

    background:#2F80ED;

    color:white;

}
.stat-card{

    background:white;

    border-radius:10px;

    padding:8px;

    text-align:center;

    box-shadow:0 4px 15px rgba(0,0,0,.08);

    transition:.3s;

}

.stat-card:hover{

    transform:translateY(-5px);

}

.stat-card i{

    font-size:24px;

    color:#2F80ED;

}

.stat-card h3{

    font-size:24px;

    margin:8px 0;
    font-weight:700;
    

}

.stat-card p{

    color:#666;
    font-size:14px;

    margin-bottom:0;

}

.page-card{

    background:#fff;

    border-radius:15px;

    padding:20px;

    box-shadow:0 4px 12px rgba(0,0,0,.08);

}
.page-header{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:20px;

}

.table{

    margin-bottom:0;

}

.table thead{

    background:#163A63;

    color:#fff;

}

.table thead th{

    font-weight:600;

    vertical-align:middle;

}

.table tbody td{

    vertical-align:middle;

}

.table tbody tr:hover{

    background:#f8fbff;

}

.btn-outline-primary{

    border-radius:8px;

}

.btn-outline-danger{

    border-radius:8px;

}

.btn-primary-custom{

    display:inline-flex;

    align-items:center;

    gap:8px;

    background:#2F80ED;

    color:#fff;

    text-decoration:none;

    border:none;

    border-radius:8px;

    padding:9px 18px;

    font-size:14px;

    font-weight:500;

    transition:.3s;

}

.btn-primary-custom:hover{

    background:#1E6FE8;

    color:#fff;

}

.logo{

    text-align:center;

    font-size:18px;

    font-weight:700;

    line-height:1.3;

    margin-bottom:50px;
    letter-spacing:.5px;

}

.menu a{

    display:flex;

    align-items:center;

    gap:12px;

    text-decoration:none;

    color:white;

    padding:11px 15px;
    font-size:15px;

    border-radius:10px;

    margin-bottom:10px;

    transition:.3s;

}

.menu a i{

    font-size:16px;

}

.menu a:hover{

    background:#2F80ED;

}

.user-box{

    text-align:center;

}

.logout{

    display:flex;

    align-items:center;

    justify-content:center;

    gap:10px;

    margin-top:20px;

    padding:10px;

    font-size:14px;

    border-radius:10px;

    background:#2F80ED;

    color:white;

    text-decoration:none;

}

.form-control{

    border-radius:8px;

    padding:10px;
    width:100%;

    border:1px solid #D9E2EC;

    box-shadow:none;

}

.form-control:focus{

    border-color:#2F80ED;

    box-shadow:0 0 0 .15rem rgba(47,128,237,.15);

}

.form-label{

    font-weight:500;

    margin-bottom:8px;

}

.btn-outline-secondary{

    border-radius:8px;

}
.badge-benefit{

    display:inline-block;

    background:#EAF2FF;

    color:#2F80ED;

    border:1px solid #BFD8FF;

    border-radius:6px;

    padding:4px 10px;

    font-size:13px;

    font-weight:500;

}

.badge-cost{

    display:inline-block;

    background:#FFF1E8;

    color:#F97316;

    border:1px solid #FFD1B2;

    border-radius:6px;

    padding:4px 10px;

    font-size:13px;

    font-weight:500;

}

.matrix-input{

    width:52px;

    height:38px;

    text-align:center;

    border:1px solid #D9E2EC;

    border-radius:8px;

    outline:none;

    transition:.3s;

}

.matrix-input:focus{

    border-color:#2F80ED;

    box-shadow:0 0 0 .15rem rgba(47,128,237,.15);

}

.table thead th{

    background:#163A63;

    color:#fff;

    font-weight:600;

    font-size:14px;

    padding:12px;

    border-color:#163A63;

}

.table tbody td{

    padding:10px;

    vertical-align:middle;

}

.matrix-input{

    width:48px;

    height:38px;

    background:#F8FAFC;

    border:1px solid #DCE4EC;

    border-radius:6px;

    text-align:center;

    font-weight:500;

}

.table tbody tr.rank-1 td{

    background:#77FC70 !important;

    font-weight:600;

}



</style>

</head>

<body>

<div class="wrapper">

    <div class="sidebar">

    <div>

        <div class="logo">

            SPK Magang<br>

            MOORA

        </div>

        <div class="menu">

            <a href="/dashboard">

                <i class="bi bi-house-fill"></i>

                Dashboard

            </a>

            <a href="/alternatif">

                <i class="bi bi-folder-fill"></i>

                Data Alternatif

            </a>

            <a href="/kriteria">

                <i class="bi bi-list-check"></i>

                Data Kriteria

            </a>

            <a href="/penilaian">

                <i class="bi bi-pencil-square"></i>

                Data Penilaian

            </a>

            <a href="/moora">

                <i class="bi bi-calculator"></i>

                Perhitungan MOORA

            </a>

            <a href="/ranking">

                <i class="bi bi-trophy-fill"></i>

                Hasil Ranking

            </a>

        </div>

    </div>

    <div class="user-box">

        <i class="bi bi-person-circle"
           style="font-size:45px;"></i>

        <h5 class="mt-2">

            Administrator

        </h5>

        <a href="/logout" class="logout">

            <i class="bi bi-box-arrow-right"></i>

            Keluar

        </a>

    </div>

</div>

    <div class="content">

        <?= $this->renderSection('content') ?>

    </div>

</div>

</body>
</html>