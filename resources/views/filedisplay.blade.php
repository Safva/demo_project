<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Image</th>
        </tr>

        @foreach($userdata as $user)
        <tr>
            <th>{{$user->name}}</th>
            <th>{{$user->contact}}</th>
            <th><img src="/storage/profile/{{$user->file}}" alt="" width="100" height="100"></th>
        </tr>
        @endforeach
    </table>
</body>
</html>