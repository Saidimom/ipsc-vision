<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        Пользователи
                    </h3>
                </div>

            </div>
        </div>
        <!-- END: Subheader -->

        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__body">

                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">

                                    {{--
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
                                    --}}
                                </div>
                            </div>

                            <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                                <a href="{{ route('users.create') }}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                    <span>
                                        <i class="fa fa-user"></i>
                                        <span>
                                            New user
                                        </span>
                                    </span>
                                </a>
                                <div class="m-separator m-separator--dashed d-xl-none"></div>

                                <a href="{{ route('permissions') }}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--hover-focus m-btn--pill">
                                    <span>
                                        <i class="fa fa-list"></i>
                                        <span>
                                            Permissions
                                        </span>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!--end: Search Form -->

                    <div class="m_datatable m-datatable m-datatable--default m-datatable--brand m-datatable--subtable m-datatable--loaded" id="child_data_local" style="position: static; zoom: 1;">
                        <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
                            <thead class="m-datatable__head">
                            <tr class="m-datatable__row">
                                <th data-field="RecordID" class="m-datatable__cell--center m-datatable__cell m-datatable__cell--sort"><span style="width: 20px;">№</span></th>
                                <th data-field="FirstName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">FirstName</span></th>
                                <th data-field="LastName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">LastName</span></th>
                                <th data-field="Email" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Email</span></th>
                                <th data-field="Login" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Login</span></th>
                                <th data-field="Role" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Role</span></th>
                                <th data-field="Created_at" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Created_at</span></th>
                                <th data-field="Status" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Status</span></th>
                                <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Действия</span></th>
                            </tr>
                            </thead>
                            <tbody class="m-datatable__body" style="">
                            @foreach($users as $user)
                                <tr data-row="9" class="m-datatable__row m-datatable__row--even" style="left: 0px;">

                                    <td class="m-datatable__cell"><span style="width: 20px;">{{ $user->id }}</span></td>
                                    <td data-field="FirstName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">{{ $user->name }}</span></td>
                                    <td data-field="LastName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">{{ $user->lastname }}</span></td>
                                    <th data-field="Email" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">{{ $user->email }}</span></th>
                                    <th data-field="Login" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">{{ $user->login }}</span></th>
                                    <td data-field="Role" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">{{ $user->roles->first()->name }}</span></td>
                                    <th data-field="Role" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">{{ $user->created_at->format('d-m-Y H:i') }}</span></th>
                                    <th data-field="Role" class="m-datatable__cell m-datatable__cell--sort">{!!  (!$user->trashed()) ? '<span class="badge badge-success" style="width: 150px;">Active</span>' : '<span class="badge badge-danger" style="width: 150px;">No active</span>'  !!}</th>
                                    <td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">
                                            {{--
                                            <div class="dropdown dropup">
                                                <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ route('users.show', ['id' => $user->id]) }}"><i class="la la-eye"></i> Просмотр</a>
                                                    <a class="dropdown-item" href="{{ route('inquiries.create') }}"><i class="la la-close"></i> Отключить</a>

                                                </div>
                                            </div>
                                            --}}
                                            @if(auth()->user()->id !== $user->id)
                                                @if(!$user->trashed())
                                                    <a href="{{ route('users.show', ['id' => $user->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Просмотр ">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Refresh">
                                                        <i class="la la-edit"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                                        <i class="la la-refresh"></i>
                                                    </a>
                                                @endif
                                            @else
                                                <span class="badge badge-info">My Profile</span>
                                            @endif
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