<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\db_cuci;
use App\Models\Customer;
use App\Models\User;
use App\Models\History;
use App\Invoice;



class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function cetak($id) {
        $invoice = db_cuci::where('id', $id)->with('customer', 'user')->first();
        return view('home/cetak_invoice', ['invoice'=>$invoice]);
    }

    public function index_member_menu(){
        return view('home/member');
    }

    public function index_history_menu(){
        $histories = History::all();
        return view('home/history', ['histories' => $histories]);
    }

    public function index_cuci_menu() {
        $users = DB::select('select * from customer ORDER BY name');
        return view('home.cuci',['users'=>$users]);
    }

    public function index(){
        $cuci = (new db_cuci())->getJoinedData();
        return view('home/index',['cuci'=>$cuci]);
        
    }    

    public function search(Request $request)
    {
        $keyword = $request->search;
        $customers = Customer::where('name', 'like', '%' . $keyword . '%')->get();
        $cuci = collect();


        foreach ($customers as $customer) {
            $cuciForCustomer = db_cuci::where('cust_id', $customer->id)->get();
            $cuci = $cuci->merge($cuciForCustomer);
        }

        return view('home/index', ['cuci' => $cuci, 'customers' => $customers]);
    }

    public function search_history(Request $request)
    {
        $keyword = $request->search;
        $histories = History::where('name', 'like', '%' . $keyword . '%')->get();

        return view('home/history', ['histories' => $histories]);
    }
}
