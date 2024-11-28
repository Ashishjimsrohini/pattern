<!DOCTYPE html>
<html>
<body>
/------------------------------------------------\<br>
<?php
// Input from the user
$n = 4; // You can replace this with dynamic input if needed


// Generate the pattern

for ($i = 1; $i <= $n; $i++) 
{
	if($i%2 !=0)
	{
		$a =1;
	}else
	{
		$a =0;
	}
    for ($j = 1; $j <= $i; $j++) 
	{
		if($a == 1)
		{
			echo "1";
			$a =0;
		}
		else
		{
			echo "0";
			$a =1;
		}
		
    }

    echo "</br>"; // Move to the next line
}
?>

/------------------------------------------------\<br>
<?php
// Input from the user
$n = 4; // You can replace this with dynamic input if needed


// Generate the pattern
$a = 1;
for ($i = 1; $i <= $n; $i++) 
{
	
    for ($j = 1; $j <= $i; $j++) 
	{
		echo $a ." ";
		$a =$a+2;
    }

    echo "</br>"; // Move to the next line
}
?>


/------------------------------------------------\<br>
<?php
// Input from the user
$n = 4; // You can replace this with dynamic input if needed


// Generate the pattern
$a = 1;
for ($i = 1; $i <= $n; $i++) 
{
	
    for ($j = 1; $j <= $i; $j++) 
	{
		if($a == 1)
		{
			echo "1 ";
			$a =0;
		}
		else
		{
			echo "0 ";
			$a =1;
		}
	
    }
    echo "</br>"; // Move to the next line
}
?>
/------------------------------------------------\<br>
<?php
// Input from the user
$n = 4; // You can replace this with dynamic input if needed


// Generate the pattern
	$a = 1;
for ($i = 1; $i <= $n; $i++) 
{
	
    for ($j = 1; $j <= $i; $j++) 
	{
		echo $a." ";
		$a++;
    }
    echo "</br>"; // Move to the next line
}
?>


/------------------------------------------------\<br>
<?php
// Input from the user
$n = 5; // You can replace this with dynamic input if needed


// Generate the pattern
for ($i = 1; $i <= $n; $i++) 
{
	
    for ($j = 1; $j <= $n; $j++) 
	{
		$a = $n;
		if($i==$j || $i+$j == $n+1)
		{
			echo "*";	
		}
		else
		{
			echo "<b style='color:white'>#</b>";
		}
		$a--;		
    }
    echo "</br>"; // Move to the next line
}
?>
/------------------------------------------------\<br>
<?php
// Input from the user
$n = 4; // You can replace this with dynamic input if needed
$m = 6; // You can replace this with dynamic input if needed

// Generate the pattern
for ($i = 1; $i <= $n; $i++) 
{
	
    for ($j = 1; $j <= $m; $j++) 
	{
		if($i==1 || $j==1 || $i ==$n ||$j==$m)
		{
			echo "*";						
		}
		else
		{
			echo "<b style='color:white'>#</b>";
		}
		
			
    }
    echo "</br>"; // Move to the next line
}
?>


/------------------------------------------------\<br>
<?php
// Input from the user
$n = 5; // You can replace this with dynamic input if needed

// Generate the pattern
for ($i = 1; $i <= $n; $i++) 
{
	
    for ($j = 1; $j <= $n; $j++) 
	{
		$a = $n/2+1;
		if($j==floor($a) || $i==floor($a))
		{
			echo "*";
		}
		else
		{
			echo "<b style='color:white'>#</b>";
		}
			
    }
    echo "</br>"; // Move to the next line
}
?>


/------------------------------------------------\<br>





<?php
$n = 4;

for($i = 1; $i<=$n; $i++)
{
	for($j=1;$j<=$i;$j++)
    {
   		 echo "*";
    }
	echo "</br>";
}

?>
/------------------------------------------------\<br>

<?php 
 for($i = 1;$i<=4;$i++)
 {
	 for($j=1;$j<=4;$j++)
	 {
		 echo "*";
	 }
	 echo "<br>";
 }

?>


/------------------------------------------------\<br>

<?php 
 for($i = 1;$i<=4;$i++)
 {
	 for($j=1;$j<=4;$j++)
	 {
		 echo ' '.$j;
	 }
	 echo "<br>";
 }

?>

/------------------------------------------------\<br>

<?php 
 for($i=1;$i<=4;$i++)
 {
	 for($j=1;$j<=$i;$j++)
	 {
		 echo " "."*";
	 }
	 echo "<br>";
 }

?>


/------------------------------------------------\<br>

<?php 
 for($i='A';$i<='D';$i++)
 {
	 for($j='A';$j<=$i;$j++)
	 {
		 echo " ".$j;
	 }
	 echo "<br>";
 }

?>

/------------------------------------------------\<br>

<?php 
 for($i=1;$i<=5;$i++)
 {
	 for($j=1;$j<=5-$i;$j++)
	 {
		 echo " *";
	 }
	 echo "<br>";
 }

?>
/------------------------------------------------\<br>

<?php 
 for($i=1;$i<=5;$i++)
 {
	 for($j=1;$j<=$i;$j++)
	 {
		 echo " ".$j;
	 }
	 echo "<br>";
 }

?>
/------------------------------------------------\<br>

<?php 
 for($i=1;$i<=5;$i++)
 {
	 for($j=1;$j<=5-$i;$j++)
	 {
		 echo " ".$j;
	 }
	 echo "<br>";
 }

?>
/------------------------------------------------\<br>

<?php 
$n=4;
 for($i=1;$i<=$n*2-1;$i=$i+2)
 {
	 for($j=1;$j<=$i;$j=$j+2)
	 {
		echo " ".$j;
	 }
	
	 echo "<br>";
 }

?>


/------------------------------------------------\<br>
<?php
// Input from the user
$n = 4; // You can replace this with dynamic input if needed

// Generate the pattern
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo chr(65 + $j) . " "; // chr(65) is 'A'
    }
    echo "</br>"; // Move to the next line
}
?>



/------------------------------------------------\<br>
<?php
// Input from the user
$n = 4; // You can replace this with dynamic input if needed

// Generate the pattern
for ($i = 0; $i < $n+1; $i++) {
	$a = 65;
    for ($j = 0; $j < $i; $j++) 
	{
        echo chr($a + $j) . " "; // chr(65) is 'A'
    }
    echo "</br>"; // Move to the next line
}
?>

/------------------------------------------------\<br>
<?php
// Input from the user
$n = 5; // You can replace this with dynamic input if needed

// Generate the pattern
for ($i = 1; $i <= $n+1; $i++) 
{
	$a = 65;
    for ($j = 1; $j < $i; $j++) 
	{
		if($i%2==0)
		{
			echo $j." ";			
		}
		else
		{
			echo chr($a + $j) . " "; // chr(65) is 'A'
		}
    }
    echo "</br>"; // Move to the next line
}
?>

/------------------------------------------------\<br>
<?php
// Input from the user
$n = 5; // You can replace this with dynamic input if needed

// Generate the pattern
for ($i = 1; $i <= $n; $i++) 
{
	
    for ($j = 1; $j < $n; $j++) 
	{
		echo "*";
    }
    echo "</br>"; // Move to the next line
}
?>

</body>
</html>

