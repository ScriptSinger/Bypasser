@if (count($consumers))
    <div class="table-responsive">
        <table id="example1" class="table table-sm text-nowrap table-bordered table-striped">
            <thead>
                <tr>
                    {{-- <th style="width: 30px">#</th> --}}
                    <th>Действие</th>
                    <th data-toggle="tooltip" title="Фотофиксация показаний в альбомном виде">Фото</th>
                    <th>Линк-ПУ</th>
                    <th data-toggle="tooltip" title="Район города">Район города</th>
                    <th data-toggle="tooltip" title="Адрес">Адрес</th>
                    <th>Улица</th>
                    <th data-toggle="tooltip" title="Дом/корпус.1">Дом/корпус.1</th>
                    <th>Квартира\Комната</th>
                    <th>ЛС</th>
                    <th data-toggle="tooltip" title="Заводской номер ИПУ">Заводской номер ИПУ</th>
                    <th data-toggle="tooltip" title="Модель ИПУ">Модель ИПУ</th>
                    <th data-toggle="tooltip" title="Тип ИПУ">Тип ИПУ</th>
                    <th data-toggle="tooltip" title="Дата допуска ПУ в ком.учет">Дата допуска ПУ в ком.учет</th>
                    <th data-toggle="tooltip" title="Дата окончания допуска ПУ в ком.учет">Дата окончания допуска ПУ в
                        ком.учет</th>
                    <th>Место установки ПУ</th>
                    <th data-toggle="tooltip" title="Номер пластиковой пломбы">Номер пластиковой пломбы</th>
                    <th>№ АМП. ООО "Исполнитель"</th>
                    <th>Состояние ПУ</th>
                    <th>Дебиторская задолженность</th>
                    <th>Дата снятия текущего показания "Исполнитель"</th>
                    <th>Количество проживающих (Чел.) ООО "Исполнитель"</th>
                    <th>Заводской № ИПУ. ООО "Исполнитель"</th>
                    <th>Марка, модель, серия ООО "Исполнитель"</th>
                    <th>Год выпуска "Исполнитель"</th>
                    <th>Тип ИПУ "Исполнитель"</th>
                    <th>Контрольные Показания. "Исполнитель"</th>
                    <th>№ Пломбы. "Исполнитель"</th>
                    <th>№ АМП. ООО "Исполнитель"</th>
                    <th>Наличие документации. ООО "Исполнитель"</th>
                    <th>Дата последней поверки. ООО "Исполнитель"</th>
                    <th>Дата окончания поверки. ООО "Исполнитель"</th>
                    <th>Техническое состояние. "Исполнитель"</th>
                    <th>Место установки "Исполнитель"</th>
                    <th>№ Пломбы установленные "Исполнитель"</th>
                    <th>№ АМП установленные "Исполнитель"</th>
                    <th>Количество ИПУ в квартире "Исполнитель"</th>
                    <th>Наличие подписи потребителя</th>
                    <th>Замечание к прибору учета "Исполнитель"</th>
                    <th>Комментарий к акту "Исполнитель"</th>
                    <th>Подробное вносимое пояснение</th>
                    <th>ФИО агента "Исполнитель"</th>
                    <th>Примечание</th>
                    <th>Дельта</th>
                    <th>Брак</th>
                    <th>Примечание для ТСБ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consumers as $consumer)
                    <tr id="{{ $consumer->id }}">
                        {{-- <td>{{ $consumer->id }}</td> --}}
                        <td>
                            @if (auth()->user()->can('edit'))
                                <div class="btn-group btn-group-sm">
                                    <a onclick="event.stopImmediatePropagation()" class="btn btn-info"
                                        href="{{ route('employees-consumer.edit', ['employees_consumer' => $consumer->id]) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                </div>
                            @endif
                            @if (auth()->user()->can('show'))
                                <div class="btn-group btn-group-sm">
                                    <a onclick="event.stopImmediatePropagation()" class="btn btn-secondary"
                                        href="{{ route('employees-consumer.show', ['employees_consumer' => $consumer->id]) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            @endif
                        </td>

                        <td>
                            <a type="button" data-toggle="modal" data-target="#modal-{{ $consumer->id }}"
                                href="{{ $consumer->getImage() }}"><img width="40" class="img-thumbnail"
                                    src="{{ $consumer->getImage() }}" class="btn"></a>

                            <div id="modal-{{ $consumer->id }}" class="modal fade bd-example-modal-xl" tabindex="-1"
                                role="dialog" aria-labelledby="#modal-{{ $consumer->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <img src="{{ $consumer->getImage() }}">
                                    </div>
                                </div>
                            </div>
                        </td>


                        <td>{{ $consumer->link_pu }}</td>
                        <td>{{ $consumer->rayon_goroda }}</td>
                        <td>{{ $consumer->adres }}</td>
                        <td>{{ $consumer->ulica }}</td>
                        <td>{{ $consumer->dom_korpus1 }}</td>
                        <td>{{ $consumer->kvartira_komnata }}</td>
                        <td>{{ $consumer->ls }}</td>
                        <td>{{ $consumer->zavodskoy_nomer_ipu }}</td>
                        <td>{{ $consumer->model_ipu }}</td>
                        <td>{{ $consumer->tip_ipu }}</td>
                        <td>{{ $consumer->data_dopuska_pu_v_komuchet }}</td>
                        <td>{{ $consumer->data_okonchaniya_dopuska_pu_v_komuchet }}</td>
                        <td>{{ $consumer->mesto_ustanovki_pu }}</td>
                        <td>{{ $consumer->nomer_plastikovoy_plomby }}</td>
                        <td>{{ $consumer->nomer_antimagnitnoy_plomby }}</td>
                        <td>{{ $consumer->sostoyanie_pu }}</td>
                        <td>{{ $consumer->debitorskaya_zadoljennost }}</td>
                        <td>{{ $consumer->data_snyatiya_tekuschego_pokazaniya_ispolnitel }}</td>
                        <td>{{ $consumer->kolichestvo_projivauschih_chel_ispolnitel }}</td>
                        <td>{{ $consumer->zavodskoy_nomer_ipu_ispolnitel }}</td>
                        <td>{{ $consumer->marka_model_seriya_ispolnitel }}</td>
                        <td>{{ $consumer->god_vypuska_ispolnitel }}</td>
                        <td>{{ $consumer->tip_ipu_ispolnitel }}</td>
                        <td>{{ $consumer->kontrolnye_pokazaniya_ispolnitel }}</td>
                        <td>{{ $consumer->nomer_plomby_ispolnitel }}</td>
                        <td>{{ $consumer->nomer_amp_ispolnitel }}</td>
                        <td>{{ $consumer->nalichie_dokumentacii_ispolnitel }}</td>
                        <td>{{ $consumer->data_posledney_poverki_ispolnitel }}</td>
                        <td>{{ $consumer->data_okonchaniya_poverki_ispolnitel }}</td>
                        <td>{{ $consumer->tehnicheskoe_sostoyanie_ispolnitel }}</td>
                        <td>{{ $consumer->mesto_ustanovki_ispolnitel }}</td>
                        <td>{{ $consumer->nomer_plomby_ustanovlennye_ispolnitel }}</td>
                        <td>{{ $consumer->nomer_amp_ustanovlennye_ispolnitel }}</td>
                        <td>{{ $consumer->kolichestvo_ipu_v_kvartire_ispolnitel }}</td>
                        <td>{{ $consumer->nalichie_podpisi_potrebitelya }}</td>
                        <td>{{ $consumer->zamechanie_k_priboru_ucheta_ispolnitel }}</td>
                        <td>{{ $consumer->kommentariy_k_aktu_ispolnitel }}</td>
                        <td>{{ $consumer->podrobnoe_vnosimoe_poyasnenie }}</td>
                        <td>{{ $consumer->fio_agenta_ispolnitel }}</td>
                        <td>{{ $consumer->primechanie }}</td>
                        <td>{{ $consumer->delta }}</td>
                        <td>{{ $consumer->brak }}</td>
                        <td>{{ $consumer->primechanie_dlya_tsb }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p>Данных пока нет...</p>
@endif
@push('scripts')
    <script>
        $(function() {
            $("#example1").DataTable({
                paging: false,
                ordering: false,
                info: false,
                responsive: false,
                lengthChange: true,
                buttons: ["colvis"],
                searching: false,
                select: true,
                colReorder: true,
                stateSave: true,

            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush
