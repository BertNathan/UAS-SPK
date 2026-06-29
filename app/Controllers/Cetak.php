<?php

namespace App\Controllers;

use Dompdf\Dompdf;

class Cetak extends BaseController
{

    public function ranking()
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

        //============================
        // Hitung Pembagi
        //============================

        $pembagi = [];

        foreach ($kriteria as $k) {

            $jumlah = 0;

            foreach ($alternatif as $a) {

                $nilai = $matriks[$a['id_alternatif']]
                                  [$k['id_kriteria']] ?? 0;

                $jumlah += pow($nilai,2);

            }

            $pembagi[$k['id_kriteria']] = sqrt($jumlah);

        }

        //============================
        // Hitung Ranking
        //============================

        $hasil = [];

        foreach ($alternatif as $a){

            $benefit = 0;
            $cost = 0;

            foreach($kriteria as $k){

                $nilai = ($matriks[$a['id_alternatif']]
                                   [$k['id_kriteria']] ?? 0)
                                   /
                         $pembagi[$k['id_kriteria']];

                $nilai *= $k['bobot'];

                if(strtolower($k['atribut'])=='benefit'){

                    $benefit += $nilai;

                }else{

                    $cost += $nilai;

                }

            }

            $hasil[] = [

                'alternatif'=>$a['nama_alternatif'],

                'yi'=>$benefit-$cost

            ];

        }

        usort($hasil,function($a,$b){

            return $b['yi'] <=> $a['yi'];

        });

        $html = view('cetak/ranking',[
            'hasil'=>$hasil
        ]);

        $dompdf = new Dompdf();

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4','portrait');

        $dompdf->render();

        $dompdf->stream("Hasil_Ranking_MOORA.pdf",[
            "Attachment"=>false
        ]);

    }

}