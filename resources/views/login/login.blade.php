@extends('common/layout')
@extends('common/header') 
@extends('common/footer') 
@section('login')
<div class="page-heading">
    <h2>ログイン</h2>
</div>
<div class="row">
    <div class="signin-form col-6 align-self-center text-center">
        <div class="sigin-heading">
            <h4>会員のお客様</h4>
        </div>
        <form action="{{ url('/user/show') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-5 text-left">
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
            <div class="row">
                <div class="col-12 text-center">
                    <input type="submit" value="ログイン">
                </div>
            </div>
        </form>
    </div><!-- ./signin-form -->

    <div class="signup-form col-6 align-self-center text-center">
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
@endsection('login')