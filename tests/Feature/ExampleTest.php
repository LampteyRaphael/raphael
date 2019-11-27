<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{

    use  RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */



    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

     //   $response = $this->get('/home')->assertRedirect('/login');
    }

           /** @test*/

    public function level_testing_for_local_users_who_will_log_in_us_testing()
    {
        $response=$this->get('/local');

        $response->assertStatus(200);
    }

    /** @test */
    public function authenticated_users_can_see_this_page(){

         $this->actingAs(factory(User::class)->create());

        $response = $this->get('/home')->assertOk();

    }


    /** @test*/
    public function checking_region_to_see_where_there_everything_is_fine(){

        $response = $this->get('/region')->assertStatus(200);


    }


    /** @test*/

    public function district_checking_wherthere_everything_is_fine(){

        $response = $this->get('/district')->assertStatus(200);
    }


    /** @test*/
    public function area_testing_to_see_whether_everything_is_fine(){

       $response= $this->get('/area')->assertStatus(200);

    }






}
