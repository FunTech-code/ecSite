@extends('layouts.app')
@extends('common/header') 
@extends('common/footer') 

@section('content')
<div class="container">
    <div class="row page-title-border h4 pl-5 pb-3">会員登録</div>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="text-left">
                会員情報の登録・更新を行います。必須の箇所は必ずご記入ください。
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row border border-right-0 border-bottom-0 px-0 my-0">
                    <div class="col-md-4 bg-light-grey">
                        <label for="name" class="col-form-label text-md-right">{{ __('お名前') }}</label>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <input id="name" type="text" class="form-control h-75 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div><!-- ./form-group ./row ./border ./px-0 ./border-right-0 -->

                <div class="form-group row border border-right-0 border-bottom-0 px-0 my-0">
                    <div class="col-md-4 bg-light-grey">
                        <label for="name_kana" class="col-form-label text-md-right">{{ __('フリガナ') }}</label>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <input id="name_kana" type="text" class="form-control h-75 @error('name_kana') is-invalid @enderror" name="name_kana" value="{{ old('name_kana') }}" required autocomplete="name_kana" autofocus>

                        @error('name_kana')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div><!-- ./form-group ./row ./border ./px-0 ./border-right-0 -->

                <div class="form-group row border border-right-0 border-bottom-0 px-0 my-0">
                    <div class="col-md-4 bg-light-grey">
                        <label for="email" class="col-form-label text-md-right">{{ __('メールアドレス') }}</label>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <input id="email" type="email" class="form-control h-75 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div><!-- ./form-group ./row ./border ./px-0 ./border-right-0 -->


                <div class="form-group row border border-right-0 border-bottom-0 px-0 my-0">
                    <div class="col-md-4 bg-light-grey">
                        <label for="tell" class="col-form-label text-md-right">{{ __('電話番号') }}</label>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <input id="tell" type="text" maxlength="12" oninput="value = value.replace(/[^0-9]+/i,'');" class="form-control h-75 @error('tell') is-invalid @enderror" name="tell" value="{{ old('tell') }}" required autocomplete="tell">
                        @error('tell')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div><!-- ./form-group ./row ./border ./px-0 ./border-right-0 -->

                <div class="form-group row border border-right-0 border-bottom-0 px-0 my-0">
                    <div class="col-md-4 bg-light-grey">
                        <label for="postal_code" class="col-form-label text-md-right">{{ __('郵便番号') }}</label>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <input id="postal_code" type="text" pattern="\d{3}-\d{4}" maxlength="8" class="form-control h-75 @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" required autocomplete="postal_code" autofocus>
                        @error('postal_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div><!-- ./form-group ./row ./border ./px-0 ./border-right-0 -->

                <div class="form-group row border border-right-0 border-bottom-0 px-0 my-0">
                    <div class="col-md-4 bg-light-grey">
                        <label for="prefectures" class="col-form-label text-md-right">{{ __('都道府県') }}</label>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <input id="prefectures" type="text" class="form-control h-75 @error('prefectures') is-invalid @enderror" name="prefectures" value="{{ old('prefectures') }}" required autocomplete="prefectures" autofocus>
                        @error('prefectures')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div><!-- ./form-group ./row ./border ./px-0 ./border-right-0 -->

                <div class="form-group row border border-right-0 border-bottom-0 px-0 my-0">
                    <div class="col-md-4 bg-light-grey">
                        <label for="municipalities" class="col-form-label text-md-right">{{ __('市区町村') }}</label>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <input id="municipalities" type="text" class="form-control h-75 @error('municipalities') is-invalid @enderror" name="municipalities" value="{{ old('municipalities') }}" required autocomplete="municipalities" autofocus>

                        @error('municipalities')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div><!-- ./form-group ./row ./border ./px-0 ./border-right-0 -->

                <div class="form-group row border border-right-0 border-bottom-0 px-0 my-0">
                    <div class="col-md-4 bg-light-grey">
                        <label for="address_details" class="col-form-label text-md-right">{{ __('番地・建物名・部屋番号') }}</label>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <input id="address_details" type="text" class="form-control h-75 @error('address_details') is-invalid @enderror" name="address_details" value="{{ old('address_details') }}" required autocomplete="address_details" autofocus>

                        @error('address_details')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div><!-- ./form-group ./row ./border ./px-0 ./border-right-0 -->

                <div class="form-group row border border-right-0 border-bottom-0 px-0 my-0">
                    <div class="col-md-4 bg-light-grey">
                        <label for="password" class="col-form-label text-md-right">{{ __('パスワード') }}</label>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <input id="password" type="password" class="form-control h-75 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div><!-- ./form-group ./row ./border ./px-0 ./border-right-0 -->

                <div class="form-group row border border-right-0  px-0 my-0">
                    <div class="col-md-4 bg-light-grey">
                        <label for="password-confirm" class="col-form-label text-md-right">{{ __('パスワード(確認用)') }}</label>
                    </div>

                    <div class="col-md-6 d-flex align-items-center">
                        <input id="password-confirm" type="password" class="form-control h-75" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div><!-- ./form-group ./row ./border ./px-0 ./border-right-0 -->

                <div class="form-group row mb-0 mt-5 text-center">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-light border border-dark w-25">
                            <a href="{{ route('home') }}">{{ __('戻る') }}</a>
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-dark border border-dark w-25">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
