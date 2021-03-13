<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class CreateStructureTest extends TestCase
{
    public function test_example()
    {
        $user = User::factory()->create();
        $data = [
            "address" => "endereço alterado",
            "bedrooms" => 2,
            "bathrooms" => 1,
            "total_area" => 500,
            "purchased" => true,
            "value" => 125000.00,
            "discount" => 50,
            "owner_id" => $user->id,
            "expired" => true,
        ];

        $response = $this->postJson('/api/structures', $data);
        $responseData = json_decode($response->getContent(), true)['data'];

        $response->assertStatus(200);
        $this->assertEquals($responseData['address'], $data['address']);
        $this->assertEquals($responseData['bedrooms'], $data['bedrooms']);
        $this->assertEquals($responseData['total_area'], $data['total_area']);
        $this->assertEquals($responseData['purchased'], $data['purchased']);
        $this->assertEquals($responseData['value'], $data['value']);
        $this->assertEquals($responseData['owner_id'], $data['owner_id']);
        $this->assertEquals($responseData['expired'], $data['expired']);
    }
}
