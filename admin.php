<?php
// Connect to the database
include("database.php");

if (isset($_GET['delete'])) {
    $movie_id = $_GET['delete'];

    // SQL to delete a record
    $delete_query = "DELETE FROM movies WHERE id = $movie_id";

    if (mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Movie deleted successfully');</script>";
    } else {
        echo "Error deleting movie: " . mysqli_error($conn);
    }
}

// Fetch movies data from the database
$query = "SELECT * FROM movies";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link your CSS here -->
    <style>
.button {
  display: inline-block;
  padding: 12px 22px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  margin-left: 20px;
  margin-bottom: 20px;
  
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
    
<body style=" background-image: url('netflix.jpg');">
    <div class="dashboard" style="background-color: #1f1f1feb;">
        <header>
            <h2>Dashboard</h2>
        </header>
        <div class="stats">
            <div>Total Movies: <?php echo mysqli_num_rows($result); ?></div>
            <div>Total Categories: <?php echo getTotalCategories($conn); ?></div>
            <div>Total Users: <?php echo getTotalUsers($conn); ?></div>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>Movie Name</th>
                    <th>Category</th>
                    <th>Language</th>
                    <th>Year</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['language']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <td>
                    <a href="edit_movie.php?id=<?php echo $row['id']; ?>">Edit</a> |
                    <a href="admin.php?delete=<?php echo $row['id']; ?>" 
                           onclick="return confirm('Are you sure you want to delete this movie?');">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <button class="button" onclick="window.location.href='http://localhost/DB%20project/create_movie.php';">Add Movie</button>
    <button class="button" onclick="window.location.href='http://localhost/DB%20project/SignIN.php';"
    style="float: right; margin-right: 20px; background-color:#b80909;">Log out</button>
</body>
</html>

<?php
// Function to get total categories
function getTotalCategories($conn) {
    $query = "SELECT COUNT(DISTINCT category) AS total FROM movies";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

// Function to get total users
function getTotalUsers($conn) {
    $query = "SELECT COUNT(*) AS total FROM users";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}
?>
