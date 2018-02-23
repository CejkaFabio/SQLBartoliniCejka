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

    <br>
        <form method="post" action="">
            <div class="container col-xs-12 align="center">
            <h2>ADD THE CONTROLS</h2>
            <div class="container col-xs-4" align="center">
                <div class="form-group text-center">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="name" required>
                </div>
            </div>
            <div class="container col-xs-4" align="center">
                <div class="form-group text-center">
                    <label for="cognome">Cognome:</label>
                    <input type="text" class="form-control" name="cognome" id="cognome" required>
                </div>
            </div>
            <div class="container col-xs-4" align="center">
                <div class="form-group text-center">
                    <label for="mail">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
            </div>
            <div class="container col-xs-4" align="center">
            <div class="form-group">
            <input type="submit" class="btn btn-success btn-block" id="insert">
            </div>
            </div>
            <div class="container col-xs-4" align="center">
            <div class="form-group">
            <input type="reset" class="btn btn-danger btn-block" id="insert">
            </div>
            </div>
            <div>
            <div class="container col-xs-4" align="center">
            <div class="form-group">
                <a href="http://192.168.245.10/SQLBartoliniCejka/index.php?"><input type="indietro" class="btn btn-primary btn-block" name='Indietro' value="Indietro" id="insert"></a>
            </div>
            </div>
        </form>
        </div>
    </div>

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
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $punto = count(explode( '.', $email )) - 1;
        if($punto != 1)
        {
            echo 'Indirizzo email corretto';
        }
        else
        {
        echo 'Indirizzo email errato';
        }
        $sql = "INSERT INTO registro ( Nome, Cognome, Email)
VALUES ('$nome', '$cognome', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        echo "</table>";
        echo "</div>";
        header('Location: http://192.168.245.10/SQLBartoliniCejka/index.php?');
        $conn->close();
}