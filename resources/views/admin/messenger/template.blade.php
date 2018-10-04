@extends('layouts.app')

@section('content')
    <a class="mail-compose-btn btn-floating btn-extra waves-effect waves-light red tooltipped" href="{{ route('admin.messenger.create') }}" data-tooltip="Compose" data-position="left" data-tooltip-id="31c8df03-655a-ff50-36e8-fbd9370a593f">
        <i class="mdi-content-add"></i>
    </a>
    <div class="mdc-layout-grid mdc-layout-grid--rpx-container">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-2-desktop rpx-email-menu-container rpx-hide-scrollbars">
                <a href="{{ route('admin.messenger.index') }}" class="mdc-button rpx-email-menu-container__link">
                    <i class="material-icons mdc-button__icon">inbox</i>
                    @php($unread = App\MessengerTopic::unreadInboxCount())
                    @if($unread > 0)
                        <span class="rpx-badge rpx-badge--mini rpx-badge--secondary">{{ ($unread > 0 ? '('.$unread.')' : '') }}</span>
                    @endif
                    All Messages
                </a>
                <a href="{{ route('admin.messenger.index') }}" class="mdc-button rpx-email-menu-container__link">
                    <i class="material-icons mdc-button__icon">inbox</i>
                    Inbox
                </a>
                <a href="{{ route('admin.messenger.outbox') }}" class="mdc-button rpx-email-menu-container__link">
                    <i class="material-icons mdc-button__icon">drafts</i>
                    Outbox
                </a>
            </div>
            @yield('messenger-content')
        </div>
    </div>
@stop
