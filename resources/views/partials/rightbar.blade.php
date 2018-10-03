<aside id="notifications-drawer" class="mdc-drawer mdc-drawer--temporary mdc-drawer--rpx-flex-content mdc-drawer--rpx-right">
    <nav class="mdc-drawer__drawer">
        <div id="notification-panels" class="mdc-drawer__content rpx-hide-scrollbars">
            <div class="rpx-notifications-tab-panel">
                <h1 class="rpx-notifications-tab-panel__title mdc-typography--headline">
                    Notifications
                </h1>
                <div class="mdc-card rpx-notification-card">

                    @if (count($notifications = \Auth::user()->internalNotifications()->get()) > 0)
                        @foreach($notifications as $notification)
                            <section class="mdc-card__primary">
                                <h2 href="{{ $notification->link ? $notification->link : "#" }}" class="rpx-notification-card__title">
                                    <i class="fa fa-comments rpx-social-circle-icon rpx-social-circle-icon--message"></i>
                                    Message
                                </h2>
                                <div class="mdc-typography--caption">
                                    <span>5 min ago</span>
                                    {{--<i class="material-icons">clear</i>--}}
                                </div>
                            </section>
                            <section class="rpx-notification-card__content">
                                <h4 class="rpx-notification-card__subtitle">Progress Report</h4>
                                {{ $notification->text }}
                            </section>
                            {{--<li class="notification-link {{ $notification->pivot->read_at === null ? "unread" : false }}">--}}
                                {{--<a href="{{ $notification->link ? $notification->link : "#" }}"--}}
                                   {{--class="{{ $notification->link ? 'is-link' : false }}">--}}
                                    {{--{{ $notification->text }}--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        @endforeach
                    @else
                        <section class="mdc-card__primary">
                            <h2 class="rpx-notification-card__subtitle">
                                No notifications
                            </h2>
                        </section>
                    @endif
                </div>
            </div>
        </div>
        <footer class="mdc-toolbar mdc-theme--text-primary-on-primary-light mdc-theme--primary-light-bg mdc-toolbar--rpx-no-shrink">
            <div class="mdc-toolbar__row">
                <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
                    <a href="#" class="material-icons mdc-toolbar__menu-icon rpx-drawer-notification-collapse-icon">chevron_right</a>
                </section>
            </div>
        </footer>
    </nav>
</aside>