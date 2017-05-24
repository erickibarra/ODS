<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;
use DB;
use Hash;
class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getClient()
    {
        $client=Client::all();
        return view('client', compact('client'));
    }

    public function clientRegister()
     {
        return view('client-reg');
     }

    public function clientSet(Request $data){
        $client= new Client();
        $client->Name=$data->input('Name');
        $client->Email=$data->input('Email');
        $client->Password=Hash::make($data->input('Password'));
        $client->Status='0';
        $client->save();
        return Redirect('/client');
        //bcrypt($input['password'])
    }

    public function clientDetail($id){
        $client=Client::find($id);
        return view('client-detail', compact('client'));
    }
    public function clientUpdate(Request $data, $id){
        $client=Client::find($id);
        $client->Name=$data->input('Name');
        $client->Email=$data->input('Email');
        $client->save();
        return Redirect('/client');
    }

}
