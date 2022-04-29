<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Update</title>
</head>
<body>
    <form action="{{url('UpdateEmployeeDetails')}}/{{$employee->id}}" method="post">
        @csrf
        <label for="">First name</label>
        <input type="text" name="emp_fname" id="" value = "{{$employee->first_name}}"><br><br>
        
        <label for="">Last name</label>
        <input type="text" name="emp_lname" id="" value = "{{$employee->last_name}}"><br><br>
        
        <label for="">DOB</label>
        <input type="text" name="emp_dob" id="" value = "{{$employee->date_of_birth}}"><br><br>
    
        <label for="">Address</label>
        <input type="text" name="emp_address" id="" value = "{{$employee->address}}"><br><br>
    
        <label for="">Contact</label>
        <input type="text" name="emp_contact" id="" value = "{{$employee->contact}}"><br><br>

        <button type="submit" name="btn_update">Save</button>

    </form>
</body>
</html>