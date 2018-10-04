<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Инцидент №{{ $incident->id }}. <span class="badge">{{ $incident->url }}</span>
                    </h3>

                </div>
                <div>

                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">

            <div class="row">
                <div class="col-xl-4">
                    <!--begin::Portlet-->
                    <div class="m-portlet">

                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-5 col-sm-12">
                                    Осведомитель
                                </label>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="input-group m-input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user-tie"></i>
                                            </span>
                                        </div>
                                        {!! Form::text('author', $incident->author->name.' '.$incident->author->lastname, ['class' => 'form-control m-input', 'disabled' => 'disabled'] ) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-5 col-sm-12">
                                    Время обнаружения
                                </label>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="input-group m-input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        {!! Form::text('author', $incident->detection_at->format('d-m-Y H:i') , ['class' => 'form-control m-input', 'disabled' => 'disabled'] ) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-5 col-sm-12">
                                    Тип инцидента
                                </label>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="input-group m-input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-flag"></i>
                                            </span>
                                        </div>
                                        {!! Form::text('author', $incident->type->name , ['class' => 'form-control m-input', 'disabled' => 'disabled'] ) !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--end::Portlet-->

                </div>


                <div class="col-xl-4">
                @if($inquiry = $incident->inquiries()->first())
                    <!--begin::Portlet-->
                    <div class="m-portlet" id="m_blockui_2_portlet">
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-5 col-sm-12">
                                        Ведет расследовние
                                    </label>
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="input-group m-input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
																						<i class="fa fa-user-tie"></i>
																					</span>
                                            </div>
                                            <input type="text" class="form-control m-input" value="{{ $inquiry->author->name.' '.$inquiry->author->lastname }}" disabled="disabled">
                                        </div>
                                    </div>
                                </div>

                                <div class="m--space-10"></div>

                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-5 col-sm-12">
                                        Статус инцидента ИБ
                                    </label>
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="input-group m-input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
																						<i class="fa fa-hourglass"></i>
																					</span>
                                            </div>
                                            <input type="text" class="form-control m-input" value="{{ $inquiry->title }}" disabled="disabled">
                                        </div>
                                    </div>
                                </div>

                                <div class="m--space-10"></div>

                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-5 col-sm-12">
                                        Состояние инцидента ИБ
                                    </label>
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="input-group m-input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
																					<i class="fa fa-power-off"></i>

																					</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Section-->

                        </div>
                    </div>
                    <!--end::Portlet-->
                    @endif

                </div>

                <div class="col-xl-4">
                    <!--begin::Portlet-->
                    <div class="m-portlet" id="m_blockui_2_portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Краткое описание инцидента ИБ
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <div class="m-scrollable m-scrollable--track" data-scrollable="true" style="height: 72px">
                                   {{ $incident->comment }}
                                </div>
                            </div>
                            <!--end::Section-->

                        </div>
                    </div>
                    <!--end::Portlet-->

                </div>



            </div>
            <hr>
            <div class="row">
                <div class="col-xl-4">
                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__body">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    @foreach($incident->screenshots as $key => $screenshot)
                                        <div class="carousel-item {{ ($key === 0) ? 'active' : ''}}">
                                            <img src="{{ asset(env('THEME')) }}/upload/screenshots/{{ $screenshot }}" class="img-fluid" alt="1">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!--end::Portlet-->

                </div>
                <div class="col-xl-8">
                    <!--begin::Portlet-->
                    <div class="m-portlet" id="m_blockui_2_portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Контактные данные &nbsp; <div class="btn btn-warning m-btn m-btn--pill m-btn--air"> {{ $incident->url }} </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <table class="table table-striped m-table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            Регистратор домена
                                        </th>
                                        <th>
                                            {{ $incident->registrar->name }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Ф.И.О.
                                        </th>
                                        <td>
                                            {{ $incident->contact_person }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Организация
                                        </th>
                                        <td>
                                            {{ $incident->organization }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Адрес
                                        </th>
                                        <td>
                                            {{ $incident->address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Телефон
                                        </th>
                                        <td>
                                            {{ $incident->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Email
                                        </th>
                                        <td>
                                            {{ $incident->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            CMS
                                        </th>
                                        <td>
                                            {{ $incident->cms->name }}
                                        </td>

                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                            <!--end::Section-->

                        </div>
                    </div>
                    <!--end::Portlet-->



                </div>
            </div>
                <div class="col-xl-4">
                    <div class="m-demo__preview m-demo__preview--btn" style="display: flex;">

                            <a href="{{ (url()->previous() === route('incidents.show', ['id' => $incident->id])) ? route('incidents.index') : url()->previous() }}" class="btn m-btn--pill m-btn--air         btn-secondary btn-lg m-btn m-btn--custom m-btn--label-accent">
                                Назад
                            </a>

                        @if($incident->inquiries->isEmpty())
                        <div class="btn-group">
                            <button type="button" id="myBtn" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                    <span>
                                        <i class="fa fa-plus"></i>

                                        <span>
                                            Новое расследование
                                        </span>
                                    </span>
                            </button>

                            <button type="button" id="myBtn2" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                    <span>
                                        <i class="fa fa-copy"></i>
                                        <span>
                                            Добавить к существующей
                                        </span>
                                    </span>
                            </button>
                        </div>
                            {!! Form::open(['url' => route('inquiries.store'), 'method' => 'post']) !!}
                            {!! Form::hidden('incidents[]', $incident->id) !!}
                            @include(env('THEME').'.customs.incidentmodal')
                            {!! Form::close() !!}
                        @else
                            <button type="button" id="myBtn" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                    <span>
                                        <i class="fa fa-minus"></i>

                                        <span>
                                            Отвязать инцидент
                                        </span>
                                    </span>
                            </button>
                            {!! Form::open(['url' => route('incidents.update', ['id' => $incident->id]), 'id' => 'detachForm']) !!}
                            {!! Form::hidden('_method', 'PUT') !!}
                            {!! Form::hidden('detach', true) !!}
                            {!! Form::close() !!}

                            <script>
                                var form = document.getElementById('detachForm');

                                var btn = document.getElementById('myBtn');

                                btn.onclick = function () {
                                    var detach = confirm('Отвязать от расследования "{{ $incident->inquiries->first()->title }}"?');
                                    if (detach) {
                                        form.submit();
                                    }
                                }
                            </script>
                        @endif
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<!-- end:: Body -->
</div>
<!-- end:: Body -->

</div>
<!-- end:: Page -->