<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(count($errors)>0)
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
    @endif
    <h2>Student login</h2>
    <form action="{{url('LoginEmployee')}}" method="post">
        @csrf
        <label for="">Username</label>
        <input type="text" name="user_name" id="">
        <br>
        <label for="">Password</label>
        <input type="text" name="pass_word" id="">
        <br>
        <button type="submit" name="btn_login">Login</button>
        <button type="reset" name="btn_clear">Cancel</button>

        @if(isset($error))
        <p>{{$error}}</p>
        @endif
    
    </form>
</body>
</html>