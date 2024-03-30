<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Review Site</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .jumbotron {
            background-image: url('https://via.placeholder.com/1500x600');
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 100px 25px;
            margin-bottom: 0;
        }

        .jumbotron h1 {
            font-size: 3.5rem;
        }

        .jumbotron p {
            font-size: 1.5rem;
        }

        .btn-get-started {
            background-color: #007bff;
            color: #fff;
            border-radius: 25px;
            padding: 10px 30px;
            font-size: 1.25rem;
            text-transform: uppercase;
            font-weight: bold;
        }

        .btn-get-started:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

<div class="jumbotron">
    <h1>Welcome to Book Reviews</h1>
    <p>Discover, Review, and Share Your Favorite Books</p>
    <a href="books/" class="btn btn-get-started">Get Started</a>
</div>

<div id="books" class="container py-5">
    <h2 class="text-center mb-4">Featured Books</h2>
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="https://via.placeholder.com/300x400" alt="Book Image">
                <div class="card-body">
                    <h4 class="card-title">Book Title</h4>
                    <p class="card-text">Brief Description of the Book.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Read Review</a>
                </div>
            </div>
        </div>
        <!-- Add more books here -->
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
