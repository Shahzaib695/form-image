<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("db.php");
    ?>
    <form method="POST" action="insert.php" enctype="multipart/form-data">
    <!-- make a form , name , age ,gender with dropdown class, images_Pth -->
    Name:<input type="text" name="name" required><br>
    <!-- Age:<input type="number" name="age" required><br> -->
    Gender: 
    <select name="gender">Select Gender
    <br>
    <option value="select">Select</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    </select>
    <br>
    Class: <input type="text" name="class" required><br>
    Upload: <input type="file" name="imagepath" required>
    <br>
    <input type="submit" value="submit" name="submitbtn">
    </form>
</body>
</html>