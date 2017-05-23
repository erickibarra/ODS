<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;
use DB;

class AdminController extends Controller
{

    public function getAdmin()
    {
         $admin=DB::table('Admin')
            ->where('Status', '=', '0')
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
        $admin->Name=$data->input('Name');
        $admin->Email=$data->input('Email');
        $admin->Password=$data->input('Password');
        $admin->save();
        return Redirect('/admin');
    }


    public function adminUpdate(Request $data, $id){
        $admin=Admin::find($id);
        $admin->Name=$data->input('Name');
        $admin->Email=$data->input('Email');
        $admin->save();
        return Redirect('/admin');
    }
        public function adminDelete($id){
        $admin=Admin::find($id);
        $admin->Status='1';
        $admin->save();
        return Redirect('/admin');
    }

}
