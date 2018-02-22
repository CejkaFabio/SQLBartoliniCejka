<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" typer = "text/css" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/Cerca.js"></script>
    <script type="text/javascript" scr="script/Aiuto.js"></script>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>

</head>
<body>
<h2 align="center">CRUD Bartolini Simone - Cejka Fabio Matthias</h2>
<br>
<div class="container">
    <div class="col-xs-8" align="left">
    <form action='Aggiungi.php' method='get'><button type="submit" class="btn btn-success btn-lg">Aggiungi Record</button></form>
    </div>
    <div class="input-group col-xs-4">
        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span><input type="search" class="form-control" id="mySearch" placeholder="Cerca..." onkeyup="Cerca(document.getElementById('mySearch').value,document.getElementsByTagName('td'));">
    </div>
    <br>
    <br>
    <br>
        <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Email</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
</div>

<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="sqlbartolinicejka";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM registro";

$result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['Id']."</td>";
    echo "<td>".$row['Nome']."</td>";
    echo "<td>".$row['Cognome']."</td>";
    echo "<td>".$row['Email']."</td>";
    $riga = $row['Id'];
    echo "<td><form action='Update.php' method='get'><button type=\"submit\" class=\"btn btn-primary btn-block\"><input type='hidden' name='identificator' value='$riga'>Update</button></form></td>";
    echo "<td><form action='Delete.php' method='get'><button type=\"submit\" class=\"btn btn-danger btn-block\"><input type='hidden' name='identificator' value='$riga'>Delete</button></form></td>";
    echo "</tr>";
    }
echo "</table>";
echo"</div>";

$conn->close();
?>
    <br>
    <br>

</div>
</body>
</html>
<!-- Ciao-->