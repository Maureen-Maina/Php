<html> 

<body> 

<?php

function kirinyaga($num)
  {

 if ($num <= 1) { 

 return 1; 

 } else { 

 return ($num * kirinyaga($num-1)); 

 } 

}

echo "Factorial=";

echo kirinyaga(5);

?>

</body> 

</html>
