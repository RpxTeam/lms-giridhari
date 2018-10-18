@include('partials.front')
<div id="profile-page">
    <div class="banner-infos">
        <div class="gridD">
            <a href="#" class="btn-top btn-config"><i class="icon-cog"></i></a>
            <a href="#" class="btn-top btn-notify"><i class="icon-notify"></i></a>
            <div class="avatar">
                <div class="image" data-bg="{{ url('assets') }}/img/avatar.png"></div>
            </div>
            <div class="name">
                <h3>Aluno Lore Ipsum</h3>
            </div>
            <div class="points">
                <i class="icon-lotus"></i>
                <span>500 Soul Points</span>
            </div>
        </div>
            <div class="divider-horizontal"></div>
        <div class="gridD">
            <div class="card card-profile card-open">
                <div class="card-header top">
                    <i class="icon-lotus icon-bg"></i>
                    <div class="left">
                        <div class="icon-gamification">
                            <i class="icon-lotus"></i>
                        </div>
                        <div class="status">
                            <p>Nv. Lótus 1</p>
                            <p><small>150/600 atividades</small></p>
                        </div>
                    </div>
                    <div class="right">
                        <a href="#" class="card-btn active"><i class="icon-arrow-top rotate180"></i></a>
                    </div>
                </div>
                <div class="card-content content-active">
                    <div class="progress">
                        <div class="row right">
                            <div class="percent">
                                <p>30% </p>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <div class="bar" style="width: 50%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="navtabs">
            <div class="gridD">
                <ul>
                    <li><a href="#" data-tab="historico"><small>Histórico</small></a></li>
                    <li><a href="#" data-tab="certificados"><small>Certificados</small></a></li>
                    <li><a href="#" data-tab="conquistas"><small>Conquistas</small></a></li>
                    <li><a href="#" data-tab="forum"><small>Fórum</small></a></li>
                </ul>
                <div class="navtabs-bar"></div>
            </div>
        </div>
        <div class="navtabs-content">
            <div class="tab-content historico">
                <div class="collection">
                    <a href="{{ url('/library') }}" class="collection-item">
                        <span class="left">
                            <div class="icon">
                                <i class="icon-courses success"></i>
                            </div>
                            <div class="info">
                                <p>Concluiu o curso Lore 1</p>
                                <p><small>A uma hora atras</small></p>
                            </div>
                        </span>
                        <span class="icon-right">
                            <i class="icon-arrow-top rotate90"></i>
                        </span>
                    </a>
                    <a href="{{ url('/library') }}" class="collection-item">
                        <span class="left">
                            <div class="icon">
                                <i class="icon-bookmark-o"></i>
                            </div>
                            <div class="info">
                                <p>Salvou o curso Lore 1</p>
                                <p><small>A uma hora atras</small></p>
                            </div>
                        </span>
                        <span class="icon-right">
                            <i class="icon-arrow-top rotate90"></i>
                        </span>
                    </a>
                    <a href="{{ url('/library') }}" class="collection-item">
                        <span class="left">
                            <div class="icon">
                                <i class="icon-courses"></i>
                            </div>
                            <div class="info">
                                <p>Iniciou o curso Lore 1</p>
                                <p><small>A uma hora atras</small></p>
                            </div>
                        </span>
                        <span class="icon-right">
                            <i class="icon-arrow-top rotate90"></i>
                        </span>
                    </a>
                    <a href="{{ url('/library') }}" class="collection-item">
                        <span class="left">
                            <div class="icon">
                                <i class="icon-courses success"></i>
                            </div>
                            <div class="info">
                                <p>Concluiu o curso Lore 1</p>
                                <p><small>A uma hora atras</small></p>
                            </div>
                        </span>
                        <span class="icon-right">
                            <i class="icon-arrow-top rotate90"></i>
                        </span>
                    </a>
                    <a href="{{ url('/library') }}" class="collection-item">
                        <span class="left">
                            <div class="icon">
                                <i class="icon-bookmark-o"></i>
                            </div>
                            <div class="info">
                                <p>Salvou o curso Lore 1</p>
                                <p><small>A uma hora atras</small></p>
                            </div>
                        </span>
                        <span class="icon-right">
                            <i class="icon-arrow-top rotate90"></i>
                        </span>
                    </a>
                    <a href="{{ url('/library') }}" class="collection-item">
                        <span class="left">
                            <div class="icon">
                                <i class="icon-courses"></i>
                            </div>
                            <div class="info">
                                <p>Iniciou o curso Lore 1</p>
                                <p><small>A uma hora atras</small></p>
                            </div>
                        </span>
                        <span class="icon-right">
                            <i class="icon-arrow-top rotate90"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="tab-content certificados">
                <div class="collection">
                    <div class="collection-item">
                        <span class="left">
                            <div class="icon icon-circle success">
                                <i class="icon-zen-1"></i>
                            </div>
                            <div class="info">
                                <p>Concluiu o curso Lore 1</p>
                                <p><small>Completou no dia 10/10/10</small></p>
                            </div>
                        </span>
                    </div>
                    <div class="collection-item">
                        <span class="left">
                            <div class="icon icon-circle">
                                <i class="icon-zen-1"></i>
                            </div>
                            <div class="info">
                                <p>Concluiu o curso Lore 1</p>
                                <p><small>Completou no dia 10/10/10</small></p>
                            </div>
                        </span>
                    </div>
                    <div class="collection-item">
                        <span class="left">
                            <div class="icon icon-circle">
                                <i class="icon-zen-1"></i>
                            </div>
                            <div class="info">
                                <p>Concluiu o curso Lore 1</p>
                                <p><small>Completou no dia 10/10/10</small></p>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="tab-content conquistas">
                <div class="collection">
                    <div class="collection-item">
                        <span class="left">
                            <div class="icon icon-circle orange">
                                <i class="icon-throphy"></i>
                            </div>
                            <div class="info">
                                <p>Aprendiz Dedicado</p>
                                <p><small>Complete o seu primeiro curso</small></p>
                            </div>
                        </span>
                    </div>
                    <div class="collection-item">
                        <span class="left">
                            <div class="icon icon-circle">
                                <i class="icon-throphy"></i>
                            </div>
                            <div class="info">
                                <p>Aprendiz Dedicado 2</p>
                                <p><small>Complete o seu primeiro curso</small></p>
                            </div>
                        </span>
                    </div>
                    <div class="collection-item">
                        <span class="left">
                            <div class="icon icon-circle">
                                <i class="icon-throphy"></i>
                            </div>
                            <div class="info">
                                <p>Aprendiz Dedicado 3</p>
                                <p><small>Complete o seu primeiro curso</small></p>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="tab-content forum">
                <div class="collection">
                    <div class="collection-item">
                        <span class="left">
                            <div class="icon icon-circle">
                                <i class="icon-certificate"></i>
                            </div>
                            <div class="info">
                                <p>Fórum item 1</p>
                                <p><small>Usuário 1</small></p>
                            </div>
                        </span>
                    </div>
                    <div class="collection-item">
                        <span class="left">
                            <div class="icon icon-circle">
                                <i class="icon-certificate"></i>
                            </div>
                            <div class="info">
                                <p>Fórum item 2</p>
                                <p><small>Usuário 1</small></p>
                            </div>
                        </span>
                    </div>
                    <div class="collection-item">
                        <span class="left">
                            <div class="icon icon-circle">
                                <i class="icon-certificate"></i>
                            </div>
                            <div class="info">
                                <p>Fórum item 3</p>
                                <p><small>Complete o seu primeiro curso</small></p>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.back')