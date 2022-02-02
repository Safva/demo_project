<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{
    function fnSaveEmployeeDetails(Request $request){
        $fname = $request->emp_fname;
        $lname = $request->emp_lname;
        $dob = $request->emp_dob;
        $address = $request->emp_address;
        $contact = $request->emp_contact;
        $employeeData = DB::table('employee')->insert([
            'first_name' => $fname,
            'last_name' => $lname,
            'date_of_birth' => $dob,
            'address' => $address,
            'contact' => $contact
        ]);

        if($employeeData){
            return view('employee_registration',['error'=>"student registered"]);
        }
        else{
            return view('employee_registration',['error'=>"student not registered"]);
        }
    }

    function fnRetrieveEmployees(){
        $employeeList = DB::table('employee')->get();
        return view('view_all_employees',['employees'=> $employeeList]);
    }
}
