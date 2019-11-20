<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <title>Customer</title>

</head>
<body>
        <div class="container">

<div class="jumbotron">
    <h1>Liste des Customer</h1>
</div>
<a class="btn btn-primary" href="create.php">Nouveau Customer</a>
<br>

<table class="table table-striped">
    <h3>Info des Customer</h3>
 <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Password</td>
    <td>Phone</td>
    <td>Adress</td>
   </tr>
   <?php 
   include 'dbcnx.php';
   $reponse = $cnx->query('SELECT * FROM `customer`'); 
   while ($donnees = $reponse->fetch()) 
      {
          echo '<tr>';
          echo '<td>'.$donnees['Cid'].'</td>';
          echo '<td>'.$donnees['Cname'].'</td>';
          echo '<td>'.$donnees['Cemail'].'</td>';
          echo '<td><p hidden>'.$donnees['Cpass'].'</p></td>';
          echo '<td>'.$donnees['Cphone'].'</td>';
          echo '<td>'.$donnees['Cadress'].'</td> ';
        
         
          echo '</tr>';
      }


  ?>
    
</table>
</div>
</body>
</html>