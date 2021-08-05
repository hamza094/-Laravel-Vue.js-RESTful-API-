<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Compnay;
use App\Http\Resources\CompanyResource;

class CompanyController extends Controller
{
    public function index(){

        $companies=Company::all();

    }

    public function show(Company $company){

       
    }
}
