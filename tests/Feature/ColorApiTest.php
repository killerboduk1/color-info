<?php

namespace Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ColorApiTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $input = "red";
        $response = $this->get('/api/color/' . $input);
        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_not_found_color_response(): void
    {
        $input = "blackwhite";
        $response = $this->get('/api/color/' . $input);
        $this->assertEquals($response->json(['message']), 'Color not found');
    }

    public function test_the_application_returns_a_found_color_response(): void
    {
        $input = "blue";
        $response = $this->get('/api/color/' . $input);
        $this->assertEquals($response->json('data.name'), $input);
    }
}
