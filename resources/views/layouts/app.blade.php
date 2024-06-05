<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potterhead</title>
    <style>
        body {
            background-image: url("/images/hogwarts.webp");
            /* Replace 'your-image.jpg' with the URL or path to your background image */
            background-size: cover;
            background-color: #973737;
            background-attachment: fixed;
            background-position: center;
            /* animation: zoomInOut 10s infinite alternate; Adjust the duration (10s) and other properties as needed */
        }



        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);

        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            position: relative;
            overflow: hidden;
            height: 250px;
        }

        .product-image img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease-in-out;
        }

        .product-image:hover img {
            transform: scale(1.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .card-text {
            margin-bottom: 15px;
            color: #666;
        }

        .btn-primary {
            border: none;
            border-radius: 25px;
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .navbar {
            position: fixed;
            width: 100%;
            z-index: 1000;
            /* Ensure the navbar appears on top of other content */
            background-color: rgba(255, 255, 255, 0.6);
            /* Adjust the background color and opacity as needed */
            margin-bottom: 20px;
        }
        h2{
            color:rgba(0, 0, 0, 0.5);
        }

        /* Add additional styles as needed */
    </style>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="#body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top "
        style="background-color: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);">
        <div class="container">
            <a class="navbar-brand" href="#"><h2><b>Potterhead</b></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-5">
                    <li class="nav-item" >
                        <a class="nav-link" style="color: black" href="{{ route('index') }}"><h5>Home</h5></a>
                    </li>
                    <!-- Add other nav items here if needed -->
                </ul>
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#cartModal">View
                Cart</button>
        </div>
    </nav>

    <!-- Page Content -->
    @yield('content')

    <!-- Include Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
