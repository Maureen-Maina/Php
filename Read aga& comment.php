<html> 

<body>

 

<form method="post"> 

Enter Age: 

<input type="number" name="age" /><br><br> 

<input type="submit" name="submit" value="TEST"> 

</form> 

<?php 

if(isset($_POST['submit'])) 

{ 

$age = $_POST['age']; 

if ($age < 30)

{

echo "<script language='javascript'>alert('$age - is greater than 30')</script>";

}

else

{

echo "<script type='text/javascript'>alert('$age - is greater than 30')</script>";

}

}

?> 

</body> 

</html>
