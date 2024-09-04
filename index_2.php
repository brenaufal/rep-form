<?php
include 'koneksi.php';

// Initialize a variable to hold the message
$message = "";

// Check if there's data in the `person` table
$sql = "SELECT * FROM person";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    $message = "The Data Has Been Added";
} else {
    $message = "The Data Hasn't Been Added";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #000; /* Set the table header background to black */
            color: white;
        }
        .message {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #e9ecef;
            border-radius: 5px;
        }
        .back-button {
            margin-bottom: 20px;
        }
        .btn-black {
            background-color: #000;
            color: #fff;
            border: none;
        }
        .btn-black:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="back-button">
        <a href="index.php" class="btn btn-black">&larr; Back</a>
    </div>
    <div class="message">
        <h4><?php echo $message; ?></h4>
    </div>
    <h2>Data Contact Form</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Send</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Class'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['Phone'] . "</td>";
                    echo "<td>" . $row['Date'] . "</td>";
                    echo "<td>" . $row['Send'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
mysqli_close($koneksi);
?>
