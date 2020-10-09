<?php 
	header("Content-Type: text/html;charset=utf-8");
	
?>

<html>
	<head>
		
	</head>
	<body>
		<form action="http://test1.ru/php 3.php" method=post enctype='multipart/form-data'>
		
			ДИКТАТОР
			<br>
			<?php
			error_reporting(E_ERROR | E_PARSE);
			if(isset($_COOKIE["count"]))
			{
				$_COOKIE["count"]++;
				setcookie("count",$_COOKIE["count"],time()+600);
			}
			else
			{
				setcookie("count","1",time()+600);
			}
			$taxRad=$_POST['tax'];
			if(isset($_POST['rating']) && isset($_POST['gold']) && isset($_POST['taxes']))
			{
				$rating=$_POST['rating'];
				$money=$_POST['gold'];
				$tax=$_POST['taxes'];
				if($taxRad =='up' && $rating > 0 )
				{
					$tax+=10;
					$rating-=10;
				}
				else if ($taxRad == 'down' && $tax > 0)
				{
					$tax-=10;
					$rating+=10;
				}
				$money+=$tax;
				
				$assasinationProbability= rand(0,$rating+100);
				if($assasinationProbability < 10)
				{
					echo("There is assasination happening! <br>");
					$successProbability= rand(0,100);
					if($successProbability > 50)
					{
						echo ("LOL you died! Start new game <br>");
					}
					else
					{
						echo("Assasination failed! <br>");
					}
				}
				if($money >= 15000)
				{
					echo("You gathered enough to flee the country! Success! <br>");
				}
			}
			else
			{
				$rating=80;
				$money=10000;
				$tax=20;
			}
			
			
			
			
			echo("
			Рейтинг: <input type=text name=rating value={$rating}>%
			<br>
			Казна: <input type=text name=gold value={$money}> голды 
			<br>
			Налоги: <input type=text name=taxes value={$tax}>%
			");
			?>
			<br>
			<input type=radio name=tax value=up> поднять налоги на 10%
			<br>
			<input type=radio name=tax value=down> снизить налоги на 10%
			<br>
			<input type=submit value=Ok>
			<br>
			
		</form>
		<form action="http://test1.ru/php 3.php" method=post enctype='multipart/form-data'>
			<input type=submit value="Новая игра">
			<?php
			error_reporting(E_ERROR | E_PARSE);
			setcookie("count","OK",time()-600);
			
			?>
		</form>
		
	</body>
	
</html>