<!doctype html>
<html class=bg>
<head>
	<title>
		Errata: Win
	</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/base.css"/>
</head>
	<body>
	<div class="header">
		<div class="imgt"><img src="img/zealicon.png" style="max-width:200px;max-height:200px;"/></div><div class="hdng">ERRATA - The Treasure Hunt</div>
	</div>
			
			<div class="main">
				<div class="Part-1">
				<?php
					include_once('code/sidebar.php');
					if(!isset($_SESSION['user']))
					header('Location:index.php');
				?>
				<?php
					if($_SESSION['level']!=22)
					header('Location:'.$_SESSION['page'].'.php');
				?>
	

				</div>
				<div class="main_content">
					<table align="center">
					<tr>
						<td>
						<?php
							$q=new que;
							$q->get($con);
							class que
							{
								public function get($con)
								{
										$l=stripslashes($_SESSION['level']);
										$sql="SELECT * FROM `list` WHERE `level` = '22'";
										$res=mysqli_query($con,$sql);
										if($res)
										{
											$questionDetails= mysqli_fetch_assoc($res);
											$ques= $questionDetails['question'];
											if($ques!="")
											{
												echo "<div class='ques'>".$ques."</div>";
											}
											else
											{
												$link=$questionDetails['image'];
												echo "<img class='qimg' src ='".$link."'./>";
												echo "<p>Congratulations You Won The Prize....!!!</p>";
											} 
										}
										else
										echo("Connection Problem....");
			
								}
							}
							mysqli_close($con);
						?>
						</td>		
					</tr></table>
					</div>
			</div>
				
			
			
			<br/><br/><br/>
			
	</body>
</html>