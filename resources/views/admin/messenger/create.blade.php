@extends('admin.messenger.template')

@section('title', 'New message')

@section('messenger-content')
    <div class="mdc-layout-grid__cell--span-10-desktop rpx-email-preview-container">
        {!! Form::open(['route' => ['admin.messenger.store'], 'method' => 'POST', 'novalidate', 'class' => 'stepperForm validate']) !!}

        @include('admin.messenger.form-partials.fields')

        {!! Form::button(trans('global.app_save') . ' <i class="material-icons mdc-button__icon">send</i>', ['class'=>'mdc-button mdc-button--raised', 'type'=>'submit']) !!}

        {!! Form::close() !!}
    </div>

@stop
