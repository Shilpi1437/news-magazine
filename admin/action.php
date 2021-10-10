<?php 
include('db.php');


if(isset($_POST['submit'])){
    
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $extensions= array("jpeg","jpg","png"); 
    $folder = "../upload/".$file_name; 
    
  $upload=  move_uploaded_file($file_tmp, $folder);
 
    if ($upload)  {
        $image="/upload/".$file_name;
    }else{
        echo'image is Not Uploaded';
        die;
        // header("Location:add_page.php");
    }
 }

$title=$_POST['title'];
$description=$_POST['description'];
$us_name=$_POST['us_name'];
$us_email=$_POST['us_email'];
$status=$_POST['status'];
$type=$_POST['type'];
$created_at=date('Y-m-d H:i:s');

$q="INSERT INTO news (title, description, us_name,status,us_email,type,image,created_at)
VALUES ('$title', '$description', '$us_name', '$us_email','$status','$type','$image','$created_at')";

if (mysqli_query($con, $q)) {
    echo "New record created successfully !";
 } else {
    echo "Error: " . $q . "
" . mysqli_error($con);
 }
 mysqli_close($con);


//header("location:$ref?q=uploaded Successfully");

?>