<?php
$submit = filter_input(INPUT_POST, 'submit');
$auta = filter_input(INPUT_POST, 'Auta');
$SPZ = filter_input(INPUT_POST, 'SPZ');
$types = array('osobní', 'Karavan', 'Nakladni', 'Autobus', 'Sportak');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($submit)) { ?>
<p>Toto auto jste si zvolil</p>
<p>Auto : <?=$auta ?>  </p>
<p>SPZ :<?=$SPZ ?> </p> 
<?php }
 else { ?>
<form action="index.php" method="post">
<label for="Auta">Typ vozidla:</label>
<select name="Auta" id="Auta">
<?php foreach ($types as $type) {
    ?>
<option value="<?=$type ?>"><?=$type?></option>
<?php } ?>

</select>

<label for="SPZ">SPZ :</label>
<input type="text" name="SPZ" >

<input type="submit" name="submit" value="DEJ SEM KARU">
</form>
<?php } ?>
</body>
</html>