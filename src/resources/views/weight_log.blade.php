@extends('layouts/index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/weight_log.css')}}">
@endsection

@section('content')
<div class="target_weight-content">
    <table class="target_weight-content-inner">
        <tr class="target_weight_title">
            <th class="target_weight_title-logo">目標体重</th>
            <th class="target_weight_title-logo">目標まで</th>
            <th class="target_weight_title-logo">最新体重</th>
        </tr>
        <tr class="target_weight-int">
            <th class="target_weight">{{$targetWeight}}</th>
            <th class="target_weight-goal">{{$difference}}</th>
            <th class="target_weight-weight">{{$latestWeight}}</th>
        </tr>
    </table>
    <div class="weight_admin">
        <form class="search_form" action="/weight_logs/search" method="get">
            @csrf
            <input class="search_form-date" type="date" name="form" placeholder="form_date" value="{{request('form')}}"><span class="mx-3">~</span>
            <input class="search_form-date2" type="date" name="until" placeholder="until_date" value="{{request('until')}}">
            <div class="search_form-btn">
                <input class="search_form-btn-logo" type="submit" value="検索">
                <input class="search_form-reset-btn" type="submit" value="リセット" name="reset">
            </div>
        </form>
    
        <button class="open-modal-btn"><a href="#registerModal">データを追加</a></button>

    <!-- モーダルウィンドウ -->
        <div id="registerModal" class="modal">
            <div class="modal-content">
                <iframe src="/weight_logs/create" class="modal-iframe" title="データを追加"></iframe>
        </div>

        <div class="weight_logs-admin">
            <table class="weight_logs-admin-inner">
                <tr class="weight_logs-admin-title">
                    <th class="weight_logs-admin-logo">日付</th>
                    <th class="weight_logs-admin-logo">体重</th>
                    <th class="weight_logs-admin-logo">食事摂取カロリー</th>
                    <th class="weight_logs-admin-logo">運動時間</th>
                    <th class="weight_logs-admin-logo"></th>
                </tr>

                @foreach($weightLogs as $weightLog)
                <tr class="weight_logs-admin-data">
                    <td class="admin_data">{{$weightLog->date}}</td>
                    <td class="admin_data">{{$weightLog->weight}}<span class="kg">kg</span></td>
                    <td class="admin_data">{{$weightLog->calories}}<span class="cal">cal</span></td>
                    <td class="admin_data">{{$weightLog->exercise_time}}</td>
                    <td class="admin_data">{{$weightLog->exercise_content}}</td>
                    <td class="admin_data"><a class="admin_detail-btn" href="#{{$weightLog->id}}">鉛筆</a>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection

