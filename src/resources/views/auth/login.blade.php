@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css')}}">
@endsection

@section('content')
<div class="register_form">
    <div class="register_form-header">
        <h2 class="register_form-header-logo">ログイン</h2>
    </div>
    <div class="register_form-inner">
        <form class="register_form-form" action="/weight_logs" method="post">
            @csrf

            <div class="register_form-group">
                <label class="register_form-label" for="name">お名前</label>
                <input class="register_form-input" type="text" name="name" id="name" placeholder="名前を入力">
                <p class="register_form-error-message">
                    @error('name')
                    {{$message}}
                    @enderror
                </p>
            </div>

            <div class="register_form-group">
                <label class="register_form-label" for="password">パスワード</label>
                <input class="register_form-input" type="password" name="password" placeholder="パスワードを入力">
                <p class="register_form-error-message">
                    @error('password')
                    {{$message}}
                    @enderror
                </p>
            </div>
            <input class="register_form-btn" type="submit" value="ログイン">
        </form>
        
        @section("link")
        <a class="login_link" href="/register">アカウント作成はこちらから</a>
        @endsection
    </div>
</div>
@endsection('content')