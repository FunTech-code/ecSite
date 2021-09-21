@extends('common/layout')
@extends('common/header') 
@extends('common/footer') 
@section('signup')
<div class="signup-page">
    <div class="page-heading pb-2 mb-5">
        <h4>会員登録</h4>
    </div>
    <div class="row">
        <div class="col-10">
            <div class="page-info text-left">会員情報の登録・更新を行います。必須の箇所は必ずご記入ください。</div>
            <div class="signin-form align-self-center mx-auto py-4 px-3">
                <form action="{{ url('/user/create') }}" method="post">
                    @csrf
                    <table class="table">
                      <tbody>
                        <tr>
                          <th class="input-column" scope="row">お名前</th>
                          <td><input type="text" name="" value=""></td>
                        </tr>
                        <tr>
                          <th class="input-column" scope="row">フリガナ</th>
                          <td><input type="text" name="" value=""></td>
                        </tr>
                        <tr>
                          <th class="input-column" scope="row">メールアドレス</th>
                          <td><input type="text" name="" value=""></td>
                        </tr>
                        <tr>
                          <th class="input-column" scope="row">電話番号</th>
                          <td><input type="text" name="" value=""></td>
                        </tr>
                        <tr>
                          <th class="input-column" scope="row">郵便番号</th>
                          <td><input type="text" name="" value=""></td>
                        </tr>
                        <tr>
                          <th class="input-column" scope="row">都道府県</th>
                          <td><input type="text" name="" value=""></td>
                        </tr>
                        <tr>
                          <th class="input-column" scope="row">市区町村</th>
                          <td><input type="text" name="" value=""></td>
                        </tr>
                        <tr>
                          <th class="input-column" scope="row">番地・建物名・部屋番号</th>
                          <td><input type="text" name="" value=""></td>
                        </tr>
                        <tr>
                          <th class="input-column" scope="row">会員ID</th>
                          <td><input type="text" name="" value=""></td>
                        </tr>
                        <tr>
                          <th class="input-column" scope="row">会員ID(確認用)</th>
                          <td><input type="text" name="" value=""></td>
                        </tr>
                        <tr>
                          <th class="input-column" scope="row">パスワード</th>
                          <td><input type="text" name="" value=""></td>
                        </tr>
                        <tr>
                          <th class="input-column" scope="row">パスワード(確認用)</th>
                          <td><input type="text" name="" value=""></td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="row button-wrap">
                      <div class="col-12 d-flex justify-content-around">
                        <div class="text-center button-outer"><input class="return-button" type="button" name="" value="戻る"></div>
                        <div class="text-center button-outer"><input class="submit-button" type="submit" name="" value="登録"></div>
                      </div>
                    </div><!-- ./row -->
                </form>
            </div><!-- ./signin-form -->
        </div><!-- ./col-10 -->
    </div><!-- ./row -->
</div><!-- ./signup-page -->
@endsection('signup')