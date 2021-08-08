<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Resources\CompanyResource;

class CompanyController extends Controller
{
    public function __construct()
   {
      $this->middleware('auth');
   }

    public function index(){

       $companies=Company::paginate(3);

       return CompanyResource::collection($companies);
    }

    public function show(Company $company){

      return new CompanyResource($company);
       
    }
}
