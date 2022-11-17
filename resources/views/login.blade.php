<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>lOGIN</h1>

    @if(Session::has('fail'))
    <span>{{Session::get('fail')}}</span>
    @endif
        
    <form action="{{route('loginUser')}}" method="POST">
        @csrf
        <input type="text" name="email" id="" placeholder="ENter your email">
        <span> @error('email') {{$message}} @enderror </span> <br>
        <input type="password" name="password" id="" placeholder="Enter your Password">
        <span> @error('password') {{$message}} @enderror </span> <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>