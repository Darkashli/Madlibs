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

			case 'pageresult':
			    return "/view/pageresult.view.php";
				break;

			case 'paderesult2':
                return "/view/pageresult2.view.php";
				break;

			
			default:
				echo "This page does not exist!";
				break;
				}
	}

?>