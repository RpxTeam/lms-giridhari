<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <title>
            Site Comunicação
        </title>
        <!-- CSS  -->
        <link rel="stylesheet" href="{{ url('assets') }}/libs/fontguirid/fontguirid.css">
        {{--<link href="{{ url('/') }}/css/materialize.css" media="screen,projection" rel="stylesheet" type="text/css"/>--}}
        {{--<link href="{{ url('/') }}/css/style.css" media="screen,projection" rel="stylesheet" type="text/css"/>--}}
        <link href="{{ url('/') }}/assets/libs/slick/slick.css" media="screen,projection" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/css/style.css" media="screen,projection" rel="stylesheet" type="text/css"/>
    </head>
    <body class="grey lighten-3">
    @include('partials.loader')
        <div id="main">
            @if (!\Request::is('courses/*') && \Request::is('login') && \Request::is('register'))
                @include('app.menu')
            @endif
            <div id="content-wrapper">
                @include('public.notifications')