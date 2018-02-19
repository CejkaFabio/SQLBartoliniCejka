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
            <input type="text" class="form-control" name="nome" id="nm">
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
            <input type="submit" class="form-control" id="insert">
        </div>
    </div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sqlbartolinicejka";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$nome=$_GET['nome'];
$cognome=$_GET['cognome'];
$email=$_GET['email'];
$sql = "INSERT INTO registro ( Nome, Cognome, Email)
VALUES ($nome, $cognome, $email)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "</table>";
echo"</div>";
echo"</body>";
$conn->close();