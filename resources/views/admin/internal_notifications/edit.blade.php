@extends('layouts.app')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col s12 m9 l10"><h1>@lang('global.internal-notifications.title')</h1>
                <ul>
                    <li>
                        <a href="{{ url('/admin/home') }}">
                            <i class="fa fa-home"></i>
                            Dashboard</a>
                    </li> /
                    <li>
                        <a href="{{ route('admin.internal_notifications.index') }}">
                            @lang('global.internal-notifications.title')</a>
                    </li> /
                    <li><span>@lang('global.app_edit')</span></li>
                </ul>
            </div>
            <div class="col s12 m3 l2 right-align">
                <a href="{{ route('admin.internal_notifications.index') }}" class="btn lighten-3 z-depth-0 chat-toggle">
                    @lang('global.app_back_to_list')
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        {!! Form::model($internal_notification, ['method' => 'PUT', 'route' => ['admin.internal_notifications.update', $internal_notification->id]]) !!}
        <div class="title">
        <h5>@lang('global.app_edit')</h5>
        </div>

        <div class="card-content">
            <div class="row">
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                        {!! Form::label('text', trans('global.internal-notifications.fields.text').'*') !!}
                        {!! Form::text('text', old('text'), ['class' => 'validate', 'required' => '']) !!}
                        <span class="helper-text" data-error="@if($errors->has('text')){{ $errors->first('text') }}@endif" data-success="right"></span>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                        {!! Form::label('link', trans('global.internal-notifications.fields.link').'') !!}
                        {!! Form::text('link', old('link'), ['class' => 'validate']) !!}
                        <span class="helper-text" data-error="@if($errors->has('link')){{ $errors->first('link') }}@endif" data-success="right"></span>
                    </div>
                </div>

                <div class="col s12">
                    <div class="col s12" style="position: relative;">
                        {!! Form::label('users', trans('global.internal-notifications.fields.users').'*') !!}
                        {!! Form::select('users[]', $users, old('users'), ['class' => 'select2', 'multiple' => 'multiple', 'id' => 'selectall-users' , 'required' => '']) !!}
                        <span class="helper-text" data-error="@if($errors->has('users')){{ $errors->first('users') }}@endif" data-success="right"></span>
                    </div>
                    <div class="btn-group col l12">
                        <button type="button" class="btn btn-small btn-rounded" id="selectbtn-users">
                            {{ trans('global.app_select_all') }}
                        </button>
                        <button type="button" class="btn btn-small btn-rounded" id="deselectbtn-users">
                            {{ trans('global.app_deselect_all') }}
                        </button>
                    </div>
                </div>
            </div>

            {!! Form::submit(trans('global.app_save'), ['class' => 'btn waves-effect waves-light']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop

@section('javascript')
    @parent

    <script>
        $("#selectbtn-users").click(function(){
            $("#selectall-users > option").prop("selected","selected");
            $("#selectall-users").trigger("change");
        });
        $("#deselectbtn-users").click(function(){
            $("#selectall-users > option").prop("selected","");
            $("#selectall-users").trigger("change");
        });
    </script>
@stop