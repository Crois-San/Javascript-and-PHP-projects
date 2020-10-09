<?php 
	header("Content-Type: text/html;charset=utf-8");
	$year_current=2018;
	$lang_count=0;
	$year = $_POST['birthyear'];
	$age = $year_current - $year;
	$edu = $_POST['education'];
	$name =$_POST['name'];
	$surname =$_POST['surname'];
	echo("Здравствуйте $name   $surname ! Ваша вакансия: ");
	echo("<br>");
	if(isset($_POST['en']))
		$lang_count +=1;
	if(isset($_POST['fr']))
		$lang_count +=1;
	if(isset($_POST['de']))
		$lang_count +=1;
	if(isset($_POST['it']))
		$lang_count +=1;
	if($age < 18)
	{ 
		echo('Вам меньше восемнадцати лет!!! Без вакансии! ');
	}
	else
	{
		if( $edu != 'high' )
		{
			echo('Без высшего образования вакансий нет! ');
		}
		elseif ($lang_count >= 2)
		{
			echo('У вас есть высшее и вы знаете два языка! теперь вы начальника! ');
		}
		else
		{
			echo('У вас есть высшее! теперь вы заместитель начальника! ');
		}
	}
	
?>