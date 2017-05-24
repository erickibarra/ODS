<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use DB;
use Hash;
class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getEmployee()
    {
         $employee=Employee::all();
        return view('employee', compact('employee'));
    }

    public function employeeRegister()
     {
        return view('employee-reg');
     }

     public function employeeSet(Request $data){
        $emp= new Employee();
        $emp->Name=$data->input('Name');
        $emp->Email=$data->input('Email');
        $emp->Password=Hash::make($data->input('Password'));
        $emp->Status='0';
        $emp->Role='1';
        $emp->save();
        return Redirect('/employee');
    }
    public function employeeDetail($id){
        $emp=Employee::find($id);
        return view('employee-detail', compact('emp'));
    }
    public function employeeUpdate(Request $data, $id){
        $emp=Employee::find($id);
        $emp->Name=$data->input('Name');
        $emp->Email=$data->input('Email');
        $emp->save();
        return Redirect('/employee');
    }
     public function employeeDelete($id){
        $emp=Employee::find($id);
        $emp->Status='1';
        $emp->save();
        return Redirect('/employee');
    }

}
