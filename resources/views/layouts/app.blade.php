<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="mdc-typography pace-on">
@include('partials.loader')

    <div class="rpx-wrapper">

        @include('partials.sidebar')
        <div class="rpx-main">
            @include('partials.topbar')
            @if (Session::has('message'))
                    <div class="alert alert-info">
                        <p>{{ Session::get('message') }}</p>
                    </div>
                @endif
            @if ($errors->count() > 0)
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="rpx-main__content mdc-theme--background mdc-theme--text-primary-on-background">
                @yield('content')
            </div>
        </div>
    </div>

    @include('partials.rightbar')
</div>

{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">Logout</button>
{!! Form::close() !!}


@include('partials.scripts')
@include('partials.javascripts')
</body>
</html>