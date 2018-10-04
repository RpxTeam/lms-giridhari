@extends('admin.messenger.template')

@section('title', $topic->subject)

@section('messenger-content')
    <div class="mdc-layout-grid__cell--span-10-desktop rpx-email-preview-container">
        @foreach($topic->messages as $message)
        <div class="mdc-card rpx-email-card">
            <header class="rpx-email-card__header">
                @if($message->sender->avatar)
                <img class="rpx-email-card__avatar" src="{{ url('/assets/images/avatar-1.png') }}" width="56" height="56" alt="Brown Bear">
                @else
                    <img class="rpx-email-card__avatar" src="{{ $message->sender->avatar }}" width="56" height="56" alt="Brown Bear">
                @endif
                <div class="rpx-email-card__heading">
                    <h1 class=" mdc-typography--title rpx-email-card__title">{{ $message->sender->name }}</h1>
                    <h2 class="mdc-typography--subheading1 rpx-email-card__subtitle">{{ $message->sender->email }}</h2>
                </div>
                <span class="rpx-email-card__date">{{  $message->sent_at->diffForHumans() }}</span>
            </header>
            <section class="rpx-email-card__text">
                {{ $message->content }}

            </section>
            <section class="mdc-card__actions rpx-email-card__actions mdc-card__action-icons">
                <a href="{{ route('admin.messenger.edit', [$topic->id]) }}" class="mdc-card__action--icon mdc-card__action">
                    <i class="material-icons" title="Reply">reply</i>
                </a>
                <div class="rpx-email-card__action-delete">
                    <a href="#" class="mdc-card__action--icon mdc-card__action">
                        <i class="material-icons mdc-theme--secondary" title="Delete">delete</i>
                    </a>
                </div>
            </section>
        </div>
        @endforeach
    </div>
@endsection