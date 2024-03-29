@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                </div>
                <div class="card-body">
                    <p>
                        This is product home
                        <a href="{{ url('/product/create') }}" class="btn pull-right">
                            Add product
                        </a>
                    </p>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                @foreach ($products as $product)
                    <div class="card mb-2" style="width: 18rem;margin: 0 auto">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$product->product_name}}
                                <a href="{{action('ProductController@edit', $product->id) }}" class="btn">Edit</a>
                            </h5>
                            <p class="card-text">Product Price : RM{{$product->product_price}}</p>
                            <form action="{{ route('product.destroy', $product->id)}}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach           
                </div>
                
            <div align="centre">
                {{ $products->links() }}
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection
