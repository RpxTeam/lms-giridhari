@include('partials.front')

@foreach($lists as $list)
    @endforeach

<div id="oncourse-page">
    <div class="banner-course" data-bg="{{ url('assets') }}/img/img-course.jpg">
        <div class="gridD">
            <div class="back-button">
                <a href="{{ url('/library') }}"><i class="icon-arrow-left"></i></a>
            </div>
            <h1>A qualidade
                <br>vem de dentro.</h1>
        </div>
    </div>
    <div class="infos-course">
        <div class="gridD">
            <div class="info">
                <i class="icon-tv"></i>
                <span><small>5 módulos</small></span>
            </div>
            <div class="info">
                <i class="icon-book"></i>
                <span><small>15 atividades</small></span>
            </div>
            <div class="info">
                <i class="icon-alarm-clock"></i>
                <span><small>45 min</small></span>
            </div>
        </div>
    </div>
    <div class="timeline">
        <div class="gridD">
            <div class="overflow">
                <div class="item">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <p><small>Modulo 1</small></p>
                </div>
                <div class="item disabled">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <p><small>Modulo 1</small></p>
                </div>
                <div class="item disabled">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <p><small>Modulo 1</small></p>
                </div>
                <div class="item disabled">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <p><small>Modulo 1</small></p>
                </div>
                <div class="item disabled">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <p><small>Modulo 1</small></p>
                </div>
                <div class="item disabled">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <p><small>Modulo 1</small></p>
                </div>
                <div class="item disabled">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <p><small>Modulo 1</small></p>
                </div>
                <div class="item disabled">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <p><small>Modulo 1</small></p>
                </div>
                <div class="item disabled">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <p><small>Modulo 1</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="lessons">
        <div class="gridD">
            <a href="{{ url('/lesson') }}" class="lesson">
                <div class="left">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <div class="text">
                        <p>Aula 1</p>
                        <p>
                            <small>Tutoriais</small>
                        </p>
                    </div>
                </div>
                <div class="btn-start-lesson">
                    <i class="icon-arrow-top rotate90"></i>
                </div>
            </a>
            <a href="{{ url('/lesson') }}" class="lesson">
                <div class="left">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <div class="text">
                        <p>Aula 1</p>
                        <p>
                            <small>Tutoriais</small>
                        </p>
                    </div>
                </div>
                <div class="btn-start-lesson">
                    <i class="icon-arrow-top rotate90"></i>
                </div>
            </a>
            <div class="lesson disabled">
                <div class="left">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <div class="text">
                        <p>Aula 1</p>
                        <p>
                            <small>Tutoriais</small>
                        </p>
                    </div>
                </div>
                <div class="btn-start-lesson">
                    <i class="icon-arrow-top rotate90"></i>
                </div>
            </div>
            <div class="lesson disabled">
                <div class="left">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <div class="text">
                        <p>Aula 1</p>
                        <p>
                            <small>Tutoriais</small>
                        </p>
                    </div>
                </div>
                <div class="btn-start-lesson">
                    <i class="icon-arrow-top rotate90"></i>
                </div>
            </div>
            <div class="lesson disabled">
                <div class="left">
                    <div class="icon">
                        <i class="icon-zen-1"></i>
                    </div>
                    <div class="text">
                        <p>Aula 1</p>
                        <p>
                            <small>Tutoriais</small>
                        </p>
                    </div>
                </div>
                <div class="btn-start-lesson">
                    <i class="icon-arrow-top rotate90"></i>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div class="title-panel" style="background-image: url('/images/background1.jpg');">--}}

    {{--<div class="container">--}}
        {{----}}
        {{--<h2 class="page-title white-text">{{ $course->title }}</h2>--}}

        {{--<a class="btn btn-floating waves-effect waves-light blue tooltipped" data-position="bottom" data-tooltip="Back to Course List"  href="{{ url('library') }}"><i class="material-icons">keyboard_return</i></a>--}}
            {{----}}
      {{----}}
    {{--</div>--}}
    {{----}}
{{--</div>--}}

{{--<div class="charles grey lighten-2">--}}
    {{--<div class="container"> --}}

        {{--<div class="card-course hoverable">--}}
            {{--<!-- <div class="row">--}}
                {{--<div class="col s12">--}}
                    {{--<div class="ck">{!! $course->introduction !!}</div>                                       --}}
                {{--</div>  --}}
            {{--</div>     -->   --}}
            {{--<div class="row">         --}}
                {{--@foreach($lessons as $lesson)--}}
                    {{--<div class="col s12">--}}


                        {{--<div class="content">--}}
                            {{--<h3>Lessons</h3>--}}
                            {{--{{ $lessons->links() }}--}}

                            {{--<div class="card-action">--}}
                                {{--<a class="btn waves-effect waves-light black" href="{{ url('courses/done/'. $lesson->id) }}">Submit Lesson</a>--}}
                            {{--</div>--}}
                            {{----}}
                            {{--<h5>title</h5>--}}
                            {{--<p>{{ $lesson->title }}</p>--}}

                            {{--<h5>slug</h5>--}}
                            {{--<p>{{ $lesson->slug }}</p>--}}

                            {{--<h5>introduction</h5>--}}
                            {{--<p>{{ $lesson->introduction }}</p>--}}

                            {{--<h5>content</h5>--}}
                            {{--<p>{{ $lesson->content }}</p>--}}

                            {{--<h5>study_material</h5>--}}
                            {{--<p>{{ $lesson->study_material }}</p>--}}
                        {{--</div>--}}
                       {{----}}
                        {{----}}

                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}
           {{----}}
        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}
 @include('partials.back')