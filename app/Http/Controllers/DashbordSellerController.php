<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashbordSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with('seller')->paginate(5);
        return view('dashboard.seller.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('seller')->where('id', $id)->first();
        return view('dashboard.seller.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('seller')->where('id', $id)->first();
        return view('dashboard.seller.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userId = $request->get('user_id');
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'toko' => 'required',
            'alamat' => 'required',
            'npwp' => 'required',
            'photo' => 'image|file|max:2048'
        ]);

        $user = User::where('id', $userId)->first();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');

        $seller = Seller::where('id', $id)->first();
        $seller->toko = $request->get('toko');
        $seller->alamat = $request->get('alamat');
        $seller->npwp = $request->get('npwp');

        if($request->file('photo')){
            if($request->oldPhoto){
                Storage::delete($request->oldPhoto);
            }
            $seller->photo = $request->file('photo')->store('user-img');
        }

        $user->save();
        $seller->save();

        return redirect('/admin/seller')->with('success', 'Seller berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $userId = $request->get('user_id');
        $seller = Seller::where('id', $id)->first();
        if($seller->photo){
            Storage::delete($seller->photo);
        }
        $seller->delete();

        $user = User::where('id', $userId)->first();
        if($user){
            $user->role = 'buyer';

            $user->save();
        }

        return redirect('/admin/seller')->with('success', 'Akun telah dihapus');

    }
}
