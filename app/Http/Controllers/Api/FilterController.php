<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FilterResource;
use App\Models\Filter;

class FilterController extends Controller
{
    public function index()
    {
        $filters = Filter::all();

        return FilterResource::collection($filters);
    }
}
