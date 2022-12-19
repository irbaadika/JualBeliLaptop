<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_photo_buyer()
    {
        $id = '9';
        $response = $this->put('admin/buyer/' . $id, [
            'photo' => new \Illuminate\Http\UploadedFile(public_path('face15.jpg'), 'doc.pdf', null, null, true),
        ]);

        $response->assertRedirect('/profile' . '/' . $id);
    }

    public function test_name_buyer()
    {
        $id = '9';
        $response = $this->put('admin/buyer/' . $id, [
            'name' => 'Irba Adika Jaya',
        ]);

        $response->assertRedirect('/profile' . '/' . $id);
    }

    public function test_alamat_buyer()
    {
        $id = '9';
        $response = $this->post('/alamat', [
            'user_id' => $id,
            'jalan' => 'Ngidod',
            'kelurahan' => 'Kedungkandang',
            'kecamatan' => 'Bululawang',
            'kota' => 'Malang',
            'provinsi' => 'Jawa Timur',
            'kodePos' => '65555',
        ]);

        $response->assertRedirect('/profile' . '/' . $id);
    }

    public function test_phone_buyer()
    {
        $id = '9';
        $response = $this->put('admin/buyer/' . $id, [
            'phone' => '082222225555',
        ]);

        $response->assertRedirect('/profile' . '/' . $id);
    }
    

}
