<?php
    $id = $_GET['id'];
    //connect databse
    $conn = mysqli_connect('localhost','root','') or die(mysqli_error());
    //select database
    $select_db = mysqli_select_db($conn,'basic_crud') or die(mysqli_error());
    //sql query to delete firstname and lastname
    $sql = "DELETE FROM tbl_users WHERE id=".$id;
    //execute query
    $result = mysqli_query($conn,$sql) or die(mysqli_error());
    if($result==TRUE)
    {
        //success redirect to home page
        header('location:index.php');
    }
    else
    {
        echo "error";
    }
?>