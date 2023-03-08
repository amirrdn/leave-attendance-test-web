<?php

namespace Tests\Feature;

use App\MAttendance;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/annual-leaves');
 
        $response->assertStatus(404);
    }
    public function test_insert()
    {
        $response = $this->post('/annual-leaves', [
            "start_date" => "2023-03-24",
            "end_date" => "2023-03-27",
            "description" => "cuti tahunan",
            "leave_type" => 1,
            "user_id" => 2
        ]);
 
        $response->assertStatus(404);
    }
}
