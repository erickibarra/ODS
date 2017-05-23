<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use DB;

class OrderController extends Controller
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
    public function index()
    {
            $orders = DB::table('Orders as O')
            ->join('Admin as A', 'O.idAdmin', '=', 'A.id')
            ->join('Employees as E', 'O.idEmployee', '=', 'E.id')
            ->join('Clients as C', 'O.idClient', '=', 'C.id')
            ->join('Services as Se', 'O.idServices', '=', 'Se.id')
            ->join('Status as St', 'O.Status', '=', 'St.id')
            ->select('O.*', 'A.Name as admin', 'E.Name as emp', 'C.Name as client', 'Se.*', 'St.Status as status')
            ->get();            
        return view('order', compact('orders'));
    }


}