<html> 

<body>

<form method="post"> 

Enter value1: 

<input type="number" name="a" /><br><br> 

Enter value2: 

<input type="number" name="b" /><br><br> 

<input type="submit" name="submit" value="ADD"> 

</form> 

<?php

if(isset($_POST['submit'])) 

{ 

 function sum() //Declaring User Defined function

 {

 $a=$_POST['a'];

 $b=$_POST['b'];
   $a=$a+$b;

 echo $a; 

 }

echo "Sum=";

sum();//Calling a function

}

?>

</body> 

</html>
