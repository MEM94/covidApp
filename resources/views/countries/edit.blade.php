@extends('layouts.country')

<!-- Edit Country Page -->
@section('content')
<div class="card">
    <div class="card-header">
        Edit
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("countries.update", [$country->id]) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">Country Name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $country->name) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Cases</label>
                <input class="form-control" type="text" name="cases" id="cases" value="{{ old('cases', $country->cases) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Today Cases</label>
                <input class="form-control" type="text" name="todayCases" id="todayCases" value="{{ old('todayCases', $country->todayCases) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Deaths</label>
                <input class="form-control" type="text" name="deaths" id="deaths" value="{{ old('deaths', $country->deaths) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Today Deaths</label>
                <input class="form-control" type="text" name="todayDeaths" id="todayDeaths" value="{{ old('todayDeaths', $country->todayDeaths) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Recovered</label>
                <input class="form-control" type="text" name="recovered" id="recovered" value="{{ old('recovered', $country->recovered) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Active</label>
                <input class="form-control" type="text" name="active" id="active" value="{{ old('active', $country->active) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Criticale</label>
                <input class="form-control" type="text" name="critical" id="critical" value="{{ old('critical', $country->critical) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Cases Per One Million</label>
                <input class="form-control" type="text" name="casesPerOneMillion" id="casesPerOneMillion" value="{{ old('casesPerOneMillion', $country->casesPerOneMillion) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Deaths Per One Million</label>
                <input class="form-control" type="text" name="deathsPerOneMillion" id="deathsPerOneMillion" value="{{ old('deathsPerOneMillion', $country->deathsPerOneMillion) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Total Tests</label>
                <input class="form-control" type="text" name="totalTests" id="totalTests" value="{{ old('totalTests', $country->totalTests) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Tests Per One Million</label>
                <input class="form-control" type="text" name="testsPerOneMillion" id="testsPerOneMillion" value="{{ old('testsPerOneMillion', $country->testsPerOneMillion) }}" required>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection
<!-- / -->
