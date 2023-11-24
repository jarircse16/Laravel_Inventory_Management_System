<!-- resources/views/products/create.blade.php -->
<!-- Create Product Page-->
@extends('layouts.app')

@section('content')
  <center>
    <h2>Add Product</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required><br><br>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required><br><br>

        <button type="submit" class="btn btn-primary" style="transition: background-color 0.3s ease;">
          Create Product
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
