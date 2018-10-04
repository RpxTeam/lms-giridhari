@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="rpx-main__content mdc-theme--background mdc-theme--text-primary-on-background">

        <div class="mdc-layout-grid rpx-dashboard">
            <div class="mdc-layout-grid__inner">
                @if($mytestimonals->count() != 0)

                    {!! Form::open(['method' => 'POST', 'route' => ['admin.savefeedback'], 'files' => true,]) !!}

                    <div class="rpx-widget mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                        <h3 class="rpx-pages__subheading">
                            Nos de seu feedback sobre o curso: {{$mytestimonals[0]->title}}
                        </h3>
                        <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                            {!! Form::label('rating', trans('global.datacourse.fields.rating').'') !!}
                            {!! Form::number('rating', old('rating'), ['class' => 'validate']) !!}
                            <span class="helper-text" data-error="@if($errors->has('rating')){{ $errors->first('rating') }}@endif" data-success="right"></span>
                        </div>
                        <div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
                            {!! Form::label('testimonal', trans('Feedback').'') !!}
                            {!! Form::textarea('testimonal', old('testimonal'), ['class' => 'materialize-textarea ']) !!}
                            <span class="helper-text" data-error="@if($errors->has('testimonal')){{ $errors->first('testimonal') }}@endif" data-success="right"></span>
                        </div>
                        <input type="hidden" value="{{ $mytestimonals[0]->user_id }}" name="user_id">
                        <input type="hidden" value="{{ $mytestimonals[0]->course_id }}" name="course_id">
                        {!! Form::submit(trans('global.app_save'), ['class' => 'btn waves-effect waves-light white']) !!}
                        {!! Form::close() !!}
                    </div>
                @endif

                <div class="rpx-widget mdc-layout-grid__cell--span-8-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                    <p class="rpx-widget__heading mdc-typography--subheading2">Portal Analytics</p>
                    <div class="mdc-card mdc-card--rpx-fullheight mdc-card--rpx-space-between rpx-widget__card">
                        <nav id="rpx-stats-chart-nav" class="mdc-tab-bar mdc-tab-bar--rpx-border-bottom mdc-tab-bar--rpx-display-block">
                            <a class="mdc-tab mdc-tab--rpx-link mdc-tab--active">
                                <div class="mdc-tab__rpx-stat-tab">
                                    <span class="mdc-typography--caption mdc-tab__rpx-stat-caption">Users</span>
                                    <span class="mdc-typography--title">2.9K</span>
                                    <span class="mdc-typography--caption mdc-tab__rpx-stat-caption mdc-tab__rpx-stat-caption--trend-up">
                                            <i class="material-icons mdc-tab__rpx-stat-icon">trending_up</i> 23%
                                        </span>
                                </div>
                            </a>
                            <a class="mdc-tab mdc-tab--rpx-link">
                                <div class="mdc-tab__rpx-stat-tab">
                                    <span class="mdc-typography--caption mdc-tab__rpx-stat-caption">Revenue</span>
                                    <span class="mdc-typography--title">$2906</span>
                                    <span class="mdc-typography--caption mdc-tab__rpx-stat-caption mdc-tab__rpx-stat-caption--trend-down">
                                            <i class="material-icons mdc-tab__rpx-stat-icon">trending_down</i> -56%
                                        </span>
                                </div>
                            </a>
                            <a class="mdc-tab mdc-tab--rpx-link">
                                <div class="mdc-tab__rpx-stat-tab">
                                    <span class="mdc-typography--caption mdc-tab__rpx-stat-caption">Conversion Rate</span>
                                    <span class="mdc-typography--title">0.24%</span>
                                    <span class="mdc-typography--caption mdc-tab__rpx-stat-caption mdc-tab__rpx-stat-caption--trend-up">
                                            <i class="material-icons mdc-tab__rpx-stat-icon">trending_up</i> 29%
                                        </span>
                                </div>
                            </a>
                            <a class="mdc-tab mdc-tab--rpx-link">
                                <div class="mdc-tab__rpx-stat-tab">
                                    <span class="mdc-typography--caption mdc-tab__rpx-stat-caption">Sessions</span>
                                    <span class="mdc-typography--title">5.2K</span>
                                    <span class="mdc-typography--caption mdc-tab__rpx-stat-caption mdc-tab__rpx-stat-caption--trend-down">
                                            <i class="material-icons mdc-tab__rpx-stat-icon">trending_up</i> 79%
                                        </span>
                                </div>
                            </a>
                            <span class="mdc-tab-bar__indicator"></span>
                        </nav>
                        <div class="rpx-tab-panel rpx-tab-panel--active rpx-analytics-panel" role="tabpanel">
                            <canvas id="analyticsChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="rpx-widget mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                    <p class="rpx-widget__heading mdc-typography--subheading2 rpx-widget__heading--tall">Recents users added</p>
                    <div class="mdc-card rpx-widget__card rpx-widget__card--rounded mdc-card--rpx-fullheight mdc-card--rpx-space-between">
                        <div class="mdc-list mdc-list--two-line mdc-list--avatar-list">
                            @foreach($users as $user)
                            <div class="mdc-list-item">
                                <img class="mdc-list-item__graphic" src="{{ url('images/no-person.jpg') }}" width="56" height="56" alt="Developer">
                                <span class="mdc-list-item__text">
                                    {{$user->name}} {{$user->last_name}}
                                    <span class="mdc-list-item__secondary-text">12 closed issues, 2 new</span>
                                </span>
                                <span class="mdc-list-item__meta rpx-badge rpx-badge--secondary">2</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="mdc-layout-grid__inner">
                <div class="rpx-widget mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                    <p class="rpx-widget__heading mdc-typography--subheading2">Sessions By Device</p>
                    <div class="mdc-card rpx-widget__card mdc-card--rpx-fullheight mdc-card--rpx-space-between">
                        <div class="rpx-tab-sessions-chart">
                            <canvas id="sessionsChart"></canvas>
                        </div>
                        <div class="mdc-card__rpx-divider"></div>
                        <section class="rpx-sessions-flex rpx-widget__card-content rpx-widget__card-icons-dots">
                            <div class="rpx-text-align-center rpx-sessions-flex__item">
                                <div class="rpx-widget__card-icons-dots__icon">
                                    <i class="fa fa-laptop"></i>
                                    <span></span>
                                </div>
                                <div class="mdc-typography--caption">Desktop</div>
                                <div class="mdc-typography--display1 rpx-font-weight-light">25</div>
                            </div>
                            <div class="rpx-text-align-center rpx-sessions-flex__item">
                                <div class="rpx-widget__card-icons-dots__icon">
                                    <i class="fa fa-tablet"></i>
                                    <span></span>
                                </div>
                                <div class="mdc-typography--caption">Tablet</div>
                                <div class="mdc-typography--display1 rpx-font-weight-light">5</div>
                            </div>
                            <div class="rpx-text-align-center rpx-sessions-flex__item">
                                <div class="rpx-widget__card-icons-dots__icon">
                                    <i class="fa fa-mobile"></i>
                                    <span></span>
                                </div>
                                <div class="mdc-typography--caption">Mobile</div>
                                <div class="mdc-typography--display1 rpx-font-weight-light">11</div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="rpx-widget mdc-layout-grid__cell--span-5-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                    <p class="rpx-widget__heading mdc-typography--subheading2">Recents Courses Added</p>
                    <div class="mdc-card rpx-widget__card mdc-card--rpx-fullheight mdc-card--rpx-space-between">
                        <nav class="courses-nav mdc-tab-bar mdc-tab-bar--rpx-border-bottom  mdc-tab-bar--rpx-display-block">
                            <a class="mdc-tab mdc-tab--rpx-link mdc-tab--active">
                                Courses
                            </a>
                            <a class="mdc-tab mdc-tab--rpx-link">
                                Lessons
                            </a>
                            <span class="mdc-tab-bar__indicator"></span>
                        </nav>
                        <div class="courses-tabs">
                            <table class="mdl-data-table rpx-table-tab-panel rpx-table-tab-panel--active">
                                <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">Nome do curso</th>
                                    <th>Duration</th>
                                    <th>Lessons</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($courses as $course)
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{ $course->title }}</td>
                                        <td>{{ $course->duration }}</td>
                                        <td>{{ $course->lessons->count() }}</td>
                                        <td>
                                            {!! Form::open(array(
                                                'class' => 'secondary-content',
                                                'method' => 'DELETE',
                                                'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                                'route' => ['admin.courses.destroy', $course->id])) !!}
                                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['class'=>'waves-effect waves-light btn-small btn-square red-text', 'type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <table class="mdl-data-table rpx-table-tab-panel">
                                <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">Title</th>
                                    <th>Slug</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($lessons as $lesson)
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{ $lesson->title }}</td>
                                        <td>{{ $lesson->slug }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="rpx-widget mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                    <p class="rpx-widget__heading mdc-typography--subheading2">Recents trails added</p>
                    <div class="mdc-card rpx-widget__card mdc-card--rpx-fullheight mdc-card--rpx-space-between">
                        <nav class="trails-nav mdc-tab-bar mdc-tab-bar--rpx-border-bottom  mdc-tab-bar--rpx-display-block">
                            <a class="mdc-tab mdc-tab--rpx-link mdc-tab--active">
                                Trails
                            </a>
                            <a class="mdc-tab mdc-tab--rpx-link">
                                Categories
                            </a>
                            <span class="mdc-tab-bar__indicator"></span>
                        </nav>
                        <div class="trails-tabs">
                            <table class="mdl-data-table rpx-table-tab-panel rpx-table-tab-panel--active">
                                <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">Title</th>
                                    <th>Courses</th>
                                    <th>Approved</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($trails as $trail)
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{ $trail->title }}</td>
                                        <td>{{ $trail->courses->count() }}</td>
                                        <td>@if($trail->approved) Yes @else No @endif</td>
                                        <td>{!! Form::open(array(
                                                'class' => 'secondary-content',
                                                'method' => 'DELETE',
                                                'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                                'route' => ['admin.courses.destroy', $course->id])) !!}
                                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['class'=>'waves-effect waves-light btn-small btn-square red-text', 'type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <table class="mdl-data-table rpx-table-tab-panel">
                                <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">Category</th>
                                    <th>Slug</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($trailscategories as $trailscategory)
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $trailscategory->title }}</td>
                                    <td>{{ $trailscategory->slug }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="rpx-widget mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                    <p class="rpx-widget__heading mdc-typography--subheading2">Recents Certificates added</p>
                    <div class="mdc-card rpx-widget__card mdc-card--rpx-fullheight mdc-card--rpx-space-between">
                        <div class="trails-tabs">
                            <table class="mdl-data-table rpx-table-tab-panel rpx-table-tab-panel--active">
                                <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">Title</th>
                                    <th>Created at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($certificates as $certificate)
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{ $certificate->title }}</td>
                                        <td>{{ $certificate->created_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @if($mycertificates->count() > 0)
                <div class="rpx-widget mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                    <p class="rpx-widget__heading mdc-typography--subheading2">Recents trails added</p>
                    <div class="mdc-card rpx-widget__card mdc-card--rpx-fullheight mdc-card--rpx-space-between">
                        <div class="trails-tabs">
                            <table class="mdl-data-table rpx-table-tab-panel rpx-table-tab-panel--active">
                                <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">Title</th>
                                    <th>Created at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($mycertificates as $mycertificate)
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{ $mycertificate->title }}</td>
                                        <td>{{ $mycertificate->created_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if($faqquestions->count() > 0)
                <div class="rpx-widget mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                    <p class="rpx-widget__heading mdc-typography--subheading2">Recents Faq questions added</p>
                    <div class="mdc-card rpx-widget__card mdc-card--rpx-fullheight mdc-card--rpx-space-between">
                        <div class="trails-tabs">
                            <table class="mdl-data-table rpx-table-tab-panel rpx-table-tab-panel--active">
                                <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric"> @lang('global.faq-questions.fields.question-text')</th>
                                    <th> @lang('global.faq-questions.fields.answer-text')</th>
                                    <th>Created at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($faqquestions as $faqquestion)
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{ $faqquestion->question_text }}</td>
                                        <td>{{ $faqquestion->answer_text }}</td>
                                        <td>{{ $faqquestion->created_at }}</td>
                                        <td>{!! Form::open(array(
                                                'class' => 'secondary-content',
                                                'method' => 'DELETE',
                                                'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                                'route' => ['admin.faq_questions.destroy', $course->id])) !!}
                                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['class'=>'waves-effect waves-light btn-small btn-square red-text', 'type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
@endsection
