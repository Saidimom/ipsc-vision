<!-- BEGIN: Header -->
<header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
    <div class="m-container m-container--fluid m-container--full-height">
        <div class="m-stack m-stack--ver m-stack--desktop">

            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-light ">
                <div class="m-stack m-stack--ver m-stack--general m-stack--fluid">
                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                        <a href="{{ route('index') }}" class="m-brand__logo-wrapper">
                            <img alt="" src="{{asset(env('THEME'))}}/assets/media/img/logo.svg"/>
                        </a>
                    </div>

                    <div class="m-stack__item m-stack__item--middle m-brand__tools">
                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                            <a href="{{ route('index') }}" class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
                                <span>
                                    Консоль управления
                                </span>
                            </a>
                            <div class="m-dropdown__wrapper">
                                <span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__content">
                                            <ul class="m-nav">
                                                <li class="m-nav__section m-nav__section--first m--hide">
                                                        <span class="m-nav__section-text">
                                                            Меню
                                                        </span>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="{{ route('incidents.index') }}" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-warning-sign"></i>
                                                        <span class="m-nav__link-text">
                                                               Новые инциденты
                                                            </span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="{{ route('incidents.index') }}" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-analytics"></i>
                                                        <span class="m-nav__link-text">
                                                               Все инциденты
                                                            </span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="{{ route('inquiries.index') }}" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-folder-1"></i>
                                                        <span class="m-nav__link-text">
                                                                Расследования
                                                            </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BEGIN: Topbar Toggler -->
                        <a id="m_aside_header_topbar_mobile_toggle" href="/javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                            <i class="flaticon-more"></i>
                        </a>

                    </div>
                </div>
            </div>
            <!-- END: Brand -->



            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                <!-- BEGIN: Topbar -->
                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-topbar__nav-wrapper">
                        <ul class="m-topbar__nav m-nav m-nav--inline">
                            <li class="m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light"  m-dropdown-toggle="click" id="m_quicksearch" m-quicksearch-mode="dropdown" m-dropdown-persistent="1">
                                <a href="{{asset(env('THEME'))}}/#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-nav__link-icon">
                                            <span class="m-nav__link-icon-wrapper">
                                                <i class="flaticon-search"></i>
                                            </span>
                                        </span>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                    <div class="m-dropdown__inner ">
                                        <div class="m-dropdown__header">
                                            <form  class="m-list-search__form">
                                                <div class="m-list-search__form-wrapper">
																<span class="m-list-search__form-input-wrapper">
																	<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Поиск...">
																</span>
                                                    <span class="m-list-search__form-icon-close" id="m_quicksearch_close">
																	<i class="fa fa-times"></i>
																</span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
                                                <div class="m-dropdown__content"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="m-nav__item m-topbar__quick-actions m-dropdown m-dropdown--skin-light m-dropdown--large m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  m-dropdown-toggle="click">
                                <a href="{{ route('incidents.create') }}" class="m-nav__link">
												<span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-add"></i>
													</span>
												</span>
                                </a>

                            </li>

                            <li class="m-nav__item m-topbar__quick-actions m-dropdown m-dropdown--skin-light m-dropdown--large m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  m-dropdown-toggle="click">
                                <a href="{{ route('users.index') }}" class="m-nav__link ">
												<span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-users"></i>
													</span>
												</span>
                                </a>

                            </li>
                            {{--
                            <li class="m-nav__item m-topbar__notifications m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
                                <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
												<span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-music-2"></i>
													</span>
													<span class="m-nav__link-badge m-badge m-badge--success">
														3
													</span>
												</span>
                                </a>

                            </li>
                            --}}
                            @role('super-admin')
                            <li class="m-nav__item m-topbar__quick-actions m-dropdown m-dropdown--skin-light m-dropdown--large m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  m-dropdown-toggle="click">
                                <a href="{{ route('settings.index') }}" class="m-nav__link ">
                                    <span class="m-nav__link-icon">
                                        <span class="m-nav__link-icon-wrapper">
                                            <i class="flaticon-cogwheel"></i>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            @endrole

                            <li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="{{asset(env('THEME'))}}/images/profiles/{{ ($user->image !== '') ? $user->image : 'default.png' }}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
                                    <span class="m-nav__link-icon m-topbar__usericon  m--hide">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-user-ok"></i>
													</span>
												</span>
                                    <span class="m-topbar__username m--hide">
													{{ auth()->user()->login }}
												</span>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center">
                                            <div class="m-card-user m-card-user--skin-light">
                                                <div class="m-card-user__pic">
                                                    <img src="{{asset(env('THEME'))}}/images/profiles/{{ ($user->image !== '') ? $user->image : 'default.png' }}" class="m--img-rounded m--marginless" alt=""/>
                                                </div>
                                                <div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
                                                                    {{ $user->login }}
																</span>
                                                    <a href="{{ route('profile') }}" class="m-card-user__email m--font-weight-300 m-link">
                                                        {{ $user->email }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav m-nav--skin-light">

                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="{{ route('logout') }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                            Выход
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- END: Topbar -->
            </div>
        </div>
    </div>
</header>
<!-- END: Header -->