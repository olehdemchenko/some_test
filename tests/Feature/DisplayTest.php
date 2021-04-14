<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisplayTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $data = [
            'reseller_id' => 1,

        ];
        $response = $this->post('/displays');

        $response->assertStatus(200);


        $response = $this->delete('/displays/');
    }
}
