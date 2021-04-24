@extends('layouts.auth')
@section('title', __('auth.login_label'))
@section('content')
<body class="c-app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>@lang('login.sign_in')</h1>
                        <p class="text-muted">@lang('login.enter')</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                 <span class="input-group-text">
                                    <svg class="c-icon">
                                       <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                                    </svg>
                                 </span>
                                </div>
                                <input placeholder="@lang('login.email')" id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
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
                                <input placeholder="@lang('login.password')" id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    @lang('login.remember_me')
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" type="submit">@lang('login.sign_in')</button>
                                </div>
                                @if (Route::has('password.request'))
                                    <div class="col-6 text-right">
                                        <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                            @lang('login.forgot_password')
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>@lang('login.no_account')</h2>
                            <p>@lang('login.create_account')</p>
                            <button class="btn btn-lg btn-outline-light mt-3" type="button"
                                    onclick="location.href='{{ route('register') }}'">@lang('login.register_now')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
