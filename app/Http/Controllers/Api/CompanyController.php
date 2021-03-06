<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(3);

        return CompanyResource::collection($companies);
    }

    public function show(Company $company)
    {
        return new CompanyResource($company);
    }
}
