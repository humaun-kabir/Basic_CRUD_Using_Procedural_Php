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
        <h2>Adding First Name and Last Name</h2>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>First Name :</td>
                    <td><input type="text" name="first_name" placeholder="First name"></td>
                </tr>

                <tr>
                    <td>Last Name :</td>
                    <td><input type="text" name="last_name" placeholder="Last name"></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" value="Add Member"></td>
                </tr>
            </table>
        </form>

        <br>
        <hr>
        <br>

        <h2>Listing all the Name</h2>
        <table>
            <tr>
                <th>S.N.</th>
                <th>First Name :</th>
                <th>Last Name :</th>
                <th>Actions</th>
            </tr>

            <tr>
                <td>S.N.</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>
                    <a href="#"><button type="button">UPDATE</button></a>
                    <a href="#"><button type="button">DELETE</button></a>
                </td>
            </tr>
        </table>
    </div>

    <footer class="footer">
        All rights reserved. &COPY; 2021 Humaun Kabir
    </footer>
</body>
</html>