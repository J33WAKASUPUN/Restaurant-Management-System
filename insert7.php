<!DOCTYPE html>
<html>
<head>
    <title>Insert Page</title>
</head>
<body>
    <center>
        <?php
        // Define the path to the uploads directory
        $uploadDirectory = __DIR__ . '/uploads/';

        // Check if the directory exists, if not, create it
        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true); // Creates the directory recursively with full permissions
        }

        // Database connection
        $conn = mysqli_connect("localhost", "root", "", "reportsnew");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Taking the values from the form data (input)
        $sumbission_date = $_REQUEST['sumbission_date'];

        // Handling file upload
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $target_file = $uploadDirectory . basename($_FILES["file"]["name"]);
            $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if file is a PDF
            if ($fileType != "pdf") {
                echo "Sorry, only PDF files are allowed.";
                exit;
            }

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                // Prepare SQL query
                $sql = "INSERT INTO pdf_files (sumbission_date, file_path) VALUES ('$sumbission_date', '$target_file')";

                 // Execute the query
                if (mysqli_query($conn, $sql)) {
                    echo '<script>alert("Record stored in the database successfully!");</script>';
                    echo '<script>window.location.href="reports.php";</script>';
                } else {
                    echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "No file uploaded or there was an upload error.";
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>
l>

