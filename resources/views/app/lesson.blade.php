@include('partials.front')

<div id="lesson-page">
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
    <div class="info-lesson">
        <div class="gridD">
            <div class="icon">
                <i class="icon-zen-1"></i>
            </div>
            <div class="text">
                <p>Aula 1</p>
                <p><small>Tutoriais</small>
            </div>
        </div>
    </div>
    <div class="content-lesson">
        <div class="gridD">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem dolores enim eos hic illo inventore iure libero magnam minima minus obcaecati optio pariatur porro quibusdam quos reiciendis, sapiente sint veritatis.</p>
        </div>
    </div>
    <div class="btn-start">
        <a href="{{ url('/lesson') }}/start/1"><i class="icon-certificate"></i>INICIAR CURSO</a>
    </div>
</div>

@include('partials.back')