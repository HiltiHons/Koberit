@extends('welcome')

@section('title', 'Product')

@section('content')

<h1>Product Page</h1>
@foreach ($data as $product)
<h1>{{$product->name}}</h1>
<p>{{$product->price}}</p>
<p>{{$product->available}}</p>
@endforeach

@endsection

