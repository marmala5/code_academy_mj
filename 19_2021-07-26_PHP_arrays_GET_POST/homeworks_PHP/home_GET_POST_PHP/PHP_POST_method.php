<!-- Sukurti POST registracijos forma su pakartotiniu slaptazodziu ir butinais duomenimis.
Registracijos duomenis issiuskite i kita registration.php faila ir juos atvaizduokite. -->

<!DOCTYPE HTML>
<html>  
<body>

<form action="registration.php" method="POST">
  Username: <input type="text" name="username" /><br />
  Email: <input type="text" name="email" /><br />
  Password: <input type="password" name="password" /><br />
  Confirm password: <input type="password" name="password_confirm" /><br />
  <input type="submit" value="Register" />
</form>


</body>
</html>
