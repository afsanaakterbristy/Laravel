@extends('master')
@section("content")
<div class="container">
    <div class="row">
    <img class="detail-img" src="{{$product['gallery']}}" alt="">
        <div class="col-sm-6">
</div>
<div class= "col-sm-6">
    <a href="/"> Go back home page </a>
    <h2>{{$product['name']}}</h2>
       <h3>Price : {{$product['price']}}</h3>
       <h4>Details: {{$product['description']}}</h4>
       <h4>category: {{$product['category']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
        <input type ="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-primary">Add to cart</button>
</from>
       <br><br>
       <button class="btn btn-success">buy now</button>
       <br><br>
      
</div>
</div>
</div>

@endsection