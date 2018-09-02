@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Словарь финансовых терминов и определений</h1>
            </div>
            <div class="col-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-household-tab" data-toggle="pill" href="#v-pills-household" role="tab" aria-controls="v-pills-household" aria-selected="true">
                        Домохозяйство
                    </a>
                    <a class="nav-link" id="v-pills-government-tab" data-toggle="pill" href="#v-pills-government" role="tab" aria-controls="v-pills-government" aria-selected="false">
                        Государство
                    </a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">

                    </a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">

                    </a>
                </div>
            </div>
            <div class="col-8">
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-household" role="tabpanel" aria-labelledby="v-pills-household-tab">
                            Экономический термин, применяемый для обозначения отельных граждан, групп граждан объединенных единым хозяйством, ведущим единый бюджет и
                            другими признаками экономической целостности.
                        </div>
                        <div class="tab-pane fade" id="v-pills-government" role="tabpanel" aria-labelledby="v-pills-government-tab">
                            Федеральные, региональные, местные органы власти, армия, медицина, полиция, образование и прочее, что составляет экономическую инфраструктуру
                            на государственном уровне.
                            Потребитель финансовых ресурсов
                            Задача: создать благоприятную среду функционирования экономически активных субъектов экономики
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">2</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
