<?php
    //get value from ui
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    //connect databse
    $conn = mysqli_connect('localhost','root','') or die(mysqli_error());
    //select database
    $select_db = mysqli_select_db($conn,'basic_crud') or die(mysqli_error());
    
    //sql query to insert data in our table
    $sql = "INSERT INTO tbl_users SET first_name = '$first_name',
                                    last_name = '$last_name'";
    //execute query
    $result = mysqli_query($conn, $sql) or die(mysqli_error());
    if($result==TRUE)
    {
        //query is successful
        //redirect to homepage
        header('location:index.php');
    }
    else
    {
        echo "failed"; 
    }


?>