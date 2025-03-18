<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use Illuminate\Support\Collection;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CompanyEdit extends Component
{
    public Collection $countries;
    public Collection $cities;
    public Company $company;

    #[Validate('required|min:3', onUpdate: false)]
    public string $name = '';

    #[Validate('required', onUpdate: false)]
    public string $country = '';

    #[Validate('required', onUpdate: false)]
    public string $city = '';

    public string $savedName = '';

    public function mount(Company $company)
    {
        $this->name = $company->name;
        $this->country = $company->country_id;
        $this->cities = City::where('country_id', $this->country)->get();
        $this->city = $company->city_id;

        $this->countries = Country::all();
    }

    public function updated($property)
    {
        if ($property == 'country') {
            $this->cities = City::where('country_id', $this->country)->get();
            $this->city = $this->cities->first()->id;
        }
    }

    public function render()
    {
        return view('livewire.company-edit');
    }

    public function save(): void
    {
        $this->validate();

        $this->company->update([
            'name' => $this->name,
            'country_id' => $this->country,
            'city_id' => $this->city,
        ]);

        $this->savedName = $this->name;
    }
}
