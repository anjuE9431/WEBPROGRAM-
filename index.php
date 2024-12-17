<!DOCTYPE html>
<html>
<head>
    <title>Book Management System</title>
</head>
<body>
    <h2>Add a Book</h2>
    <form action="process_book.php" method="post">
        <label for="accession_number">Accession Number:</label>
        <input type="text" name="accession_number" required><br><br>
        <label for="title">Title:</label>
        <input type="text" name="title" required><br><br>
        <label for="author">Author:</label>
        <input type="text" name="author" required><br><br>
        <label for="edition">Edition:</label>
        <input type="text" name="edition" required><br><br>
        <label for="publisher">Publisher:</label>
        <input type="text" name="publisher" required><br><br>
        <input type="submit" value="Add Book">
    </form>

    <h2>Search for a Book</h2>
    <form action="search_book.php" method="post">
        <label for="search_title">Title:</label>
        <input type="text" name="search_title" required><br><br>
        <input type="submit" value="Search">
    </form>
</body>
</html>