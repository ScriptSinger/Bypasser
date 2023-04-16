<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request as HttpRequest;

use Illuminate\Support\Facades\Storage;

class Consumer extends Model
{
    use SoftDeletes;

    protected $table = 'consumers';
    protected $fillable =
    [
        'link_pu',
        'rayon_goroda',
        'adres',
        'ulica',
        'dom_korpus1',
        'kvartira_komnata',
        'ls',
        'zavodskoy_nomer_ipu',
        'model_ipu',
        'tip_ipu',
        'data_dopuska_pu_v_komuchet',
        'data_okonchaniya_dopuska_pu_v_komuchet',
        'mesto_ustanovki_pu',
        'nomer_plastikovoy_plomby',
        'nomer_antimagnitnoy_plomby',
        'sostoyanie_pu',
        'debitorskaya_zadoljennost',
        'data_snyatiya_tekuschego_pokazaniya_ispolnitel',
        'kolichestvo_projivauschih_chel_ispolnitel',
        'zavodskoy_nomer_ipu_ispolnitel',
        'marka_model_seriya_ispolnitel',
        'god_vypuska_ispolnitel',
        'tip_ipu_ispolnitel',
        'kontrolnye_pokazaniya_ispolnitel',
        'nomer_plomby_ispolnitel',
        'nomer_amp_ispolnitel',
        'nalichie_dokumentacii_ispolnitel',
        'data_posledney_poverki_ispolnitel',
        'data_okonchaniya_poverki_ispolnitel',
        'tehnicheskoe_sostoyanie_ispolnitel',
        'mesto_ustanovki_ispolnitel',
        'nomer_plomby_ustanovlennye_ispolnitel',
        'nomer_amp_ustanovlennye_ispolnitel',
        'kolichestvo_ipu_v_kvartire_ispolnitel',
        'nalichie_podpisi_potrebitelya',
        'zamechanie_k_priboru_ucheta_ispolnitel',
        'kommentariy_k_aktu_ispolnitel',
        'podrobnoe_vnosimoe_poyasnenie',
        'fio_agenta_ispolnitel',
        'primechanie',
        'delta',
        'brak',
        'primechanie_dlya_tsb',
        'photo',
        'file',
        'area_id'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public static function uploadImage(HttpRequest $request, $path = null)
    {

        if ($request->hasFile('photo')) {
            if ($path) {
                Storage::delete($path);
            }
            $folder = date('Y-m-d');
            return $request->file('photo')->store("img/$folder");
        }
        return $path;
    }

    public function getImage()
    {
        if (!$this->photo) {
            return asset('assets/image/no-image.jpg');
        }
        return asset("assets/$this->photo");
    }
}
