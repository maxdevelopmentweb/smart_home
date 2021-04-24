@extends('layouts.app')
@section('title', __('menu.dashboard'))
@section('content')
    <div class="c-body">
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-header"> Jumbotron
                                        <div class="card-header-actions"><a class="card-header-action" href="https://coreui.io/docs/components/bootstrap-jumbotron/" target="_blank"><small class="text-muted">docs</small></a></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="jumbotron">
                                            <h1 class="display-3">Hello, world!</h1>
                                            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                            <hr class="my-4">
                                            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                                            <p class="lead"><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
@stop
