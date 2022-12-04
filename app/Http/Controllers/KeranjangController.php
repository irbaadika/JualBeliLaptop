<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $keranjang = Keranjang::where('user_id', $user->id)->paginate(6);
        return view('cart', compact('keranjang'));
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
        $keranjang = new Keranjang();

        if(Keranjang::where('product_id', $request->get('product_id'))->exists()){
            $keranjang = Keranjang::where('product_id', $request->get('product_id'))->first();
            $keranjang->jumlah = $keranjang->jumlah + $request->get('jumlah');
            $keranjang->harga = $keranjang->jumlah * $request->get('harga');

            $keranjang->save();

            return redirect('/product' . '/' . $request->get('product_id'))->with('success', 'Barang Telah di tambahkan ke dalam keranjang');

        }else{
            $request->validate([
                'product_id'=>'required',
                'jumlah' => 'required', 
                'harga' => 'required' 
            ]);
    
            
            $keranjang->user_id = $request->user()->id;
            $keranjang->product_id = $request->get('product_id');
            $keranjang->jumlah = $request->get('jumlah');
            $keranjang->harga = $request->get('jumlah') * $request->get('harga');
    
            $keranjang->save();
    
            return redirect('/product' . '/' . $request->get('product_id'))->with('success', 'Barang Telah di tambahkan ke dalam keranjang');
    
        }
                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keranjang = Keranjang::where('id', $id)->first();
        $keranjang->delete();
        return redirect('/cart')->with('success', 'Transaksi telah dihapus');
    }
}
