<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__body">

                    <div class="m_datatable m-datatable m-datatable--default m-datatable--brand m-datatable--subtable m-datatable--loaded" id="child_data_local" style="position: static; zoom: 1;">

                        {!! Form::open(['url' => route('admin.updatePermissions'), 'class' => 'form-horizontal', 'method' => 'POST']) !!}
                        <table id="permissions" class="table">
                            <thead>
                            <tr>
                                <th class="align-left">Права</th>
                                {{-- <th class="align-left">{{ trans('attributes.description') }}</th> --}}
                                @if(!$roles->isEmpty())
                                    @foreach($roles as $role)
                                        <th>{{ $role->name }}</th>
                                    @endforeach
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @if(!$permissions->isEmpty())
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->name }}</td>
                                        {{-- <td class="align-left">{{ $permission->desc }}</td> --}}
                                        @foreach($roles as $role)
                                            @if($role->hasPermissionTo($permission))
                                                <td>
                                                    <input name="{{ $role->id }}[]" value="{{ $permission->id }}" id="basic_checkbox_{{ $role->id.$permission->id }}" checked="" type="checkbox">
                                                    <label for="basic_checkbox_{{ $role->id.$permission->id }}"></label>
                                                </td>
                                            @else
                                                <td>
                                                    <input name="{{ $role->id }}[]" value="{{ $permission->id }}" id="basic_checkbox_{{ $role->id.$permission->id }}" type="checkbox">
                                                    <label for="basic_checkbox_{{ $role->id.$permission->id }}"></label>
                                                </td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <div class="text-left">
                            <button type="submit" class="btn btn-info"><i class="la la-refresh"></i> Обновить</button>
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>






