@extends('layouts.app')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col s12 m9 l10"><h1>@lang('global.permissions.title')</h1>
                <ul>
                    <li>
                        <a href="{{ url('/admin/home') }}">
                            <i class="fa fa-home"></i>
                            Dashboard</a>
                    </li> /
                    <li>
                        <a href="{{ route('admin.permissions.index') }}">
                            @lang('global.permissions.title')</a>
                    </li> /
                    <li><span>@lang('global.app_edit')</span></li>
                </ul>
            </div>
            <div class="col s12 m3 l2 right-align">
                <a href="{{ route('admin.permissions.index') }}" class="btn lighten-3 z-depth-0 chat-toggle">
                    @lang('global.app_back_to_list')
                </a>
            </div>
        </div>
    </div>

    {!! Form::model($permission, ['method' => 'PUT', 'route' => ['admin.permissions.update', $permission->id]]) !!}

    <div class="card">
        <div class="title">
            <h5>@lang('global.app_edit')</h5>
        </div>

        <div class="card-content">
            <div class="row">
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    {!! Form::label('title', trans('global.permissions.fields.title').'*') !!}
                    {!! Form::text('title', old('title'), ['class' => 'validate', 'required' => '']) !!}
                    <span class="helper-text" data-error="@if($errors->has('title')){{ $errors->first('title') }}@endif" data-success="right"></span>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    {!! Form::submit(trans('global.app_save'), ['class' => 'btn waves-effect waves-light']) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop

