<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic CRUD php</title>
</head>
<style>
    *{
        margin: 0;
    }
    .header{
        background-color: black;
        color: white;
        padding: 1%;
        text-align: center;
    }
    .main{
        width: 80%;
        border: 1px solid black;
        margin: 1% auto;
        padding: 3%;
    }
    .footer{
        background-color: black;
        color: white;
        padding: 1%;
        text-align: center;
    }
    table,tr,th,td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 0.5%;
    }
</style>
<body>
    <header class="header">
        <h1>INSERT UPDATE AND DELETE</h1>
    </header>

    <div class="main">
        <h2>Updating First Name and Last Name</h2>
        <?php
            //getting value from url
            $id = $_GET['id'];

            //connect databse
            $conn = mysqli_connect('localhost','root','') or die(mysqli_error());
            //select database
            $select_db = mysqli_select_db($conn,'basic_crud') or die(mysqli_error());
            //query to select data
            $sql = "SELECT * FROM tbl_users WHERE id=".$id;
            //executing the query
            $result = mysqli_query($conn,$sql);
            if($result==TRUE)
            {
                $row = mysqli_fetch_assoc($result);
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
            }
        ?>
        <form action="edit_action.php" method="POST">
            <table>
                <tr>
                    <td>First Name :</td>
                    <td><input type="text" name="first_name" value="<?php echo $first_name; ?>" ></td>
                </tr>

                <tr>
                    <td>Last Name :</td>
                    <td><input type="text" name="last_name" value="<?php echo $last_name; ?>"></td>
                </tr>

                <tr>
                    <td>&nbsp; <input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                    <td><input type="submit" name="submit" value="Update Member"></td>
                </tr>
            </table>
        </form>

        <br>
        <hr>
        <br>

        
    </div>

    <footer class="footer">
        All rights reserved. &COPY; 2021 Humaun Kabir
    </footer>
</body>
</html>