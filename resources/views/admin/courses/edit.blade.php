@extends('layouts.app')

@section('title', trans('global.course.title'))

@section('content')
    <div class="page-title">
        <ul class="breadcrumb">
            <li>
                <a href="{{ url('/admin/home') }}">
                    <i class="fa fa-home"></i>
                    Dashboard</a>
            </li>
            <li>
                <a href="{{ route('admin.courses.index') }}">@lang('global.courses.title')</a>
            </li>
            <li><span>@lang('global.app_edit')</span></li>
        </ul>
        @can('course_create')
            <a href="{{ route('admin.courses.index') }}" class="mdc-button mdc-button--stroked">
                @lang('global.app_back_to_list')
            </a>
        @endcan
    </div>

    <div class="rpx-content">
        <div class="card">
            <div class="title">
                <h2 class="mdc-typography--display1">@lang('global.app_edit')</h2>
            </div>
        {!! Form::model($course, ['method' => 'PUT', 'route' => ['admin.courses.update', $course->id], 'files' => true,]) !!}

        <section class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-9-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                <div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                    <div class="mdc-card rpx-card rpx-card--center">
                        <section class="rpx-card__content mdc-typography--body1 rpx-widget__card--rounded">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                                        {!! Form::text('title', old('title'), ['class' => 'mdc-text-field__input validate']) !!}
                                        {!! Form::label('title', trans('global.courses.fields.title').'', ['class' => 'mdc-floating-label']) !!}
                                        {{--<div class="mdc-line-ripple"></div>--}}
                                        <span class="helper-text" data-error="@if($errors->has('title')){{ $errors->first('title') }}@endif" data-success="right"></span>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="mdc-text-field mdc-text-field--textarea mdc-text-field--fullwidth full-width-textarea-example">
                                        {!! Form::textarea('description', old('description'), ['class' => 'mdc-text-field__input', 'placeholder' => '']) !!}
                                        {!! Form::label('description', trans('global.courses.fields.description').'', ['class' => 'mdc-floating-label']) !!}
                                        <span class="helper-text" data-error="@if($errors->has('description')){{ $errors->first('description') }}@endif" data-success="right"></span>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="file-field mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                                        <div class="btn grey">
                                            <span>File</span>
                                            {!! Form::file('featured_image') !!}
                                        </div>
                                        <div class="file-path-wrapper">
                                            {!! Form::text('file_text', old('file_text'), ['class' => 'file-path validate', 'placeholder' => 'Upload study material']) !!}
                                        </div>
                                        {!! Form::hidden('featured_image_max_size', 4) !!}
                                        {!! Form::hidden('featured_image_max_width', 4096) !!}
                                        {!! Form::hidden('featured_image_max_height', 4096) !!}
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="col s12" style="position: relative;">
                                        {!! Form::label('instructor', trans('global.courses.fields.instructor').'') !!}
                                        {!! Form::select('instructor[]', $instructors, old('instructor'), ['class' => 'select2', 'multiple' => 'multiple', 'id' => 'selectall-instructor' ]) !!}
                                        <span class="helper-text" data-error="@if($errors->has('instructor')){{ $errors->first('instructor') }}@endif" data-success="right"></span>
                                    </div>
                                    <div class="btn-group col l12 no-padding">
                                        <button type="button" class="btn btn-small btn-rounded" id="selectbtn-instructor">
                                            {{ trans('global.app_select_all') }}
                                        </button>
                                        <button type="button" class="btn btn-small btn-rounded" id="deselectbtn-instructor">
                                            {{ trans('global.app_deselect_all') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="col s12" style="position: relative;">
                                        {!! Form::label('lessons', trans('global.courses.fields.lessons').'') !!}
                                        {!! Form::select('lessons[]', $lessons, old('lessons'), ['class' => 'select2', 'multiple' => 'multiple', 'id' => 'selectall-lessons' ]) !!}
                                        <span class="helper-text" data-error="@if($errors->has('lessons')){{ $errors->first('lessons') }}@endif" data-success="right"></span>
                                    </div>
                                    <div class="btn-group col l12 no-padding">
                                        <button type="button" class="btn btn-small btn-rounded" id="selectbtn-lessons">
                                            {{ trans('global.app_select_all') }}
                                        </button>
                                        <button type="button" class="btn btn-small btn-rounded" id="deselectbtn-lessons">
                                            {{ trans('global.app_deselect_all') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="col s12" style="position: relative;">
                                        {!! Form::label('categories', trans('global.courses.fields.categories').'') !!}
                                        {!! Form::select('categories[]', $categories, old('categories'), ['class' => 'select2', 'multiple' => 'multiple', 'id' => 'selectall-categories' ]) !!}
                                        <span class="helper-text" data-error="@if($errors->has('categories')){{ $errors->first('categories') }}@endif" data-success="right"></span>
                                    </div>
                                    <div class="btn-group col l12 no-padding">
                                        <button type="button" class="btn btn-small btn-rounded" id="selectbtn-categories">
                                            {{ trans('global.app_select_all') }}
                                        </button>
                                        <button type="button" class="btn btn-small btn-rounded" id="deselectbtn-categories">
                                            {{ trans('global.app_deselect_all') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="col s12" style="position: relative;">
                                        {!! Form::label('tags', trans('global.courses.fields.tags').'') !!}
                                        {!! Form::select('tags[]', $tags, old('tags'), ['class' => 'select2', 'multiple' => 'multiple', 'id' => 'selectall-tags' ]) !!}
                                        <span class="helper-text" data-error="@if($errors->has('tags')){{ $errors->first('tags') }}@endif" data-success="right"></span>
                                    </div>
                                    <div class="btn-group col l12 no-padding">
                                        <button type="button" class="btn btn-small btn-rounded" id="selectbtn-tags">
                                            {{ trans('global.app_select_all') }}
                                        </button>
                                        <button type="button" class="btn btn-small btn-rounded" id="deselectbtn-tags">
                                            {{ trans('global.app_deselect_all') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    {!! Form::label('introduction', trans('global.courses.fields.introduction').'') !!}
                                    <div class="mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                        {!! Form::textarea('introduction', old('introduction'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                                        <span class="helper-text" data-error="@if($errors->has('introduction')){{ $errors->first('introduction') }}@endif" data-success="right"></span>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                <div class="mdc-card rpx-card rpx-card--center">
                    <div class="mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                        <section class="rpx-card__content mdc-typography--body1">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                                        {!! Form::text('slug', old('slug'), ['class' => 'mdc-text-field__input validate', 'placeholder' => trans('global.courses.fields.slug')]) !!}
                                        {{--                                            {!! Form::label('slug', trans('global.courses.fields.slug').'', ['class' => 'mdc-floating-label']) !!}--}}
                                        <span class="helper-text" data-error="@if($errors->has('slug')){{ $errors->first('slug') }}@endif" data-success="right"></span>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                                        {!! Form::number('order', old('order'), ['class' => 'mdc-text-field__input validate', 'placeholder' => trans('global.courses.fields.order')]) !!}
                                        {{--                                            {!! Form::label('order', trans('global.courses.fields.order').'', ['class' => 'mdc-floating-label']) !!}--}}
                                        <span class="helper-text" data-error="@if($errors->has('order')){{ $errors->first('order') }}@endif" data-success="right"></span>
                                    </div>
                                </div>

                                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                                        {!! Form::number('duration', old('duration'), ['class' => 'mdc-text-field__input validate', 'placeholder' => trans('global.courses.fields.duration')]) !!}
                                        <span class="helper-text" data-error="@if($errors->has('duration')){{ $errors->first('duration') }}@endif" data-success="right"></span>
                                    </div>
                                </div>

                                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                                        {{--                                            {!! Form::label('start_date', trans('global.courses.fields.start-date').'', ['class' => 'mdc-floating-label']) !!}--}}
                                        {!! Form::text('start_date', old('start_date'), ['class' => 'mdc-text-field__input datepicker', 'placeholder' => trans('global.courses.fields.start-date')]) !!}
                                        <span class="helper-text" data-error="@if($errors->has('start_date')){{ $errors->first('start_date') }}@endif" data-success="right"></span>
                                    </div>
                                </div>

                                <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                                        {{--                                            {!! Form::label('end_date', trans('global.courses.fields.end-date'), ['class' => 'mdc-floating-label']).'') !!}--}}
                                        {!! Form::text('end_date', old('end_date'), ['class' => 'mdc-text-field__input datepicker', 'placeholder' => trans('global.courses.fields.end-date')]) !!}
                                        <span class="helper-text" data-error="@if($errors->has('end_date')){{ $errors->first('end_date') }}@endif" data-success="right"></span>
                                    </div>
                                </div>

                                <div class="mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                                    <div class="mdc-form-field">
                                        <div class="mdc-checkbox">
                                            {!! Form::hidden('approved', 0) !!}
                                            {!! Form::checkbox('approved', 1, old('approved', false), ['id' => 'approved', 'class' => 'mdc-checkbox__native-control']) !!}
                                            <div class="mdc-checkbox__background">
                                                <svg class="mdc-checkbox__checkmark"
                                                     viewBox="0 0 24 24">
                                                    <path class="mdc-checkbox__checkmark-path"
                                                          fill="none"
                                                          stroke="white"
                                                          d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                        </div>
                                        {!! Form::label('approved', trans('global.courses.fields.approved').'') !!}
                                        {{--<label for="basic-checkbox">Default checkbox</label>--}}
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <br>
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                        <div class="mdc-form-field">
                            {!! Form::submit(trans('global.app_save'), ['class' => 'mdc-button mdc-button--raised']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {!! Form::close() !!}
    </div>
@stop

@section('javascript')
    @parent
    <script src="//cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
        });
    </script>

    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('.date').datetimepicker({
                format: "{{ config('app.date_format_moment') }}",
                locale: "{{ App::getLocale() }}",
            });
            
        });
    </script>
            
    <script>
        $("#selectbtn-instructor").click(function(){
            $("#selectall-instructor > option").prop("selected","selected");
            $("#selectall-instructor").trigger("change");
        });
        $("#deselectbtn-instructor").click(function(){
            $("#selectall-instructor > option").prop("selected","");
            $("#selectall-instructor").trigger("change");
        });
    </script>

    <script>
        $("#selectbtn-lessons").click(function(){
            $("#selectall-lessons > option").prop("selected","selected");
            $("#selectall-lessons").trigger("change");
        });
        $("#deselectbtn-lessons").click(function(){
            $("#selectall-lessons > option").prop("selected","");
            $("#selectall-lessons").trigger("change");
        });
    </script>

    <script>
        $("#selectbtn-categories").click(function(){
            $("#selectall-categories > option").prop("selected","selected");
            $("#selectall-categories").trigger("change");
        });
        $("#deselectbtn-categories").click(function(){
            $("#selectall-categories > option").prop("selected","");
            $("#selectall-categories").trigger("change");
        });
    </script>

    <script>
        $("#selectbtn-tags").click(function(){
            $("#selectall-tags > option").prop("selected","selected");
            $("#selectall-tags").trigger("change");
        });
        $("#deselectbtn-tags").click(function(){
            $("#selectall-tags > option").prop("selected","");
            $("#selectall-tags").trigger("change");
        });
    </script>
@stop