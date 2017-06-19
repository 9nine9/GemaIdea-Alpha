<?php
	$keywords 		= "Road to Gemastik 10";
	$description 	= "Road to Gesmastik 10";
	$author 		= "9nine9";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content= "<?php echo $keywords; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />
    <meta name="author" content= "<?php echo $author; ?>">
	<meta name="apple-mobile-web-app-capable" content="yes">
	
    <title><?php echo $title; ?></title>
 
    <?php
    	$prev = '';
    	if(!file_exists("../.htaccess")) $prev = "../";
    ?>

    <link href="<?php echo "$prev"?>css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="<?php echo "$prev"?>css/stylesheet.css" rel="stylesheet" media="screen" />
	<script src="<?php echo "$prev"?>js/jquery.js"></script>
    <script src="<?php echo "$prev"?>js/menu.js"></script>
    <script src="<?php echo "$prev"?>js/bootstrap.min.js"></script>

	<noscript>javascript mode is off.. some functions can't work well..</noscript>
	
</head>

<body>

<!-- header -->
<header class="container-fluid header" id="top">
	<div class="container">
		<div class="col-sm-2 col-sm-offset-10 center">
			<button class="menu-btn">MENU</button>
			<nav class="menu">
				<h4 class="menu-btn close">x</h4>
        		<ul>
        			<li><a href="./home.php">HOME</a></li>
					<li><a href="./submit.php">SUBMIT</a></li>
		    	</ul>
		       </nav>
		</div>
	</div>
</header>
