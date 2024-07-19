<html> 

<body bgcolor="#FFFF00">

<form method="post"> 

Enter a Number: <input type="text" name="input"><br><br> 

<input type="submit" name="submit" value="Submit"> 

</form> 

<?php 

if(isset($_POST['submit'])) 

{ 

 $input=$_POST['input']; 

$counter=0;

 for ($i = 1; $i <= $input; $i++) 

{ 

 if ($input % $i == 0) 

 { 

 $counter++; 

 } 

} 

if($counter==2) 

{ 

echo 'The Number '. $input . ' is prime'; 

} 

else 

{ 

 echo 'The Number '. $input . ' is not prime'; 

 } 
?> 

</body> 

</html>

