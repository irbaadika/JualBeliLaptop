<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Merk;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admin()
    {
        $category = Category::all();
        $merk = Merk::all();
        $product = Product::all();
        $seller = User::where('role','seller');
        $admin = User::where('role','admin');
        $buyer = User::where('role','buyer');
        return view('dashboard.index',[
            'category' => $category,
            'merk' => $merk,
            'product' => $product,
            'seller' => $seller,
            'admin' => $admin,
            'buyer' => $buyer,
        ]);
    }

    public function seller(Request $request)
    {
        if($request->user()->seller->verify == '0'){
            return redirect('/')->with('gagal', 'Silahkan hubungi admin untuk melakukan verifikasi');
        }
       elseif($request->user()->seller->verify == '1'){
            return view('dashboardSeller.index');
       }
    }

}
