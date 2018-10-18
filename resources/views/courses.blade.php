 @include('partials.front')

 <div id="course-page">
     <div class="banner-course" data-bg="{{ url('assets') }}/img/img-course.jpg">
         <div class="gridD">
             <div class="back-button">
                 <a href="{{ url()->previous() }}"><i class="icon-arrow-left"></i></a>
             </div>
             <h1>A qualidade
                 <br>vem de dentro.</h1>
             <div class="rating">
                 <div class="stars">
                     <i class="icon-star-o"></i>
                     <i class="icon-star-o"></i>
                     <i class="icon-star-o"></i>
                     <i class="icon-star"></i>
                 </div>
                 <p>87% dos alunos recomendam esse curso.</p>
             </div>
         </div>
     </div>
     <div class="infos-course">
         <div class="info">
             <i class="icon-tv"></i>
             <span>5 módulos</span>
         </div>
         <div class="info">
             <i class="icon-book"></i>
             <span>15 atividades</span>
         </div>
         <div class="info">
             <i class="icon-alarm-clock"></i>
             <span>45 min</span>
         </div>
     </div>
     <div class="content">
         <div class="navtabs">
             <div class="gridD">
                 <ul>
                     <li><a href="#" data-tab="detalhes"><small>DETALHES</small></a></li>
                     <li><a href="#" data-tab="avaliacoes"><small>AVALIAÇÕES</small></a></li>
                     <li><a href="#" data-tab="conteudo"><small>CONTEÚDO</small></a></li>
                 </ul>
                 <div class="navtabs-bar"></div>
             </div>
         </div>
         <div class="navtabs-content">
             <div class="tab-content detalhes">
                 <div class="gridD">
                     <div class="course-name">
                         <p>Nome do curso</p>
                     </div>
                     <div class="about-course">
                         <p><small>Sobre o Curso</small></p>
                     </div>
                     <div class="content-course">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem dolores enim eos hic illo inventore iure libero magnam minima minus obcaecati optio pariatur porro quibusdam quos reiciendis, sapiente sint veritatis.
                         </p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem dolores enim eos hic illo inventore iure libero magnam minima minus obcaecati optio pariatur porro quibusdam quos reiciendis, sapiente sint veritatis.
                         </p>
                     </div>
                     <div class="intructors">
                         <span>Instrutores:</span>
                         <p><span>Lore 1</span><span>Lore 2</span><span>Lore 3</span>.</p>
                     </div>
                 </div>
             </div>
             <div class="tab-content avaliacoes">
                 <div class="number-rating">
                     <div class="stars">
                         <div class="star-o"></div>
                         <div class="star-o"></div>
                         <div class="star-o"></div>
                         <div class="star-o"></div>
                         <div class="star"></div>
                     </div>
                     <p>4530 estão satisfeitas com esse curso.</p>
                 </div>
                 <div class="testimonials">
                     <div class="testimonial">
                         <div class="avatar">
                             <div class="image"></div>
                         </div>
                         <div class="text">
                             <h6>Aluna Lore</h6>
                             <div class="stars">
                                 <div class="star-o"></div>
                                 <div class="star-o"></div>
                                 <div class="star-o"></div>
                                 <div class="star"></div>
                                 <div class="star"></div>
                                 <span>3/5</span>
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto.</p>
                         </div>
                     </div>
                     <div class="testimonial">
                         <div class="avatar">
                             <div class="image"></div>
                         </div>
                         <div class="text">
                             <h6>Aluna Lore</h6>
                             <div class="stars">
                                 <div class="star-o"></div>
                                 <div class="star-o"></div>
                                 <div class="star-o"></div>
                                 <div class="star"></div>
                                 <div class="star"></div>
                                 <span>3/5</span>
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto.</p>
                         </div>
                     </div>
                     <div class="testimonial">
                         <div class="avatar">
                             <div class="image"></div>
                         </div>
                         <div class="text">
                             <h6>Aluna Lore</h6>
                             <div class="stars">
                                 <div class="star-o"></div>
                                 <div class="star-o"></div>
                                 <div class="star-o"></div>
                                 <div class="star"></div>
                                 <div class="star"></div>
                                 <span>3/5</span>
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto.</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tab-content conteudo">
                 <div class="gridD">
                     <p><i class="icon-lotus"></i></p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto.</p>
                     <p><i class="icon-zen-1"></i></p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto.</p>
                     <p><i class="icon-eye"></i></p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto.</p>
                 </div>
             </div>
         </div>
     </div>
     <div class="btn-start">
         <a href="#"><i class="icon-courses"></i>INICIAR CURSO</a>
     </div>
 </div>


    {{--@foreach($lists as $list)--}}
    {{--@endforeach--}}
    {{--@foreach($datacourses as $datacourse)--}}
    {{--@endforeach--}}

    {{--<div class="title-panel" style="background-image: url('../images/background1.jpg');">--}}

        {{--<div class="container">--}}
            {{----}}
            {{--<!-- <img class="responsive-img" src="../images/background1.jpg"> -->--}}
            {{--<h2 class="page-title white-text">{{ $course->title }}</h2>--}}
            {{--@if (Auth::check())--}}
                {{--@if ($list->view === null)--}}
            {{--<a class="btn btn-floating waves-effect waves-light green tooltipped" data-position="bottom" data-tooltip="Add to Courses" href="{{ url('courses/add/'. $course->id) }}"><i class="material-icons">add</i></a>--}}
                {{--@else--}}
            {{--<a class="btn btn-floating waves-effect waves-light black tooltipped" data-position="bottom" data-tooltip="Start Course"  href="{{ url('courses/start/'. $course->id) }}"><i class="material-icons">play_arrow</i></a>--}}
                {{--@endif--}}
            {{--@else--}}
            {{--<a class="btn btn-floating waves-effect waves-light black modal-trigger tooltipped" data-position="bottom" data-tooltip="Login to Start" data-target="modal1" href="#modal1"><i class="material-icons">person</i></a>--}}
            {{--@endif--}}
            {{--<a class="btn btn-floating waves-effect waves-light blue tooltipped" data-position="bottom" data-tooltip="Back to Course List"  href="{{ url('library') }}"><i class="material-icons">keyboard_return</i></a>--}}
         {{----}}
         {{--</div>--}}
        {{----}}
    {{--</div>--}}

    {{--<div class="charles grey lighten-2">--}}
        {{--<div class="container">--}}
            {{--<div class="card-course hoverable">--}}
                {{--<div class="row">--}}

                    {{--<div class="col s12">--}}
                        {{--<div class="ck">{!! $course->introduction !!}</div>                                       --}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{----}}
            {{--<div class="row kappa">     --}}
                    {{--<div class="col m6 s12">--}}
                        {{----}}
                        {{--<h4>Lessons</h4>--}}
                        {{--<p class="grey-text">What {{ $course->title }} will teach you</p>--}}

                        {{--<ul class="collapsible popout">--}}
                            {{--@foreach ($course->lessons as $singleLessons)--}}
                            {{--<li>--}}
                                {{--<div class="collapsible-header white"><i class="material-icons">navigate_next</i>{{ $singleLessons->title }}<span class="new badge blue"></span></div>--}}
                                {{--<div class="collapsible-body white"><span>{{ $singleLessons->introduction }}</span></div>--}}
                            {{--</li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}

                    {{--</div>                    --}}

                    {{--<div class="col m5 s12 offset-m1">--}}

                        {{--<h4>Testimonal</h4>--}}
                        {{--<p class="grey-text">What people talk about {{ $course->title }}.</p>--}}

                        {{--<ul class="collection shadow">--}}

                            {{--@foreach($datas as $data)--}}
                            {{----}}
                            {{--@if ($data->testimonal === null)--}}
                            {{--@else--}}
                            {{--<li class="collection-item avatar ">--}}
                                {{--<img src="../images/background1.jpg" alt="" class="circle">--}}
                                {{--<span class="title blue-text">{{ $data->name }} {{ $data->lastname }}</span>--}}
                                {{--<p>{{ $data->testimonal }}</p> --}}

                                {{--<a href="#!" class="pupa amber-text">--}}
                                    {{--{{ $data->rating }}--}}
                                {{--</a>--}}
                                {{--<a href="#!" class="pepe">--}}
                                    {{--<i class="material-icons amber-text">grade</i>--}}
                                {{--</a>--}}

                            {{--</li>--}}
                            {{--@endif--}}

                            {{--@endforeach                         --}}

                        {{--</ul>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    

 @include('partials.back')