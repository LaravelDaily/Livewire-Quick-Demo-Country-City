<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class CompanyCreate extends Component
{
    public $countries;
    public $country;
    public $cities = [];

    public function mount()
    {
        $this->countries = Country::all();
    }

    public function updated($property)
    {
        if ($property == 'country') {
            $this->cities = City::where('country_id', $this->country)->get();
        }
    }

    public function render()
    {
        return view('livewire.company-create');
    }
}
