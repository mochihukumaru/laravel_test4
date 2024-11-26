@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register2.css')}}">
@endsection

@section('content')
<div class="register_form">
    <div class="register_form-header">
        <h2 class="register_form-header-logo">新規会員登録</h2>
        <p class="register_form-logo">STEP2 体重データの入力</p>
    </div>
    <div class="register_form-inner">
        <form class="register_form-form" action="/weight_logs" method="post">
            @csrf

            <div class="register_form-group">
                <label class="register_form-label" for="weight">現在の体重</label>
                <input class="register_form-input" type="text" name="weight" id="weight" placeholder="現在の体重を入力"><span class="logo">kg</span>
                <p class="register_form-error-message">
                    @error('weight')
                    {{$message}}
                    @enderror
                </p>
            </div>

            <div class="register_form-group">
                <label class="register_form-label" for="target_weight">目標の体重</label>
                <input class="register_form-input" type="text" name="target_weight" id="target_weight" placeholder="目標の体重を入力"><span class="logo">kg</span>
                <p class="register_form-error-message">
                    @error('target_weight')
                    {{$message}}
                    @enderror
                </p>
            </div>

            <input class="register_form-btn" type="submit" value="アカウント作成">
        </form>
        
    </div>
</div>
@endsection('content')