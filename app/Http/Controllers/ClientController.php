<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;
use DB;
class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $client=Client::all();
        return view('client', compact('client'));
    }

    public function clientRegister()
     {
        return view('client-reg');
     }

}
