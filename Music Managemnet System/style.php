body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    width: 25%; /* Width of the box */
    height: 100vh; /* Height of the box */
    margin:0;
    background-color: white;
    padding: 20px; /* Padding remains the same */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow-y: auto; /* Enable scrolling if content exceeds height */
}

h1, h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
    width: 90%; /* Reduce the width of the form */
    margin: 0 auto; /* Center the form */
}

label {
    margin-bottom: 5px;
}

input[type="text"], input[type="submit"] {
    padding: 8px; /* Reduce padding */
    margin-bottom: 8px; /* Reduce margin */
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #333;
    color: white;
    cursor: pointer;
    width: 100%; /* Make the submit button full width */
}

.music-list {
    padding: 10px;
    border-top: 1px solid #ccc;
}

.music-item {
    margin-bottom: 10px;
    padding: 10px;
    border-bottom: 1px solid #ccc;
}

.music-item:last-child {
    border-bottom: none;
}
