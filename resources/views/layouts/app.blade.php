<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="./">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>@yield('title') - @lang('main.project_name')</title>
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="manifest" href="{{ asset('assets/favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">
        <meta name="robots" content="noindex">
    </head>
    <body class="c-app">
        <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
            <div class="c-sidebar-brand d-lg-down-none">
                <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
                </svg>
                <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
                    <use xlink:href="{{ asset('assets/brand/coreui.svg#signet') }}"></use>
                </svg>
            </div>
            @include('layouts.menu')
            <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
        </div>
        <div class="c-wrapper c-fixed-components">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
