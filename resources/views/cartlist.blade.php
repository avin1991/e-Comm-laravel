@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-10">
        <div class="trending-wrapper">
    <h4>Result for Products</h4>
    <div class="carousel-inner">
    @foreach($products as $item)
    <div class="row search-item cart-list-devider">
        <div class="col-sm-3">
            <a href="detail/{{$item->id}}">
                <img  class="trending-img" src="{{$item->gallery}}" >
            </a>
        </div>

        <!-- second row -->
        <div class="col-sm-4">  
            <div class="">
                <h2>{{$item->name}}</h2>
                <h5>{{$item->description}}</h5>
            </div>
        </div>

        <div class="col-sm-3">
            <button class="btn btn-warning">Remove to Cart</button>
        </div>
    </div>
    @endforeach
  </div>
    </div>
</div>  
@endsection