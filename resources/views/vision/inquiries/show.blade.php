<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Расследование №{{ $inquiry->id }}. {{ str_limit($inquiry->title, 55) }}
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
                                    Автор
                                </label>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="input-group m-input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user-tie"></i>
                                            </span>
                                        </div>
                                        {!! Form::text('author', $inquiry->author->name.' '.$inquiry->author->lastname, ['class' => 'form-control m-input', 'disabled' => 'disabled']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-5 col-sm-12">
                                    Дата создания
                                </label>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="input-group m-input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        {!! Form::text('created_at', $inquiry->created_at->format('d-m-Y H:i'), ['class' => 'form-control m-input', 'disabled' => 'disabled']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-5 col-sm-12">
                                    Статус
                                </label>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="input-group m-input-group">
                                            <button class="btn btn-{{ $inquiry->status->meta }} btn-block">{{ $inquiry->status->name }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Текущее комментарие
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            {!! Form::textarea('text', $inquiry->text, ['class' => 'form-control', 'rows' => 2, 'disabled' => 'disabled']) !!}
                    </div>
                    </div>
                    <!--end::Portlet-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Прикрепленные файлы
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-5 col-sm-12">
                                    Отчёт и рекомендация
                                </label>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="input-group m-input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-download"></i>
                                            </span>
                                        </div>
                                        <a href="#" class="form-control">report.docx</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-5 col-sm-12">
                                    Отчёт владельца
                                </label>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="input-group m-input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-download"></i>
                                            </span>
                                        </div>
                                        <a href="#" class="form-control">report.docx</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xl-8">
                    <!--begin::Portlet-->
                    <div class="m-portlet" id="m_blockui_2_portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Расследуемые объекты
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
                                        <th>#</th>
                                        <th>Url</th>
                                        <th>Contact person</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th>Detection_at</th>
                                        <th>Actions</th>
                                    </tr>
                                    @foreach($inquiry->incidents->sortByDesc('created_at') as $incident)
                                        <tr>
                                            <td>{{ $incident->id }}</td>
                                            <td>{{ $incident->url }}</td>
                                            <td>{{ $incident->contact_person }}</td>
                                            <td>{{ $incident->phone }}</td>
                                            <td>{{ $incident->email }}</td>
                                            <td>{{ $incident->type->name }}</td>
                                            <td>{{ $incident->detection_at->format('d-m-Y H:i') }}</td>
                                            <td><a href="{{ route('incidents.show', ['id' => $incident->id]) }}"><i class="la la-eye"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Section-->
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Журнал действий
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="m-scroller">

                            </div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>

            
        </div>

    </div>
</div>
<!-- end:: Body -->
