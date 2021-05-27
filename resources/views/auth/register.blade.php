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
<h2>register page</h2>

    <form action="{{ route('auth.create') }}" method="post">
        @csrf

        @if(Session::get('Success'))
            {{ Session::get('Success') }}
        @endif
        @if(Session::get('false'))
            {{ Session::get('false') }}
        @endif
        <input type="text" name="name" id="" placeholder="Name" value="{{ old('name') }}">
        <span>@error('name') {{ $message }} @enderror</span>
        <input type="text" name="family" id="" placeholder="family" value="{{ old('family') }}">
        <span>@error('family') {{ $message }} @enderror</span>
        <input type="text" name="phone" id="" placeholder="phone" value="{{ old('phone') }}">
        <span>@error('phone') {{ $message }} @enderror</span>
        <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}">
        <span>@error('email') {{ $message }} @enderror</span>
        <input type="password" name="password" id="" placeholder="Password">
        <span>@error('password') {{ $message }} @enderror</span>
        <input type="submit" value="submit">
    </form>

</body>
</html>
