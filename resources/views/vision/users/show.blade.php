<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <div class="m-content">

            <div class="row">

                <div class="col-xl-9 col-lg-8">
                    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">

                        {!! Form::open(['url' => route('users.destroy', ['id' => $user->id]), 'method' => 'post', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <div class="col-10 ml-auto">
                                    <h3 class="m-form__section">
                                        Просмотр пользователя
                                    </h3>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    Имя
                                </label>
                                <div class="col-7">
                                    {!! Form::text('name', $user->name, ['class' => 'form-control m-input', 'disabled' => 'disabled']) !!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    Фамилия
                                </label>
                                <div class="col-7">
                                    {!! Form::text('lastname', $user->lastname, ['class' => 'form-control m-input', 'disabled' => 'disabled']) !!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    Login
                                </label>
                                <div class="col-7">
                                    {!! Form::text('login', $user->login, ['class' => 'form-control m-input', 'disabled' => 'disabled']) !!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    E-mail
                                </label>
                                <div class="col-7">
                                    {!! Form::email('email', $user->email, ['class' => 'form-control m-input', 'disabled' => 'disabled']) !!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    Телефон
                                </label>
                                <div class="col-7">
                                    {!! Form::text('phone', $user->phone, ['class' => 'form-control m-input', 'disabled' => 'disabled']) !!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    Роль
                                </label>
                                <div class="col-7">
                                    <select name="role_id" class="form-control m-input" disabled="disabled">
                                        @foreach(\Spatie\Permission\Models\Role::all() as $role)
                                            <option value="{{ $role->id }}" {{ $user->roles->first()->id === $role->id ? 'selected' : '' }}> {{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        @if(auth()->user()->can('delete_user'))
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions">
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-7">
                                        <button type="submit" class="btn btn-accent m-btn m--bg-danger m-btn--custom">
                                            Отключить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

</div>
<!-- end:: Body -->