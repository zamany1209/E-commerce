<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="آکادمی رایانش | آموزش فتوشاپ" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>رایانش</title>
</head>
<body>
<h2>Login page</h2>

    <form action="{{ route('auth.check') }}" method="post">

    @csrf
        @if(Session::get('false'))
            {{ Session::get('false') }}
        @endif
        <input type="email" name="email" id="" placeholder="Email">
        <span>@error('email') {{ $message }} @enderror</span>
        <input type="password" name="password" id="" placeholder="password">
        <span>@error('password') {{ $message }} @enderror</span>
        <input type="submit" value="submit">
    </form>

</body>
</html>

