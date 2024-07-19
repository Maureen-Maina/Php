<html> 

<body> 

<?php 

 //Adding two numbers 

 function add(&$x, &$y) 

{ 

 $sum = $x + $y; 

 echo "Sum of two numbers is = $sum <br><br>"; 

 }

$x=50;

$y=34; 

 add($x,$y); 

 

 //Subtracting two numbers 

 function sub(&$x, &$y) 

{ 

 $diff = $x - $y; 

 echo "Difference between two numbers is = $diff"; 

 }

$x=97;

$y=45; 

 add($x,$y); 

 ?> 

</body> 

</html>
