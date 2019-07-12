@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <p>This is product home</p>
                </div>
            </div>
            @foreach ($products as $product)
            <div class="card mt-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$product->product_name}}</h5>
                  <p class="card-text">Product Price : {{$product->product_price}}</p>
                </div>
            </div>
            @endforeach




        </div>
    </div>
</div>
@endsection