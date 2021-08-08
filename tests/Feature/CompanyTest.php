<?php

namespace Tests\Feature;

use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

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
        $company = Company::factory()->create();

        $response = $this->get('api/companies')
                ->assertSee($company->name);

        $response->assertStatus(200);

        //$this->assertEquals(10,$companies->count());
    }
}
