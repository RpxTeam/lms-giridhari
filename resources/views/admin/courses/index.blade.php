@inject('request', 'Illuminate\Http\Request')
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
            <li><span>@lang('global.courses.title')</span></li>
        </ul>
        @can('course_create')
        <a href="{{ route('admin.courses.create') }}" class="mdc-button mdc-button--stroked">
            Add Course
        </a>
        @endcan
    </div>

    <div class="rpx-content">
        <nav class="mdc-list rpx-navigation-list rpx-tabs-externs">
            <a href="{{ route('admin.courses.index') }}" class="rpx-navigation-list__item mdc-list-item {{ request('show_deleted') == 1 ? '' : 'active' }}">
                <span class="rpx-navigation-list__text">
                    @lang('global.app_all')
                </span>
            </a>

            <a href="{{ route('admin.courses.index') }}?show_deleted=1" class="rpx-navigation-list__item mdc-list-item {{ request('show_deleted') == 1 ? 'active' : '' }}">
                <span class="rpx-navigation-list__text">
                    @lang('global.app_trash')
                </span>
            </a>
        </nav>

        <div class="card">
            <div class="title">
                <h3>@lang('global.app_list')</h3>
            </div>

            <div class="card-content">
                <table class="table table-striped responsive-table no-order dataTable ajaxTable @can('course_delete') @if ( request('show_deleted') != 1 ) dt-select @else dt-show @endif @endcan" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="order-null"></th>
                            @can('course_delete')
                                @if ( request('show_deleted') != 1 )<th><input type="checkbox" id="select-all" /><label for="select-all"></label></th>@endif
                            @endcan

                            <th>@lang('global.courses.fields.title')</th>
                            <th>@lang('global.courses.fields.slug')</th>
                            <th>@lang('global.courses.fields.duration')</th>
                            <th>@lang('global.courses.fields.start-date')</th>
                            <th>@lang('global.courses.fields.end-date')</th>
                            <th>@lang('global.courses.fields.categories')</th>
                            <th>@lang('global.courses.fields.tags')</th>
                            <th>@lang('global.courses.fields.approved')</th>
                            @if( request('show_deleted') == 1 )
                            <th>&nbsp;</th>
                            @else
                            <th>&nbsp;</th>
                            @endif
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('course_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.courses.mass_destroy') }}'; @endif
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.courses.index') !!}?show_deleted={{ request('show_deleted') }}';
            window.dtDefaultOptions.columns = [@can('course_delete')
                @endcan
                    {data: 'order', name: 'order', className: 'order-null'},
                @if ( request('show_deleted') != 1 )
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endif
                {data: 'title', name: 'title'},
                {data: 'slug', name: 'slug'},
                {data: 'duration', name: 'duration'},
                {data: 'start_date', name: 'start_date'},
                {data: 'end_date', name: 'end_date'},
                {data: 'categories.title', name: 'categories.title'},
                {data: 'tags.title', name: 'tags.title'},
                {data: 'approved', name: 'approved'},
                
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection