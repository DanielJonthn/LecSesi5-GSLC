@extends('layout.temp')

@section('title', 'FoodHalla')

@section('content')
    @include('layout.navbar')
    <div class="d-flex justify-content-around" style="margin-top: 100px">
    @for($i = 0; $i < count($fn); $i++)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src={{$img[$i]}} alt="Card image cap">
        <div class="card-body">
            <h4 class="card-text">{{$fn[$i]}}</h4>
            <p>Stock: {{$stk[$i]}}</p>
            @if($stk[$i] == !"0")
            <div class="alert alert-success d-inline-bock" style="text-align:center">
                Available
            </div>
            @elseif($stk[$i] == "0")
            <div class="alert alert-danger d-inline-bock" style="text-align:center">
                Sold Out
            </div>
            @endif
        </div>
    </div>
    @endfor
    </div>
@endsection