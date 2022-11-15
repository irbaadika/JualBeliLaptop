<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SellerController extends Controller
{
    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'toko' => 'required',
            'email' => 'required',
            'phone' => 'required|max:12|min:11',
            'alamat' => 'required',
            'npwp' => 'required|digits:16',
            'doc' => 'required|mimes:pdf'
            
        ]);

        $seller = new Seller();
        $seller->user_id = $request->user()->id;
        $seller->name = $request->get('name');
        $seller->toko = $request->get('toko');
        $seller->email = $request->get('email');
        $seller->phone = $request->get('phone');
        $seller->alamat = $request->get('alamat');
        $seller->npwp = $request->get('npwp');

        if($request->file('doc')){
            $seller->doc = $request->file('doc')->store('seller-doc');
        }

        $user = User::find($request->user()->id);
        if($user){
            $user->role = 'seller';

            $user->save();
        }


        $seller->save();
     
        
        return redirect('/')->with('successAdd', 'Registrasi berhasil, silhakan menunggu verifikasi dari admin');

    }
}
