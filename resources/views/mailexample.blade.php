<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('sendmail')}}" method="post">
        @csrf
        <label for="">name</label>
        <input type="text" name="name" id="">
        <label for="">email</label>
        <input type="text" name="email" id="">
        <label for="">message</label>
        <input type="text" name="message" id="">
        <button type="submit">Send</button>
    </form>
</body>
</html>