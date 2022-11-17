<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign up</title>
    </head>
    <body>

        @if(Session::has('fail'))
        <span>{{Session::get('fail')}}</span>
        @endif
        
        <form action="{{route('signupUser')}}" method="POST">
            @csrf
            <input type="text" name="name" id="" placeholder="Enter your Name"> <br>
            <span> @error('name') {{$message}} @enderror </span> <br>
            <input type="text" name="email" id="" placeholder="ENter your email"> <br>
            <span> @error('email') {{$message}} @enderror </span> <br>
            <input type="password" name="password" id="" placeholder="Enter your Password"> <br>
            <span> @error('password') {{$message}} @enderror </span> <br>
            <button type="submit">Sign up</button>
        </form>
    </body>
</html>