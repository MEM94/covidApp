<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountriesWithData extends Model
{
    public $table = 'countries_with_data';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'cases',
        'todayCases',
        'deaths',
        'todayDeaths',
        'recovered',
        'active',
        'critical',
        'casesPerOneMillion',
        'deathsPerOneMillion',
        'totalTests',
        'testsPerOneMillion'
    ];
}
