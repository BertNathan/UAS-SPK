<?php

namespace App\Controllers;

use Config\Database;

class Moora extends BaseController
{
    
    public function index()
{
    $db = \Config\Database::connect();

    $alternatif = $db->table('alternatif')->get()->getResultArray();
    $kriteria   = $db->table('kriteria')->get()->getResultArray();
    $penilaian  = $db->table('penilaian')->get()->getResultArray();

    $matriks = [];

    foreach ($penilaian as $p) {

    $matriks[$p['id_alternatif']]
            [$p['id_kriteria']]
            = $p['nilai'];

}



// HITUNG PEMBAGI NORMALISASI
$pembagi = [];

foreach ($kriteria as $k) {

    $jumlahKuadrat = 0;

    foreach ($alternatif as $a) {

        $nilai = $matriks[$a['id_alternatif']]
                          [$k['id_kriteria']] ?? 0;

        $jumlahKuadrat += pow($nilai, 2);
    }

    $pembagi[$k['id_kriteria']] = sqrt($jumlahKuadrat);
}

// NORMALISASI
$normalisasi = [];

foreach ($alternatif as $a) {

    foreach ($kriteria as $k) {

        $nilai = $matriks[$a['id_alternatif']]
                          [$k['id_kriteria']] ?? 0;

        $normalisasi[$a['id_alternatif']]
                    [$k['id_kriteria']]
            = $nilai / $pembagi[$k['id_kriteria']];
    }
}

// PEMBOBOTAN
$terbobot = [];

foreach ($alternatif as $a) {

    foreach ($kriteria as $k) {

        $terbobot[$a['id_alternatif']]
                 [$k['id_kriteria']]
            =
            $normalisasi[$a['id_alternatif']]
                         [$k['id_kriteria']]
            *
            $k['bobot'];
    }
}
// HITUNG NILAI YI
$hasil = [];

foreach ($alternatif as $a) {

    $idAlt = $a['id_alternatif'];

    $benefit = 0;
    $cost = 0;

    foreach ($kriteria as $k) {

        $nilai = $terbobot[$idAlt][$k['id_kriteria']];

        if (strtolower($k['atribut']) == 'benefit') {

            $benefit += $nilai;

        } else {

            $cost += $nilai;
        }
    }

    $hasil[] = [
        'alternatif' => $a['nama_alternatif'],
        'yi' => $benefit - $cost
    ];
}
usort($hasil, function ($a, $b) {
    return $b['yi'] <=> $a['yi'];
});

$data = [
    'alternatif'  => $alternatif,
    'kriteria'    => $kriteria,
    'matriks'     => $matriks,
    'normalisasi' => $normalisasi,
    'terbobot'    => $terbobot,
    'hasil'       => $hasil
];

    return view('moora/index', $data);
}

public function ranking()
{
    $db = \Config\Database::connect();

    $alternatif = $db->table('alternatif')->get()->getResultArray();
    $kriteria   = $db->table('kriteria')->get()->getResultArray();
    $penilaian  = $db->table('penilaian')->get()->getResultArray();

    $matriks = [];

    foreach ($penilaian as $p) {
        $matriks[$p['id_alternatif']][$p['id_kriteria']] = $p['nilai'];
    }

    $pembagi = [];

    foreach ($kriteria as $k) {

        $jumlahKuadrat = 0;

        foreach ($alternatif as $a) {

            $nilai = $matriks[$a['id_alternatif']]
                              [$k['id_kriteria']] ?? 0;

            $jumlahKuadrat += pow($nilai, 2);
        }

        $pembagi[$k['id_kriteria']] = sqrt($jumlahKuadrat);
    }

    $terbobot = [];

    foreach ($alternatif as $a) {

        foreach ($kriteria as $k) {

            $nilai = $matriks[$a['id_alternatif']]
                              [$k['id_kriteria']] ?? 0;

            $normalisasi =
                $nilai / $pembagi[$k['id_kriteria']];

            $terbobot[$a['id_alternatif']]
                     [$k['id_kriteria']]
                =
                $normalisasi * $k['bobot'];
        }
    }

    $hasil = [];

    foreach ($alternatif as $a) {

        $benefit = 0;
        $cost = 0;

        foreach ($kriteria as $k) {

            $nilai =
                $terbobot[$a['id_alternatif']]
                         [$k['id_kriteria']];

            if (strtolower($k['atribut']) == 'benefit') {
                $benefit += $nilai;
            } else {
                $cost += $nilai;
            }
        }

        $hasil[] = [
            'alternatif' => $a['nama_alternatif'],
            'yi' => $benefit - $cost
        ];
    }

    usort($hasil, function ($a, $b) {
        return $b['yi'] <=> $a['yi'];
    });

    return view('ranking/index', [
        'hasil' => $hasil
    ]);
}

public function rankingUser()
{
    $db = \Config\Database::connect();

    $alternatif = $db->table('alternatif')->get()->getResultArray();
    $kriteria   = $db->table('kriteria')->get()->getResultArray();
    $penilaian  = $db->table('penilaian')->get()->getResultArray();

    $matriks = [];

    foreach ($penilaian as $p) {
        $matriks[$p['id_alternatif']][$p['id_kriteria']] = $p['nilai'];
    }

    $pembagi = [];

    foreach ($kriteria as $k) {

        $jumlahKuadrat = 0;

        foreach ($alternatif as $a) {

            $nilai = $matriks[$a['id_alternatif']]
                              [$k['id_kriteria']] ?? 0;

            $jumlahKuadrat += pow($nilai, 2);
        }

        $pembagi[$k['id_kriteria']] = sqrt($jumlahKuadrat);
    }

    $terbobot = [];

    foreach ($alternatif as $a) {

        foreach ($kriteria as $k) {

            $nilai = $matriks[$a['id_alternatif']]
                              [$k['id_kriteria']] ?? 0;

            $normalisasi =
                $nilai / $pembagi[$k['id_kriteria']];

            $terbobot[$a['id_alternatif']]
                     [$k['id_kriteria']]
                =
                $normalisasi * $k['bobot'];
        }
    }

    $hasil = [];

    foreach ($alternatif as $a) {

        $benefit = 0;
        $cost = 0;

        foreach ($kriteria as $k) {

            $nilai =
                $terbobot[$a['id_alternatif']]
                         [$k['id_kriteria']];

            if (strtolower($k['atribut']) == 'benefit') {
                $benefit += $nilai;
            } else {
                $cost += $nilai;
            }
        }

        $hasil[] = [
            'alternatif' => $a['nama_alternatif'],
            'yi' => $benefit - $cost
        ];
    }

    usort($hasil, function ($a, $b) {
        return $b['yi'] <=> $a['yi'];
    });

    return view('user/ranking', [
        'hasil' => $hasil
    ]);
}
}