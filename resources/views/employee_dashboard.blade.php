<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Employee Profile</h3>
    
    <!--  -->

    <table>
        <tr>
            <td>First name</td>
            <td>{{$emp->first_name}}</td>
        </tr>
        <tr>
            <td>Last name</td>
            <td>{{$emp->last_name}}</td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>{{$emp->date_of_birth}}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{$emp->address}}</td>
        </tr>
    </table>
    <a href="{{url('LogOut')}}" >Logout</a>
</body>
</html>