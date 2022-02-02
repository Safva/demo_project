<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="container">
        <h2>Employee Register</h2><br>
        <form action="{{url('EmployeeRegister')}}" method="post">
            @csrf
            <div class="form-row">
                <div class="col">
                    <label for="">First Name</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="emp_fname" id="">
                </div>
            </div><br>

            <div class="form-row">
                <div class="col">
                    <label for="">Last Name</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="emp_lname" id="">
                </div>
            </div><br>

            <div class="form-row">
                <div class="col">
                    <label for="">Date of birth</label>
                </div>
                <div class="col">
                    <input type="date" class="form-control" name="emp_dob" id="">
                </div>
            </div><br>

            <div class="form-row">
                <div class="col">
                    <label for="">Address</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="emp_address" id="">
                </div>
            </div><br>

            <div class="form-row">
                <div class="col">
                    <label for="">Contact</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="emp_contact" id="">
                </div>
            </div><br>

            <button class="btn btn-success" type="submit">Save</button>
            <button class="btn btn-danger" type="reset">Cancel</button>
            @if(isset($error))
            <p>{{$error}}</p>
            @endif
        </form>
    </div>
</body>
</html>