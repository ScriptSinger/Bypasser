<?php

namespace App\Exports;

use App\Models\Consumer;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class ConsumersExport implements FromCollection, ShouldAutoSize, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function map($consumer): array
    {
        return [
            $consumer->link_pu,
            $consumer->rayon_goroda,
            $consumer->adres,
            $consumer->ulica,
            $consumer->dom_korpus1,
            $consumer->kvartira_komnata,
            $consumer->ls,
            $consumer->zavodskoy_nomer_ipu,
            $consumer->model_ipu,
            $consumer->tip_ipu,
            $consumer->data_dopuska_pu_v_komuchet,
            $consumer->data_okonchaniya_dopuska_pu_v_komuchet,
            $consumer->mesto_ustanovki_pu,
            $consumer->nomer_plastikovoy_plomby,
            $consumer->nomer_antimagnitnoy_plomby,
            $consumer->sostoyanie_pu,
            $consumer->debitorskaya_zadoljennost,
            $consumer->data_snyatiya_tekuschego_pokazaniya_ispolnitel,
            $consumer->kolichestvo_projivauschih_chel_ispolnitel,
            $consumer->zavodskoy_nomer_ipu_ispolnitel,
            $consumer->marka_model_seriya_ispolnitel,
            $consumer->god_vypuska_ispolnitel,
            $consumer->tip_ipu_ispolnitel,
            $consumer->kontrolnye_pokazaniya_ispolnitel,
            $consumer->nomer_plomby_ispolnitel,
            $consumer->nomer_amp_ispolnitel,
            $consumer->nalichie_dokumentacii_ispolnitel,
            $consumer->data_posledney_poverki_ispolnitel,
            $consumer->data_okonchaniya_poverki_ispolnitel,
            $consumer->tehnicheskoe_sostoyanie_ispolnitel,
            $consumer->mesto_ustanovki_ispolnitel,
            $consumer->nomer_plomby_ustanovlennye_ispolnitel,
            $consumer->nomer_amp_ustanovlennye_ispolnitel,
            $consumer->kolichestvo_ipu_v_kvartire_ispolnitel,
            $consumer->nalichie_podpisi_potrebitelya,
            $consumer->zamechanie_k_priboru_ucheta_ispolnitel,
            $consumer->kommentariy_k_aktu_ispolnitel,
            $consumer->podrobnoe_vnosimoe_poyasnenie,
            $consumer->fio_agenta_ispolnitel,
            $consumer->primechanie,
            $consumer->delta,
            $consumer->brak,
            $consumer->primechanie_dlya_tsb,
        ];
    }

    public function collection()
    {
        return Consumer::all();
    }
}
