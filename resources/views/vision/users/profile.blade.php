<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        My Profile
                    </h3>
                </div>
                <div>

                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="m-portlet m-portlet--full-height  ">
                        <div class="m-portlet__body">
                            <div class="m-card-profile">
                                <div class="m-card-profile__title m--hide">
                                    Your Profile
                                </div>
                                <div class="m-card-profile__pic">
                                    <div class="m-card-profile__pic-wrapper">
                                        <img src="{{asset(env('THEME'))}}/images/profiles/{{ ($image = auth()->user()->image) ? $image : 'default.png' }}" alt=""/>
                                    </div>
                                </div>
                                <div class="m-card-profile__details">
												<span class="m-card-profile__name">
													{{ auth()->user()->name.' '.auth()->user()->lastname }}
												</span>
                                    <a href="" class="m-card-profile__email m-link">
                                       {{ auth()->user()->roles()->first()->name }}
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">


                        {!! Form::open(['url' => route('users.update', ['id' => auth()->user()->id]), 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
                            {!! Form::hidden('_method', 'PUT') !!}
                            {!! Form::hidden('role_id', auth()->user()->roles()->first()->id) !!}
                            <div class="m-portlet__body">

                                <div class="form-group m-form__group row">
                                    <div class="col-10 ml-auto">
                                        <h3 class="m-form__section">
                                            Мой профиль
                                        </h3>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                        Имя
                                    </label>
                                    <div class="col-7">
                                        {!! Form::text('name', auth()->user()->name, ['class' => 'form-control m-input', 'readonly']) !!}
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                        Фамилия
                                    </label>
                                    <div class="col-7">
                                        {!! Form::text('lastname', auth()->user()->lastname, ['class' => 'form-control m-input', 'readonly']) !!}
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                        Login
                                    </label>
                                    <div class="col-7">
                                        {!! Form::text('login', auth()->user()->login, ['class' => 'form-control m-input', 'readonly']) !!}
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                        E-mail
                                    </label>
                                    <div class="col-7">
                                        {!! Form::email('email', auth()->user()->email, ['class' => 'form-control m-input', 'readonly']) !!}
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                        Телефон
                                    </label>
                                    <div class="col-7">
                                        {!! Form::text('phone', auth()->user()->phone, ['class' => 'form-control m-input', 'readonly']) !!}
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                        Изображение
                                    </label>
                                    <div class="col-7">
                                        {!! Form::file('image', ['class' => 'form-control m-input']) !!}
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
                                            </button>                                            &nbsp;&nbsp;
                                            <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                                                Отменить
                                            </button>
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