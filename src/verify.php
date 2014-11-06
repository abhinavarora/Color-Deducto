<?php session_start(); ?>
<html>
<body>
<?php 
if ($_POST["type"]=="Example")
{
	header('Location:samples.php');
	$_SESSION['id']=1;
}
elseif($_POST["type"]=="Counter")
{
	header('Location:samples.php');
	$_SESSION['id']=0;
}
elseif($_POST["type"]=="Play")
{
	$_SESSION['counter']=0;
	header('Location:colordeducto.php');
}
elseif($_POST["type"]=="True Board")
{
	if($_SESSION['index']==1)
	{
		$_SESSION['counter']++;
		if($_SESSION['counter']==5)
		{
			if( $_SESSION['level']==10)
			{
				echo '<center><font color="#A6A6A6" size=+5><b>Congratulations!<br />You Have Cracked <br />The Color Deducto</font></b></center>';
				echo '<center><br /><br /><br />';
				echo '<form action="welcome.php" method="post">';
				echo '<input type="submit" value="Play Again">'; 
				echo '</form></center>';
			}
			else
			{	$_SESSION['counter']=0;
				$_SESSION['level']++;
				echo '<center><font color="#A6A6A6" size=+5><b>Well Done!<br />Now Lets Try <br />Level '.$_SESSION['level'].'</font></b></center>';
				header("refresh:2; url='colordeducto.php'");
			}
		}
		else
			header('Location:colordeducto.php');
	}
	else
	{
		$_SESSION['counter']=0;
		header('Location:colordeducto.php');
	}
}
elseif($_POST["type"]=="False Board")
{
	if($_SESSION['index']==0)
	{
		$_SESSION['counter']++;
		if($_SESSION['counter']==5)
		{
			if( $_SESSION['level']==10)
			{
				echo '<center><font color="#A6A6A6" size=+5><b>Congratulations!<br />You Have Cracked <br />The Color Deducto</font></b></center>';
				echo '<center><br /><br /><br />';
				echo '<form action="welcome.php" method="post">';
				echo '<input type="submit" value="Play Again">'; 
				echo '</form></center>';
			}
			else
			{	$_SESSION['counter']=0;
				$_SESSION['level']++;
				echo '<center><font color="#A6A6A6" size=+5><b>Well Done!<br />Now Lets Try <br />Level '.$_SESSION['level'].'</font></b></center>';
				header("refresh:2; url='colordeducto.php'");
			}
		}
		else
			header('Location:colordeducto.php');
	}
	else
	{	$_SESSION['counter']=0;
		header('Location:colordeducto.php');
	}
}
?>
</body>
</html>

