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
            <li><span>{{ $course->title }}</span></li>
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
                <h2 class="mdc-typography--display1">@lang('global.app_view')</h2>
            </div>

            <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-12-phone">
                <div class="mdc-card rpx-widget__card mdc-card--rpx-fullheight mdc-card--rpx-space-between">
                    <div class="rpx-clients-table">
                        <table class="mdl-data-table rpx-table-tab-panel rpx-table-tab-panel--active">
                            <tbody>
                                <tr>
                                    <th class="">@lang('global.courses.fields.order')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='order'>{{ $course->order }}</td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.title')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='title'>{{ $course->title }}</td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.slug')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='slug'>{{ $course->slug }}</td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.description')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='description'>{!! $course->description !!}</td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.introduction')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='introduction'>{!! $course->introduction !!}</td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.featured-image')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='featured_image'>@if($course->featured_image)
                                            <a href="{{ asset(env('UPLOAD_PATH').'/' . $course->featured_image) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $course->featured_image) }}"/></a>@endif</td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.instructor')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='instructor'>
                                        @foreach ($course->instructor as $singleInstructor)
                                            <span class="label label-info label-many">{{ $singleInstructor->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.lessons')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='lessons'>
                                        @foreach ($course->lessons as $singleLessons)
                                            <span class="label label-info label-many">{{ $singleLessons->title }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.duration')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='duration'>{{ $course->duration }}</td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.start-date')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='start_date'>{{ $course->start_date }}</td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.end-date')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='end_date'>{{ $course->end_date }}</td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.categories')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='categories'>
                                        @foreach ($course->categories as $singleCategories)
                                            <span class="label label-info label-many">{{ $singleCategories->title }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.tags')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='tags'>
                                        @foreach ($course->tags as $singleTags)
                                            <span class="label label-info label-many">{{ $singleTags->title }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th class="">@lang('global.courses.fields.approved')</th>
                                    <td class="mdl-data-table__cell--non-numeric" field-key='approved'>@if($course->approved) Yes @else No @endif</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">

        <div class="card-content">
            <div class="card-tabs">

            <nav id="top-example-tab-bar" class="mdc-tab-bar" role="tablist">
                <a class="mdc-tab mdc-tab--active">Data Course</a>
                <a class="mdc-tab">Trails</a>
                <span class="mdc-tab-bar__indicator"></span>
            </nav>

            </div>
            <div class="active" id="datacourse">
                <table class="striped responsive-table {{ count($datacourses) > 0 ? 'datatable' : '' }}">
                    <thead>
                        <tr>
                            <th>@lang('global.datacourse.fields.view')</th>
                            <th>@lang('global.datacourse.fields.progress')</th>
                            <th>@lang('global.datacourse.fields.rating')</th>
                            <th>@lang('global.datacourse.fields.testimonal')</th>
                            <th>@lang('global.datacourse.fields.user')</th>
                            <th>@lang('global.datacourse.fields.course')</th>
                            <th>@lang('global.datacourse.fields.certificate')</th>
                            @if( request('show_deleted') == 1 )
                            <th>&nbsp;</th>
                            @else
                            <th>&nbsp;</th>
                            @endif
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($datacourses) > 0)
                            @foreach ($datacourses as $datacourse)
                                <tr data-entry-id="{{ $datacourse->id }}">
                                    <td field-key='view'>{{ $datacourse->view }}</td>
                                    <td field-key='progress'>{{ $datacourse->progress }}</td>
                                    <td field-key='rating'>{{ $datacourse->rating }}</td>
                                    <td field-key='testimonal'>{!! $datacourse->testimonal !!}</td>
                                    <td field-key='user'>{{ $datacourse->user->name or '' }}</td>
                                    <td field-key='course'>{{ $datacourse->course->title or '' }}</td>
                                    <td field-key='certificate'>{{ $datacourse->certificate->title or '' }}</td>
                                    @if( request('show_deleted') == 1 )
                                    <td>
                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'POST',
                                            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                            'route' => ['admin.datacourses.restore', $datacourse->id])) !!}
                                        {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                        {!! Form::close() !!}
                                                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'DELETE',
                                            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                            'route' => ['admin.datacourses.perma_del', $datacourse->id])) !!}
                                        {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                        {!! Form::close() !!}
                                                                    </td>
                                    @else
                                    <td>
                                        <div class="buttons">
                                            @can('datacourse_view')
                                            <a href="{{ route('admin.datacourses.show',[$datacourse->id]) }}" class="waves-effect waves-light btn-small btn-square amber-text"><i class="material-icons">remove_red_eye</i></a>
                                            @endcan
                                            @can('datacourse_edit')
                                            <a href="{{ route('admin.datacourses.edit',[$datacourse->id]) }}" class="waves-effect waves-light btn-small btn-square blue-text"><i class="material-icons">edit</i></a>
                                            @endcan
                                            @can('datacourse_delete')
                                            {!! Form::open(array(
                                                'style' => 'display: inline-block;',
                                                'method' => 'DELETE',
                                                'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                                'route' => ['admin.datacourses.destroy', $datacourse->id])) !!}
                                            {!! Form::button('<i class="material-icons">delete</i>', ['class'=>'waves-effect waves-light btn-small btn-square red', 'type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                            @endcan
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="12">@lang('global.app_no_entries_in_table')</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div id="trails">
                <table class="striped responsive-table {{ count($trails) > 0 ? 'datatable' : '' }}">
                    <thead>
                        <tr>
                            <th>@lang('global.trails.fields.order')</th>
                            <th>@lang('global.trails.fields.title')</th>
                            <th>@lang('global.trails.fields.slug')</th>
                            <th>@lang('global.trails.fields.description')</th>
                            <th>@lang('global.trails.fields.introduction')</th>
                            <th>@lang('global.trails.fields.featured-image')</th>
                            <th>@lang('global.trails.fields.courses')</th>
                            <th>@lang('global.trails.fields.start-date')</th>
                            <th>@lang('global.trails.fields.end-date')</th>
                            <th>@lang('global.trails.fields.categories')</th>
                            <th>@lang('global.trails.fields.tags')</th>
                            <th>@lang('global.trails.fields.approved')</th>
                            @if( request('show_deleted') == 1 )
                            <th>&nbsp;</th>
                            @else
                            <th>&nbsp;</th>
                            @endif
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($trails) > 0)
                            @foreach ($trails as $trail)
                                <tr data-entry-id="{{ $trail->id }}">
                                    <td field-key='order'>{{ $trail->order }}</td>
                                    <td field-key='title'>{{ $trail->title }}</td>
                                    <td field-key='slug'>{{ $trail->slug }}</td>
                                    <td field-key='description'>{!! $trail->description !!}</td>
                                    <td field-key='introduction'>{!! $trail->introduction !!}</td>
                                    <td field-key='featured_image'>{{ $trail->featured_image }}</td>
                                    <td field-key='courses'>
                                        @foreach ($trail->courses as $singleCourses)
                                            <span class="label label-info label-many">{{ $singleCourses->title }}</span>
                                        @endforeach
                                    </td>
                                    <td field-key='start_date'>{{ $trail->start_date }}</td>
                                    <td field-key='end_date'>{{ $trail->end_date }}</td>
                                    <td field-key='categories'>
                                        @foreach ($trail->categories as $singleCategories)
                                            <span class="label label-info label-many">{{ $singleCategories->title }}</span>
                                        @endforeach
                                    </td>
                                    <td field-key='tags'>
                                        @foreach ($trail->tags as $singleTags)
                                            <span class="label label-info label-many">{{ $singleTags->title }}</span>
                                        @endforeach
                                    </td>
                                    <td field-key='approved'>{{ Form::checkbox("approved", 1, $trail->approved == 1 ? true : false, ["disabled"]) }}</td>
                                    @if( request('show_deleted') == 1 )
                                    <td>
                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'POST',
                                            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                            'route' => ['admin.trails.restore', $trail->id])) !!}
                                        {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                        {!! Form::close() !!}
                                                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'DELETE',
                                            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                            'route' => ['admin.trails.perma_del', $trail->id])) !!}
                                        {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                        {!! Form::close() !!}
                                                                    </td>
                                    @else
                                    <td>
                                        <div class="buttons">
                                            @can('trail_view')
                                            <a href="{{ route('admin.trails.show',[$trail->id]) }}" class="waves-effect waves-light btn-small btn-square amber-text"><i class="material-icons">remove_red_eye</i></a>
                                            @endcan
                                            @can('trail_edit')
                                            <a href="{{ route('admin.trails.edit',[$trail->id]) }}" class="waves-effect waves-light btn-small btn-square blue-text"><i class="material-icons">edit</i></a>
                                            @endcan
                                            @can('trail_delete')
                                            {!! Form::open(array(
                                                'style' => 'display: inline-block;',
                                                'method' => 'DELETE',
                                                'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                                'route' => ['admin.trails.destroy', $trail->id])) !!}
                                            {!! Form::button('<i class="material-icons">delete</i>', ['class'=>'waves-effect waves-light btn-small btn-square red', 'type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                            @endcan
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="17">@lang('global.app_no_entries_in_table')</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
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

    <script>

        (function() {
            // Tab bar with scroller example.
            const tabBarScroller = new mdc.tabs.MDCTabBarScroller(document.querySelector('#tab-bar-scroller'));
            tabBarScroller.layout();
            tabBarScroller.tabBar.layout();
            // Icon & text labels example.
            const iconTextTabBar = new mdc.tabs.MDCTabBar(document.querySelector('#icon-text-tab-bar'));
            iconTextTabBar.layout();

            // Listens to direction change to relayout tabs(for RTL).
            const body = document.getElementsByTagName('body').item(0);
            body.addEventListener('portalDirectionChanged', function () {
                basicTabBar.layout();
                tabBarScroller.layout();
                tabBarScroller.tabBar.layout();
                iconTextTabBar.layout();
            });
        })();
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
            
@stop
