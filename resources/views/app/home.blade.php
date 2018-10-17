@include('partials.front')

<div id="home-page">
    <div class="banner">
        <div class="icon-bg">
            <i class="icon-guirid"></i>
        </div>
        <div class="gridD">
            <div class="title">
                <div class="icon">
                    <i class="icon-guirid"></i>
                </div>
                <div class="info">
                    <h6>Bem vindo Lore Ipsum</h6>
                    <p>Essa é a sua plataforma de ensinos, Lorem
                        ipsum dolor sit amet, consectetur adipisicing
                        elit. Amet commodi delectus, excepturi ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="gridD">
            <div class="cards-slider">
                <div class="card">
                    <div class="card-header">
                        <div class="left">
                            <div class="icon">
                                <i class="icon-zen-2"></i>
                            </div>
                            <div class="info">
                                <h4>Categoria</h4>
                                <h3>Nome do Curso</h3>
                            </div>
                        </div>
                        <div class="right">
                            <a href="#"><i class="icon-arrow-left rotate180"></i></a>
                        </div>
                    </div>
                    <div class="card-image big-image" data-bg="{{url('assets')}}/img/img-course.jpg"></div>
                </div>
            </div>
            <div class="title">
                <h3>Recomendados</h3>
                <p>Esses cursos podem te guiar ainda melhor.</p>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="left">
                        <div class="icon">
                            <i class="icon-zen-2"></i>
                        </div>
                        <div class="info">
                            <h4>Categoria</h4>
                            <h3>Nome do Curso</h3>
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
                                <p>150/600 atividades</p>
                            </div>
                            <div class="percent">
                                <p>30% </p>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <div class="bar" style="width: 50%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer buttons">
                    <a href="#"><i class="icon-heart"></i></a>
                    <a href="#"><i class="icon-bookmark"></i></a>
                    <a href="#"><i class="icon-arrow-left rotate180"></i></a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="left">
                        <div class="icon">
                            <i class="icon-zen-2"></i>
                        </div>
                        <div class="info">
                            <h4>Categoria</h4>
                            <h3>Nome do Curso</h3>
                        </div>
                    </div>
                    <div class="right">
                        <a href="#" class="card-btn"><i class="icon-arrow-top rotate180"></i></a>
                    </div>
                </div>
                <div class="card-image" data-bg="{{url('assets')}}/img/img-course.jpg"></div>
                <div class="card-resume">
                    <p>Lorem ipsum dolor sit amet, soluta regione urbanitas vis in, qui elit populo ut.</p>
                </div>
                <div class="card-footer buttons">
                    <a href="#"><i class="icon-heart"></i></a>
                    <a href="#"><i class="icon-bookmark"></i></a>
                    <a href="#"><i class="icon-arrow-left rotate180"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.back')