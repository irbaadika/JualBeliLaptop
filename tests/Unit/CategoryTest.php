<?php

namespace Tests\Unit;

use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create()
    {
        $response = $this->post('/admin/category',[
            'name' => 'Headset'
        ]);

        $response->assertRedirect(route('category.index'));
    }

    public function test_duplicate_create()
    {
        $response = $this->post('/admin/category',[
            'name' => 'Laptop'
        ]);

        $response->assertStatus(302);
    }

    public function test_edit()
    {
        $id = '14';
        $response = $this->put('/admin/category/'. $id ,[
            'name' => 'Earphone'
        ]);

        $response->assertRedirect(route('category.index'));
    }

    public function test_delete()
    {
        $id = '14';
        $response = $this->delete('/admin/category/'. $id);

        $response->assertRedirect(route('category.index'));
    }
}
