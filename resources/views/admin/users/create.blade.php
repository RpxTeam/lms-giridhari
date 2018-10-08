@extends('layouts.app')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col s12 m9 l10"><h1>@lang('global.users.title')</h1>
                <ul>
                    <li>
                        <a href="{{ url('/admin/home') }}">
                            <i class="fa fa-home"></i>
                            Dashboard</a>
                    </li> /
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            @lang('global.users.title')</a>
                    </li> /
                    <li><span>@lang('global.app_create')</span></li>
                </ul>
            </div>
            <div class="col s12 m3 l2 right-align">
                <a href="{{ route('admin.users.index') }}" class="btn lighten-3 z-depth-0 chat-toggle">
                    @lang('global.app_back_to_list')
                </a>
            </div>
        </div>
    </div>


    <div class="card">
        {!! Form::open(['method' => 'POST', 'route' => ['admin.users.store'], 'files' => true,]) !!}
        <div class="title">
            <h5>@lang('global.app_create')</h5>
        </div>
        
        <div class="card-content">
            <div class="row">
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                        {!! Form::label('name', trans('global.users.fields.name').'*') !!}
                        {!! Form::text('name', old('name'), ['class' => 'validate', 'required' => '']) !!}
                        <span class="helper-text" data-error="@if($errors->has('name')){{ $errors->first('name') }}@endif" data-success="right"></span>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                        {!! Form::label('lastname', trans('global.users.fields.lastname').'') !!}
                        {!! Form::text('lastname', old('lastname'), ['class' => 'validate']) !!}
                        <span class="helper-text" data-error="@if($errors->has('lastname')){{ $errors->first('lastname') }}@endif" data-success="right"></span>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                        {!! Form::label('website', trans('global.users.fields.website').'') !!}
                        {!! Form::text('website', old('website'), ['class' => 'validate']) !!}
                        <span class="helper-text" data-error="@if($errors->has('website')){{ $errors->first('website') }}@endif" data-success="right"></span>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                        {!! Form::label('email', trans('global.users.fields.email').'*') !!}
                        {!! Form::email('email', old('email'), ['class' => 'validate', 'required' => '']) !!}
                        <span class="helper-text" data-error="@if($errors->has('email')){{ $errors->first('email') }}@endif" data-success="right"></span>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                        {!! Form::label('password', trans('global.users.fields.password').'*') !!}
                        {!! Form::password('password', ['class' => 'validate', 'required' => '']) !!}
                        <span class="helper-text" data-error="@if($errors->has('password')){{ $errors->first('password') }}@endif" data-success="right"></span>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    <div class="file-field mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                        <div class="btn grey">
                            <span>File</span>
                            {!! Form::file('avatar') !!}
                        </div>
                        <div class="file-path-wrapper">
                            {!! Form::text('file_text', old('file_text'), ['class' => 'file-path validate', 'placeholder' => 'Upload your avatar']) !!}
                        </div>
                        {!! Form::hidden('avatar_max_size', 2) !!}
                        {!! Form::hidden('avatar_max_width', 4096) !!}
                        {!! Form::hidden('avatar_max_height', 4096) !!}
                        <span class="helper-text" data-error="@if($errors->has('avatar')){{ $errors->first('avatar') }}@endif" data-success="right"></span>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    <div class="col s12" style="position: relative;">
                        {!! Form::label('role', trans('global.users.fields.role').'*') !!}
                        {!! Form::select('role[]', $roles, old('role'), ['class' => 'select2', 'multiple' => 'multiple', 'id' => 'selectall-role' , 'required' => '']) !!}
                        <span class="helper-text" data-error="@if($errors->has('role')){{ $errors->first('role') }}@endif" data-success="right"></span>
                    </div>
                    <div class="btn-group col l12">
                        <button type="button" class="btn btn-small btn-rounded" id="selectbtn-role">
                            {{ trans('global.app_select_all') }}
                        </button>
                        <button type="button" class="btn btn-small btn-rounded" id="deselectbtn-role">
                            {{ trans('global.app_deselect_all') }}
                        </button>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    {!! Form::label('team_id', trans('global.users.fields.team').'') !!}
                    {!! Form::select('team_id', $teams, old('team_id'), ['label' => 'Please Select']) !!}
                    <span class="helper-text" data-error="@if($errors->has('team_id')){$errors->first('approved') }}@endif" data-success="right"></span>
                </div>

                <div class="col s12">
                    {!! Form::hidden('approved', 0) !!}
                    {!! Form::checkbox('approved', 1, old('approved', false), ['id' => 'approved']) !!}
                    {!! Form::label('approved', trans('global.users.fields.approved').'') !!}
                    <span class="helper-text" data-error="@if($errors->has('approved')){$errors->first('approved') }}@endif" data-success="right"></span>
                </div>
            </div>

            {!! Form::submit(trans('global.app_update'), ['class' => 'btn waves-effect waves-light white-text']) !!}
        </div>
        {!! Form::close() !!}
    </div>

@stop

@section('javascript')
    @parent

    <script>
        $("#selectbtn-role").click(function(){
            $("#selectall-role > option").prop("selected","selected");
            $("#selectall-role").trigger("change");
        });
        $("#deselectbtn-role").click(function(){
            $("#selectall-role > option").prop("selected","");
            $("#selectall-role").trigger("change");
        });
    </script>
@stop