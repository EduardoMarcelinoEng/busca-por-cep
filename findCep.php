<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>
<body>

<?php

$cep =  $_GET["cep"];

$curl = curl_init("viacep.com.br/ws/$cep/json/");

curl_setopt($curl, CURLOPT_RETURNTRANSFER, True);

$return = curl_exec($curl);
curl_close($curl);

echo $return . "<br>" . "<a href='index.php' class='btn btn-primary'>Voltar</a>";

?>

</body>
</html>


