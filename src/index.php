<?php session_start(); ?>
<html>
<head>
<meta name="Author" content="Abhinav Arora"> 
<meta name="Description" content="Color Deducto">
<title>
Color Deducto
</title>
</head>
<?php
function getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255)
{
	// ensure that values are in the range between 0 and 255
	if ($max_r > 255) { $max_r = 255; }
	if ($max_g > 255) { $max_g = 255; }
	if ($max_b > 255) { $max_b = 255; }
	if ($max_r < 0) { $max_r = 0; }
	if ($max_g < 0) { $max_g = 0; }
	if ($max_b < 0) { $max_b = 0; }
	
	// generate and return the random color
    echo '"'.'#' . dechex(rand(0, 255)) . dechex(rand(0, 255)) . dechex(rand(0, 255)).'"';
}

$_SESSION['counter']=0;
$_SESSION['level']=1;
?> 
<center> 
<table border="1" cellpadding="0" cellspacing="0" bgcolor="#C0C0C0"> 
  <tr> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
  </tr> 
  <tr> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
  </tr> 
  <tr> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
  </tr> 
  <tr> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
  </tr> 
  <tr> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
<td bgcolor=<?php getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255);?> width="50" height="50">&nbsp;</td> 
  </tr> 
</table>
<font color="#A6A6A6" size=+4><b>color deducto</font></b>
<p> 1.&nbsp; Color Deducto is an activity which aims at helping sharpen the logical and deductive skills<br /> of children as well as make them familiar with the Munsell Color System.
<br />2.&nbsp;  Each level is based on a different logic, such as monochromacity, addition and subtraction<br /> of colors, etc.
<br />3. &nbsp;&nbsp;&nbsp;&nbsp;The player has to identify the logic behind each level and classify the board as TRUE or<br /> FALSE.
<br />4. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If he succeeds in correctly identifying the board five times consecutively, then he’s <br />promoted to the next level. </p>
<form action="colordeducto.php" method="post">
<input type="submit" name="type" value="Start Game">
</form> 
</center>
</html>
