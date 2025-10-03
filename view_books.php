<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body class="container mt-5">

    <h2>All Books in Library</h2>
    <h3>Baladi</h3>

    <?php
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-bordered'>";
        echo "<tr><th>ID</th><th>Title</th><th>Author</th><th>Year</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['title']."</td>
                    <td>".$row['author']."</td>
                    <td>".$row['year']."</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<div class='alert alert-warning'>No books found!</div>";
    }
    ?>

    <a href="index.php" class="btn btn-secondary mt-3">Back to Home</a>

</body>
</html>
