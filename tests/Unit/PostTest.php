<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_if_we_can_instatiate_Post_model()
    {

        $posts = new Post;

        $this->assertIsObject($posts);


    }

//    public function test_if_we_can_get_to_show_page()
//    {
//
//        $response = $this->get('/posts');
//        $response->assertStatus(200);
//    }

    public function test_if_we_can_find_all_posts()
    {

        $posts = Post::all();



    }
}
