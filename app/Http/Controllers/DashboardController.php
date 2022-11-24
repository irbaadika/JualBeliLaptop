<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('dashboard.index');
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
