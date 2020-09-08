@extends('layouts.country')

<!-- Add Country Page -->
@section('content')
<div class="card">
    <div class="card-header">
        Add Country
    </div>

    <div class="card-body">
        <form  class="country" action="{{ route("countries.store") }}" method="POST">
            @csrf
            <div id="validation-errors"></div>

            <div class="form-group">
                <div class="form-group">
                    <select name="countries" id="countries" class="form-control dynamic">
                        <option value="0" disabled="true" selected="true"> Select </option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id}}">{{ $country->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="row" id="bodyData"></div>
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">Save</button>
            </div>

        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>

// Using Jquery Ajax to get data from API
$(document).ready(function() {
    $(document).on('change', '.dynamic', function() {
        // if you want the selected text instead of the value
        var air_text = $('.dynamic option:selected').text();
        $.ajax({

            url:"{{route('getData')}}",
            method:"GET",
            data:{
                name:air_text
            },
            success: function(dataResult) {
                var resultData = dataResult;
                var bodyData = '';
                $.each(resultData,function(key,value){
                    bodyData+="<div class='col-sm-3' style='margin-bottom: 2%;'>"
                    bodyData+="<label for='"+key+"'>"+key+"</label>"
                    bodyData+="</div>"
                    bodyData+="<div class='col-sm-3'>"
                    bodyData+="<input class='form-control' name='"+key+"' id='"+key+"' value='"+value+"' required>"
                    bodyData+="</div>"

                })

                $("#bodyData").empty();
                $("#bodyData").append(bodyData);
            },
            error : function(err) {
                $('#validation-errors').html('');
                $.each(err.responseJSON, function(key,value) {
                    $('#validation-errors').empty().append('<div class="alert alert-danger">'+value+'</div');
                });
            },

        })
    });
});
</script>
@endsection
<!-- / -->
