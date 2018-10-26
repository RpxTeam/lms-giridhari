@include('partials.front')
<div id="my-courses-page">
    <div class="banner">
        <div class="icon-bg">
            <i class="icon-guirid"></i>
        </div>
        <div class="gridD">
            <div class="title">
                <div class="icon">
                    <i class="icon-courses"></i>
                </div>
                <div class="info">
                    <h6>Meus Cursos</h6>
                    <p>Essa é a sua plataforma de ensinos, Lorem
                        ipsum dolor sit amet, consectetur adipisicing
                        elit. Amet commodi delectus, excepturi ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="gridD">
            @if($mycourses->count() != 0)
                @foreach($mycourses as $mycourse)
            <div class="card">
                <div class="card-header">
                    <div class="left">
                        <div class="icon">
                            <i class="icon-zen-2"></i>
                        </div>
                        <div class="info">
                            <h4>Categoria</h4>
                            <h3>{{ $mycourse->title }}</h3>
                        </div>
                    </div>
                    <div class="right">
                        <a href="#" class="card-btn"><i class="icon-arrow-top rotate180"></i></a>
                    </div>
                </div>
                <div class="card-image" data-bg="{{url('assets')}}/img/img-course.jpg"></div>
                <div class="card-content">
                    <div class="progress">
                        <div class="row">
                            <div class="activity">
                                <p><strong>Seu avanço</strong></p>
                                {{--<p>150/600 atividades</p>--}}
                            </div>
                            <div class="percent">
                                @if ($mycourse->progress === null)
                                <p>0% </p>
                                @else
                                    <p>{{ number_format($mycourse->progress, 0, '.', '') }} %</p>
                                @endif
                            </div>
                        </div>
                        <div class="progress-bar">
                            @if ($mycourse->progress === null)
                                <div class="bar"></div>
                            @else
                                <div class="bar" style="width: {{ number_format($mycourse->progress, 0, '.', '') }}%;"></div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer buttons">
                    <a href="#"><i class="icon-heart-o"></i></a>
                    <a href="{{ url('/courses/remove/' . $mycourse->id) }}"><i class="icon-bookmark-o"></i></a>
                    <a href="{{ url('/courses/start/' . $mycourse->course_id) }}"><i class="icon-arrow-left rotate180"></i></a>
                    {{--<a class="btn btn-floating waves-effect waves-light blue tooltipped" data-position="bottom" data-tooltip="View Course" href="{{ url('courses/'. $mycourse->course_id) }}"><i class="material-icons">remove_red_eye</i></a>--}}
                    {{--<a class="btn btn-floating waves-effect waves-light red tooltipped modal-trigger" data-target="#remove{{$mycourse->course_id}}" href="#modal2" data-position="bottom" data-tooltip="Remove from Courses"><i class="material-icons">remove</i></a>--}}
                    {{--<a class="btn btn-floating waves-effect waves-light black tooltipped" data-position="bottom" data-tooltip="Start Course" href="{{ url('courses/start/'. $mycourse->course_id) }}"><i class="material-icons">play_arrow</i></a>--}}
                </div>
            </div>
            @endforeach
            @else
                <p>Você não tem cursos adicionados!!</p>
            @endif
        </div>
    </div>
</div>
@include('partials.back')