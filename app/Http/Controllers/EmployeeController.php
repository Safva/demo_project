<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mail\SendMail;

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
        return view('index',['employees'=> $employeeList]);
    }

    function fnDeleteEmployee($id){
        echo $id;
        DB::table('employee')->where('id',$id)->delete();
        return redirect('EmployeeDetails');
    }

    function fnRetrieveAnEmployee($id){
        $employeeDetails = DB::table('employee')->where('id',$id)->first();
        //echo $employeeDetails;
        return view('employee_update',['employee'=>$employeeDetails]);
    }

    function fnUpdateEmployeeDetails(Request $request,$id){
        $fname = $request->emp_fname;
        $lname = $request->emp_lname;
        $dob = $request->emp_dob;
        $address = $request->emp_address;
        $contact = $request->emp_contact;
        DB::table('employee')->where('id',$id)->update([
            'first_name'=>$fname,
            'last_name'=>$lname,
            'date_of_birth'=>$dob,
            'address'=>$address,
            'contact'=>$contact
        ]);
        return redirect('EmployeeDetails');
    }

    function fnGetEmployeeLogin(Request $request){
        $this->validate($request,[
            'user_name'=>'required',
            'pass_word'=>'required'
        ],
        [
            'user_name.required'=>'please enter your username',
             'user_name.min'=>'minimum length should be 10'
        ]);

        $user = $request->user_name;
        $pass = $request->pass_word;
        $loginId = DB::table('employee')->where('first_name',$user)->first();
        if(is_null($loginId)){
            return view('employee_login',['error'=>'incorrect username or password']);

        }
        elseif(($user == $loginId->first_name)&&($pass == $loginId->contact)){
            
            $request->session()->put('user_id',$loginId->id);
            return redirect('Profile');
            //echo "login success";
        }
        else{
            return view('employee_login',['error'=>'incorrect username or password']);
            
        }

        //return view('employee_login');
    }

    function fnRetrieveEmployeeProfile(Request $request){
        if(session()->has('user_id')){
            
            $sessId = $request->session()->get('user_id');
            echo $sessId;
            $employee = DB::table('employee')->where('id',$sessId)->first();
            //echo $employee;
            //$id = session()->pull('user_id');
            //echo (session()->get('user_id'));
            //$employees = DB::table('employee')->where('id',session('user_id'))->get();

            return view('employee_dashboard',['emp'=>$employee]);
        }
        else{
            echo "please login to your account";
        }

        // echo session()->get('user_id');
        // return view('dashboard');

    }

    function fnLogout(){
        session()->forget('user_id');
        session()->flush();
        return view('employee_login');
    }

    // // function fnFileUpload(Request $request){
    // //     $name = $request->name;
    // //     $contact=$request->contact;
    // //     $img ="demoprj".time().".".$request->image->getClientOriginalExtension();
    // //     $request->image->storeAs('public/profile',$img);
    // //     $data = DB::table('file_upload')->insert([
    // //         'name'=>$name,
    // //         'contact'=>$contact,
    // //         'file'=>$img
    // // ]);

    // // if($data){
    // //     return view('fileupload',['error' => "Student registered"]);
    // // }
    // // else{
    // //     return view('fileupload',['error' => "Data not registered"]);
    // // }
    // // }

    // function fnFileDisplay(){
    //     $data = DB::table('file_upload')->get();
    //     return view('filedisplay',['userdata'=>$data]);
    // }

    function fnSaveCustomer(Request $request){
        $name = $request->customer_name;
        $address = $request->customer_address;
        $contact = $request->customer_contact;
        $status = $request->customer_status;
        // $obj = new Customer();
        // $obj->customer_name = $name;
        // $obj->customer_contact = $contact;
        // $obj->customer_country = $country;
        // $obj->customer_status = $status;
        // $obj->save();

        $obj = new Customer([
            'customer_name' => $name,
            'customer_address' => $address,
            'customer_contact' => $contact,
            'customer_status' => $status
        ]);
        $obj->save();
        return view('customer_registr',['message' => "Customer registered"]);
    }

    function fnSendMail(Request $request){
        $name = $request->name;
        $mail = $request->email;
        $message = $request->message;
        $details = [
            'title'=>'exampletitle',
            'name'=>$name,
            'body'=>'body'.$message
        ];
        \Mail::to($mail)->send(new SendMail($details));
        return view('thanks');
    }
}
