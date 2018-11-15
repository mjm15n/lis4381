<?php
if (isset($_POST)){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $calcu = $_POST['calcu'];
	ob_end_clean();
	function calculate($n1,$n2,$calcu)
    {
        switch($calcu)
        {
        case "Addition":
        	echo "<h3>Addition<br></h3>";
            $compute = $n1 + $n2; 
            echo "$n1 + $n2 = $compute";
            break;
        case "Subtraction":
        	echo "<h3>Subtraction<br></h3>";
            $compute = $n1 - $n2; 
            echo "$n1 - $n2 = $compute";
            break;
        case "Multiplication":
        	echo "<h3>Multiplication<br></h3>";
            $compute = $n1 * $n2; 
            echo "$n1 * $n2 = $compute";
            break;
        case "Division":
        	echo "<h3>Division<br></h3>";
        	if($n2 != 0){
        		$compute = $n1 / $n2;
	            echo "$n1 / $n2 = $compute";
	        }
        	else 
            	echo "Cannot divide by zero!";
            break;
        case "Exponentiation":
			echo "<h3>Exponentiation<br></h3>";
            $compute = pow($n1, $n2); 
            echo "$n1^$n2 = $compute";							
            break;
        }
    }
	calculate($num1,$num2,$calcu);
	echo "<br><br>";
    unset($_POST);
}
?>