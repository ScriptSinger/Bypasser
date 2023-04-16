<?php

namespace App\Imports;

use App\Models\Consumer;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ConsumersImport implements ToCollection
{
    private $area_id;
    public function __construct($id)
    {
        $this->area_id = $id;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Consumer::create([
                'link_pu' =>  $row[0],
                'rayon_goroda' =>  $row[1],
                'adres' =>  $row[2],
                'ulica' =>  $row[3],
                'dom_korpus1' =>  $row[4],
                'kvartira_komnata' =>  $row[5],
                'ls' =>  $row[6],
                'zavodskoy_nomer_ipu' =>  $row[7],
                'model_ipu' =>  $row[8],
                'tip_ipu' =>  $row[9],
                'data_dopuska_pu_v_komuchet' =>  $row[10],
                'data_okonchaniya_dopuska_pu_v_komuchet' =>  $row[11],
                'mesto_ustanovki_pu' =>  $row[12],
                'nomer_plastikovoy_plomby' =>  $row[13],
                'nomer_antimagnitnoy_plomby' =>  $row[14],
                'sostoyanie_pu' =>  $row[15],
                'debitorskaya_zadoljennost' =>  $row[16],
                'data_snyatiya_tekuschego_pokazaniya_ispolnitel' =>  $row[17],
                'kolichestvo_projivauschih_chel_ispolnitel' =>  $row[18],
                'zavodskoy_nomer_ipu_ispolnitel' =>  $row[19],
                'marka_model_seriya_ispolnitel' =>  $row[20],
                'god_vypuska_ispolnitel' =>  $row[21],
                'tip_ipu_ispolnitel' =>  $row[22],
                'kontrolnye_pokazaniya_ispolnitel' =>  $row[23],
                'nomer_plomby_ispolnitel' =>  $row[24],
                'nomer_amp_ispolnitel' =>  $row[25],
                'nalichie_dokumentacii_ispolnitel' =>  $row[26],
                'data_posledney_poverki_ispolnitel' =>  $row[27],
                'data_okonchaniya_poverki_ispolnitel' =>  $row[28],
                'tehnicheskoe_sostoyanie_ispolnitel' =>  $row[29],
                'mesto_ustanovki_ispolnitel' =>  $row[30],
                'nomer_plomby_ustanovlennye_ispolnitel' =>  $row[31],
                'nomer_amp_ustanovlennye_ispolnitel' =>  $row[32],
                'kolichestvo_ipu_v_kvartire_ispolnitel' =>  $row[33],
                'nalichie_podpisi_potrebitelya' =>  $row[34],
                'zamechanie_k_priboru_ucheta_ispolnitel' =>  $row[35],
                'kommentariy_k_aktu_ispolnitel' =>  $row[36],
                'podrobnoe_vnosimoe_poyasnenie' =>  $row[37],
                'fio_agenta_ispolnitel' =>  $row[38],
                'primechanie' =>  $row[39],
                'delta' =>  $row[40],
                'brak' =>  $row[41],
                'primechanie_dlya_tsb' =>  $row[42],

                'area_id' => $this->area_id
            ]);
        }
    }
}
