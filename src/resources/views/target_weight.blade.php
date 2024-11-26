@extends('layouts/index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/target_weight.css')}}">
@endsection

@section('content')
<div class="target_weight-content">
    <form class="target_weight-update" action="/weight_logs" method="post">
        @csrf
        <div class="target_weight-title">
            <h2 class="target_weight-logo">目標体重設定</h2>
            <input class="target_weight-input" type="text" name="weight"><span class="kg">kg</span>
        </div>
        <input class="target_weight-send" type="submit" value="更新" name="send">
        <input class="target_weight-back" type="submit" value="戻る" name="back">
    </form>
</div>

@endsection
