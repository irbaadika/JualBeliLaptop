<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Seller;

class TransaksiTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_buyer_transaksi()
     {
         $user_id = 9;
         $user = User::where('id', $user_id)->first();
         $response = $this->actingAs($user)->post('/transaksi',[
             'product_id' => '1',
             'harga' => '25000000',
             'seller_id' => '1',
             'jumlah' => '1',
             'keranjang_id' => '2',
             'bukti' => new \Illuminate\Http\UploadedFile(public_path('bali.jpg'), 'doc.pdf', null, null, true),
         ]);
 
         $response->assertRedirect('/cart');
     }

     public function test_verifikasi_seller_transaksi()
     {
         $id = 3;
         $response = $this->get('/verifyTransaksi' . '/' . $id);
 
         $response->assertRedirect('/sellerTransaksi');
     }
}
