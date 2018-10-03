<header class="mdc-toolbar mdc-theme--text-primary-on-primary-light mdc-theme--primary-light-bg mdc-toolbar--rpx-no-shrink rpx-toolbar">
    <div class="mdc-toolbar__row">
        <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
            <a id="rpx-top-toolbar-burger-icon" href="#" class="rpx-burger-menu-icon--classic material-icons mdc-toolbar__menu-icon">menu</a>
            <span class="mdc-toolbar__title">@yield('title')</span>
        </section>
        <section class="mdc-toolbar__section mdc-toolbar__section--align-end">

            <div id="rpx-layout-menu-button" class="material-icons mdc-toolbar__icon mdc-menu-anchor" aria-label="Notifications">
                apps

                <div class="mdc-menu" tabindex="-1" id="rpx-layout-menu">
                    <div class="mdc-menu__items mdc-list" role="menu" aria-hidden="true">


                        <a href="/toolbar" class="mdc-list-item" role="menuitem" tabindex="0">Toolbar</a>


                        <a href="/compact" class="mdc-list-item" role="menuitem" tabindex="0">Compact</a>


                        <a href="/boxed" class="mdc-list-item" role="menuitem" tabindex="0">Boxed</a>


                        <a href="/tabbed" class="mdc-list-item" role="menuitem" tabindex="0">Tabbed</a>


                        <a href="/funky" class="mdc-list-item" role="menuitem" tabindex="0">Funky</a>

                    </div>
                </div>
            </div>

            <div id="rpx-language-menu-button" class="mdc-toolbar__icon mdc-menu-anchor" aria-label="Notifications">
                <span class="material-icons">language</span>
                {{ strtoupper(\App::getLocale()) }}
                <div class="mdc-menu" tabindex="-1" id="rpx-language-menu">
                    <div class="mdc-menu__items mdc-list" role="menu" aria-hidden="true">
                        @foreach(config('app.languages') as $short => $title)
                            <a href="{{ route('admin.language', $short) }}" class="mdc-list-item" role="menuitem" tabindex="0">
                                {{ $title }} ({{ strtoupper($short) }})
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div id="rpx-theme-menu-button" class="material-icons mdc-toolbar__icon mdc-menu-anchor" aria-label="Change Colors">
                invert_colors

                <div class="mdc-menu" tabindex="-1" id="rpx-theme-menu">
                    <ul class="mdc-menu__items mdc-list" role="menu" aria-hidden="true">
                        <li id="classic-light_blue-pink" class="mdc-list-item" role="menuitem" tabindex="0">
                            Classic - Light Blue / Pink
                        </li>
                        <li id="classic-green-deep_orange" class="mdc-list-item" role="menuitem" tabindex="0">
                            Classic - Green / Deep Orange
                        </li>
                        <li id="classic-indigo-orange" class="mdc-list-item" role="menuitem" tabindex="0">
                            Classic - Indigo / Orange
                        </li>
                        <li id="dark-light_blue-pink" class="mdc-list-item" role="menuitem" tabindex="0">
                            Dark - Light Blue / Pink
                        </li>
                        <li id="dark-green-deep_orange" class="mdc-list-item" role="menuitem" tabindex="0">
                            Dark - Green / Deep Orange
                        </li>
                        <li id="dark-indigo-orange" class="mdc-list-item" role="menuitem" tabindex="0">
                            Dark - Indigo / Orange
                        </li>
                        <li id="night-light_blue-pink" class="mdc-list-item" role="menuitem" tabindex="0">
                            Night - Light Blue / Pink
                        </li>
                        <li id="night-green-deep_orange" class="mdc-list-item" role="menuitem" tabindex="0">
                            Night - Green / Deep Orange
                        </li>
                        <li id="night-indigo-orange" class="mdc-list-item" role="menuitem" tabindex="0">
                            Night - Indigo / Orange
                        </li>
                    </ul>
                </div>
            </div>
            <div id="rtl-switch"
                 class="mdc-toolbar__icon toggle material-icons"
                 role="button"
                 aria-label="Text Direction"
                 aria-pressed="false"
                 tabindex="0"
                 data-toggle-on='{"content": "format_textdirection_l_to_r", "label": "Left to Right"}'
                 data-toggle-off='{"content": "format_textdirection_r_to_l", "label": "Right to Left"}'>
                format_textdirection_l_to_r
            </div>
            <div id="rpx-top-toolbar-notification-icon" class="mdc-toolbar__icon rpx-toolbar__notification-icon" aria-label="Notifications">
                <span class="material-icons">notifications</span>
                @php($notificationCount = \Auth::user()->internalNotifications()->where('read_at', null)->count())
                @if($notificationCount > 0)
                    <span class="rpx-badge rpx-badge--secondary rpx-toolbar__badge">{{ $notificationCount }}</span>
                @endif
            </div>
        </section>
    </div>
</header>
<nav class="navbar-top navbar-under navbar-light">
    <div class="nav-wrapper">
        <a href="#" class="yay-toggle btn-toggle-menu">
            <div class="burg1"></div>
            <div class="burg2"></div>
            <div class="burg3"></div>
        </a>
        <a href="#!" class="brand-logo">
            @if($generals->count() >= 1)
                <img src="{{url('/')}}/{{$generals[0]->site_logo}}" alt="Con">
            @else
                <img src="{{ url('images') }}/Logo_RPX.png" alt="Con">
            @endif
        </a>
        <ul>
            <li class="dropdown languages-menu">
                <a class="dropdown-button" data-activates="dropdown-language" href="#!">
                    {{ strtoupper(\App::getLocale()) }}
                </a>
                <ul id='dropdown-language' class='dropdown-content'>
                    @foreach(config('app.languages') as $short => $title)
                        <li class="language-link">
                            <a href="{{ route('admin.language', $short) }}">
                                {{ $title }} ({{ strtoupper($short) }})
                            </a>
                        </li>
                    @endforeach
                </ul>
                <li class="footer"></li>
            </li>
            {{--<li><a href="#!" class="search-bar-toggle"><i class="mdi-action-search"></i></a></li>--}}
            <li>
                <a class="dropdown-button" data-activates="dropdown-notifications" href="#!">
                    <i class="far fa-bell"></i>
                    @php($notificationCount = \Auth::user()->internalNotifications()->where('read_at', null)->count())
                    @if($notificationCount > 0)
                        <span class="new badge sup" data-badge-caption="">
                            {{ $notificationCount }}
                        </span>
                    @endif
                </a>
                <ul id='dropdown-notifications' class='dropdown-content'>
                    @if (count($notifications = \Auth::user()->internalNotifications()->get()) > 0)
                        @foreach($notifications as $notification)
                            <li class="notification-link {{ $notification->pivot->read_at === null ? "unread" : false }}">
                                <a href="{{ $notification->link ? $notification->link : "#" }}"
                                   class="{{ $notification->link ? 'is-link' : false }}">
                                    {{ $notification->text }}
                                </a>
                            </li>
                        @endforeach
                    @else
                        <li class="notification-link" style="text-align:center;">
                            No notifications
                        </li>
                    @endif
                </ul>
            </li>
            @php($user = \Auth::user())
            <li class="user">
                <a class="dropdown-button user-top-infos" data-activates="user-dropdown" href="#!">
                @if($user->avatar)
                    <span class="avatar-icon" style="background-image: url('{{ url('/') }}/{{ $user->avatar }}'); "></span>
                @else
                    <img src="{{ url('/custom/avatar.png') }}" alt="{{$user->name . ' ' . $user->last_name}}" class="circle">{{$user->name . ' ' . $user->last_name}} <i class="mdi-navigation-expand-more right"></i>
                @endif
                    {{$user->name . ' ' . $user->last_name}} <i class="mdi-navigation-expand-more right"></i>
                </a>
                    <ul id="user-dropdown" class="dropdown-content">
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.messenger.index') }}">
                            <i class="fa fa-envelope"></i>
                            Messages

                            @php($notificationCount = \Auth::user()->internalNotifications()->where('read_at', null)->count())
                            @if($notificationCount > 0)
                                <span class="badge new">{{ $notificationCount }} new</span>
                        </span>
                            @endif

                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.generals.index') }}">
                            <i class="fa fa-cogs"></i>
                            Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#logout" onclick="$('#logout').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>