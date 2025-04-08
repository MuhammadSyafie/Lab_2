<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submitted Data</title>
</head>
<body>

<h1>Submitted Registration Details</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p><strong>Full Name:</strong> " .($_POST["name"]) . "</p>";
    echo "<p><strong>Email Address:</strong> " . ($_POST["email"]) . "</p>";
    echo "<p><strong>Age:</strong> " . ($_POST["age"]) . "</p>";
    echo "<p><strong>Gender:</strong> " . ($_POST["gender"]) . "</p>";
    echo "<p><strong>Country of Residence:</strong> " . ($_POST["country"] ) . "</p>";
    echo "<p><strong>Area of Interest:</strong> " . implode(", ", $_POST["interest"]) . "</p>";
    echo "<p><strong>Experience Level:</strong> " . ($_POST["experience"] ) . "</p>";
    echo "<p><strong>Comments :</strong> " . ($_POST["comments"] ) . "</p>";
}
?>

<br><br>
<a href="task_2.html">← Back to Form</a>

</body>
</html>
