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
                <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list ">
                    <a class="mdc-list-item rpx-navigation-list__item" href="#">
                        <span class="rpx-navigation-list__text">
                            <i class="fa fa-book mdc-list-item__graphic rpx-navigation-list__icon"></i>
                            @lang('global.course-management.title')
                        </span>
                        <i class="material-icons rpx-navigation-list__icon-collapse">keyboard_arrow_down</i>
                    </a>
                    <nav class="mdc-list rpx-navigation-list">
                        @can('lesson_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.lessons.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="fas fa-list-ol mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                    @lang('global.lessons.title')
                                </span>
                            </a>
                        @endcan

                        @can('coursecategory_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.coursecategories.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="fa fa-list-ol mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                    @lang('global.coursecategories.title')
                                </span>
                            </a>
                        @endcan

                        @can('coursetag_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.coursetags.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="fa fa-tags mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                    @lang('global.coursetags.title')
                                </span>
                            </a>
                        @endcan

                        @can('course_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.courses.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="fa fa-list-alt mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                    @lang('global.courses.title')
                                </span>
                            </a>
                        @endcan

                        @can('coursescertificate_access')
                            <a class="rpx-navigation-list__item mdc-list-item" href="{{ route('admin.coursescertificates.index') }}">
                                <span class="rpx-navigation-list__text">
                                    <i class="fa fa-certificate mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                    @lang('global.coursescertificates.title')
                                </span>
                            </a>
                        @endcan

                    </nav>
                </nav>
                @endcan
                <h3 class="mdc-list-group__subheader rpx-navigation__subheader">NOTIFICATIONS</h3>
                @can('internal_notification_access')
                    <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">
                        <a class="rpx-navigation-list__item mdc-list-item {{ $request->segment(2) == 'internal_notifications' ? 'mdc-list-item--activated' : '' }}" href="#">
                            <span class="rpx-navigation-list__text">
                                <i class="fa fa-briefcase mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                @lang('global.internal-notifications.title')
                            </span>
                        </a>
                    </nav>
                @endcan

                @can('faq_management_access')
                    <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">
                        <a class="mdc-list-item rpx-navigation-list__item" href="#">
                            <span class="rpx-navigation-list__text">
                                <i class="fa fa-question mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                @lang('global.faq-management.title')
                            </span>
                            <i class="material-icons rpx-navigation-list__icon-collapse">keyboard_arrow_down</i>
                        </a>
                        <nav class="mdc-list rpx-navigation-list">
                            @can('faq_category_access')
                                <a href="{{ route('admin.faq_categories.index') }}" class="rpx-navigation-list_item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fa fa-briefcase mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.faq-categories.title')
                                    </span>
                                </a>
                            @endcan

                            @can('faq_question_access')
                                <a href="{{ route('admin.faq_questions.index') }}" class="rpx-navigation-list_item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fa fa-question mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.faq-questions.title')
                                    </span>
                                </a>
                            @endcan
                        </nav>
                    </nav>
                @endcan

                @can('setting_access')
                    <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">
                        <a class="mdc-list-item rpx-navigation-list__item" href="#">
                            <span class="rpx-navigation-list__text">
                                <i class="fas fa-cogs mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                @lang('global.settings.title')
                            </span>
                            <i class="material-icons rpx-navigation-list__icon-collapse">keyboard_arrow_down</i>
                        </a>
                        <nav class="mdc-list rpx-navigation-list">
                            @can('general_access')
                                <a href="{{ route('admin.generals.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fas fa-cog mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.general.title')
                                    </span>
                                </a>
                            @endcan

                            @can('datatrail_access')
                                <a href="{{ route('admin.datatrails.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fas fa-cog mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.datatrail.title')
                                    </span>
                                </a>
                            @endcan

                            @can('datacourse_access')
                                <a href="{{ route('admin.datacourses.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fas fa-cog mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.datacourse.title')
                                    </span>
                                </a>
                            @endcan
                            @can('datalesson_access')
                                <a href="{{ route('admin.datalessons.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fas fa-cog mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.datalesson.title')
                                    </span>
                                </a>
                            @endcan
                        </nav>
                    </nav>
                @endcan

                @can('trail_management_access')
                    <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">
                        <a class="mdc-list-item rpx-navigation-list__item" href="#">
                            <span class="rpx-navigation-list__text">
                                <i class="fa fa-road mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                @lang('global.trail-management.title')
                            </span>
                            <i class="material-icons rpx-navigation-list__icon-collapse">keyboard_arrow_down</i>
                        </a>
                        <nav class="mdc-list rpx-navigation-list">
                            @can('trailcategory_access')
                                <a href="{{ route('admin.trailcategories.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fas fa-list-ul mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.trailcategories.title')
                                    </span>
                                </a>
                            @endcan

                            @can('trailtag_access')
                                <a href="{{ route('admin.trailtags.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fa fa-tags mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.trailtags.title')
                                    </span>
                                </a>
                            @endcan

                            @can('trail_access')
                                <a href="{{ route('admin.trails.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fa fa-train mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.trails.title')
                                    </span>
                                </a>
                            @endcan

                            @can('trailscertificate_access')
                                <a href="{{ route('admin.trailscertificates.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fa fa-certificate mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.trailscertificates.title')
                                    </span>
                                </a>
                            @endcan
                        </nav>
                    </nav>
                @endcan

                @can('user_management_access')
                    <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">
                        <a class="mdc-list-item rpx-navigation-list__item" href="#">
                            <span class="rpx-navigation-list__text">
                                <i class="fa fa-users mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                @lang('global.user-management.title')
                            </span>
                            <i class="material-icons rpx-navigation-list__icon-collapse">keyboard_arrow_down</i>
                        </a>
                        <nav class="mdc-list rpx-navigation-list">
                            @can('permission_access')
                                <a href="{{ route('admin.permissions.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fa fa-briefcase mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.permissions.title')
                                    </span>
                                </a>
                            @endcan

                            @can('role_access')
                                <a href="{{ route('admin.roles.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fa fa-briefcase mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.roles.title')
                                    </span>
                                </a>
                            @endcan

                            @can('user_access')
                                <a href="{{ route('admin.users.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fa fa-user mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.users.title')
                                    </span>
                                </a>
                            @endcan

                            @can('team_access')
                                <a href="{{ route('admin.teams.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fa fa-users mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.teams.title')
                                    </span>
                                </a>
                            @endcan

                            @can('user_action_access')
                                <a href="{{ route('admin.user_actions.index') }}" class="rpx-navigation-list__item mdc-list-item">
                                    <span class="rpx-navigation-list__text">
                                        <i class="fa fa-th-list mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                        @lang('global.user-actions.title')
                                    </span>
                                </a>
                            @endcan
                        </nav>
                    </nav>
                @endcan

                @php ($unread = App\MessengerTopic::countUnread())
                <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">
                    <a class="rpx-navigation-list__item mdc-list-item {{ $request->segment(2) == 'messenger' ? 'mdc-list-item--activated' : '' }} {{ ($unread > 0 ? 'unread' : '') }}" href="{{ route('admin.messenger.index') }}">
                        <span class="rpx-navigation-list__text">
                            <i class="fa fa-envelope mdc-list-item__graphic rpx-navigation-list__icon"></i>
                            Messages
                        </span>
                        @if($unread > 0)
                            <span class="rpx-badge rpx-badge--secondary">{{ ($unread > 0 ? '('.$unread.')' : '') }}</span>
                        @endif
                    </a>
                </nav>


                <nav class="mdc-list mdc-list--avatar-list rpx-navigation-list">
                    <a class="rpx-navigation-list__item mdc-list-item {{ $request->segment(2) == 'change_password' ? 'mdc-list-item--activated' : '' }}" href="{{ route('auth.change_password') }}">
                        <span class="rpx-navigation-list__text">
                            <i class="fa fa-key mdc-list-item__graphic rpx-navigation-list__icon"></i>
                            @lang('global.app_change_password')
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

