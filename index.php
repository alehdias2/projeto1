<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    </head>
    <body>
        <h1>Relatório</h1>
        <div class="container">
        <table class="table table-striped" >
        <thead>
            <tr class="table-danger">
            <th scope="col">ID</th>
            <th scope="col">Descrição</th>
            <th scope="col">Data</th>
            <th scope="col">Preço</th>
            </tr>
        </thead>
        <tbody>
    

<?php

// Variáveis
$servername = "localhost";
$username = "conec807_epsa";
$password = "V1N3HQbGNRVzO4zWyg";
$dbname = "conec807_caio";//conec807_christian, conec807_pablo

// conexão
$conn = new mysqli($servername, $username, $password, $dbname);

//Teste de conexão
if ($conn->connect_error) {
    die("A conexão falhou: " . $conn->connect_error);
}

//Consulta
$sql = 'SELECT * from equipamentos';

if (mysqli_query($conn, $sql)) {
    echo "Passou <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$count=1;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {  
        echo "<tr>
            <th scope='row'>".$row['Id_Equipamento']."</th>
            <td>".$row['Descricao']."</td>
            <td>".$row['DtAquisicao']."</td>
            <td>".$row['Preco']."</td>
        </tr> ";
        $count++;
    }

} else {
    echo '0 registros';
}
$conn->close();
?>
        </tbody>
    </table>
    </div>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>