<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">

<style>

body{

    font-family:DejaVu Sans;

    font-size:12px;

}

h2{

    text-align:center;

}

table{

    width:100%;

    border-collapse:collapse;

    margin-top:20px;

}

table th{

    background:#163A63;

    color:white;

    border:1px solid #000;

    padding:8px;

}

table td{

    border:1px solid #000;

    padding:8px;

}

.note{

    margin-top:25px;

    border:1px solid #163A63;

    padding:15px;

}

</style>

</head>

<body>

<h2>

HASIL PERANKINGAN TEMPAT MAGANG<br>

Metode MOORA

</h2>

<p>

Tanggal Cetak :
<?= date('d-m-Y') ?>

</p>

<table>

<thead>

<tr>

<th>Ranking</th>

<th>Tempat Magang</th>

<th>Nilai Yi</th>

</tr>

</thead>

<tbody>

<?php $no=1; ?>

<?php foreach($hasil as $h): ?>

<tr>

<td align="center">

<?= $no++ ?>

</td>

<td>

<?= $h['alternatif'] ?>

</td>

<td align="center">

<?= number_format($h['yi'],4) ?>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

<div class="note">

<b>Rekomendasi Tempat Magang Terbaik</b>

<br><br>

<?= $hasil[0]['alternatif'] ?>

dengan nilai Yi

<b><?= number_format($hasil[0]['yi'],4) ?></b>

</div>

</body>

</html>