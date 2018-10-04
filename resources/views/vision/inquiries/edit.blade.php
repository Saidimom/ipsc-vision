<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Расследование №{{ random_int(10, 100) }}
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
                                    Группа инцидента
                                </label>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="input-group m-input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user-tie"></i>
                                            </span>
                                        </div>
                                        <select class="form-control m-select2 m-select2-general" name="param">
                                            <option></option>
                                            <option value="AK">
                                                Option 1
                                            </option>
                                            <option value="AK">
                                                Option 2
                                            </option>
                                            <option value="AK">
                                                Option 3
                                            </option>
                                            <option value="AK">
                                                Option 4
                                            </option>
                                            <option value="AK">
                                                Option 5
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-5 col-sm-12">
                                    Дата оповощение
                                </label>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="input-group m-input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input class="form-control m-input" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-5 col-sm-12">
                                    Источник оповощение
                                </label>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="input-group m-input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-flag"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control m-input" disabled="disabled" placeholder="Группа ИБ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Portlet-->
                    <div class="m-portlet" id="m_blockui_2_portlet">
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-5 col-sm-12">
                                        Ответсвенный исполнитель
                                    </label>
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="input-group m-input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
																						<i class="fa fa-user-tie"></i>
																					</span>
                                            </div>
                                            <select class="form-control m-select2 m-select2-general" name="param">
                                                <option></option>
                                                <option value="AK">
                                                    Option 1
                                                </option>
                                                <option value="AK">
                                                    Option 2
                                                </option>
                                                <option value="AK">
                                                    Option 3
                                                </option>
                                                <option value="AK">
                                                    Option 4
                                                </option>
                                                <option value="AK">
                                                    Option 5
                                                </option>
                                            </select>
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
                                            <select class="form-control m-select2 m-select2-general" name="param">
                                                <option></option>
                                                <option value="AK">
                                                    Option 1
                                                </option>
                                                <option value="AK">
                                                    Option 2
                                                </option>
                                                <option value="AK">
                                                    Option 3
                                                </option>
                                                <option value="AK">
                                                    Option 4
                                                </option>
                                                <option value="AK">
                                                    Option 5
                                                </option>
                                            </select>
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
                                            <select class="form-control m-select2 m-select2-general" name="param">
                                                <option></option>
                                                <option value="AK">
                                                    Option 1
                                                </option>
                                                <option value="AK">
                                                    Option 2
                                                </option>
                                                <option value="AK">
                                                    Option 3
                                                </option>
                                                <option value="AK">
                                                    Option 4
                                                </option>
                                                <option value="AK">
                                                    Option 5
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Section-->

                        </div>
                    </div>
                    <!--end::Portlet-->

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
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
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
                                    <div class="carousel-item active">
                                        <img src="{{asset(env('THEME'))}}/upload/001/screen-1.jpg" class="img-fluid" alt="1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset(env('THEME'))}}/upload/001/screen-1.jpg" class="img-fluid" alt="1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset(env('THEME'))}}/upload/001/screen-1.jpg" class="img-fluid" alt="1">
                                    </div>
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
                                        Контактные данные &nbsp; <div class="btn btn-warning m-btn m-btn--pill m-btn--air"> UCELL.UZ </div>
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
                                        <td>
                                            АрсеналД
                                        </td>
                                        <td>
                                            Название хостера
                                        </td>
                                        <td>
                                            Ucell.uz
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Ф.И.О.
                                        </th>
                                        <td>
                                            Не определён
                                        </td>
                                        <td>
                                            Правительсвенный/Частный
                                        </td>
                                        <td>
                                            Частный
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Адрес
                                        </th>
                                        <td>
                                            Не определён
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            1
                                        </th>
                                        <td>
                                            Jhon
                                        </td>
                                        <td>
                                            Stone
                                        </td>
                                        <td>
                                            @jhon
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
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <hr>
            <div class="row">
                <div class="col-xl-4">

                    <h2 style="text-align: right;" class="m--font-success">Отчёт</h2>

                </div>
                <div class="col-xl-4">
                    <div class="m-portlet__body">
                        <div class="m-section">
                            <div class="form-group m-form__group">

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">
                                        Загрузить отчёт
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="m-demo__preview m-demo__preview--btn" style="display: flex;">
                        <a href="{{ route('inquiries.index') }}" style="justify-content: center; margin:auto;" class="btn m-btn--pill m-btn--air         btn-success btn-lg m-btn m-btn--custom">
                            Сохранить
                        </a>
                        <button type="button" class="btn m-btn--pill m-btn--air         btn-secondary btn-lg m-btn m-btn--custom m-btn--label-accent">
                            Отменить
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end:: Body -->
