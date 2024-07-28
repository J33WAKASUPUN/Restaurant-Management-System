<?php
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root"; // Change if you have a different username
    $password = ""; // Change if you have a different password
    $dbname = "repotsnew";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the file was uploaded without errors
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $date = $_POST['date'];
        $file = $_FILES['file']['tmp_name'];

        // Open CSV file
        if (($csvFile = fopen($file, 'r')) !== FALSE) {
            // Skip the first line (header)
            fgetcsv($csvFile);

            // Prepare SQL statement
            $stmt = $conn->prepare("INSERT INTO data_records (date, value1, value2, value3, value4, value5, value6, value7, value8, value9, value10) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssss", $date, $value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8, $value9, $value10);

            // Read and insert rows
            while (($row = fgetcsv($csvFile)) !== FALSE) {
                // Check if the row has at least 10 values
                $row = array_pad($row, 10, null);

                // Assign values from the row, or null if not present
                $value1 = $row[0];
                $value2 = $row[1];
                $value3 = $row[2];
                $value4 = $row[3];
                $value5 = $row[4];
                $value6 = $row[5];
                $value7 = $row[6];
                $value8 = $row[7];
                $value9 = $row[8];
                $value10 = $row[9];

                // Execute the statement
                $stmt->execute();
            }

            // Close connections
            $stmt->close();
            fclose($csvFile);
            $conn->close();

            echo "Data inserted successfully.";
        } else {
            echo "Error opening the CSV file.";
        }
    } else {
        echo "Error: " . $_FILES['file']['error'];
    }
} else {
    echo "No file uploaded.";
}
?>
