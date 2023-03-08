<?php

namespace App\Http\Controllers\Advert;

use App\Http\Controllers\Controller;
use App\Http\Requests\Advert\AdvertRequest;
use App\Models\Advert;
use App\Repositories\CountryRepository;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    private $countryRepository;

    public function __construct()
    {
        $this->countryRepository = app(CountryRepository::class);
    }

    public function showAddAdvertForm()
    {
        $allCountries = $this->countryRepository->getAllCountries();
        return view('advert.add', compact('allCountries'));
    }

    public function show()
    {
        return view('advert.cards');


        // $allCountries = $this->countryRepository->getAllCountries();
        // $houseType = Advert::HOUSE_TYPE;

        // return view('advert.add', compact('allCountries', 'houseType'));
    }

    public function advert()
    {
        return view('advert.advert');
    }

    public function add(AdvertRequest $request)
    {
        dd($request);
    }
}
