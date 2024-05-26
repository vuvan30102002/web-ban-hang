<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/checklogin" method="post">
        @csrf
        {{-- <div class="register">
            <h2>Đăng ký</h2>
            <input type="text" name="username" placeholder="Tên đăng nhập" >
            <input type="email" name="email" placeholder="Email" >
            <input type="password" name="password" placeholder="Mật khẩu" >
            <button type="submit" id="register">Đăng ký</button>
        </div> --}}
        <div class="login">
            <h2>Đăng nhập</h2>
            <input type="text" name="email" placeholder="Email" >
            <input type="password" name="password" placeholder="Mật khẩu" >
            <button type="submit" id="login">Đăng nhập</button>

        </div>
    </form>
</body>
</html>
