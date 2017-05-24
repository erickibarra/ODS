<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;
use DB;
use Hash;

class AdminController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function getAdmin()
    {
         $admin=DB::table('users')
            ->where('status', '=', '0')
            ->get();
    	return view('admin', compact('admin'));
    }

     public function adminRegister()
     {
        return view('admin-reg');
     }
    public function adminDetail($id){
        $admin=Admin::find($id);
        return view('admin-detail', compact('admin'));
    }

    public function adminSet(Request $data){
        $admin= new Admin();
        $admin->name=$data->input('Name');
        $admin->email=$data->input('Email');
        $admin->password=Hash::make($data->input('Password'));
        $admin->status='0';
        $admin->save();
        return Redirect('/admin');
    }


    public function adminUpdate(Request $data, $id){
        $admin=Admin::find($id);
        $admin->name=$data->input('Name');
        $admin->email=$data->input('Email');
        $admin->save();
        return Redirect('/admin');
    }
        public function adminDelete($id){
        $admin=Admin::find($id);
        $admin->status='1';
        $admin->save();
        return Redirect('/admin');
    }

}
