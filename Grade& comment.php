<html> 

<body bgcolor="magenta">

 

<form method="post"> 

Enter Student Grade: 

<input type="text" name="grade" /><br><br> 

<input type="submit" name="submit" value="DETERMINE GRADE"> 

</form> 

<?php 

if(isset($_POST['submit'])) 

{ 

$grade = $_POST['grade']; 

switch ($grade) 

{

 case "A":

 echo "<script language='javascript'>alert('$grade - is DISTINCTION')</script>";

 break;

case "B":

 echo "<script language='javascript'>alert('$grade - is UPPER CREDIT')</script>";
  break;

 case "C":

 echo "<script language='javascript'>alert('$grade - is LOWER CREDIT')</script>";

  break;

case "D":

 echo "<script language='javascript'>alert('$grade - is PASS')</script>";

 break;

case "E":

 echo "<script language='javascript'>alert('$grade - is FAIL')</script>";

 break;

 default:

 echo "TRY AGAIN!";

}

}

?>

</body> 

</html>
