<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Songs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="music.png">Music List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="favorites.php">Favorites</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="container mt-5">
        <h1 class="text-center">Favorite Songs</h1>
        <div id="favoritesList" class="mt-4"></div>
    </div>

    <script>
        // Function to display favorites
        function displayFavorites() {
            const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
            const favoritesList = document.getElementById('favoritesList');
            
            // Clear previous content
            favoritesList.innerHTML = '';

            // Check if there are any favorites
            if (favorites.length === 0) {
                favoritesList.innerHTML = '<p>No favorite songs added yet.</p>';
                return;
            }

            // Create a list of favorites
            favorites.forEach(favorite => {
                const favoriteItem = document.createElement('div');
                favoriteItem.className = 'music-item';
                favoriteItem.innerHTML = `
                    <h5>${favorite.title} by ${favorite.artist}</h5>
                    <p>Album: ${favorite.album}</p>
                    <p>Genre: ${favorite.genre}</p>
                `;
                favoritesList.appendChild(favoriteItem);
            });
        }

        // Call the function to display favorites on page load
        window.onload = displayFavorites;
    </script>

</body>
</html>
 <script>
        const favorites = []; // Array to hold favorites

        // Event listener for the Add Music form submission
        document.getElementById('musicForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission
            alert("Music added successfully!");
            // You can add code here to actually save the music if needed
        });

        // Event listener for the Favorites button
        document.getElementById('favoriteBtn').addEventListener('click', function() {
            // Get music details
            const title = document.getElementById('title').value;
            const artist = document.getElementById('artist').value;
            const album = document.getElementById('album').value;
            const genre = document.getElementById('genre').value;

            // Simple validation
            if (title && artist && album && genre) {
                // Create a favorite object
                const favorite = { title, artist, album, genre };
                favorites.push(favorite); // Add the favorite to the array
                displayFavorites(); // Update the favorites display
                alert(${title} by ${artist} added to Favorites!);
            } else {
                alert("Please fill in all fields before adding to favorites.");
            }
        });

        // Function to display the favorites
        function displayFavorites() {
            const favoritesList = document.getElementById('favoritesList');
            favoritesList.innerHTML = ''; // Clear the current list

            // Loop through the favorites array and create HTML for each favorite
            favorites.forEach(fav => {
                const div = document.createElement('div');
                div.className = 'music-item';
                div.innerHTML = ${fav.title} by ${fav.artist} (${fav.album}, ${fav.genre});
                favoritesList.appendChild(div);
            });
        }
    </script>