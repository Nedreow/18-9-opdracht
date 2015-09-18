<?php
	class connection 
	{
		$dbi;
	
		public __construct($servername, $username, $password)
		{
			$dbi = new mysqli($servername, $username, $password);
		}
	
	}
?>