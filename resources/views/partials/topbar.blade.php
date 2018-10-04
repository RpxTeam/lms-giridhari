<header class="mdc-toolbar mdc-theme--text-primary-on-primary-light mdc-theme--primary-light-bg mdc-toolbar--rpx-no-shrink rpx-toolbar">
    <div class="mdc-toolbar__row">
        <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
            <a id="rpx-top-toolbar-burger-icon" href="#" class="rpx-burger-menu-icon--classic material-icons mdc-toolbar__menu-icon">menu</a>
            <span class="mdc-toolbar__title">@yield('title')</span>
        </section>
        <section class="mdc-toolbar__section mdc-toolbar__section--align-end">

            <div id="rpx-language-menu-button" class="mdc-toolbar__icon mdc-menu-anchor" aria-label="Notifications">
                <span class="rpx-navigation-list__text">
                    <span class="material-icons">language</span>
                    {{ strtoupper(\App::getLocale()) }}
                </span>
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
            @php($user = \Auth::user())
            <div id="rpx-profile-menu-button" class="mdc-profile mdc-menu-anchor" aria-label="Profile">
                <span class="rpx-navigation-list__text mdc-list-item">
                    @if($user->avatar)
                        <img src="{{ url('/') }}/{{ $user->avatar }}" alt="" class="mdc-list-item__graphic">
                        {{$user->name . ' ' . $user->last_name}}
                        <i class="material-icons rpx-navigation-list__icon-collapse">keyboard_arrow_down</i>
                    @else
                        <img src="{{ url('/custom/avatar.png') }}" alt="{{$user->name . ' ' . $user->last_name}}" alt="" class="mdc-list-item__graphic">
                        {{$user->name . ' ' . $user->last_name}}
                        <i class="material-icons rpx-navigation-list__icon-collapse">keyboard_arrow_down</i>
                    @endif
                </span>
                <div class="mdc-menu" tabindex="-1" id="rpx-profile-menu">
                    <div class="mdc-menu__items mdc-list" role="menu" aria-hidden="true">
                        <a href="#" class="mdc-list-item" role="menuitem" tabindex="0">
                            <span class="rpx-navigation-list__text">
                                <i class="fa fa-user mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                Profile
                            </span>
                        </a>
                        <a href="{{ route('admin.messenger.index') }}" class="mdc-list-item" role="menuitem" tabindex="0">
                            <i class="fa fa-envelope mdc-list-item__graphic rpx-navigation-list__icon"></i>
                            <span class="rpx-navigation-list__text">
                                Messages

                                @php($notificationCount = \Auth::user()->internalNotifications()->where('read_at', null)->count())
                                @if($notificationCount > 0)
                                        <span class="badge new">{{ $notificationCount }} new</span>
                                @endif
                            </span>
                        </a>
                        <a href="{{ route('admin.generals.index') }}" class="mdc-list-item" role="menuitem" tabindex="0">
                            <span class="rpx-navigation-list__text">
                                <i class="fa fa-cogs mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                Settings
                            </span>
                        </a>
                        <a href="#logout" onclick="$('#logout').submit();" class="mdc-list-item" role="menuitem" tabindex="0">
                            <span class="rpx-navigation-list__text">
                                <i class="fas fa-sign-out-alt mdc-list-item__graphic rpx-navigation-list__icon"></i>
                                Logout
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>