@extends('layouts.auth')
@section('title', __('auth.register_label'))
@section('content')
<body class="c-app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h1>@lang('register.register')</h1>
                        <p class="text-muted">@lang('register.create')</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                 <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                                 </svg>
                              </span>
                            </div>
                            <input placeholder="@lang('register.username')" id="name" type="text"
                                   class="form-control @error('name') is-invalid @enderror" name="name"
                                   value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                 <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                                 </svg>
                              </span>
                            </div>
                            <input placeholder="@lang('register.email')" id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                 <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                                 </svg>
                              </span>
                            </div>
                            <input placeholder="@lang('register.password')" id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                 <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                                 </svg>
                              </span>
                            </div>
                            <input placeholder="@lang('register.repeat_password')" id="password-confirm" type="password"
                                   class="form-control" name="password_confirmation" required
                                   autocomplete="new-password">
                        </div>
                        <button class="btn btn-block btn-success" type="submit">@lang('register.create')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
