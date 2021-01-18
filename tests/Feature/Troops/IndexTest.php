<?php

namespace Tests\Feature\Troops;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class IndexTest extends TestCase
{
    public function setUp()
    :void
    {
        parent::setUp();
        Auth::login(User::factory()->create());
    }

    public function test_page_opened()
    {
        $response = $this->get(route('troops.index'));
        $response->assertStatus(200);
    }
}
