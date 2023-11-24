<!-- resources/views/products/edit.blade.php -->
<!-- Edit Product Page-->
@extends('layouts.app')

@section('content')
<center>
    <h2>Edit Product</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control @error('email') is-invalid @enderror" required><br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="{{ $product->quantity }}" required><br><br>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" value="{{ $product->price }}" required><br><br>

        <button type="submit" class="btn btn-primary" style="transition: background-color 0.3s ease;">
          Update Product
          <style>
              .btn-primary:hover {
                  background-color: rgba(0, 0, 0, 0.1); /*  color and transparency */
                  border-color: #fff; /*border color  */
                  color: #fff; /*  text color */
              }
              a{
                text-decoration: none;
                color: black;
              }
          </style>
        </button>

        <br><br>

        <button type="submit" class="btn btn-primary" style="transition: background-color 0.3s ease;">
          <a href="{{ route('products.index') }}">  Back To Main Page </a>
        </button>

    </form>
  </center>
@endsection
