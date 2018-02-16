!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form method="post" action="addRecord.php">
    <br>
    <div class="container col-xs-8 col-lg-3">
        <div class="form-group">
            <label for="nm">Nome:</label>
            <input type="text" class="form-control" name="name" id="nm">
        </div>
        <div class="form-group">
            <label for="cnm">Cognome:</label>
            <input type="text" class="form-control" name="cognome" id="cnm">
        </div>
        <div class="form-group">
            <label for="mail">Email:</label>
            <input type="email" class="form-control" name="email" id="mail">
        </div>
        <div class="form-group">
            <label for="insert">INSERT:</label>
            <input type="submit" class="form-control" id="insert">
        </div>
    </div>
</form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sqlbartolinicejka";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE registro SET Nome='nome' WHERE Id=$Id";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error updating record: " . $conn->error;
}
$sql = "UPDATE registro SET Nome='cognome' WHERE Id=$Id";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error updating record: " . $conn->error;
}
$sql = "UPDATE registro SET Nome='email' WHERE Id=$Id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



$conn->close();
/*
