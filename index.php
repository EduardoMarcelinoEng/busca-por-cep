<?php 

echo "
<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>
<body>
<form action='findCep.php' method='get'>
<div class='form-group'>
  <label for='cep'>Cep</label>
  <input type='text' class='form-control' id='cep' name='cep' aria-describedby='emailHelp' placeholder='Digite o cep'>
</div>
<button type='submit' class='btn btn-primary'>Buscar</button>
</form>
</body>
</html>

";



?>