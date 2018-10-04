<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        Инциденты
                    </h3>
                </div>

            </div>
        </div>
        <!-- END: Subheader -->

        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__body">
                    {!! Form::open(['url' => route('inquiries.store'), 'method' => 'post']) !!}

                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-4 order-1 order-xl-2">
                                <label>
                                    С отмеченными:
                                </label>
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
                                <div class="m-separator m-separator--dashed d-xl-none"></div>
                            </div>


                            @include(env('THEME').'.customs.incidentmodal')




                        </div>
                    </div>
                    <!--end: Search Form -->

                    <div class="m_datatable m-datatable m-datatable--default m-datatable--brand m-datatable--subtable m-datatable--loaded" id="child_data_local" style="position: static; zoom: 1;">
                        <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
                            <thead class="m-datatable__head">
                            <tr class="m-datatable__row">
                                <th data-field="RecordID" class="m-datatable__cell--center m-datatable__cell m-datatable__cell--sort"><span style="width: 20px;"></span></th>
                                <th data-field="RecordID" class="m-datatable__cell--center m-datatable__cell m-datatable__cell--sort"><span style="width: 50px;">№</span></th>
                                <th data-field="FirstName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Веб-сайт</span></th>
                                <th data-field="FirstName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Комментарие</span></th>
                                <th data-field="LastName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Источник</span></th>
                                <th data-field="Company" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Дата</span></th>
                                {{-- <th data-field="Email" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Расположение</span></th> --}}
                                {{-- <th data-field="Phone" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Страна</span></th> --}}
                                <th data-field="Status" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Хостер</span></th>
                                <th data-field="Type" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">CMS</span></th>
                                <th data-field="Type" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Тип инцидента</span></th>
                                <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Действия</span></th>
                            </tr>
                            </thead>
                            <tbody class="m-datatable__body" style="">
                            @foreach($incidents->sortByDesc('created_at') as $incident)
                                @if($incident->inquiries->isEmpty())
                                <tr data-row="9" class="m-datatable__row m-datatable__row--even" style="left: 0px;">
                                    <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID">
                                        <span style="width: 20px;">
                                            <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input name="incidents[]" type="checkbox" value="{{ $incident->id }}">
                                                <span></span>
                                            </label>
                                        </span>
                                    </td>
                                    <td class="m-datatable__cell"><span style="width: 50px;">{{ $incident->id }}</span></td>
                                    <td class="m-datatable__cell"><span style="width: 158px;">{{ $incident->url }}</span></td>
                                    <td class="m-datatable__cell"><span style="width: 150px;">{{ str_limit($incident->comment, 55) }}</span></td>
                                    <td class="m-datatable__cell"><span style="width: 158px;">{{ $incident->author->name.' '.$incident->author->lastname }}</span></td>
                                    <td class="m-datatable__cell"><span style="width: 100px;">{{ $incident->detection_at->format('d-m-Y H:i') }}</span></td>
                                    {{-- <td class="m-datatable__cell"><span style="width: 158px;">rdns2.ahost.uz., IP: 83.69.138.140 rdns1.ahost.uz., IP: 83.69.138.140</span></td> --}}
                                    {{-- <td class="m-datatable__cell"><span style="width: 158px;">UZ</span></td> --}}
                                    <td class="m-datatable__cell"><span style="width: 158px;">{{ $incident->registrar->name }}</span></td>
                                    <td class="m-datatable__cell"><span style="width: 158px;">{{ $incident->cms->name }}</span></td>
                                    <td class="m-datatable__cell--sorted m-datatable__cell" data-field="Status">
                                        <span style="width: 158px;">
                                            <span class="m-badge m-badge--brand m-badge--wide">{{ $incident->type->name }}</span>
                                        </span>
                                    </td>
                                    <td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
                                        <a href="{{ route('incidents.show', ['id' => $incident->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Просмотр ">
                                            <i class="la la-eye"></i>
                                        </a>

                                        <a href="{{ route('incidents.edit', ['id' => $incident->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">
                                            <i class="la la-edit"></i>
                                        </a>
                                        </span>
                                    </td>
                                </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</div>