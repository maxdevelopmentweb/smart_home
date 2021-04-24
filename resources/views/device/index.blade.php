@extends('layouts.app')
@section('title', __('menu.devices'))
@section('content')
<div class="c-body">
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="row">
                            @foreach($devices as $device)
                            <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>{{ $device->name }}</strong>
                                    <div class="card-header-actions"><a class="card-header-action btn-setting" href="#">
                                            <svg class="c-icon">
                                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
                                            </svg></a><a class="card-header-action btn-minimize" href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true">
                                            <svg class="c-icon">
                                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-arrow-circle-top') }}"></use>
                                            </svg></a><a class="card-header-action btn-close" href="#">
                                            <svg class="c-icon">
                                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-x-circle') }}"></use>
                                            </svg></a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="flex-row1">

<span class="tia_temp_body" style="margin: auto;">
                                       <span>
                                       <span class="temp_data2">
                                       25
                                       </span>
                                       </span></span>


                                    </div>
                                    <div class="flex-row1">
                                        <button type="button" class="btn btn-lg btn-dark" style="margin: auto;">
                                            <i class="fa fa-minus"></i></button>
                                        <span class="tia_temp_body" style="margin: auto;">
                                       <span>
                                       <span class="temp_data">
                                       17<sup>°</sup>C
                                       </span>
                                       <span class="temp_info">
                                       <i class="fa fa-snowflake-o"></i> Cooling
                                       </span>
                                       </span>
                                       </span>
                                        <button type="button" class="btn btn-lg btn-dark" style="margin: auto;">
                                            <i class="fa fa-plus"></i></button>

                                    </div>

                                    <div class="flex-row1">
                                        <button type="button" class="btn btn-lg btn-success" style="margin:auto;">
                                            <i class="fa fa-wifi"></i></button>
                                        <button type="button" class="btn btn-lg btn-success" style="margin: auto;width: 100px;">
                                            <i class="fa fa-plug"></i></button>
                                        <button type="button" class="btn btn-lg btn-warning" style="margin:auto;">
                                            <i class="fa fa-fire"></i></button>

                                    </div>
                                </div>
                            </div>
                            </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </main>
    </div>

@stop


