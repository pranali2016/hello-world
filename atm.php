<?php

	if(isset($_POST['submit']))
	{
		$amt = $_POST['amount'];
		
			if(($amt % 10) == 0)
			{
				if( $amt >= 1000)
				{
					$thousands = floor($amt / 1000);
					$n1 = ($thousands * 1000);
					$remaining = $amt - ($thousands * 1000);
					echo " $thousands * 1000 = ".$n1."<br>";
					if($remaining >=500)
					{
						$fivehundreds = floor($remaining / 500);
						$remains = $remaining - ($fivehundreds * 500);
						$n2 = ($fivehundreds * 500);
						echo " $fivehundreds * 500 = ".$n2."<br>";
						if($remains >= 100)
						{
							$hundreds = floor($remains / 100);
							$remain = $remains - ($hundreds * 100);
							$n3 = ($hundreds * 100);
							echo " $hundreds * 100 = ".$n3."<br>";
							if($remain >= 50)
							{
								$fifty = floor($remain / 50);
								$remin = $remain - ($fifty * 50);
								$n4 = ($fifty * 50);
								echo " $fifty * 50 = ".$n4."<br>";
								if($remin >= 20)
								{
									$twenty = floor($remin / 20);
									$re = $remin - ($twenty * 20);
									$ten = floor($re / 10);
									$n6 = ($twenty * 20);
									$n7 = ($ten * 10);
									echo " $twenty * 20 = ".$n6."<br>";
									echo " $ten * 10 = ".$n7."<br>";
								}
								else
								{
									$ten = floor($remin / 10);
									echo " $ten * 10 = ".($ten * 10)." <br>";
								}
							}
							else
							{
								$twenty = floor($remain / 20);
								$re = $remain - ($twenty * 20);
								$ten = floor($re / 10);
								echo " $twenty * 20 = ".($twenty * 20)." <br>";
								echo " $ten * 10 = ".($ten * 10)." <br>";
							}
						}
						else
						{
							$fifty = floor($remains / 50);
							$remain = $remains - ($fifty * 50);
							echo " $fifty * 50 = ".($fifty * 50)." <br>";
							if($remain >= 20)
								{
									$twenty = floor($remain / 20);
									$re = $remain - ($twenty * 20);
									$ten = floor($re / 10);
									echo " $twenty * 20 = ".($twenty * 20)." <br>";
									echo " $ten * 10 = ".($ten * 10)." <br>";
								}
								else
								{
									$ten = floor($remain / 10);
									echo " $ten * 10 = ".($ten * 10)." <br>";
								}
						}
					}
					else
					{
						$hundreds = floor($remaining / 100);
							$remain = $remaining - ($hundreds * 100);
							echo " $hundreds * 100 = ".($hundreds * 100)." <br>";
							if($remain >= 50)
							{
								$fifty = floor($remain / 50);
								$remin = $remain - ($fifty * 50);
								echo " $fifty * 50 = ".($fifty * 50)." <br>";
								if($remin >= 20)
								{
									$twenty = floor($remin / 20);
									$re = $remin - ($twenty * 20);
									$ten = floor($re / 10);
									echo " $twenty * 20 = ".($twenty * 20)." <br>";
									echo " $ten * 10 = ".($ten * 10)." <br>";
								}
								else
								{
									$ten = floor($remin / 10);
									echo " $ten * 10 = ".($ten * 10)." <br>";
								}
							}
							else
							{
								$twenty = floor($remain / 20);
								$re = $remain - ($twenty * 20);
								$ten = floor($re / 10);
								echo " $twenty * 20 = ".($twenty * 20)." <br>";
								echo " $ten * 10 = ".($ten * 10)." <br>";
							}
					}
				}
				else
				{
					$fivehundreds = floor($amt / 500);
						$remains = $amt - ($fivehundreds * 500);
						echo " $fivehundreds * 500 = ".($fivehundreds * 500)." <br>";
						if($remains >= 100)
						{
							$hundreds = floor($remains / 100);
							$remain = $remains - ($hundreds * 100);
							echo " $hundreds * 100 = ".($hundreds * 100)." <br>";
							if($remain >= 50)
							{
								$fifty = floor($remain / 50);
								$remin = $remain - ($fifty * 50);
								echo " $fifty * 50 = ".($fifty * 50)." <br>";
								if($remin >= 20)
								{
									$twenty = floor($remin / 20);
									$re = $remin - ($twenty * 20);
									$ten = floor($re / 10);
									echo " $twenty * 20 = ".($twenty * 20)." <br>";
									echo " $ten * 10 = ".($ten * 10)." <br>";
								}
								else
								{
									$ten = floor($remin / 10);
									echo " $ten * 10 = ".($ten * 10)."<br> ";
								}
							}
							else
							{
								$twenty = floor($remain / 20);
								$re = $remain - ($twenty * 20);
								$ten = floor($re / 10);
								echo " $twenty * 20 = ".($twenty * 20)." <br>";
								echo " $ten * 10 = ".($ten * 10)." <br>";
							}
						}
						else
						{
							$fifty = floor($remains / 50);
							$remain = $remains - ($fifty * 50);
							echo " $fifty * 50 = ".($fifty * 50)." <br>";
							if($remain >= 20)
								{
									$twenty = floor($remain / 20);
									$re = $remain - ($twenty * 20);
									$ten = floor($re / 10);
									echo " $twenty * 20 = ".($twenty * 20)." <br>";
									echo " $ten * 10 = ".($ten * 10)." <br>";
								}
								else
								{
									$ten = floor($remain / 10);
									echo " $ten * 10 = ($ten * 10) ";
								}
						}
				}
			}				
			else
			{
			echo "Invalid Value";
			}
		
	}
?>

<html>
<head>
	<title>  ATM code </title>
</head>
<body>
	<form method="post">
	Enter your amount : <input type="text" name="amount" />
	<input type="submit" name="submit" value="Submit" />
	</form>
</body>
</html>