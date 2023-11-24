<!-- resources/views/products/show.blade.php -->
<!-- Show Product Page-->

@extends('layouts.app') <!-- Improting the common layout-->

@section('content') <!-- Show Product Section-->
    <center>
        <h2>{{ $product->name }}</h2>
        <table border="1" cellpadding="10"> <!-- Showing Product in table-->
            <tr>
                <th>Attribute</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>{{ $product->quantity }}</td>
            </tr>
            <tr>
                <td>Price</td>
                <td>${{ $product->price }}</td>
            </tr>
        </table>
        <br>
        <button class="btn btn-action" style="transition: background-color 0.3s ease;">
            <a href="{{ route('products.index') }}">Back to List</a> <!-- Back Button for going to index page-->
        </button>
    </center>

    <style>
        .btn-action:hover {
            background-color: rgba(0, 0, 0, 0.1); /*  color and transparency */
            border-color: #fff; /*border color  */
            color: #fff; /*  text color */
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style> <!-- Buttton Styles -->
@endsection
