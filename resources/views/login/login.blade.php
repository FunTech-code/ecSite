@extends('common/layout')
@extends('common/header') 
@extends('common/footer') 
@section('contents')
<div class="login-page">
    <div class="page-heading pb-2 mb-5">
        <h4>ログインa</h4>
    </div>
    <div class="row">
        <div class="col-6 text-center">
            <div class="signin-form align-self-center w-75 mx-auto py-4 px-3">
                <div class="signin-heading">
                    <h4>会員のお客様</h4>
                </div>
                <form action="{{ url('/user/show') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-5 text-left mb-3">
                            <div class="">ID</div>
                        </div>
                        <div class="col-7 text-center">
                            <input type="text" name="login_id" value="{{ old('login_id') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 text-left">
                            <div class="">Passwords</div>
                        </div>
                        <div class="col-7 text-center">
                            <input type="text" name="login_pass" value="">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-center login-button">
                            <input type="submit" value="ログイン">
                        </div>
                    </div>
                </form>
            </div><!-- ./signin-form -->
        </div>
        <div class="col-6 text-center">
            <div class="signup-form align-self-center w-75 mx-auto py-4">
                <form action="/login/signup" method="post">
                    <div class="signup-heading">
                        <h4>初めてご利用の方・会員以外の方</h4>
                    </div>
                    <div class="signup-info">
                        <p>初めてご利用のお客様はコチラから会員登録</p>
                        <p>をお願いいたします。</p>
                    </div>
                    <div class="signup-button">
                        <input type="submit" value="新規会員登録">
                    </div>
                </form>
            </div><!-- ./signup-form -->
        </div>
    </div>
</div><!-- ./login-page -->
@endsection('contents')