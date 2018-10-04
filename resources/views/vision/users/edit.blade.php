<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <div class="m-content">

            <div class="row">

                <div class="col-xl-9 col-lg-8">
                    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">

                        {!! Form::open(['url' => route('users.update', ['id' => $user->id]), 'method' => 'post', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
                        {!! Form::hidden('_method', 'PUT') !!}
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <div class="col-10 ml-auto">
                                    <h3 class="m-form__section">
                                        Редактирование пользователя
                                    </h3>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    Имя
                                </label>
                                <div class="col-7">
                                    {!! Form::text('name', $user->name, ['class' => 'form-control m-input']) !!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    Фамилия
                                </label>
                                <div class="col-7">
                                    {!! Form::text('lastname', $user->lastname, ['class' => 'form-control m-input']) !!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    Login
                                </label>
                                <div class="col-7">
                                    {!! Form::text('login', $user->login, ['class' => 'form-control m-input']) !!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    E-mail
                                </label>
                                <div class="col-7">
                                    {!! Form::email('email', $user->email, ['class' => 'form-control m-input']) !!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    Телефон
                                </label>
                                <div class="col-7">
                                    {!! Form::text('phone', $user->phone, ['class' => 'form-control m-input']) !!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    Роль
                                </label>
                                <div class="col-7">
                                    <select name="role_id" class="form-control m-input">
                                        @foreach(\Spatie\Permission\Models\Role::all() as $role)
                                            <option value="{{ $role->id }}" {{ $user->roles->first()->id === $role->id ? 'selected' : '' }}> {{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    Новый пароль
                                </label>
                                <div class="col-7">
                                    <input name="password" class="form-control m-input" type="password" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">
                                    Подтверждение нового пароля
                                </label>
                                <div class="col-7">
                                    <input name="password_confirmation" class="form-control m-input" type="password" id="exampleInputPassword2">
                                </div>
                            </div>


                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions">
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-7">
                                        <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                                            Сохранить
                                        </button>
                                        &nbsp;&nbsp;
                                        <a href="{{ route('users.index') }}" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                                            Назад
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

</div>
<!-- end:: Body -->