@extends('layouts.country')
<!-- Show specific Country Page -->
@section('content')
<div class="card">
    <div class="card-header">
        Country Covid Details
    </div>
    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('countries.index') }}">
                    Back
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $country->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Country Name
                        </th>
                        <td>
                            {{ $country->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Cases
                        </th>
                        <td>
                            {{ $country->cases }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Today Cases
                        </th>
                        <td>
                            {{ $country->todayCases }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Deaths
                        </th>
                        <td>
                            {{ $country->deaths }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Today Deaths
                        </th>
                        <td>
                            {{ $country->todayDeaths }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Recovered
                        </th>
                        <td>
                            {{ $country->recovered }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Active
                        </th>
                        <td>
                            {{ $country->active }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Critical
                        </th>
                        <td>
                            {{ $country->critical }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Cases Per One Million
                        </th>
                        <td>
                            {{ $country->casesPerOneMillion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Deaths Per One Million
                        </th>
                        <td>
                            {{ $country->deathsPerOneMillion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Total Tests
                        </th>
                        <td>
                            {{ $country->totalTests }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tests Per One Million
                        </th>
                        <td>
                            {{ $country->testsPerOneMillion }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
<!-- / -->
