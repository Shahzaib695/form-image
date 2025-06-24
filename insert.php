<?php
include("db.php");
if(isset($_POST['submitbtn'])){
    $name = $_POST['name'];
    // $age = $_POST['age'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $image = $_FILES['imagepath']['name'];
    $image_tmp = $_FILES['imagepath']['tmp_name'];
    $image_size = $_FILES['imagepath']['size'];
    $image_type = $_FILES['imagepath']['type'];
    $folder = "images/" . $image;
    // validation code 
    if(strtolower($image_type) == "image/jpg" || strtolower($image_type) == "image/jpeg" || strtolower($image_type) == "image/png") {   
        if($image_size <= 1000000){
            $folder = "images/" . $image;
            $query = "INSERT INTO `employee`(`name`, `gender`, `class`, `img_path`) VALUES ('$name','$gender','$class','$folder')";
            $result = mysqli_query($conn, $query);
            if(!$result){
                echo "<script>alert('Images not uploaded')</script>";
                exit;
            }else{
                move_uploaded_file($image_tmp, $folder);
                echo'<script>window.location.href = "view.php";</script>'
            }
        }else{
            echo "<script>alert('Images not uploaded')</script>";
            exit;
        }
    }else{
        echo "<script>alert('Images not uploaded')</script>";
        exit;
    }
}
echo "<script>alert('Images uploaded successfully')</script>";
?>