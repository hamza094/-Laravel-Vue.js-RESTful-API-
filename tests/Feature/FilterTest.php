<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Filter;
use App\Models\User;

class FilterTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function view_list_of_filters()
    {
        $filters = Filter::factory()->count(5)->create();

        foreach($filters as $filter){
            $response=$this->get('api/filters')
                ->assertSee($filter->name)
                ->assertSee($filter->deal_count);
        }
        
        $response->assertStatus(200);
        $this->assertEquals(5,$filters->count());
    }
}
