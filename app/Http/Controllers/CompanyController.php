<?php

namespace App\Http\Controllers;

use App\Models\Company;

class CompanyController extends Controller
{
    public function create()
    {
        return view('companies.create');
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }
}
