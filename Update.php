<!DOCTYPE html>
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
<form method="post" action="">
    <br>
    <div class="container col-xs-8 col-lg-3">
        <input type="hidden" name="identificator" value="<?php echo $_GET['identificator']; ?>">
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="nome" id="name" required>
        </div>
        <div class="form-group">
            <label for="cognome">Cognome:</label>
            <input type="text" class="form-control" name="cognome" id="surname" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="mail" required>
        </div>
        <div class="form-group">
            <label for="insert">INSERT:</label>
            <input type="submit" class="form-control" name='invia' id="insert">
        </div>
    </div>
</form>
</body>

<?php
if(isset($_POST['nome'])&&(isset($_POST['cognome'])&&(isset($_POST['email'])))) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sqlbartolinicejka";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $Id = $_POST['identificator'];

    $sql = "UPDATE registro SET Nome='$name', Cognome='$cognome', Email='$email' WHERE Id='$Id'";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $sql = "UPDATE registro SET Cognome='$cognome' WHERE Id='$Id'";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $sql = "UPDATE registro SET Email='$email' WHERE Id='$Id'";
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error updating record: " . $conn->error;
    }

header('Location: http://192.168.245.10/SQLBartoliniCejka/index.php?');
    $conn->close();
}
