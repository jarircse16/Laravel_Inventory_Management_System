<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <!-- You can include additional styles or scripts here -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        body {
            background-color: #FBAB7E;
            background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);
            margin: 0; /* Reset default body margin */
            padding: 0; /* Reset default body padding */
        }

        header {
            text-align: center;
            padding: 20px; /* Add some padding for better visibility */
        }

        h1 {
            margin: 0; /* Remove default margin for h1 */
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        footer {
            text-align: center;
            padding: 20px; /* Add some padding for better visibility */
        }
    </style>


</head>
<body>

    <header>
        <center><h1>Inventory Management System</h1></center>

    </header>

    <main>
        @yield('content')
    </main>
    <br>

    <nav>
        <ul>
            <!--<li><a href="{{ route('products.index') }}">Products</a></li>-->
            @auth
                <!-- Show logout form if user is authenticated -->
            <center><li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary" style="transition: background-color 0.3s ease;">
                          Logout

                          <style>
                              .btn-primary:hover {
                                  background-color: rgba(0, 0, 0, 0.1); /*  color and transparency */
                                  border-color: #fff; /*border color  */
                                  color: #fff; /*  text color */
                              }
                              a{
                                text-decoration: none;
                              }
                          </style>

                        </button>
                    </form>
                </li></center>
            @else
                <!-- Add a link to the login page or any other authentication flow -->
                <!--<center><a href="{{ route('login') }}">Login</a></center>-->
            @endauth
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>
    <br><br><br><br><br><br><br><br>
    <footer style="margin-top: auto;" class="fixed-bottom">
      <center>
        <p>&copy; {{ date('Y') }} Inventory Management System. All rights reserved. Created Using Laravel 10.31.0. Created By <a href="https://github.com/jarircse16" target="_blank">Jarir Ahmed</a>.</p>
    </center>
</body>
</html>
