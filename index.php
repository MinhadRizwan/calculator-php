<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($servername, $username, $password);

        if(!$con){
            die("Connection failed: " .mysqli_connect_error());
        }
        else{
            echo "Connected successfully";
        }
    ?>
</body>
</html>