<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
</head>
<body>
<h1>Registration dfd</h1>
<form method="POST" action="{{ route('user.registration') }}">
    @csrf
    <input name="email" type="text" id="email"  value="" placeholder="Email">
    <input name="password" type="password"  id="password"  value="" placeholder="Password">
    <button type="submit" name="sendMe" value="1">Войти</button>
</form>
</body>
</html>
