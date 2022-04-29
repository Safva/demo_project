<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" id="">
        <br>
        <label for="">Contact</label>
        <input type="text" name="contact" id="">
        <br>
        <label for="">Image</label>
        <input type="file" name="image"> 
        <br>
        <button type="submit">Save</button>
        @if(isset($error))
        <p>{{$error}}</p>
        @endif
    </form>
</body>
</html>