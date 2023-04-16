@extends('admin.layouts.layout')

@section('title')
Потребитель # {{ $consumer->id }}
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Потребитель # {{ $consumer->id }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ URL::previous() }}">Назад</a></li>
                    <li class="breadcrumb-item active">Потребитель # {{ $consumer->id }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- Default box -->

                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">{{ $consumer->full_name }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Линк ПУ</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->link_pu }}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Район города</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->rayon_goroda }}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Адрес</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->adres }}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Улица</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->ulica }}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Дом/корпус.1</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->dom_korpus1}}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Квартира\Комната</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->kvartira_komnata }}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>ЛС</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->ls }}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Заводской номер ИПУ</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->zavodskoy_nomer_ipu }}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Модель ИПУ</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->model_ipu }}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Тип ИПУ</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->tip_ipu }}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Дата допуска ПУ в ком.учет</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->data_dopuska_pu_v_komuchet }}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Дата окончания допуска ПУ в ком.учет</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->data_okonchaniya_dopuska_pu_v_komuchet}}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Место установки ПУ</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->mesto_ustanovki_pu}}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Номер пластиковой пломбы</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->nomer_plastikovoy_plomby}}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Номер антимагнитной пломбы</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->nomer_antimagnitnoy_plomby}}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Состояние ПУ</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->sostoyanie_pu}}" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Дебиторская задолженность</label>
                            <input type="text" class="form-control" placeholder="{{ $consumer->debitorskaya_zadoljennost}}" disabled="">
                        </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
                <!-- /.card -->
            </div>


            <div class="col-md-6">
                <!-- Default box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{ $consumer->full_name }}</h3>
                    </div>
                    <form enctype="multipart/form-data" method="POST" action="{{ route('consumers.update', ['consumer' => $consumer->id]) }}">
                        @csrf
                        @method ('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="data_snyatiya_tekuschego_pokazaniya_ispolnitel">Дата снятия текущего показания "Исполнитель"</label>
                                <input value="{{ $consumer->data_snyatiya_tekuschego_pokazaniya_ispolnitel }}" name="data_snyatiya_tekuschego_pokazaniya_ispolnitel" class="form-control @error('data_snyatiya_tekuschego_pokazaniya_ispolnitel') is-invalid @enderror" type="text" id="data_snyatiya_tekuschego_pokazaniya_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="kolichestvo_projivauschih_chel_ispolnitel">Количество проживающих (Чел.) ООО "Исполнитель"</label>
                                <input value="{{ $consumer->kolichestvo_projivauschih_chel_ispolnitel}}" name="kolichestvo_projivauschih_chel_ispolnitel" class="form-control @error('kolichestvo_projivauschih_chel_ispolnitel') is-invalid @enderror" type="text" id="kolichestvo_projivauschih_chel_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="zavodskoy_nomer_ipu_ispolnitel">Заводской № ИПУ. ООО "Исполнитель"</label>
                                <input value="{{ $consumer->zavodskoy_nomer_ipu_ispolnitel }}" name="zavodskoy_nomer_ipu_ispolnitel" class="form-control @error('zavodskoy_nomer_ipu_ispolnitel') is-invalid @enderror" type="text" id="zavodskoy_nomer_ipu_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="marka_model_seriya_ispolnitel">Марка, модель, серия ООО "Исполнитель"</label>
                                <input value="{{ $consumer->marka_model_seriya_ispolnitel }}" name="marka_model_seriya_ispolnitel" class="form-control @error('marka_model_seriya_ispolnitel') is-invalid @enderror" type="text" id="marka_model_seriya_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="god_vypuska_ispolnitel">Год выпуска "Исполнитель"</label>
                                <input value="{{ $consumer->god_vypuska_ispolnitel }}" name="god_vypuska_ispolnitel" class="form-control @error('god_vypuska_ispolnitel') is-invalid @enderror" type="text" id="god_vypuska_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="tip_ipu_ispolnitel">Тип ИПУ "Исполнитель"</label>
                                <input value="{{ $consumer->tip_ipu_ispolnitel }}" name="tip_ipu_ispolnitel" class="form-control @error('tip_ipu_ispolnitel') is-invalid @enderror" type="text" id="tip_ipu_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="kontrolnye_pokazaniya_ispolnitel">Контрольные Показания. "Исполнитель"</label>
                                <input value="{{ $consumer->kontrolnye_pokazaniya_ispolnitel }}" name="kontrolnye_pokazaniya_ispolnitel" class="form-control @error('kontrolnye_pokazaniya_ispolnitel') is-invalid @enderror" type="text" id="kontrolnye_pokazaniya_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="nomer_plomby_ispolnitel">№ Пломбы. "Исполнитель"</label>
                                <input value="{{ $consumer->nomer_plomby_ispolnitel }}" name="nomer_plomby_ispolnitel" class="form-control @error('nomer_plomby_ispolnitel') is-invalid @enderror" type="text" id="nomer_plomby_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="nomer_amp_ispolnitel">№ АМП. ООО "Исполнитель"</label>
                                <input value="{{ $consumer->nomer_amp_ispolnitel }}" name="nomer_amp_ispolnitel" class="form-control @error('nomer_amp_ispolnitel') is-invalid @enderror" type="text" id="nomer_amp_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="nalichie_dokumentacii_ispolnitel">Наличие документации. ООО "Исполнитель"</label>
                                <input value="{{ $consumer->nalichie_dokumentacii_ispolnitel }}" name="nalichie_dokumentacii_ispolnitel" class="form-control @error('nalichie_dokumentacii_ispolnitel') is-invalid @enderror" type="text" id="nalichie_dokumentacii_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="data_posledney_poverki_ispolnitel">Дата последней поверки. ООО "Исполнитель"</label>
                                <input value="{{ $consumer->data_posledney_poverki_ispolnitel }}" name="data_posledney_poverki_ispolnitel" class="form-control @error('data_posledney_poverki_ispolnitel') is-invalid @enderror" type="text" id="data_posledney_poverki_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="data_okonchaniya_poverki_ispolnitel">Дата окончания поверки. ООО "Исполнитель"</label>
                                <input value="{{ $consumer->data_okonchaniya_poverki_ispolnitel }}" name="data_okonchaniya_poverki_ispolnitel" class="form-control @error('data_okonchaniya_poverki_ispolnitel') is-invalid @enderror" type="text" id="data_okonchaniya_poverki_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="tehnicheskoe_sostoyanie_ispolnitel">Техническое состояние. "Исполнитель"</label>
                                <input value="{{ $consumer->tehnicheskoe_sostoyanie_ispolnitel }}" name="tehnicheskoe_sostoyanie_ispolnitel" class="form-control @error('tehnicheskoe_sostoyanie_ispolnitel') is-invalid @enderror" type="text" id="tehnicheskoe_sostoyanie_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="mesto_ustanovki_ispolnitel">Место установки "Исполнитель"</label>
                                <input value="{{ $consumer->mesto_ustanovki_ispolnitel }}" name="mesto_ustanovki_ispolnitel" class="form-control @error('mesto_ustanovki_ispolnitel') is-invalid @enderror" type="text" id="mesto_ustanovki_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="nomer_plomby_ustanovlennye_ispolnitel">№ Пломбы установленные "Исполнитель"</label>
                                <input value="{{ $consumer->nomer_plomby_ustanovlennye_ispolnitel }}" name="nomer_plomby_ustanovlennye_ispolnitel" class="form-control @error('nomer_plomby_ustanovlennye_ispolnitel') is-invalid @enderror" type="text" id="nomer_plomby_ustanovlennye_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="nomer_plomby_ustanovlennye_ispolnitel">№ АМП установленные "Исполнитель"</label>
                                <input value="{{ $consumer->nomer_amp_ustanovlennye_ispolnitel }}" name="nomer_amp_ustanovlennye_ispolnitel" class="form-control @error('nomer_amp_ustanovlennye_ispolnitel') is-invalid @enderror" type="text" id="nomer_amp_ustanovlennye_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="kolichestvo_ipu_v_kvartire_ispolnitel">Количество ИПУ в квартире "Исполнитель"</label>
                                <input value="{{ $consumer->kolichestvo_ipu_v_kvartire_ispolnitel }}" name="kolichestvo_ipu_v_kvartire_ispolnitel" class="form-control @error('kolichestvo_ipu_v_kvartire_ispolnitel') is-invalid @enderror" type="text" id="kolichestvo_ipu_v_kvartire_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="nalichie_podpisi_potrebitelya">Наличие подписи потребителя</label>
                                <input value="{{ $consumer->nalichie_podpisi_potrebitelya }}" name="nalichie_podpisi_potrebitelya" class="form-control @error('nalichie_podpisi_potrebitelya') is-invalid @enderror" type="text" id="nalichie_podpisi_potrebitelya">
                            </div>
                            <div class="form-group">
                                <label for="zamechanie_k_priboru_ucheta_ispolnitel">Замечание к прибору учета "Исполнитель"</label>
                                <input value="{{ $consumer->zamechanie_k_priboru_ucheta_ispolnitel }}" name="zamechanie_k_priboru_ucheta_ispolnitel" class="form-control @error('zamechanie_k_priboru_ucheta_ispolnitel') is-invalid @enderror" type="text" id="zamechanie_k_priboru_ucheta_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="kommentariy_k_aktu_ispolnitel">Комментарий к акту "Исполнитель"</label>
                                <input value="{{ $consumer->kommentariy_k_aktu_ispolnitel }}" name="kommentariy_k_aktu_ispolnitel" class="form-control @error('kommentariy_k_aktu_ispolnitel') is-invalid @enderror" type="text" id="kommentariy_k_aktu_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="podrobnoe_vnosimoe_poyasnenie">Подробное вносимое пояснение</label>
                                <input value="{{ $consumer->podrobnoe_vnosimoe_poyasnenie }}" name="podrobnoe_vnosimoe_poyasnenie" class="form-control @error('podrobnoe_vnosimoe_poyasnenie') is-invalid @enderror" type="text" id="podrobnoe_vnosimoe_poyasnenie">
                            </div>
                            <div class="form-group">
                                <label for="fio_agenta_ispolnitel">ФИО агента "Исполнитель"</label>
                                <input value="{{ $consumer->fio_agenta_ispolnitel }}" name="fio_agenta_ispolnitel" class="form-control @error('fio_agenta_ispolnitel') is-invalid @enderror" type="text" id="fio_agenta_ispolnitel">
                            </div>
                            <div class="form-group">
                                <label for="primechanie">Примечание</label>
                                <textarea id="primechanie" name="primechanie" class="form-control @error('primechanie') is-invalid @enderror" rows="3">{{ $consumer->primechanie }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="delta">Дельта</label>
                                <input value="{{ $consumer->delta }}" name="delta" class="form-control @error('delta') is-invalid @enderror" type="text" id="delta">
                            </div>
                            <div class="form-group">
                                <label for="brak">Брак</label>
                                <input value="{{ $consumer->brak }}" name="brak" class="form-control @error('brak') is-invalid @enderror" type="text" id="brak">
                            </div>
                            <div class="form-group">
                                <label for="primechanie_dlya_tsb">Примечание для ТСБ</label>
                                <input value="{{ $consumer->primechanie_dlya_tsb }}" name="primechanie_dlya_tsb" class="form-control @error('primechanie_dlya_tsb') is-invalid @enderror" type="text" id="primechanie_dlya_tsb">
                            </div>


                            <div class="form-group">
                                <label for="photo">Фото</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ $consumer->photo }}" name="photo" id="photo" type="file" class="custom-file-input">
                                        <label class="custom-file-label" for="photo">Choose file</label>
                                    </div>
                                </div>
                                @error('photo')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <a type="button" data-toggle="modal" data-target="#modal" href="{{ $consumer->getImage() }}"><img width="200" src="{{ $consumer->getImage() }}" class="img-thumbnail mt-3"></a>
                                <div id="modal" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="#modal" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <img src="{{ $consumer->getImage() }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection