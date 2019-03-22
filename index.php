<?php
$pdo = new PDO('mysql:host=localhost;dbname=abonne','root','',array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));

if(isset($_POST["email"])){
    $login = $_POST["email"];
    $pwd = $_POST["pwd"];
    $result = $pdo -> query("SELECT id_identification FROM identification WHERE email='$login' AND pwd='$pwd' ");
    echo "nombre de resultats : ".$result -> rowCount();
    $v = $result -> rowCount();
    $x = $result -> fetch();
    $id_identification = $x['id_identification'];
    if ($v >= 1){
        header('Location: article.php?id_identification='.$id_identification);
    exit;
    };
    };


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="">
    <input type="text" name="email" placeholder="Entrez votre Email"><br>
    <input type="text" name="pwd" placeholder="mot de passe"><br>
    <input type="submit" placeholder="envoyer">

</body>
</html>
<?php



?>