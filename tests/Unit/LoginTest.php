<?php

namespace Tests\Unit;

use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_invalid_password()
    {
        $response = $this->post('/login',[
            'email' => 'irba@gmail.com',
            'password' => 'password123'
        ]);

        $response->assertStatus(302);
    }

    public function test_invalid_email()
    {
        $response = $this->post('/login',[
            'email' => 'irba2@gmail.com',
            'password' => 'password'
        ]);

        $response->assertStatus(302);
    }

    public function test_invalid_email_password()
    {
        $response = $this->post('/login',[
            'email' => 'irba2@gmail.com',
            'password' => 'password123'
        ]);

        $response->assertStatus(302);
    }

    public function test_empy_form()
    {
        $response = $this->post('/login',[
            'email' => '',
            'password' => ''
        ]);

        $response->assertStatus(302);
    }

    public function test_unverified_account()
    {
        $response = $this->post('/login',[
            'email' => 'nicola@gmail.com',
            'password' => 'password'
        ]);

        $response->assertStatus(302);
    }

    public function test_success()
    {
        $response = $this->post('/login',[
            'email' => 'irba@gmail.com',
            'password' => 'password'
        ]);

        $response->assertRedirect('/');
    }
}
