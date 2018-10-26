@include('partials.front')

    <div id="register-page" class="bg-orange-gradient">
        <div class="gridD">
            <div class="center">
                <div class="back-button">
                    <a href="{{ url('/login') }}"><i class="icon-arrow-left"></i></a>
                </div>
                <div id="logo">
                    <a href="{{ URL::to('/') }}">
                        <i class="icon-guirid"></i>
                    </a>
                </div>
                <form class="box-shadow bd-radius" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <h5>Crie sua conta para acessar.</h5>
                    <div class="input-field">
                        <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus placeholder="Nome">
                    </div>
                    <div class="input-field">
                        <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required placeholder="E-mail">
                    </div>
                    <div class="input-field">
                        <input id="password" type="password" class="input" name="password" required placeholder="Senha">
                    </div>
                    <div class="input-field">
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required placeholder="Confirmar Senha">
                    </div>
                    <div class="btns btns-center">
                        <button type="submit" class="btn btn-green btn-center">
                            @lang('global.app_register')
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

 @include('partials.back')

