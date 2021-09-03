@extends('common/layout')
@extends('common/header') 
@extends('common/footer') 
@section('top')
<div class="top-slide-img">
    <div class="row">
        <div class="col-2 text-center">
            left slide button
        </div>
        <div class="col-8 text-center">
            <img src="{{ asset('img/toy.png')}}" class="w-50">
        </div>
        <div class="col-2 text-center">
            right slide button
        </div>
    </div>
</div>
<div class="recommend-goods">
    <div class="sub-heading row">
        <div class="h5">おすすめ</div>
    </div>
    <div class="row justify-content-between">
        <div class="col-3">
            <a href="https://google.com">
                <img src="{{ asset('img/toy.png')}}" class="img-fluid">
            </a>
        </div>
        <div class="col-3">
            <a href="https://google.com">
                <img src="{{ asset('img/toy.png')}}" class="img-fluid">
            </a>
        </div>
        <div class="col-3">
            <a href="https://google.com">
                <img src="{{ asset('img/toy.png')}}" class="img-fluid">
            </a>
        </div>
    </div>
</div>
@endsection('top')