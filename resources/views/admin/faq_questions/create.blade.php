@extends('layouts.app')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col s12 m9 l10"><h1>@lang('global.faq-questions.title')</h1>
                <ul>
                    <li>
                        <a href="{{ url('/admin/home') }}">
                            <i class="fa fa-home"></i>
                            Dashboard</a>
                    </li> /
                    <li>
                        <a href="{{ route('admin.faq_questions.index') }}">
                            @lang('global.faq-questions.title')</a>
                    </li> /
                    <li><span>@lang('global.app_create')</span></li>
                </ul>
            </div>
            <div class="col s12 m3 l2 right-align">
                <a href="{{ route('admin.faq_questions.index') }}" class="btn lighten-3 z-depth-0 chat-toggle">
                    @lang('global.app_back_to_list')
                </a>
            </div>
        </div>
    </div>


    <div class="card">
        {!! Form::open(['method' => 'POST', 'route' => ['admin.faq_questions.store']]) !!}
        <div class="title">
            <h5>@lang('global.app_create')</h5>
        </div>
        
        <div class="card-content">
            <div class="row">
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    {!! Form::label('category_id', trans('global.faq-questions.fields.category').'*') !!}
                    {!! Form::select('category_id', $categories, old('category_id'), ['class' => 'form-control', 'required' => '']) !!}
                    <span class="helper-text" data-error="@if($errors->has('category_id')){{ $errors->first('category_id') }}@endif" data-success="right"></span>
                </div>

            </div>
            <div class="row">
                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                        {!! Form::label('answer_text', trans('global.faq-questions.fields.answer-text').'*') !!}
                        {!! Form::textarea('answer_text', old('answer_text'), ['class' => 'materialize-textarea ', 'placeholder' => '', 'required' => '']) !!}
                        <span class="helper-text" data-error="@if($errors->has('answer_text')){{ $errors->first('answer_text') }}@endif" data-success="right"></span>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                        {!! Form::label('question_text', trans('global.faq-questions.fields.question-text').'*') !!}
                        {!! Form::textarea('question_text', old('question_text'), ['class' => 'materialize-textarea ', 'placeholder' => '', 'required' => '']) !!}
                        <span class="helper-text" data-error="@if($errors->has('question_text')){{ $errors->first('question_text') }}@endif" data-success="right"></span>
                    </div>
                </div>
            </div>

            {!! Form::submit(trans('global.app_save'), ['class' => 'btn waves-effect waves-light']) !!}
        </div>
        {!! Form::close() !!}
    </div>

@stop

