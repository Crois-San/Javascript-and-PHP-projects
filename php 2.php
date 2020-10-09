<?php 
	header("Content-Type: text/html;charset=utf-8");
	if(isset($_FILES['uploadfile']['tmp_name']))
	{
		copy($_FILES['uploadfile']['tmp_name'], "upload/".$_FILES['uploadfile']['name']) ;
		//$fileName=$_FILES['uploadfile']['name'];
	}
	
	
?>
<html>
	<head>
		
	</head>
	<body>
		<form action="http://test1.ru/php 2.php" method=post enctype='multipart/form-data'>
		
			<input type=file name=uploadfile>
			<br>
			<input type=submit value=Загрузить>
		</form>
		<form action="http://test1.ru/php 2.php" method=post enctype='multipart/form-data'>
			<?php
			error_reporting(E_ERROR | E_PARSE);
			$i=0;
			$dir=opendir("upload");
			while($f=readdir($dir))
			{
				if(isset($_POST['files'][$i]))
					{
						unlink("upload/".$_POST['files'][$i]);
					}
				if($f!='.' && $f!='..')
				{
					
					
					echo "<input type=checkbox name=files[] value={$f}>";
					echo "<a href='upload/{$f}'  download> $f </a> <br>";
					$i+=1;
				}
				
			}
			?>
			<input type=submit name=delete value=удалить>
		</form>
	</body>
</html>