<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class FirstUserTest extends TestCase
{

    use DatabaseMigrations;
    
    public function testGetAllFirstUsers(){

        $response = $this->get('/api/users');
        $response
        ->assertStatus(200)
        ->assertJsonStructure(
            [
               "*" => [
                    
                    "id",
                    "name",
                    "email",
                    "created_at",
                    "updated_at",
                    
                ]
            ]
        );
    }


    public function testCreateFirstUser(){

        $data = [
                "name" => "jhonatas felipe",
                "email" => "jhonatas1020@gmail.com",
                "password" => "12345600",
                "password_confirm" => "12345600"
        ];

        $response = $this->post('/api/users/insert', $data);

        $response 
        ->assertStatus(201)
        ->assertJsonStructure(
            [
                    
                "id",
                "name",
                "email",
                "created_at",
                "updated_at",
                
            ]
        );
    }
    
     
}
