<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1470225620780-dba8ba36b745?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMGJhY2tncm91bmQlMjBtdXNpY3xlbnwwfHwwfHx8MA%3D%3D.jpg');     
			background-size: cover; /* Cover the entire background */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Prevent repeating the image */
            color: white; /* Change text color for better visibility */
        }

        .main-content {
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background for text visibility */
            padding: 30px;
            border-radius: 10px;
        }

        .btn-home {
            display: block;
            margin: 0 auto;
            width: 200px;
            font-size: 18px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-align: center;
            border-radius: 5px;
        }

        .btn-home:hover {
            background-color: #0056b3;
            color: white;
        }

        h1 {
            font-size: 48px;
        }

        .quote {
            font-size: 24px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Music Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Add Music</a> <!-- Links to the "Add Music" page -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Music List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="favorites.php">Favorites</a> <!-- Favorites Nav Link -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="container main-content">
        <h1 class="text-center">Welcome to the World of MUSIC</h1>
		<br>
		
        <p class="quote text-center">"Music is the universal language of mankind."<br>- Henry Wadsworth Longfellow</p>

        <!-- Add Music Button -->
        <div class="text-center mt-4">
            <a href="home.php" class="btn-home">Add Music</a> <!-- Redirects to the index.php page to add music -->
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
