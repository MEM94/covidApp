@extends('layouts.country')

<!-- Home -->
@section('content')

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route('countries.create') }}">
            Add Country
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Countries
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            Country Name
                        </th>
                        <th>
                            Cases
                        </th>
                        <th>
                            Deaths
                        </th>
                        <th>
                            Recovered
                        </th>
                        <th>
                            Active
                        </th>
                        <th>
                            Critical
                        </th>

                        <th>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($countries)===0)
                        <tr>
                            <td colspan="7"><h1 class="text-center">There is no data</h1></td>
                        </tr>

                    @else
                    @foreach($countries as $country)
                        <tr>
                            <td>
                                <a href="{{ route('countries.show', $country->id) }}">
                                    {{ $country->name }}
                                </a>
                            </td>
                            <td>
                                {{ $country->cases }}
                            </td>
                            <td>
                                {{ $country->deaths }}
                            </td>
                            <td>
                                {{ $country->recovered }}
                            </td>
                            <td>
                                {{ $country->active }}
                            </td>
                            <td>
                                {{ $country->critical }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-info" href="{{ route('countries.edit', $country->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('countries.destroy', $country->id) }}" method="POST" onsubmit="return confirm('{{' are u sure' }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="delete">
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
<!-- /-->
