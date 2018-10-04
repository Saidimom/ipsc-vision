<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <!-- BEGIN: Subheader -->
        <div class="m-subheader">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        Консоль управления
                    </h3>
                </div>
                <div>
                        <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                            <span class="m-subheader__daterange-label">
                                <span class="m-subheader__daterange-title"></span>
                                <span class="m-subheader__daterange-date m--font-brand"></span>
                            </span>
                            <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                                <i class="la la-angle-down"></i>
                            </a>
                        </span>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->

        <div class="m-content">


            <!--begin:: Widgets/Stats-->
            <div class="m-portlet ">
                <div class="m-portlet__body  m-portlet__body--no-padding">
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::Total Profit-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <h4 class="m-widget24__title">
                                        НОВЫЕ ИНЦИДЕНТЫ
                                    </h4>
                                    <br>
                                    <span class="m-widget24__stats m--font-danger">
													{{ count(\App\Incident::all()) }}
												</span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                            </div>
                            <!--end::Total Profit-->
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::New Feedbacks-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <h4 class="m-widget24__title">
                                        АКТИВНЫЕ РАССЛЕДОВАНИЯ
                                    </h4>
                                    <br>

                                    <span class="m-widget24__stats m--font-warning">
													{{ count(\App\Inquiry::all()) }}
												</span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::New Feedbacks-->
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::New Orders-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <h4 class="m-widget24__title">
                                        ЗАВЕРШЁННЫЕ РАССЛЕДОВАНИЯ
                                    </h4>
                                    <br>
                                    <span class="m-widget24__stats m--font-success">
													0
												</span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-success" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::New Orders-->
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::New Users-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <h4 class="m-widget24__title">
                                        ВСЕГО
                                    </h4>
                                    <br>
                                    <span class="m-widget24__stats m--font-primary">
													290
												</span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::New Users-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Stats-->

            {{--
            <!--begin:: Widgets/Stats-->
            <div class="m-portlet ">
                <div class="m-portlet__body  m-portlet__body--no-padding">
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::Total Profit-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <h4 class="m-widget24__title">
                                        УСТРАНЁННЫЕ ИНЦИДЕНТЫ
                                    </h4>
                                    <br>
                                    <span class="m-widget24__stats m--font-success">
													100
												</span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-success progress-bar-striped" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Total Profit-->
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::New Feedbacks-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <h4 class="m-widget24__title">
                                        НЕ УСТРАНЁННЫЕ ИНЦИДЕНТЫ
                                    </h4>
                                    <br>
                                    <span class="m-widget24__stats m--font-danger">
													50
												</span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-danger progress-bar-striped" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::New Feedbacks-->
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">

                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">

                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Stats-->
            --}}


            <!-- BEGIN: Subheader -->
            <div class="m-subheader">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Статистика
                        </h3>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->

            <!--begin:: Widgets/Stats-->
            <div class="m-portlet ">
                <div class="m-portlet__body  m-portlet__body--no-padding">
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::Total Profit-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <div class="m-widget24__title">
                                        <div id="pie-chart"></div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!--end::Total Profit-->
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::New Feedbacks-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <div class="m-widget24__title">
                                        <div id="pie-chart2"></div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!--end::New Feedbacks-->
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::New Orders-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <div class="m-widget24__title">
                                        <div id="pie-chart3"></div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!--end::New Orders-->
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <!--begin::New Users-->
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <div class="m-widget24__title">
                                        <div id="pie-chart4"></div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!--end::New Users-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Stats-->

        </div>
    </div>
</div>
<!-- end:: Body -->
<!-- end:: Page -->
<!-- begin::Quick Sidebar -->

<!-- end::Quick Sidebar -->
<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->