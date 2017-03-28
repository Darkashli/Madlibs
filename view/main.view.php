<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Madlibs</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
  <header>
  	<h1>mad Libs</h1>
  </header>
    <nav>
    	<ul>
    		<li>
    			<form method="GET">
					<input type="hidden" name="view" value="page">
					<button type="submit">Er heerst paniek...</button>
				</form>
    		</li>
    		<li>
    			<form method="GET">
					<input type="hidden" name="view" value="page2">
					<button type="submit">Onkunde</button>
				</form>
    		</li>
    	</ul>
    </nav>
    <main>
        	<?php require(_ROOT_ . "$content"); ?>

    </main>
	<footer>Publiceerde in 2017-2018</footer>
</body>
</html>