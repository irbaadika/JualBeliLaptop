<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Alamat;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::where('id', $id)->first();
        $alamat = Alamat::where('user_id', $id)->paginate(9);
        return view('profile', compact('user', 'alamat'));
    }
}
