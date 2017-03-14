<?php
	function viewController($view)
	{
		switch ($view) {
			case 'page':
				return "/view/page.view.php";
				break;

			case 'page2':
				return "/view/page2.view.php";
				break;

			
			default:
				// This melding will be shown when page does not exist! 
				echo "This page does not exist!";
				break;
		}
	}

?>