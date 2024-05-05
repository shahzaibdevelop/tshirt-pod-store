<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <style>
        .form {
            --input-focus: #2d8cf0;
            --font-color: #323232;
            --font-color-sub: #666;
            --bg-color: #fff;
            --main-color: #323232;
            padding: 20px;
            background: lightgrey;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            gap: 20px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            box-shadow: 4px 4px var(--main-color);
        }

        .title {
            color: var(--font-color);
            font-weight: 900;
            font-size: 20px;
            margin-bottom: 25px;
        }

        .title span {
            color: var(--font-color-sub);
            font-weight: 600;
            font-size: 17px;
        }

        .input {
            width: 250px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            font-size: 15px;
            font-weight: 600;
            color: var(--font-color);
            padding: 5px 10px;
            outline: none;
        }

        .input::placeholder {
            color: var(--font-color-sub);
            opacity: 0.8;
        }

        .input:focus {
            border: 2px solid var(--input-focus);
        }

        .login-with {
            display: flex;
            gap: 20px;
        }

        .button-log {
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 100%;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            color: var(--font-color);
            font-size: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .icon {
            width: 24px;
            height: 24px;
            fill: var(--main-color);
        }

        .button-log:active,
        .button-confirm:active {
            box-shadow: 0px 0px var(--main-color);
            transform: translate(3px, 3px);
        }

        .button-confirm {
            margin: 50px auto 0 auto;
            width: 120px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            font-size: 17px;
            font-weight: 600;
            color: var(--font-color);
            cursor: pointer;
        }
        *{
            margin: 0;
            padding: 0;

        }
    </style>
</head>

<body>
    <div class="main" style="width:100%;height:100vh;display:flex;justify-content:center;align-items:center;">
        <form action="{{route('admin.login')}}" class="form" method="POST" style="max-width:300px;">
            @csrf
            <div class="title" style="font-family: sans-serif">Admin Login</div>
            <input type="password" placeholder="Password" name="password" class="input">
            <button class="button-confirm">Let`s go →</button>
        </form>
    </div>
</body>

</html>
