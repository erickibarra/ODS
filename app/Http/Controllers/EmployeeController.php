<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use DB;
class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
         $employee=Employee::all();
        return view('employee', compact('employee'));
    }

    public function employeeRegister()
     {
        return view('employee-reg');
     }

}
