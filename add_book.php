<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body class="container mt-5">

    <h2>Add a New Book</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year = $_POST['year'];

        $sql = "INSERT INTO books (title, author, year) VALUES ('$title', '$author', '$year')";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Book added successfully!</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
        }
    }
    ?>

    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Book Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Author</label>
            <input type="text" name="author" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="number" name="year" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>

    <a href="index.php" class="btn btn-secondary mt-3">Back to Home</a>

</body>
</html>
