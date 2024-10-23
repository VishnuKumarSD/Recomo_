<?php
// Include database connection
include 'database.php';

// Get the movie ID from the URL
if (isset($_GET['id'])) {
    $movie_id = $_GET['id'];

    // Fetch the existing movie details
    $query = "SELECT * FROM movies WHERE id = $movie_id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $movie = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Movie not found');</script>";
        exit;
    }
}

// Update movie details when form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $language = $_POST['language'];
    $year = $_POST['year'];
    $director = $_POST['director'];
    $category = $_POST['category'];
    $image = $_POST['image'];
    $length = $_POST['length'];  // Length of the movie

    // Update the movie details in the database
    $update_query = "UPDATE movies SET 
                        title = '$title', 
                        description = '$description', 
                        language = '$language', 
                        year = '$year', 
                        director = '$director', 
                        category = '$category', 
                        image = '$image', 
                        length = '$length' 
                     WHERE id = $movie_id";

    if (mysqli_query($conn, $update_query)) {
        echo "<script>alert('Movie updated successfully'); window.location.href='admin.php';</script>";
    } else {
        echo "Error updating movie: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movie</title>
    <link rel="stylesheet" href="edit_styles.css"> <!-- Link your CSS file here -->
</head>
<body style=" background-image: url('netflix.jpg');">
    <div class="edit-movie-form"  style="background-color: #1f1f1feb;">
        <h2>Edit Movie</h2>
        <form method="POST" action="edit_movie.php?id=<?php echo $movie_id; ?>">
            <label for="name">Movie Name</label>
            <input type="text" name="title" id="name" value="<?php echo $movie['title']; ?>" required>

            <label for="description">Description</label>
            <textarea name="description" id="description" required><?php echo $movie['description']; ?></textarea>

            <label for="language">Language</label>
            <input type="text" name="language" id="language" value="<?php echo $movie['language']; ?>" required>

            <label for="year">Year</label>
            <input type="number" name="year" id="year" value="<?php echo $movie['year']; ?>" required>

            <label for="director">Director</label>
            <input type="text" name="director" id="director" value="<?php echo $movie['director']; ?>" required>

            <label for="category">Category</label>
            <input type="text" name="category" id="category" value="<?php echo $movie['category']; ?>" required>

            <label for="poster_path">Poster Path (URL or file path)</label>
            <input type="text" name="image" id="poster_path" value="<?php echo $movie['image']; ?>" required>

            <label for="length">Length (in minutes)</label>
            <input type="text" name="length" id="length" value="<?php echo $movie['length']; ?>" required>

            <button type="submit">Update Movie</button>
        </form>
    </div>
</body>
</html>
