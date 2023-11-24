<!-- resources/views/products/index.blade.php -->
<!-- Main Product Page After login-->
@extends('layouts.app') <!-- Importing common layout-->

@section('content')
    <center>
        <h2>Product List</h2>

        <table style="border-collapse: collapse; border-spacing: 7px; width: 80%;"> <!-- Showing Product list in a table-->
            <thead>
                <tr style="border: 1px solid black; padding: 10px;">
                    <th style="border: 1px solid black; padding: 10px;">Name</th>
                    <th style="border: 1px solid black; padding: 10px;">Quantity</th>
                    <th style="border: 1px solid black; padding: 10px;">Price</th>
                    <th style="border: 1px solid black; padding: 10px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr style="border: 1px solid black; padding: 10px;">
                        <td style="border: 1px solid black; padding: 10px;">{{ $product->name }}</td>
                        <td style="border: 1px solid black; padding: 10px;">{{ $product->quantity }}</td>
                        <td style="border: 1px solid black; padding: 10px;">${{ $product->price }}</td>
                        <td style="border: 1px solid black; padding: 10px;">

                          <button type="submit" class="btn btn-primary">
                            <a href="{{ route('products.show', $product) }}">View</a>
                          </button>

                          <button type="submit" class="btn btn-primary">
                            <a href="{{ route('products.edit', $product) }}">Edit</a>
                          </button>
                          <br>
                            <form method="POST" action="{{ route('products.destroy', $product) }}">
                                @csrf
                                @method('DELETE')
                                <br>
                                <button type="submit" class="btn btn-primary">
                                  Delete
                                </button>

                            </form>
                        </td>
                    </tr>
                @empty <!--Condition when no product found-->
                    <tr style="border: 0px solid black; padding: 0px;">
                        <td colspan="4" style="border: 0px solid black; padding: 00px;"><br>Product list is empty.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <br>
        <button class="btn btn-primary" style="transition: background-color 0.3s ease;">
          <a href="{{ route('products.create') }}">Add Product</a>

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
          </style> <!-- Styles for button-->

        </button>
    </center>
@endsection
