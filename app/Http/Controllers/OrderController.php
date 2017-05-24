<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Services;
use App\Client;
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
    public function getOrders()
    {
            $orders = DB::table('Orders as O')
            ->join('users as A', 'O.idAdmin', '=', 'A.id')
            ->join('Employees as E', 'O.idEmployee', '=', 'E.id')
            ->join('Clients as C', 'O.idClient', '=', 'C.id')
            ->join('Services as Se', 'O.idServices', '=', 'Se.id')
            ->join('Status as St', 'O.Status', '=', 'St.id')
            ->select('O.id as idOrder', 'O.idAdmin', 'O.idEmployee', 'O.idClient', 'O.idServices', 'O.Description', 'O.created_at', 'O.updated_at', 'O.Status', 'A.name as admin', 'E.Name as emp', 'C.Name as client', 'Se.*', 'St.Status as status')
            ->where('O.Status', '=', '1')
            ->orWhere('O.Status', '=', '2')
            ->get();            
        return view('order', compact('orders'));
    }
       public function orderRegister()
     {
        return view('order-reg');
     }

    public function getData()
    {
         $emp=DB::table('Employees')
            ->where('status', '=', '0')
            ->get();
            $service=Services::all();
            $client=Client::all();
        return view('order-reg', compact('emp', 'service', 'client'));
    }
     public function orderDelete($id){
       $order=Order::find($id);
        $order->delete();
        return Redirect('/order');
    }
             
public function orderSet(Request $data){
        $order= new Order();
        $order->idAdmin='1';
        $order->idEmployee=$data->input('Employee');
        $order->idClient=$data->input('Client');
        $order->idServices=$data->input('Service');
        $order->Description=$data->input('Description');
        $order->Status='1';
        $order->save();
        return Redirect('/order');
    }

   /* public function orderUpdate(Request $data, $idOrder){
        $admin=Admin::find($id);
        $admin->name=$data->input('Name');
        $admin->email=$data->input('Email');
        $admin->save();
        return Redirect('/admin');
    }*/

            


}