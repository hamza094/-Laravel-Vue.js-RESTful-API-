<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Investment;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()->times(11)->create()->each(function ($company) {
            $investment = Investment::factory()->make();

            $company->investments()->save($investment);
        });
    }
}
