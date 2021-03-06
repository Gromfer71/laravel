<?php

namespace Tests\Feature;

use Database\Seeders\base_itemsSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeederTest extends TestCase
{
    /** @test */
    public function completeness()
    {
        $this->assertDatabaseCount('base_items', base_itemsSeeder::getCount());
    }
}
