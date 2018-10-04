<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        Состояние расследований
                    </h3>
                </div>

            </div>
        </div>
        <!-- END: Subheader -->

        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__body">
                    {{--
                                        <!--begin: Search Form -->
                                        <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                            <div class="row align-items-center">
                                                <div class="col-xl-8 order-2 order-xl-1">
                                                    <div class="form-group m-form__group row align-items-center">

                                                        <div class="col-md-4">
                                                            <div class="m-form__group m-form__group--inline">
                                                                <div class="m-form__label">
                                                                    <label for="m_form_status">
                                                                        Status:
                                                                    </label>
                                                                </div>
                                                                <div class="m-form__control">
                                                                    <select class="form-control m-bootstrap-select" id="m_form_status">
                                                                        <option value="">
                                                                            All
                                                                        </option>
                                                                        <option value="1">
                                                                            Pending
                                                                        </option>
                                                                        <option value="2">
                                                                            Delivered
                                                                        </option>
                                                                        <option value="3">
                                                                            Canceled
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="d-md-none m--margin-bottom-10"></div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="m-form__group m-form__group--inline">
                                                                <div class="m-form__label">
                                                                    <label for="m_form_type" class="m-label m-label--single">
                                                                        Type:
                                                                    </label>
                                                                </div>
                                                                <div class="m-form__control">
                                                                    <select class="form-control m-bootstrap-select" id="m_form_type">
                                                                        <option value="">
                                                                            All
                                                                        </option>
                                                                        <option value="1">
                                                                            Online
                                                                        </option>
                                                                        <option value="2">
                                                                            Retail
                                                                        </option>
                                                                        <option value="3">
                                                                            Direct
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="d-md-none m--margin-bottom-10"></div>
                                                        </div>

                                </div>
                            </div>

                            <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                                <a href="{{ route('inquiries.create') }}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                    <span>
                                        <i class="fa fa-copy"></i>
                                        <span>
                                            Начать расследование
                                        </span>
                                    </span>
                                </a>
                                <div class="m-separator m-separator--dashed d-xl-none"></div>
                            </div>

                        </div>
                    </div>
                    <!--end: Search Form -->
                    --}}

                    <div class="m_datatable m-datatable m-datatable--default m-datatable--brand m-datatable--subtable m-datatable--loaded" id="child_data_local" style="position: static; zoom: 1;">
                        <table class="m-datatable__table " style="display: block; min-height: 300px; overflow-x: auto;">
                            <thead class="m-datatable__head">
                            <tr class="m-datatable__row">
                                <th data-field="RecordID" class="m-datatable__cell--center m-datatable__cell m-datatable__cell--sort"><span style="width: 20px;">№</span></th>
                                <th data-field="FirstName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Title</span></th>
                                <th data-field="FirstName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Text</span></th>
                                <th data-field="FirstName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 250px;">Resources</span></th>
                                <th data-field="FirstName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 100px;">Date</span></th>
                                <th data-field="FirstName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Author</span></th>
                                <th data-field="FirstName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Status</span></th>
                                <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Действия</span></th>
                            </tr>
                            </thead>
                            <tbody class="m-datatable__body" style="">
                            @foreach($inquiries->sortByDesc('updated_at') as $inquiry)
                                <tr data-row="9" class="m-datatable__row m-datatable__row--even" style="left: 0px;">
                                    <td class="m-datatable__cell"><span style="width: 20px;">{{ $inquiry->id }}</span></td>
                                    <td class="m-datatable__cell"><span style="width: 150px;">{{ $inquiry->title }}</span></td>
                                    <td class="m-datatable__cell"><span style="width: 150px;">{{ $inquiry->text }}</span></td>
                                    <td class="m-datatable__cell">
                                        <span style="width: 250px;">
                                            @if(count($inquiry->incidents) <= 5)
                                                @foreach($inquiry->incidents->sortByDesc('created_at') as $incident)
                                                    {{ $incident->url }} <br><hr>
                                                @endforeach
                                            @else
                                                <a href="{{ route('inquiries.show', ['id' => $inquiry->id]) }}">{{ count($inquiry->incidents) }} ресурсов...</a>
                                            @endif
                                        </span>
                                    </td>
                                    <td class="m-datatable__cell"><span style="width: 100px;">{{ $inquiry->created_at->format('d-m-Y H:i') }}</span></td>
                                    <td class="m-datatable__cell"><span style="width: 150px;">{{ $inquiry->author->name.' '.$inquiry->author->lastname }}</span></td>
                                    <td class="m-datatable__cell"><button style="width: 150px;" class="btn btn-{{ $inquiry->status->meta }}">{{ $inquiry->status->name }}</button></td>
                                    <td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
                                            <a href="{{ route('inquiries.show', ['id' => $inquiry->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Просмотр ">
                                                <i class="la la-eye"></i>
                                            </a>
                                            <a href="{{ route('inquiries.edit', ['id' => $inquiry->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">
                                                <i class="la la-edit"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>