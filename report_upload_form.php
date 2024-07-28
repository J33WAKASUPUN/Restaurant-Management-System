<!DOCTYPE html>
<html>
<head>
    <title>Upload CSV and Insert Data</title>
</head>
<body>
    <h2>Upload CSV and Insert Data</h2>
    <form action="handle_upload.php" method="post" enctype="multipart/form-data">
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required><br><br>
        <label for="file">Select CSV file:</label>
        <input type="file" name="file" id="file" accept=".csv" required><br><br>
        <input type="submit" name="submit" value="Upload and Insert">
    </form>
</body>
</html>
