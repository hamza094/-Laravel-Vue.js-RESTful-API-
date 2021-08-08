<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filter;
use App\Http\Resources\FilterResource;

class FilterController extends Controller
{

	public function __construct()
{
    $this->middleware('auth');
}

	public function index(){
		
     $filters=Filter::all();

    return FilterResource::collection($filters);
	}
    
}
