<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee List</title>
</head>
<body>
<?php
include "db.php";
$query = "SELECT * FROM employee";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}
$total_row = mysqli_num_rows($result);
echo "<table border='1' cellpadding='10'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Class</th>";
echo "<th>Image</th>";
echo "<th>Edit</th>";
echo "<th>Delete</th>";
echo "</tr>";
while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $data['id'] . "</td>";
    echo "<td>" . $data['name'] . "</td>";
    echo "<td>" . $data['gender'] . "</td>";
    echo "<td>" . $data['class'] . "</td>";
    echo "<td><img src='" . $data['img_path'] . "' alt='Image not shown' width='50' height='50'></td>";
    echo "<td><a href='update.php?id=" . $data['id'] . "'>Edit</a></td>";
    echo "<td><a href='delete.php?id=" . $data['id'] . "'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
