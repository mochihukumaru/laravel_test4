<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
    @yield('css')
</head>

<body>
    <div class="index">
        <header class="header">
            <h1 class="header_logo">PiGLy</h1>
            <form class="target_weight-form" action="/weight_logs/goal_setting" method="get">
                <div class="target_weight-btn">
                    <button class="target_weight-form-btn" type="submit" >目標体重設定</button>
                </div>
            </form>
            @auth
            <form class="logout_form" action="/logout" method="post">
                @csrf
                <div class="logout_btn">
                    <button class="logout_form-button" type="submit">ログアウト</button>
                </div>
            </form>
            @endauth
        </header>
        <div class="content">
            @yield('content')
        </div>
    </div>

</body>
</html>