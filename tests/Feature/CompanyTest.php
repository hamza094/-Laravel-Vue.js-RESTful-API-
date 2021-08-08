<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Company;
use App\Models\User;

class CompanyTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function view_all_companies()
    {
        $company= Company::factory()->create();

        $response=$this->get('api/companies')
                ->assertSee($company->name);
        
        $response->assertStatus(200);
        
        //$this->assertEquals(10,$companies->count());
    }
}
