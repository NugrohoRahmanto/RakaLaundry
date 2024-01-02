<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Customer;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class MemberController extends Controller
{
    public function insertform() //form input
    {
        return view('customer/add_member');
    }
    public function insertmember(Request $request) // method insert member
    {
        try {
            // Validasi form
            $request->validate([
                'name' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required|numeric',
            ]);
    
            $name = $request->input('name');
            $alamat = $request->input('alamat');
            $no_hp = $request->input('no_hp');
    
            $data = [
                'name' => $name,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
            ];
    
            Customer::create($data);
    
            return redirect('/cuci')->with('message', 'Data member berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Isi form dengan benar');
        }
    }
    public function index_view_member() // method view member
    {
        $customer = DB::select('select * from customer ORDER BY name');
        return view('customer/view_member',['customer'=>$customer]);
    }
    public function destroy($id) //method hapus member
    {
        try {
            // Hapus data customer berdasarkan ID
            DB::delete('delete from customer where id = ?', [$id]);
    
            // Redirect dengan pesan sukses jika penghapusan berhasil
            return redirect()->back()->with('message', 'Data member berhasil dihapus');
        } catch (\Exception $e) {
            // Tangani kesalahan dan redirect dengan pesan error
            return redirect()->back()->with('error', 'Member masih mencuci!');
        }
    }  
    public function show($id) //menampilkan data yang ingin di update
    {
        $users = DB::select('select * from customer where id = ? ',[$id]);
        return view('Customer/update_member',['users'=>$users]);
    }
    public function edit(Request $request,$id) // method edit data
    {
        try {
            // Validasi form
            $request->validate([
                'name' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required|numeric',
            ]);
    
            // Mendapatkan data dari request
            $name = $request->input('name');
            $alamat = $request->input('alamat');
            $no_hp = $request->input('no_hp');
    
            // Lakukan operasi update
            Customer::where('id', $id)->update([
                'name' => $name,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'updated_at' => now(),
            ]);
    
            // Redirect dengan pesan sukses jika update berhasil
            return redirect('/view_member')->with('message', 'Data member berhasil diubah');
        } catch (\Exception $e) {
            // Tangani kesalahan dan redirect dengan pesan error
            return redirect('/view_member')->with('error', 'Gagal mengubah data, pastikan form terisi dengan benar');
        }
    }
    public function search_member(Request $request)
    {
        $keyword = $request->search;
        $customer = Customer::where('name', 'like', '%' . $keyword . '%')->get();

        return view('customer/view_member',['customer'=>$customer]);
    }
    

}
