
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

    <div class="m-grid__item m-grid__item--fluid m-wrapper">



        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Настройки системы
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
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <div class="col-lg-4">
                                        <label>
                                            Регистраторы:
                                        </label>
                                        <div class="btn-group pull-right m--padding-5">
                                            <button class="btn btn-success">
                                                <i class="la la-plus"></i>
                                                Добавить
                                            </button>
                                        </div>
                                        <table class="table table-condensed table-info">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($registrars as $registrar)
                                                <tr>
                                                    <td>{{ $registrar->id }}</td>
                                                    <td>{{ $registrar->name }}</td>
                                                    <td></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>
                                            Типы инцидентов:
                                        </label>
                                        <div class="btn-group pull-right m--padding-5">
                                            <button class="btn btn-success">
                                                <i class="la la-plus"></i>
                                                Добавить
                                            </button>
                                        </div>
                                        <table class="table table-condensed table-warning">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($incident_types as $type)
                                                <tr>
                                                    <td>{{ $type->id }}</td>
                                                    <td>{{ $type->name }}</td>
                                                    <td></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="col-lg-4">
                                        <label>
                                            Системы управления контентом (CMS):
                                        </label>
                                        <div class="btn-group pull-right m--padding-5">
                                            <button class="btn btn-success">
                                                <i class="la la-plus"></i>
                                                Добавить
                                            </button>
                                        </div>
                                        <table class="table table-condensed table-success">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cmses as $cms)
                                                <tr>
                                                    <td>{{ $cms->id }}</td>
                                                    <td>{{ $cms->name }}</td>
                                                    <td></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

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
                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end:: Body -->

