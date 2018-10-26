@include('partials.front')
<div id="courses-page">
    <div class="banner width-secondary-banner">
        <div class="icon-bg">
            <i class="icon-guirid"></i>
        </div>
        <div class="gridD">
            <div class="title">
                <div class="icon">
                    <i class="icon-course"></i>
                </div>
                <div class="info">
                    <h6>Biblioteca</h6>
                    <p>Essa é a sua plataforma de ensinos, Lorem
                        ipsum dolor sit amet, consectetur adipisicing
                        elit. Amet commodi delectus, excepturi ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="courses-area">
                <div class="course-area active">
                    <a href="#">
                        <i class="icon-zen-2"></i>
                        <span>Meditação</span>
                    </a>
                </div>
                <div class="course-area">
                    <a href="#">
                        <i class="icon-zen-2"></i>
                        <span>Respiração</span>
                    </a>
                </div>
                <div class="course-area">
                    <a href="#">
                        <i class="icon-zen-2"></i>
                        <span>Pensamento</span>
                    </a>
                </div>
            </div>
            <div class="search search-courses">
                <input type="text" class="input-search" placeholder="O que esta procurando?">
                <button><i class="icon-search"></i></button>
            </div>
        </div>
    </div>
    <div class="slider-courses">
        <div class="secondary-banner" data-bg="{{ url('assets') }}/img/img-banner.jpg">
            <div class="gridD">
                <h2>A qualidade
                    vem de dentro.</h2>
                <p>Amet commodi delectus, excepturi ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="secondary-banner" data-bg="{{ url('assets') }}/img/img-banner.jpg">
            <div class="gridD">
                <h2>A qualidade
                    vem de dentro.</h2>
                <p>Amet commodi delectus, excepturi ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
    @if($mycourses->count() != 0)
    <div class="content">
        <div class="gridD">
            @foreach($diff as $course)
            <div class="card">
                <div class="card-header">
                    <div class="left">
                        <div class="icon">
                            <i class="icon-zen-2"></i>
                        </div>
                        <div class="info">
                            <h4>Categoria</h4>
                            <h3>{{ $course->title }}</h3>
                        </div>
                    </div>
                    <div class="right">
                        <a href="#" class="card-btn"><i class="icon-arrow-top rotate180"></i></a>
                    </div>
                </div>
                <div class="card-image" data-bg="{{url('assets')}}/img/img-course.jpg"></div>
                <div class="card-resume">
                    <p>{{ $course->introduction }}</p>
                </div>
                <div class="card-footer buttons">
                    <a href="#"><i class="icon-heart-o"></i></a>
                    <a href="{{ url('courses/add/' . $course->id) }}"><i class="icon-bookmark"></i></a>
                    <a href="{{ url('courses/' . $course->id) }}"><i class="icon-arrow-left rotate180"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        @foreach($courses as $course)
            <div class="card">
                <div class="card-header">
                    <div class="left">
                        <div class="icon">
                            <i class="icon-zen-2"></i>
                        </div>
                        <div class="info">
                            <h4>Categoria</h4>
                            <h3>{{ $course->title }}</h3>
                        </div>
                    </div>
                    <div class="right">
                        <a href="#" class="card-btn"><i class="icon-arrow-top rotate180"></i></a>
                    </div>
                </div>
                <div class="card-image" data-bg="{{url('assets')}}/img/img-course.jpg"></div>
                <div class="card-resume">
                    <p>{{ $course->introduction }}</p>
                </div>
                <div class="card-footer buttons">
                    <a href="#"><i class="icon-heart"></i></a>
                    <a href="{{ url('courses/add/' . $course->id) }}"><i class="icon-bookmark"></i></a>
                    <a href="{{ url('courses/' . $course->id) }}"><i class="icon-arrow-left rotate180"></i></a>
                </div>
            </div>
        @endforeach
    @endif
</div>
@include('partials.back')