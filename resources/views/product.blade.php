@extends('welcome')

@section('title', 'Product')

@section('content')

<h1>Product Page</h1>
@foreach ($data as $product)
    <h1>{{$product->name}}</h1>
    <p>{{$product->price}}</p>
    <p>{{$product->available}}</p>
@endforeach

@if ($product->price == 7)
    <p>blade ist geil {{$product->price}}</p> 
@endif

@unless($product->available == 0)
und es kann richtig viel {{$product->available}}
@endunless

<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
    <hr>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  </div>

@endsection

