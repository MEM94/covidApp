<?php

namespace App\Http\Controllers\Country;

use App\Country;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    /**
     * Display a listing of the country stored in database.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new country.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('countries.create' ,compact('countries'));
    }

}
