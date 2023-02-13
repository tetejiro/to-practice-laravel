<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\User as User;
use App\Models\Person as Person;
use database\Factories\UserFactory as factory;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     * @test
     */
    use DatabaseMigrations;

    public function testHello()
    {
        User::factory()->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => 'DDD'
        ]);

        User::factory()->count(10)->create();
        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => 'DDD'
        ]);

        User::factory()->create([
            'name' => 'XXX',
            'email' => 'YYY@zzz.com',
            'password' => '123'
        ]);

        User::factory()->count(10)->create();
        $this->assertDatabaseHas('people', [
            'name' => 'XXX',
            'email' => 'YYY@zzz.com',
            'password' => '123'
        ]);
    }
}
