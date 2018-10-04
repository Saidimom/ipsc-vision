

<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Новое расследование
                    </h3>

                </div>
                <div>

                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">

            <div class="row">
                <div class="col-xl-6">
                    <!--begin::Portlet-->
                    <div class="m-portlet" id="m_blockui_2_portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Название расследования
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-3 col-sm-12">
                                    Введите название
                                </label>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <input class="form-control" type="text" placeholder="">
                                </div>

                                <div class="m--space-10"></div>

                                <label class="col-form-label col-lg-3 col-sm-12">
                                    Введите комментарие
                                </label>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <textarea class="form-control" type="text" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                    <a class="btn btn-primary" href="{{ route('inquiries.index') }}">Начать расследование</a>
                </div>
                {{--
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

                <div class="col-xl-6">
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
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-3 col-sm-12">
                                    Введите название
                                </label>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <textarea class="form-control" type="text" placeholder=""></textarea>
                                </div>
                            </div>
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
                        <button type="button" style="justify-content: center; margin:auto;" class="btn m-btn--pill m-btn--air         btn-success btn-lg m-btn m-btn--custom">
                            Сохранить
                        </button>
                        <button type="button" class="btn m-btn--pill m-btn--air         btn-secondary btn-lg m-btn m-btn--custom m-btn--label-accent">
                            Отменить
                        </button>
                    </div>
                </div>
            </div>
        </div>--}}

    </div>
</div>
<!-- end:: Body -->
