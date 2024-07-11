<?php

namespace Tests\Feature;

use Illuminate\Http\Response;
use App\Models\User;
use Tests\TestCase; //this
use Carbon\Factory;
use Illuminate\Support\Facades\Log;

// use PHPUnit\Framework\TestCase;

class BillingAPITest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_Billing_API(): void
    {
        $user = User::first();

        if (empty($user))
        {
            User::factory(1)->create();
            $user = User::first();
        }

        Log::info($user);
  
        $response = $this->get('/api/user/billing/' . $user->id);
        // Assert
        $response->assertStatus(200)
                 ->assertJsonStructure(['name','email', 'physical_address', 'phone_number']);
    }

    
}
