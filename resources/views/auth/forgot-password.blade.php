@extends('layouts.auth')
@section('title', __('auth.forgot_password_label'))
@section('content')
    <body class="c-app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <h1>@lang('auth.forgot_label')</h1>
                            <p class="text-muted">@lang('auth.forgot_send')</p>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
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
                            <button class="btn btn-block btn-success" type="submit">@lang('auth.forgot_send_button')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
