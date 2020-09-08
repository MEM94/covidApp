<?php

namespace App\Http\Controllers\Country;

use App\CountriesWithData as Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountriesWithDataController extends Controller
{
    /**
     * Display a listing of the countries_with_data table.
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create an object of Model
        $country = new Country;

        $country->name = $request->country;
        $country->cases = $request->cases;
        $country->todayCases = $request->todayCases;
        $country->deaths = $request->deaths;
        $country->todayDeaths = $request->todayDeaths;
        $country->recovered = $request->recovered;
        $country->active = $request->active;
        $country->critical = $request->critical;
        $country->casesPerOneMillion = $request->casesPerOneMillion;
        $country->deathsPerOneMillion = $request->deathsPerOneMillion;
        $country->totalTests = $request->totalTests;
        $country->testsPerOneMillion = $request->testsPerOneMillion;
        $country->save();

        return redirect()->route('countries.index');
    }

    /**
     * Display the specified country.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::where('id', $id)->firstOrFail();
        return view('countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified country.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::find($id);
        return view('countries.edit', compact('country'));
    }

    /**
     * Update the specified country by id in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $country = Country::find($id)->fill($request->except('id'));
        $country->save();
        return redirect()->route('countries.index');
    }

    /**
     * Remove the specified country from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country, $id)
    {
        $country::where('id',$id)->delete();
        return back();
    }


}
