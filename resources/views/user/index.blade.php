@extends('common/layout')
@extends('common/header') 
@extends('common/footer') 
@section('login')
<div class="login-page">
    <div class="page-heading pb-2 mb-5">
        <h4>ログイン</h4>
    </div>
    @if (Auth::check())
    <p>USER: {{ $user->name . ' (' . $user->email . ')' }}</p>
    @else
    <p>※ログインしていません。(<a href="/login">ログイン</a>|
        <a href="/register">登録</a>)</p>
    @endif

</div><!-- ./login-page -->
@endsection('login')