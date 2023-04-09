@extends('admin.layouts.layout')

@section('title')Контакты@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Контакты</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Главная</a></li>
                    <li class="breadcrumb-item active">Контакты</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">

    <div class="card card-primary">
        <div class="card-header">

            <h3 class="card-title">Контроль приборов учета</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Индивидуальный предприниматель
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="lead"><b>Березин Александр Юрьевич</b></h2>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Юр. адрес </b>(индекс), 450039, г. Уфа, ул. Ферина, д. 10, кв. 99</li>
                                        <li><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span><b>Почтовый адрес </b>(индекс) 450039, г. Уфа, ул. Ферина, д. 10, кв. 99</li>
                                        <li><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <b>Телефон </b>(347) 294-14-10, (347) 294-17-10</li>
                                        <li><span class="fa-li"><i class="fas fa-lg fa-at"></i></span> <b>E-mail </b>aleksandr653@mail.ru</li>
                                        <li><b>ОГРНИП </b>312028015200233</li>
                                        <li><b>ИНН </b> 027319728167</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- /.content -->
@endsection