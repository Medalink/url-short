<?php

namespace Tests\Feature;

use App\Models\Link;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShortenApiControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_user_can_shorten_a_url()
    {
        $this->actingAs($user = User::factory()->create());

        $testLink = Link::factory()->make();

        $response = $this->put('/api/shorten-url', [
            'url' => $testLink->url,
        ]);

        $link = Link::where('user_id', $user->id)->where('url', $testLink->url)->first();

        $response->assertJson([
            'short_url' => $link->short_url,
        ]);
    }

    /**
     * @test
     */
    public function a_user_can_view_their_short_urls()
    {
        $this->actingAs($user = User::factory()->create());

        $testLink = Link::factory()->count(5)->create();

        $response = $this->get('/api/view-urls');

        $response->assertJson($testLink->toArray());
    }
}
