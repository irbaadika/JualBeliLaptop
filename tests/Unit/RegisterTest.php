<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_duplicate_username()
    {
        $response = $this->post('/register',[
            'name' => 'auryno nagata',
            'username' => 'auryno19',
            'phone' => '082232323232',
            'email' => 'auryno19@gmail.com',
            'password' => 'password'
        ]);

        $response->assertStatus(302);
    }

    public function test_duplicate_email()
    {
        $response = $this->post('/register',[
            'name' => 'auryno nagata',
            'username' => 'auryno',
            'phone' => '082232323232',
            'email' => 'auryno@gmail.com',
            'password' => 'password'
        ]);

        $response->assertStatus(302);
    }

    public function test_invalid_nohp()
    {
        $response = $this->post('/register',[
            'name' => 'auryno nagata',
            'username' => 'auryno',
            'phone' => 'nohp',
            'email' => 'auryno19@gmail.com',
            'password' => 'password'
        ]);

        $response->assertStatus(302);
    }

    public function test_invalid_password()
    {
        $response = $this->post('/register',[
            'name' => 'auryno nagata',
            'username' => 'auryno',
            'phone' => '082232323232',
            'email' => 'auryno19@gmail.com',
            'password' => 'pass'
        ]);

        $response->assertStatus(302);
    }

    public function test_empty_field()
    {
        $response = $this->post('/register',[
            'name' => '',
            'username' => '',
            'phone' => '',
            'email' => '',
            'password' => ''
        ]);

        $response->assertStatus(302);
    }

    // public function test_success()
    // {
    //     $response = $this->post('/register',[
    //         'name' => 'auryno nagata',
    //         'username' => 'nagata',
    //         'phone' => '082232323232',
    //         'email' => 'nagata@gmail.com',
    //         'password' => 'password'
    //     ]);

    //     $response->assertRedirect(route('login'));
    // }

    public function test_verify_buyer()
    {
        $response = $this->get('/verify',[
            'request' => '9'
        ]);

        $response->assertRedirect(route('buyer.index'));
    }
}
