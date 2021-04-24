@extends('layouts.app')
@section('title', __('device.add'))
@section('content')
<div class="c-body">
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">@lang('menu.add_device')</div>
                                <div class="card-body">
                                    <form action="{{url('devices/add')}}" method="POST" class="form-horizontal">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-form-label" for="prependedInput">@lang('device.name')</label>
                                            <div class="controls">
                                                <div class="input-prepend input-group">
                                                    <input id="name" type="text"
                                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                                           value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                                <p class="help-block">@lang('device.help')</p>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button class="btn btn-primary" type="submit">@lang('device.add')</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@stop
