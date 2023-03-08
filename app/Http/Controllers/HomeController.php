<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CountryRepository;
use App\Repositories\CityRepository;
use App\Repositories\RegionRepository;

class HomeController extends Controller
{
//    private $countryRepository;
//    private $regionRepository;
//    private $cityRepository;
//
//    public function __construct()
//    {
//        $this->countryRepository = app(CountryRepository::class);
//        $this->regionRepository = app(RegionRepository::class);
//        $this->cityRepository = app(CityRepository::class);
//    }

    public function show()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        dd(__METHOD__);
    }
}
