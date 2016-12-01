@extends("layout")

@section("content")

    <div class="row">
        <div class="col-sm-2">
            <strong>NAZWA</strong>
        </div>
        <div class="col-sm-8">
            {{$data['o_name']}}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <strong>KRAJ</strong>
        </div>
        <div class="col-sm-8">
            {{$data['o_country']}}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <strong>MIASTO</strong>
        </div>
        <div class="col-sm-8">
            {{$data['o_city']}}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <strong>CENA</strong>
        </div>
        <div class="col-sm-8">
            {{$data['o_bprice']}}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <strong>OPIS</strong>
        </div>
        <div class="col-sm-8">
            {{$data['desc']}}
        </div>
    </div>


@endsection