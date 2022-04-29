<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>DateOfBirth</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>

        @forelse($employees as $employee)
        <tr>
            <td>{{$employee->first_name}}</td>
            <td>{{$employee->last_name}}</td>
            <td>{{$employee->date_of_birth}}</td>
            <td>{{$employee->address}}</td>
            <td>{{$employee->contact}}</td>
            <td><a href="{{url('DeleteEmployee')}}/{{$employee->id}}" onclick="return confirm('are u sure , u want to delete this item?');">Delete</a></td>
            <td><a href="{{url('EmployeeDetailsView')}}/{{$employee->id}}">Update</a></td>
        </tr>
        @empty
        <tr>
            <td colspan = "5">No employee registered</td>
        </tr>
        @endforelse

    </table>

</body>
</html>