@extends('layouts.index')

@section('content')

<div>

    <h2>WeightLogを追加</h2>
    <form action="/weigh_logs/create" method="post">
            <!-- 日付 -->
        <label for="date">日付</label>
        <input type="date" id="date" name="date" value="{{ date('Y-m-d') }}" required><br>

                <!-- 体重 -->
        <label for="weight">体重<span class="required_logo">必須</span></label>
        <input type="number" id="weight" name="weight" placeholder="50.0" required><span class="kg">kg</span><br>

                <!-- 摂取カロリー -->
        <label for="calories">摂取カロリー<span class="required_logo">必須</span></label>
        <input type="number" id="calories" name="calories" min="0" step="1" placeholder="1200" required><span class="cal">cal</span><br>

                <!-- 運動時間 -->
        <label for="exercise_time">運動時間<span class="required_logo">必須</span></label>
        <input type="time" id="exercise_time" name="exercise_time" min="0" step="1" placeholder="00:00" required><br>

                <!-- 運動内容 -->
        <label for="exercise_content">運動内容</label>
        <input type="text" id="exercise_content" name="exercise_content" placeholder="運動内容を追加"><br>

                <!-- 登録ボタン -->
            <button type="submit">登録</button>
    </form>
</div>