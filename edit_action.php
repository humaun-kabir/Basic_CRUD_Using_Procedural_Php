<?php
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    //connect databse
    $conn = mysqli_connect('localhost','root','') or die(mysqli_error());
    //select database
    $select_db = mysqli_select_db($conn,'basic_crud') or die(mysqli_error());
    //sql query to update data
    $sql = "UPDATE tbl_users SET first_name = '$first_name',
                                last_name = '$last_name'
                                WHERE id = $id";
    //execute query
    $result = mysqli_query($conn,$sql) or die(mysqli_error());
    if($result==TRUE)
    {
        //redirect to home page
        header('location:index.php');
    }
    else
    {
        echo "error";
    }
?>