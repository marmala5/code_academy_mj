<!--     //Sukurti POST registracijos forma su pakartotiniu slaptazodziu ir butinais duomenimis.
//Registracijos duomenis issiuskite i kita registration.php faila ir juos atvaizduokite. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<form>
    Number1: <input type="text" name="num1"/>
    Number2: <input type="text" name="num2"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
 
    echo 'Result: '.$num1 * $num2;
}

?>
</body>
</html>