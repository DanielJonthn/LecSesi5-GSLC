@extends('layout.temp')

@section('title', 'FoodHalla')

@section('content')
    @include('layout.navbar')
    <style>
        body {
            background-image: url('https://images.pexels.com/photos/164005/pexels-photo-164005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
        }
    </style> 
    <div class="d-flex justify-content-around" style="margin-top: 100px">
    @for($i = 0; $i < count($fName); $i++)
    <div class="card" style="width: 18rem; box-shadow: 3px 3px 3px 3px yellow">
        <img class="card-img-top" src={{$img[$i]}} alt="Card image cap">
        <div class="card-body">
            <h4 class="card-text">{{$fName[$i]}}</h4>
            <p>Price: {{$price[$i]}}</p>
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
