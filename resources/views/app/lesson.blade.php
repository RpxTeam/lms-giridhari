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
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem dolores enim eos hic illo inventore iure libero magnam minima minus obcaecati optio pariatur porro quibusdam quos reiciendis, sapiente sint veritatis.</p>
            </div>
        </div>
        <div class="quiz">
            <div class="question">
                <div class="gridD">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, </p>
                    <label class="radio-container">Four
                        <input type="radio" name="quiz1">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Four
                        <input type="radio" name="quiz1">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Four
                        <input type="radio" name="quiz1">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="question">
                <div class="gridD">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, </p>
                    <label class="radio-container">Four
                        <input type="radio" name="quiz2">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Four
                        <input type="radio" name="quiz2">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Four
                        <input type="radio" name="quiz2">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="question">
                <div class="gridD">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, </p>
                    <label class="radio-container">Four
                        <input type="radio" name="quiz3">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Four
                        <input type="radio" name="quiz3">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Four
                        <input type="radio" name="quiz3">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-start">
        {{--<a href="#" data-step="step1"><i class="icon-certificate"></i>INICIAR TESTES</a>--}}
        {{--<a href="#" class="disabled" disabled><i class="icon-certificate"></i>ENVIAR TESTES</a>--}}
        <a href="#modal-conclusion" data-modal class="success"><i class="icon-certificate"></i>ENVIAR TESTES</a>
    </div>
</div>

<div id="modal-conclusion" class="modal">
    <div class="mask"></div>
    <div class="modal-content">
        <div class="btn-close"><a href="#"></a></div>
        <div class="modal-content-wrapper">
            <div class="title">
                <div class="icon">
                    <i class="icon-zen-1"></i>
                    <div class="icon-check"></div>
                </div>
            </div>
            <p>Parabéns, você concluiu esta etapa 1!</p>
            <p class="orange">A qualidade vem de dentro!</p>
            <div class="line"></div>
            <span>Resultados:</span>
            <div class="results">
                <i class="icon-lotus"></i>
                <h4>+100 soul points</h4>
            </div>
            <p>
                <small>Qual sua avaliação?</small>
            </p>
            <div class="stars-rating">
                <ul>
                    <li class="star" data-value="1"><i class="icon-star-o"></i></li>
                    <li class="star" data-value="2"><i class="icon-star-o"></i></li>
                    <li class="star" data-value="3"><i class="icon-star-o"></i></li>
                    <li class="star" data-value="4"><i class="icon-star-o"></i></li>
                    <li class="star" data-value="5"><i class="icon-star-o"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@include('partials.back')