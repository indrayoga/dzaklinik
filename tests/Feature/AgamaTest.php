<?php

namespace Tests\Feature;

use App\Models\Account;
use App\Models\Agama;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Inertia\Testing\AssertableInertia as Assert;

class AgamaTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $account = Account::create(['name' => 'Acme Corporation']);

        $this->user = User::factory()->make([
            'account_id' => $account->id,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'owner' => true,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_view_agama()
    {
        $this->withoutExceptionHandling();
        Agama::factory()->count(5)->create();

        $this->actingAs($this->user)
            ->get('/agama')
            ->assertStatus(200)
            ->assertInertia(function (Assert $page) {
                $page->component('Agama/Index');
                $page->has('agama.data', 5, function (Assert $page) {
                    $page->hasAll(['id', 'nama']);
                });
            });
    }
}
