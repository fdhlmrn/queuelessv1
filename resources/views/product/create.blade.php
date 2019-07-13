@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                        <p>This is create product page !</p>
                </div>
            </div>
        <form action="{{ action('ProductController@store')}}" method="POST">
            {{ csrf_field() }}
            <div class="card mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5>Product Name : </h5>
                    <input type="text" class="form-control" name="product_name">
                    <h6 style="padding-top:5px">Product Price : </h6>
                    <input type="integer" class="form-control" name="product_price">
                </div>
                <button type="submit" class="btn"> Save </button>
            </div>
        </form>
    </div>
</div>
@endsection
