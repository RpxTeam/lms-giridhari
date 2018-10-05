@extends('admin.messenger.template')

@section('title', $title)

@section('messenger-content')

    <div class="mdc-layout-grid__cell--span-10-desktop rpx-email-list-container rpx-hide-scrollbars">

        @forelse($topics as $topic)
        <a href="{{ route('admin.messenger.show', [$topic->id]) }}" class="mdc-list mdc-list--two-line mdc-list--avatar-list {{$topic->unread()?'unread': 'read'}}">
            <div class="mdc-list-item rpx-navigation-list">
                @if($topic->sender->avatar)
                    <img class="mdc-list-item__graphic" src="{{ url('/assets/images/avatar-1.png') }}" width="56" height="56" alt="Brown Bear">
                @else
                    <img class="mdc-list-item__graphic" src="{{ $topic->sender->avatar }}" width="56" height="56" alt="Brown Bear">
                @endif
                <span class="mdc-list-item__text">
                    {{ $topic->otherPerson()->name }}
                    <span class="mdc-list-item__secondary-text">{{ $topic->subject }}</span>
                </span>
                {!! Form::open(array(
                            'style' => 'display: inline-block;',
                            'method' => 'DELETE',
                            'onsubmit' => "return confirm('Are you sure?');",
                            'route' => ['admin.messenger.destroy', $topic->id])) !!}
                {!! Form::button('<i class="material-icons">delete</i>', ['class'=>'waves-effect waves-light btn-small btn-square red-text', 'type'=>'submit']) !!}
                {!! Form::close() !!}
        </a>
        @endforeach
    </div>
@endsection