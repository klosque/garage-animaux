<?php	

function p_m ($param1,$param2)
{
	
		if($param1<$param2)
		{
			echo 'plus!';

			$_SESSION['b']=$_SESSION['b']+1;

		}
		if($param1>$param2)
		{
			echo "moins!";

			$_SESSION['b']=$_SESSION['b']+1;

		}
		if($param1==$param2) 
		{
			echo "Vous avez trouvé!";
			echo "<br/> Le nombre était:".$param2;
			echo "<br/>  vous avez trouvé en ".$_SESSION['b']." essais!";
			$_SESSION['a'] = rand(1,100); 
		}

}

 //$b = rand (0,100);
	// echo $b;
//$b = 47;
session_start();
if(!isset($_SESSION['a']))
{

$_SESSION['a'] = rand(1,100);


}

if(!isset($_SESSION['b']))
{

$_SESSION['b'] = 1;


}

echo $_SESSION['a'];

if (isset($_POST['Envoyer']))
{
	 $var = p_m($_POST['a'],$_SESSION['a']);
	 echo $var;
}


?>
<html>
<head></head>
<body>
	


		<form action="" method="POST">
			<label for="a">A:</label>
			<input id="a" type="text" required="yes" name="a"><br />
			<input type="submit" name="Envoyer" />

		</form>		
</body>
</html>