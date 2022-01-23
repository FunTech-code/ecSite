@extends('layouts.app')
@extends('common/header') 
@extends('common/footer') 

@section('content')
<div class="container">
    <div class="row page-title-border h4 pl-5 pb-3">ログイン</div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-light-grey">
                <div class="card-body">
                    <div class="h4 text-center">{{ __('Registered User') }}</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card bg-light-grey">
                <!--<div class="card-header">{{ __('New User') }}</div>-->
                <div class="card-body">
                <div class="h4 text-center">初めてご利用の方・会員以外の方</div>
                    <!--<div class="col-form-label text-md-right">{{ __('New User Info') }}</div> -->
                    <div class="col-form-label text-md-left">
                        初めてご利用のお客様はコチラから会員登録<br>をお願いいたします。
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-4 offset-md-4">
                            <a class="btn btn-dark nav-link" href="{{ route('register') }}">
                                {{ __('New Create User') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
