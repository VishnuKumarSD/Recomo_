<?php
// Include DB connection
include 'database.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $language = $_POST['language'];
    $year = $_POST['year'];
    $director = $_POST['director'];
    $category = $_POST['category'];
    $length = $_POST['length']; 
    $image = $_POST['image'];  // Changed input from file to text

    // SQL query to insert the movie into the database
    $query = "INSERT INTO movies (title, description, language, year, director, category, image , length) 
              VALUES ('$title', '$description', '$language', '$year', '$director', '$category', '$image', '$length')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Movie added successfully');</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Movie</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style=" background-image: url('netflix.jpg');">
    <div class="create-movie-form"  style="background-color: #1f1f1feb;">
        <h2>Create Movie</h2>
        <form action="create_movie.php" method="post" enctype="multipart/form-data">
            <label for="name">Movie Name:</label>
            <input type="text" name="title" id="name" required><br>

            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea><br>

            <label for="language">Language:</label>
            <input type="text" name="language" id="language"><br>

            <label for="year">Year:</label>
            <input type="text" name="year" id="year"><br>

            <label for="length">Length (in minutes)</label>
            <input type="text" name="length" id="length" placeholder="Enter film length in hours,minutes" required> <!-- New input for film length -->

            <label for="director">Director:</label>
            <input type="text" name="director" id="director"><br>

            <label for="category">Category:</label>
            <input type="text" name="category" id="category"><br>

            <label for="poster">Movie Poster: (URL or file path)</label>
            <input type="text" name="image" id="poster_path" placeholder="Enter image URL or file path" required> <!-- Changed to text input -->


            <button type="submit">Create Movie</button>
        </form>
    </div>
</body>
</html>
