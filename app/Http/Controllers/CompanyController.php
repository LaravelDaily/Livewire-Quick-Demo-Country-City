<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create()
    {
        $countries = Country::all();

        return view('companies.create', compact('countries'));
    }
}
