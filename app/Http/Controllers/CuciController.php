<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\db_cuci;
use App\Models\Customer;
use App\Models\History;
use App\Models\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class CuciController extends Controller
{
    public function destroy($id) {
        DB::delete('delete from db_cuci where id = ?',[$id]);
        return redirect()->back()->with('message','Data berhasil dihapus');
    }    

    public function index1(){ 
        $users = DB::select('select * from customer ORDER BY name');
        return view('cuci/cuci_tipe1',['users'=>$users]);
    } 

    public function insert1(Request $request){
        try {
            $request->validate([
                'id' => 'required', 
                'jumlah' => 'required|numeric', 
            ]);

            $custid = $request->get('id');
            $customer = Customer::find($custid);
            $type = 1;
            $userid = $request->user()->id;
            $user = User::find($userid);
            $jumlah = $request->input('jumlah');

            $dbCuci = db_cuci::create([
                'type' => $type,
                'cust_id' => $custid,
                'user_id' => $userid,
                'jumlah' => $jumlah,
            ]);

            $history = History::create([
                'name' => $customer->name,
                'alamat' => $customer->alamat,
                'no_hp' => $customer->no_hp,
                'username' => $user->username,
                'type' => $type,
                'jumlah' => $jumlah,
            ]);

            return redirect('/')->with('message', 'Data berhasil ditambahkan');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $messages = $e->validator->errors();

            if ($messages->has('id')) {
                return redirect()->back()->with('error', 'Pilih member!');
            }  else {
                return redirect()->back()->with('error', 'Isi kolom jumlah dengan benar!.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
    public function index2(){ 
        $users = DB::select('select * from customer ORDER BY name');
        return view('cuci/cuci_tipe2',['users'=>$users]);
    } 
    public function insert2(Request $request){
        try {
            $request->validate([
                'id' => 'required', 
                'jumlah' => 'required|numeric', 
            ]);

            $custid = $request->get('id');
            $customer = Customer::find($custid);
            $type = 2;
            $userid = $request->user()->id;
            $user = User::find($userid);
            $jumlah = $request->input('jumlah');

            $dbCuci = db_cuci::create([
                'type' => $type,
                'cust_id' => $custid,
                'user_id' => $userid,
                'jumlah' => $jumlah,
            ]);

            $history = History::create([
                'name' => $customer->name,
                'alamat' => $customer->alamat,
                'no_hp' => $customer->no_hp,
                'username' => $user->username,
                'type' => $type,
                'jumlah' => $jumlah,
            ]);

            return redirect('/')->with('message', 'Data berhasil ditambahkan');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $messages = $e->validator->errors();

            if ($messages->has('id')) {
                return redirect()->back()->with('error', 'Pilih member!');
            }  else {
                return redirect()->back()->with('error', 'Isi kolom jumlah dengan benar!.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function index3(){ 
        $users = DB::select('select * from customer ORDER BY name');
        return view('cuci/cuci_tipe3',['users'=>$users]);
    } 
    public function insert3(Request $request){
        try {
            $request->validate([
                'id' => 'required', 
                'jumlah' => 'required|numeric', 
            ]);

            $custid = $request->get('id');
            $customer = Customer::find($custid);
            $type = 3;
            $userid = $request->user()->id;
            $user = User::find($userid);
            $jumlah = $request->input('jumlah');

            $dbCuci = db_cuci::create([
                'type' => $type,
                'cust_id' => $custid,
                'user_id' => $userid,
                'jumlah' => $jumlah,
            ]);

            $history = History::create([
                'name' => $customer->name,
                'alamat' => $customer->alamat,
                'no_hp' => $customer->no_hp,
                'username' => $user->username,
                'type' => $type,
                'jumlah' => $jumlah,
            ]);

            return redirect('/')->with('message', 'Data berhasil ditambahkan');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $messages = $e->validator->errors();

            if ($messages->has('id')) {
                return redirect()->back()->with('error', 'Pilih member!');
            }  else {
                return redirect()->back()->with('error', 'Isi kolom jumlah dengan benar!.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
    public function index4(){ 
        $users = DB::select('select * from customer ORDER BY name ');
        return view('cuci/cuci_tipe4',['users'=>$users]);
    } 
    public function insert4(Request $request){
        try {
            $request->validate([
                'id' => 'required', 
                'jumlah' => 'required|numeric', 
            ]);

            $custid = $request->get('id');
            $customer = Customer::find($custid);
            $type = 4;
            $userid = $request->user()->id;
            $user = User::find($userid);
            $jumlah = $request->input('jumlah');

            $dbCuci = db_cuci::create([
                'type' => $type,
                'cust_id' => $custid,
                'user_id' => $userid,
                'jumlah' => $jumlah,
            ]);

            $history = History::create([
                'name' => $customer->name,
                'alamat' => $customer->alamat,
                'no_hp' => $customer->no_hp,
                'username' => $user->username,
                'type' => $type,
                'jumlah' => $jumlah,
            ]);

            return redirect('/')->with('message', 'Data berhasil ditambahkan');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $messages = $e->validator->errors();

            if ($messages->has('id')) {
                return redirect()->back()->with('error', 'Pilih member!');
            }  else {
                return redirect()->back()->with('error', 'Isi kolom jumlah dengan benar!.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}