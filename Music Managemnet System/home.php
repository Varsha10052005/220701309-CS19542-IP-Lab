<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('musicgallery.png'); /* Replace with your image path */
            background-size: cover; /* Cover the entire background */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Prevent repeating the image */
            color: light; /* Change text color for better visibility */
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid text-primary">
            <a class="navbar-brand" href="#">Music Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="music.png">Music List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="favorites.php">Favorites</a> <!-- Favorites Nav Link -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="container mt-5">
        <h1 class="text-center">Music Management System</h1>

        <!-- Add Music Form -->
        <div class="card mt-4">
            <div class="card-body">
                <h2 class="card-title">Add Music</h2>
                <form id="musicForm">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="artist" class="form-label">Artist:</label>
                        <input type="text" class="form-control" id="artist" name="artist" required>
                    </div>
                    <div class="mb-3">
                        <label for="album" class="form-label">Album:</label>
                        <input type="text" class="form-control" id="album" name="album" required>
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre:</label>
                        <input type="text" class="form-control" id="genre" name="genre" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Add Music">
                    
                    <!-- Favorites Button -->
                    <button type="button" class="btn btn-primary" id="favoriteBtn">Add to Favorites</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript to handle form submission and favorites -->
    <script>
        // Function to handle adding music
        document.getElementById('musicForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Create a new FormData object to hold the form data
            const formData = new FormData(this);

            // Make an AJAX request to add music
            fetch('add.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text()) // Convert the response to text
            .then(data => {
                // Show success message
                alert("Music added successfully!");
                // Optionally, you can remove the line resetting the form
                // this.reset(); 
            })
            .catch(error => {
                console.error('Error:', error);
                alert("An error occurred while adding music.");
            });
        });

        // Function to handle adding to favorites
        document.getElementById('favoriteBtn').addEventListener('click', function() {
            // Get music details
            const title = document.getElementById('title').value;
            const artist = document.getElementById('artist').value;
            const album = document.getElementById('album').value;
            const genre = document.getElementById('genre').value;

            // Simple validation
            if (title && artist && album && genre) {
                // Here you can implement logic to save to favorites (e.g., make an AJAX request)
                alert(`${title} by ${artist} added to Favorites!`);
            } else {
                alert("Please fill in all fields before adding to favorites.");
            }
        });
    </script>

</body>
</html>
