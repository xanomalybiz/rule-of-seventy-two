<?php
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		if(isset($_POST['interest']))
		{
			$interest = $_POST['interest'];
			if(is_numeric($interest))
			{
				$result = 72 / $interest;
				echo 'With a compounding interest rate of '.$interest.'%, it will take ' . $result . ' years for your investment to double.';
			}
			else
			{
				echo 'Please enter a valid number'; 	
				
			}
		}
	}
	
	