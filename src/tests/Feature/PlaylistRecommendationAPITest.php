<?php

namespace Tests\Feature;

use Illuminate\Http\Response;
use App\Models\User;
use Tests\TestCase; //this
use Carbon\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;

// use PHPUnit\Framework\TestCase;

class PlaylistRecommendationAPITest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_Playlist_Recommendation_API(): void
    {
        $user = User::first();

        if (empty($user))
        {
            User::factory(1)->create();
            $user = User::first();
        }

        Log::info($user);
  
        $response = $this->get('/api/user/' . $user->id);
        // Assert
        $response->assertStatus(200)
                 ->assertJsonStructure(['fav_genre', 'interest', 'playlist_history']);
    }

    
}
