
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

    <div class="m-grid__item m-grid__item--fluid m-wrapper">


    @if(auth()->user()->can('add_incident'))
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Добавить инцидент
                    </h3>

                </div>
                <div>

                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-portlet">

                        <!--begin::Form-->
                        {!! Form::open(['url' => route('incidents.store'), 'method' => 'POST', 'enctype' => 'multipart/form-data','class' => 'm-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed']) !!}
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <div class="col-lg-4">
                                        <label>
                                            Наименование веб-сайта:
                                        </label>
                                        <div class="input-group">
                                            {!! Form::text('url', old('url'),['type' => 'url', 'class' => 'form-control m-input', 'placeholder' => 'Введите адрес веб-сайта']) !!}

                                            {{--
                                            <div class="input-group-append">
                                                <button class="btn btn-success" type="button">
                                                    Импорт c www.ccTLD.uz
                                                </button>
                                            </div>
                                            --}}
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <label for="registrar">
                                            Регистратор домена:
                                        </label>
                                        <div class="input-group">
                                            <select name="registrar_id" id="registrar" class="form-control m-select2 m-select2-general">
                                                @foreach($registrars as $registrar)
                                                <option value="{{ $registrar->id }}" selected>
                                                    {{ $registrar->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="m-form__actions m-form__actions--solid pull-right">
                                            <button type="submit" class="btn btn-lg btn-primary">
                                                Сохранить
                                            </button>
                                            <a href="{{ route('incidents.index') }}" class="btn btn-secondary">
                                                Отменить
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group m-form__group row">
                                    <div class="col-lg-4">
                                        <label>
                                            Форма собственности
                                        </label>
                                        <div class="m-radio-inline">
                                            <label class="m-radio">
                                                <input type="radio" value="1">
                                                Правительтсвенный
                                                <span></span>
                                            </label>
                                            <label class="m-radio">
                                                <input type="radio" value="2" checked>
                                                Частный
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>
                                            Контактное лицо:
                                        </label>
                                        <div class="input-group m-input-group m-input-group--square">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-user"></i>
                                                </span>
                                            </div>
                                            {!! Form::text('contact_person', old('contact_person'),['class' => 'form-control m-input', 'placeholder' => 'Ф.И.О']) !!}
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label class="">
                                            Email:
                                        </label>
                                        <div class="input-group m-input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-envelope"></i>
                                                </span>
                                            </div>
                                            {!! Form::text('email', old('email'),['type' => 'email', 'class' => 'form-control m-input', 'placeholder' => 'Email']) !!}
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group m-form__group row">
                                    <div class="col-lg-4">
                                        <label>
                                            Организация:
                                        </label>
                                        <div class="input-group m-input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-building"></i>
                                                </span>
                                            </div>
                                            {!! Form::text('organization', old('organization'), ['class' => 'form-control m-input', 'placeholder' => 'Organization']) !!}
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>
                                            Адрес:
                                        </label>
                                        <div class="input-group m-input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                            </div>
                                            {!! Form::text('address', old('address'),['class' => 'form-control m-input', 'placeholder' => 'Address']) !!}
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label class="">
                                            Телефон:
                                        </label>
                                        <div class="input-group m-input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-phone"></i>
                                                </span>
                                            </div>
                                            {!! Form::text('phone', old('phone'),['class' => 'form-control m-input', 'placeholder' => 'Phone']) !!}
                                        </div>
                                    </div>
                                    {{--
                                    <div class="col-lg-4">
                                        <label for="m_select2_1">
                                            Страна расположение хостинга
                                        </label>
                                        <select id="m_select2_1" class="form-control m-select2" name="param">
                                            <option value="AF">Афганистан</option>
                                            <option value="AL">Албания</option>
                                            <option value="DZ">Алжир</option>
                                            <option value="AD">Андорра</option>
                                            <option value="AO">Ангола</option>
                                            <option value="AR">Аргентина</option>
                                            <option value="AM">Армения</option>
                                            <option value="AW">Аруба</option>
                                            <option value="AU">Австралия</option>
                                            <option value="AT">Австрия</option>
                                            <option value="AZ">Азербайджан</option>
                                            <option value="БС">Багамы</option>
                                            <option value="BH">Бахрейн</option>
                                            <option value="BD">Бангладеш</option>
                                            <option value="BB">Барбадос</option>
                                            <option value="BY">Беларусь</option>
                                            <option value="BE">Бельгия</option>
                                            <option value="BR">Бразилия</option>
                                            <option value="BG">Болгария</option>
                                            <option value="CA">Канада</option>
                                            <option value="CL">Чили</option>
                                            <option value="CN">Китай</option>
                                            <option value="CO">Колумбия</option>
                                            <option value="CG">Конго</option>
                                            <option value="HR">Хорватия</option>
                                            <option value="CU">Куба</option>
                                            <option value="CY">Кипр</option>
                                            <option value="CZ">Чехия</option>
                                            <option value="DK">Дания</option>
                                            <option value="DO">Доминиканская Республика</option>
                                            <option value="EG">Египет</option>
                                            <option value="EE">Эстония</option>
                                            <option value="ET">Эфиопия</option>
                                            <option value="FJ">Фиджи</option>
                                            <option value="FI">Финляндия</option>
                                            <option value="FR">Франция</option>
                                            <option value="GE">Грузия</option>
                                            <option value="DE">Германия</option>
                                            <option value="GH">Гана</option>
                                            <option value="GI">Гибралтара</option>
                                            <option value="GR">Греция</option>
                                            <option value="HT">Гаити</option>
                                            <option value="VA">Святой престол (Ватикан)</option>
                                            <option value="HN">Гондурас</option>
                                            <option value="HK">Гонконг</option>
                                            <option value="HU">Венгрия</option>
                                            <option value="IS">Исландия</option>
                                            <option value="IN">Индия</option>
                                            <option value="ID">Индонезия</option>
                                            <option value="IR">Иран, Исламская Республика</option>
                                            <option value="IQ">Ирак</option>
                                            <option value="IE">Ирландия</option>
                                            <option value="IL">Израиль</option>
                                            <option value="IT">Италия</option>
                                            <option value="JM">Ямайка</option>
                                            <option value="JP">Япония</option>
                                            <option value="JE">Джерси</option>
                                            <option value="жо">Джордан</option>
                                            <option value="KZ">Казахстан</option>
                                            <option value="KE">Кения</option>
                                            <option value="KI">Кирибати</option>
                                            <option value="KP">Корея, Корейская Народно-Демократическая Республика</option>
                                            <option value="KR">Корея, Республика</option>
                                            <option value="KW">Кувейт</option>
                                            <option value="KG">Кыргызстан</option>
                                            <option value="LV">Латвия</option>
                                            <option value="LB">Ливан</option>
                                            <option value="LS">Лесото</option>
                                            <option value="LR">Либерия</option>
                                            <option value="LY">Ливия</option>
                                            <option value="LI">Лихтенштейн</option>
                                            <option value="LT">Литва</option>
                                            <option value="LU">Люксембург</option>
                                            <option value="MO">Макао</option>
                                            <option value="MK">Македония, бывшая Югославская Республика</option>
                                            <option value="MG">Мадагаскар</option>
                                            <option value="MW">Малави</option>
                                            <option value="MY">Малайзия</option>
                                            <option value="MV">Мальдивы</option>
                                            <option value="MX">Мексика</option>
                                            <option value="МД">Молдова</option>
                                            <option value="MC">Монако</option>
                                            <option value="MN">Монголия</option>
                                            <option value="ME">Черногория</option>
                                            <option value="MS">Монтсеррат</option>
                                            <option value="MA">Марокко</option>
                                            <option value="MZ">Мозамбик</option>
                                            <option value="мм">Мьянма</option>
                                            <option value="NA">Намибия</option>
                                            <option value="NR">Науру</option>
                                            <option value="NP">Непал</option>
                                            <option value="NL">Нидерланды</option>
                                            <option value="NI">Никарагуа</option>
                                            <option value="NG">Нигерия</option>
                                            <option value="NO">Норвегия</option>
                                            <option value="OM">Оман</option>
                                            <option value="PK">Пакистан</option>
                                            <option value="PA">Панама</option>
                                            <option value="PG">Папуа - Новая Гвинея</option>
                                            <option value="PY">Парагвай</option>
                                            <option value="PE">Перу</option>
                                            <option value="PH">Филиппины</option>
                                            <option value="PL">Польша</option>
                                            <option value="PT">Португалия</option>
                                            <option value="PR">Пуэрто-Рико</option>
                                            <option value="QA">Катар</option>
                                            <option value="RO">Румыния</option>
                                            <option value="RU">Российская Федерация</option>
                                            <option value="RW">Руанда</option>
                                            <option value="WS">Самоа</option>
                                            <option value="SA">Саудовская Аравия</option>
                                            <option value="SN">Сенегал</option>
                                            <option value="RS">Сербия</option>
                                            <option value="SG">Сингапур</option>
                                            <option value="SK">Словакия</option>
                                            <option value="SI">Словения</option>
                                            <option value="SB">Соломоновы острова</option>
                                            <option value="SO">Сомали</option>
                                            <option value="ZA">Южная Африка</option>
                                            <option value="SS">Южный Судан</option>
                                            <option value="ES">Испания</option>
                                            <option value="LK">Шри-Ланка</option>
                                            <option value="SD">Судан</option>
                                            <option value="SR">Суринам</option>
                                            <option value="SZ">Свазиленд</option>
                                            <option value="SE">Швеция</option>
                                            <option value="CH">Швейцария</option>
                                            <option value="SY">Сирийская Арабская Республика</option>
                                            <option value="TW">Тайвань, провинция Китая</option>
                                            <option value="TJ">Таджикистан</option>
                                            <option value="TZ">Танзания, Объединенная Республика</option>
                                            <option value="TH">Таиланд</option>
                                            <option value="TN">Тунис</option>
                                            <option value="TR">Турция</option>
                                            <option value="TM">Туркменистан</option>
                                            <option value="TV">Тувалу</option>
                                            <option value="UG">Уганда</option>
                                            <option value="UA">Украина</option>
                                            <option value="AE">Объединенные Арабские Эмираты</option>
                                            <option value="GB">Великобритания</option>
                                            <option value="USA">США</option>
                                            <option value="ум">Китай</option>
                                            <option value="UY">Уругвай</option>
                                            <option value="UZ">Узбекистан</option>
                                            <option value="VU">Вануату</option>
                                            <option value="VE">Венесуэла, Боливарианская Республика</option>
                                            <option value="VN">Вьетнам</option>
                                            <option value="YE">Йемен</option>
                                            <option value="ZM">Замбия</option>
                                            <option value="ZW">Зимбабве</option>
                                        </select>
                                    </div>--}}
                                </div>

                                <div class="form-group m-form__group row">
                                    <div class="col-lg-4">
                                        <label for="m_select2_2">
                                            CMS веб-сайта
                                        </label>
                                        <select name="cms_id" id="m_select2_2" class="form-control m-select2">
                                            @foreach($cmses as $cms)
                                                <option value="{{ $cms->id }}">{{ $cms->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="m_datetimepicker_3">
                                            Дата и время оповещения
                                        </label>
                                        <div class="input-group date">
                                            {!! Form::text('detection_at', \Carbon\Carbon::now()->format('Y-m-d H:i'),['class' => 'form-control m-input', 'id' => 'm_datetimepicker_3']) !!}
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar glyphicon-th"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">

                                    <div class="col-lg-4">
                                        <label for="m_select2_3">
                                            Вид инцидента
                                        </label>
                                        <select name="type_id" id="m_select2_3" class="form-control m-select2">
                                            @foreach($incident_types as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="exampleTextarea">
                                            Красткое описание инцидента
                                        </label>
                                        {!! Form::textarea('comment', '',['class' => 'form-control m-input m-input--air', 'placeholder' => 'Textarea', 'rows' => '8']) !!}

                                    </div>

                                    <div class="col-lg-4">
                                        <label >
                                            Загрузить скриншоты
                                        </label>

                                        {{--
                                        <div class="m-dropzone dropzone m-dropzone--primary" id="m-dropzone-two" action="#">
                                            <div class="m-dropzone__msg dz-message needsclick">
                                                <h3 class="m-dropzone__msg-title">
                                                    Перетащите сюда файлы или нажмите, чтобы загрузить.
                                                </h3>
                                                <span class="m-dropzone__msg-desc">
                                                    Загрузка до 10 файлов
                                                </span>
                                            </div>
                                        </div>
                                        --}}
                                        {!! Form::file('images[]', ['class' => 'form-control m-input m-input--air', 'multiple' => 'multiple']) !!}
                                    </div>

                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions--solid">
                                    <div class="row">
                                        <div class="col-lg-4">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
        @else
            <div class="col-md-10">
                <div class="alert alert-danger">
                    You don't have privileges
                </div>
            </div>
        @endif

    </div>
</div>
<!-- end:: Body -->

