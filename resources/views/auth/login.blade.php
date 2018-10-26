@include('partials.front')

<div id="login-page">
    <div class="gridD">
        <div class="center">
            <div id="logo">
                <img src="{{ url('assets/img') }}/logo.png" alt="">
            </div>
            <form class="form-horizontal"
                  role="form"
                  method="POST"
                  action="{{ url('login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-field input-field-icon">
                    <i class="icon-person"></i>
                    <input type="email" class="input" name="email" value="{{ old('email') }}" placeholder="Usuário">
                    {{--<input type="text" class="input">--}}
                </div>
                <div class="input-field input-field-icon">
                    <i class="icon-padlock"></i>
                    <input type="password" class="input" name="password" placeholder="Senha">
                    <a href="#"><i class="icon-eye-o"></i></a>
                </div>
                <div class="forgotten-password">
                    <a href="{{ route('auth.password.reset') }}" class="grey-text"><small>@lang('global.app_forgot_password')</small></a>
                </div>
                <div class="remember-me">
                    <a href="#" class="black-text"></a>
                </div>
                <label class="checkbox-container" class="black-text"><small>@lang('global.app_remember_me')</small>
                    <input type="checkbox"
                           name="remember">
                    <span class="checkmark"></span>
                </label>
                <div class="btns btns-center">
                    <button type="submit" class="btn btn-grey btn-center">Entrar</button>
                    <a href="{{ route('auth.register') }}" class="btn btn-orange btn-center">@lang('global.app_registration')</a>
                </div>
                <a href="{{ url('/home') }}" class="no-login">Entrar sem login</a>
            </form>
        </div>
    </div>
</div>

@include('partials.back')
