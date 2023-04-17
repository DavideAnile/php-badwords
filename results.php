<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risultati</title>
</head>
<body>

<div> <?php echo $_GET['paragrafo'] ?> </div>

<?php 

$paragrafo = $_GET['paragrafo'];

echo 'il paragrafo contiene '. strlen($paragrafo) .' caratteri<br>' ;

?>

<hr>

<?php 

$badWord = $_GET['badWord'];
echo ' questa è la bad word : '. $badWord .' <br>';

$nuovoParagrafo = str_replace($badWord, '***', $paragrafo);
echo 'questo è il nuovo paragrafo : '. $nuovoParagrafo .' <br>';
echo 'il nuovo paragrafo contiene : '. strlen($nuovoParagrafo) .' caratteri '


?>
   

</body>
</html>