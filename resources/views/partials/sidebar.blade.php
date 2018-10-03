@inject('request', 'Illuminate\Http\Request')
<div class="rpx-wrapper__sidenav rpx-wrapper__sidenav--classic mdc-theme--dark">
    <aside id="left-drawer" class="mdc-drawer mdc-drawer--persistent mdc-drawer--open mdc-drawer--rpx-flex-content">
        <nav class="mdc-drawer__drawer">
            <header class="mdc-toolbar mdc-theme--text-primary-on-primary-dark mdc-theme--primary-dark-bg mdc-toolbar--rpx-no-shrink">
                <div class="mdc-toolbar__row">
                    <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
                        <a href="#!" class="brand-logo">
                            @if($generals->count() >= 1)
                                <img src="{{url('/')}}/{{$generals[0]->site_logo}}" alt="Con">
                            @else
                                <img src="{{ url('images') }}/Logo_RPX.png" alt="Con">
                            @endif
                        </a>
                    </section>
                </div>
            </header>
            <div class="mdc-list-group mdc-drawer__content rpx-hide-scrollbars rpx-navigation">
                <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">
                    <a class="mdc-list-item {{ $request->segment(2) == 'home' ? 'mdc-list-item--activated' : '' }}" href="{{ url('/admin/home') }}">
                        <span class="rpx-navigation-list__text">
                            <i class="material-icons mdc-list-item__graphic rpx-navigation-list__icon">home</i>
                            @lang('global.app_dashboard')
                        </span>
                    </a>
                </nav>
                <h3 class="mdc-list-group__subheader rpx-navigation__subheader">GENERALS</h3>
                @can('content_management_access')
                <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">
                    <a class="mdc-list-item rpx-navigation-list__item" href="#">
                        <span class="rpx-navigation-list__text">
                            <i class="material-icons mdc-list-item__graphic rpx-navigation-list__icon">desktop_windows</i>
                            @lang('global.content-management.title')
                        </span>
                        <i class="material-icons rpx-navigation-list__icon-collapse">keyboard_arrow_down</i>
                    </a>
                    <nav class="mdc-list rpx-navigation-list">
                        @can('content_category_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.content_categories.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="material-icons mdc-list-item__graphic rpx-navigation-list__icon" aria-hidden="true">check_circle</i>
                                    @lang('global.content-categories.title')
                                </span>
                            </a>
                        @endcan

                        @can('content_tag_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.content_tags.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="fa fa-tags mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                    @lang('global.content-tags.title')
                                </span>
                            </a>
                        @endcan

                        @can('content_page_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.content_pages.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="fas fa-file-alt mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                    <span>@lang('global.content-pages.title')</span>
                                </span>
                            </a>
                        @endcan
                    </nav>
                </nav>
                @endcan
                @can('course_management_access')
                <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">
                    <a class="mdc-list-item rpx-navigation-list__item" href="#">
                        <span class="rpx-navigation-list__text">
                            <i class="fa fa-book"></i>
                            @lang('global.course-management.title')
                        </span>
                    </a>
                    <nav class="mdc-list rpx-navigation-list">
                        @can('lesson_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.lessons.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="fas fa-list-ol"></i>
                                    @lang('global.lessons.title')
                                </span>
                            </a>
                        @endcan

                        @can('coursecategory_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.coursecategories.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="fa fa-list-ol"></i>
                                    @lang('global.coursecategories.title')
                                </span>
                            </a>
                        @endcan

                        @can('coursetag_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.coursetags.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="fa fa-tags"></i>
                                    @lang('global.coursetags.title')
                                </span>
                            </a>
                        @endcan

                        @can('course_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.courses.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="fa fa-list-alt"></i>
                                    @lang('global.courses.title')
                                </span>
                            </a>
                        @endcan

                        @can('coursescertificate_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.coursescertificates.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="fa fa-certificate"></i>
                                    @lang('global.coursescertificates.title')
                                </span>
                            </a>
                        @endcan

                    </nav>
                </nav>
                @endcan
                <h3 class="mdc-list-group__subheader rpx-navigation__subheader">NOTIFICATIONS</h3>
                <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">

                    <a class="rpx-navigation-list__item mdc-list-item" href="#">
                            <span class="rpx-navigation-list__text">
                                <i class="material-icons mdc-list-item__graphic rpx-navigation-list__icon" aria-hidden="true">text_format</i>
                                Notificações
                            </span>
                    </a>

                </nav>
                <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">
                    <a class="mdc-list-item rpx-navigation-list__item" href="#">
                        <span class="rpx-navigation-list__text">
                            <i class="material-icons mdc-list-item__graphic rpx-navigation-list__icon">view_module</i>
                            Faq Management
                        </span>
                        <i class="material-icons rpx-navigation-list__icon-collapse">keyboard_arrow_down</i>
                    </a>
                    <nav class="mdc-list rpx-navigation-list">

                        <a class="rpx-navigation-list__item mdc-list-item" href="#">
                            <span class="rpx-navigation-list__text">
                                Questions
                            </span>
                        </a>

                        <a class="rpx-navigation-list__item mdc-list-item" href="tabs.html">
                            <span class="rpx-navigation-list__text">
                                Categories
                            </span>
                        </a>

                    </nav>
                    <a class="mdc-list-item rpx-navigation-list__item" href="#">
                            <span class="rpx-navigation-list__text">
                                <i class="material-icons mdc-list-item__graphic rpx-navigation-list__icon">error</i>
                                Settings
                            </span>
                        <i class="material-icons rpx-navigation-list__icon-collapse">keyboard_arrow_down</i>
                    </a>
                    <nav class="mdc-list rpx-navigation-list">

                        <a class="rpx-navigation-list__item mdc-list-item" href="buttons.html">
                            <span class="rpx-navigation-list__text">
                                General
                            </span>
                        </a>

                        <a class="rpx-navigation-list__item mdc-list-item" href="progress.html">
                            <span class="rpx-navigation-list__text">
                                Data Trail
                            </span>
                        </a>

                        <a class="rpx-navigation-list__item mdc-list-item" href="buttons.html">
                            <span class="rpx-navigation-list__text">
                                Data course
                            </span>
                        </a>

                        <a class="rpx-navigation-list__item mdc-list-item" href="progress.html">
                            <span class="rpx-navigation-list__text">
                                Data lesson
                            </span>
                        </a>

                    </nav>
                    <a class="mdc-list-item rpx-navigation-list__item" href="#">
                            <span class="rpx-navigation-list__text">
                                <i class="material-icons mdc-list-item__graphic rpx-navigation-list__icon">feedback</i>
                                Trail Management
                            </span>
                        <i class="material-icons rpx-navigation-list__icon-collapse">keyboard_arrow_down</i>
                    </a>
                    <nav class="mdc-list rpx-navigation-list">

                        <a class="rpx-navigation-list__item mdc-list-item" href="dialog.html">
                            <span class="rpx-navigation-list__text">
                                Categories
                            </span>
                        </a>

                        <a class="rpx-navigation-list__item mdc-list-item" href="snackbar.html">
                            <span class="rpx-navigation-list__text">
                                Tags
                            </span>
                        </a>

                        <a class="rpx-navigation-list__item mdc-list-item" href="dialog.html">
                            <span class="rpx-navigation-list__text">
                                Trails
                            </span>
                        </a>

                        <a class="rpx-navigation-list__item mdc-list-item" href="snackbar.html">
                            <span class="rpx-navigation-list__text">
                                Certificates
                            </span>
                        </a>

                    </nav>
                    <a class="mdc-list-item rpx-navigation-list__item" href="#">
                            <span class="rpx-navigation-list__text">
                                <i class="material-icons mdc-list-item__graphic rpx-navigation-list__icon">feedback</i>
                                Users Management
                            </span>
                        <i class="material-icons rpx-navigation-list__icon-collapse">keyboard_arrow_down</i>
                    </a>
                    <nav class="mdc-list rpx-navigation-list">

                        <a class="rpx-navigation-list__item mdc-list-item" href="dialog.html">
                            <span class="rpx-navigation-list__text">
                                Users
                            </span>
                        </a>

                        <a class="rpx-navigation-list__item mdc-list-item" href="snackbar.html">
                            <span class="rpx-navigation-list__text">
                                Roles
                            </span>
                        </a>

                        <a class="rpx-navigation-list__item mdc-list-item" href="dialog.html">
                            <span class="rpx-navigation-list__text">
                                Permissions
                            </span>
                        </a>

                        <a class="rpx-navigation-list__item mdc-list-item" href="snackbar.html">
                            <span class="rpx-navigation-list__text">
                                Teams
                            </span>
                        </a>

                        <a class="rpx-navigation-list__item mdc-list-item" href="snackbar.html">
                            <span class="rpx-navigation-list__text">
                                User actions
                            </span>
                        </a>

                    </nav>
                </nav>
                <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">
                    <a class="mdc-list-item" href="#">
                        <span class="rpx-navigation-list__text">
                            <i class="material-icons mdc-list-item__graphic rpx-navigation-list__icon" aria-hidden="true">text_format</i>
                            Messages
                        </span>
                    </a>
                </nav>
            </div>
            <footer class="mdc-toolbar mdc-theme--text-primary-on-primary-dark mdc-theme--primary-dark-bg mdc-toolbar--rpx-no-shrink">
                <div class="mdc-toolbar__row">
                    <section class="mdc-toolbar__section mdc-toolbar__section--align-end">
                        <a id="rpx-sidemenu-close-icon" href="#" class="material-icons mdc-toolbar__menu-icon">
                                <span class="rpx-navigation-list__text rpx-sidenav-collapse-icon">
                                    chevron_left
                                </span>
                        </a>
                    </section>
                </div>
            </footer>

        </nav>
    </aside>
</div>
<aside class="yaybar yay-gestures yay-light yay-hide-to-small yay-shrink" id="sidebar-menu">
    <div class="nano">
        <div class="nano-content">
            <ul class="collapsible collapsible-accordion">

                @can('internal_notification_access')
                <li class="{{ $request->segment(1) == 'internal_notifications' ? 'active' : '' }}">
                    <a href="{{ route('admin.internal_notifications.index') }}" class="collapsible-header yay-sub-toggle waves-effect waves-blue">
                        <i class="fa fa-briefcase"></i>
                        <span>@lang('global.internal-notifications.title')</span>
                    </a>
                </li>@endcan

                @can('faq_management_access')
                <li>
                    <a href="#" class="collapsible-header yay-sub-toggle waves-effect waves-blue">
                        <i class="fa fa-question"></i>
                        @lang('global.faq-management.title')
                        <span class="fas fa-plus yay-collapse-icon mdi-navigation-expand-more"></span>
                    </a>
                    <ul class="collapsible-body">
                        @can('faq_category_access')
                        <li>
                            <a href="{{ route('admin.faq_categories.index') }}">
                                <i class="fa fa-briefcase"></i>
                                <span>@lang('global.faq-categories.title')</span>
                            </a>
                        </li>@endcan

                        @can('faq_question_access')
                        <li>
                            <a href="{{ route('admin.faq_questions.index') }}">
                                <i class="fa fa-question"></i>
                                <span>@lang('global.faq-questions.title')</span>
                            </a>
                        </li>@endcan
                    </ul>
                </li>@endcan

                @can('setting_access')
                <li>
                    <a href="#" class="collapsible-header yay-sub-toggle waves-effect waves-blue">
                        <i class="fas fa-cogs"></i>
                        @lang('global.settings.title')
                        <span class="fas fa-plus yay-collapse-icon mdi-navigation-expand-more"></span>
                    </a>
                    <ul class="collapsible-body">
                        @can('general_access')
                        <li>
                            <a href="{{ route('admin.generals.index') }}">
                                <i class="fas fa-cog"></i>
                                <span>@lang('global.general.title')</span>
                            </a>
                        </li>@endcan

                        @can('datatrail_access')
                        <li>
                            <a href="{{ route('admin.datatrails.index') }}">
                                <i class="fas fa-cog"></i>
                                <span>@lang('global.datatrail.title')</span>
                            </a>
                        </li>@endcan

                        @can('datacourse_access')
                        <li>
                            <a href="{{ route('admin.datacourses.index') }}">
                                <i class="fas fa-cog"></i>
                                <span>@lang('global.datacourse.title')</span>
                            </a>
                        </li>@endcan
                        @can('datalesson_access')
                        <li>
                            <a href="{{ route('admin.datalessons.index') }}">
                                <i class="fas fa-cog"></i>
                                <span>@lang('global.datalesson.title')</span>
                            </a>
                        </li>@endcan
                    </ul>
                </li>@endcan

                @can('trail_management_access')
                <li>
                    <a href="#" class="collapsible-header yay-sub-toggle waves-effect waves-blue">
                        <i class="fa fa-road"></i>
                        @lang('global.trail-management.title')
                        <span class="fas fa-plus yay-collapse-icon mdi-navigation-expand-more"></span>
                    </a>
                    <ul class="collapsible-body">
                        @can('trailcategory_access')
                        <li>
                            <a href="{{ route('admin.trailcategories.index') }}">
                                <i class="fas fa-list-ul"></i>
                                <span>@lang('global.trailcategories.title')</span>
                            </a>
                        </li>@endcan

                        @can('trailtag_access')
                        <li>
                            <a href="{{ route('admin.trailtags.index') }}">
                                <i class="fa fa-tags"></i>
                                <span>@lang('global.trailtags.title')</span>
                            </a>
                        </li>@endcan

                        @can('trail_access')
                        <li>
                            <a href="{{ route('admin.trails.index') }}">
                                <i class="fa fa-train"></i>
                                <span>@lang('global.trails.title')</span>
                            </a>
                        </li>@endcan

                        @can('trailscertificate_access')
                        <li>
                            <a href="{{ route('admin.trailscertificates.index') }}">
                                <i class="fa fa-certificate"></i>
                                <span>@lang('global.trailscertificates.title')</span>
                            </a>
                        </li>@endcan
                    </ul>
                </li>@endcan

                @can('user_management_access')
                <li>
                    <a href="#" class="collapsible-header yay-sub-toggle waves-effect waves-blue">
                        <i class="fa fa-users"></i>
                        @lang('global.user-management.title')
                        <span class="fas fa-plus yay-collapse-icon mdi-navigation-expand-more"></span>
                    </a>
                    <ul class="collapsible-body">
                        @can('permission_access')
                        <li>
                            <a href="{{ route('admin.permissions.index') }}">
                                <i class="fa fa-briefcase"></i>
                                <span>@lang('global.permissions.title')</span>
                            </a>
                        </li>@endcan

                        @can('role_access')
                        <li>
                            <a href="{{ route('admin.roles.index') }}">
                                <i class="fa fa-briefcase"></i>
                                <span>@lang('global.roles.title')</span>
                            </a>
                        </li>@endcan

                        @can('user_access')
                        <li>
                            <a href="{{ route('admin.users.index') }}">
                                <i class="fa fa-user"></i>
                                <span>@lang('global.users.title')</span>
                            </a>
                        </li>@endcan

                        @can('team_access')
                        <li>
                            <a href="{{ route('admin.teams.index') }}">
                                <i class="fa fa-users"></i>
                                <span>@lang('global.teams.title')</span>
                            </a>
                        </li>@endcan

                        @can('user_action_access')
                        <li>
                            <a href="{{ route('admin.user_actions.index') }}">
                                <i class="fa fa-th-list"></i>
                                <span>@lang('global.user-actions.title')</span>
                            </a>
                        </li>@endcan
                    </ul>
                </li>@endcan





                @php ($unread = App\MessengerTopic::countUnread())
                <li class="{{ $request->segment(2) == 'messenger' ? 'active' : '' }} {{ ($unread > 0 ? 'unread' : '') }}">
                    <a href="{{ route('admin.messenger.index') }}" class="collapsible-header yay-sub-toggle waves-effect waves-blue">
                        <i class="fa fa-envelope"></i>

                        <span>Messages</span>
                        @if($unread > 0)
                            {{ ($unread > 0 ? '('.$unread.')' : '') }}
                        @endif
                    </a>
                </li>


                <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                    <a href="{{ route('auth.change_password') }}" class="collapsible-header yay-sub-toggle waves-effect waves-blue">
                        <i class="fa fa-key"></i>
                        @lang('global.app_change_password')
                    </a>
                </li>

                <li>
                    <a href="#logout" onclick="$('#logout').submit();" class="collapsible-header yay-sub-toggle waves-effect waves-blue">
                        <i class="fa fa-arrow-left"></i>
                        @lang('global.app_logout')
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>

