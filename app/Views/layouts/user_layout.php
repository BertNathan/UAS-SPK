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

    height:100vh;

    overflow-y:auto;

    padding:28px;

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

.dashboard-title{

    font-size:28px;

    font-weight:700;

    margin-bottom:25px;

}

.menu-card{

    display:block;

    width:100%;

    background:#fff;

    border:2px solid #333;

    border-radius:10px;

    text-decoration:none;

    color:#000;

    padding:18px;

    font-weight:600;

    margin-bottom:15px;

    transition:.3s;

}

.menu-card:hover{

    background:#2F80ED;

    color:white;

}

.page-card{

    background:#fff;

    border-radius:15px;

    padding:20px;

    box-shadow:0 4px 12px rgba(0,0,0,.08);

}

.table{

    margin-bottom:0;

}

.table thead{

    background:#163A63;

    color:#fff;

}

.table thead th{

    background:#163A63;

    color:#fff;

    font-weight:600;

    font-size:14px;

    padding:12px;

    border-color:#163A63;

    vertical-align:middle;

}

.table tbody td{

    padding:10px;

    vertical-align:middle;

}

.table tbody tr:hover{

    background:#F8FBFF;

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

    <a href="/user/dashboard">
        <i class="bi bi-house-fill"></i>
        Dashboard
    </a>

    <a href="/user/alternatif">
        <i class="bi bi-folder-fill"></i>
        Daftar Tempat Magang
    </a>

    <a href="/user/ranking">
        <i class="bi bi-trophy-fill"></i>
        Hasil Ranking
    </a>

</div>

</div>

<div class="user-box">

    <i class="bi bi-person-circle"
       style="font-size:45px;"></i>

    <h5 class="mt-2">
        Pengguna
    </h5>

    <small>User</small>

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