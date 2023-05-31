<?php
    // error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    global $rootDir;
?>

<!DOCTYPE html> 
<html lang="ru"> 
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <header>
    <div id="header" class="container">
	<div id="logo">
		<h1><a href="?url=main">Галлерея</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="?url=main" title="">Главная</a></li>
            <li><a href="?url=loadfile" title="">Загрузить картинку</a></li>
            <?php if ($_COOKIE['user'] == ''): ?>
            <li><a href="?url=enter" title="">Войти</a></li>
            <?php else: ?>
            <li><a title=""><?=$_COOKIE['user']?></a></li>
            <li><a href="exit.php" title="">Выйти</a></li>   
            <?php endif; ?>
		</ul>
    </div>
</div>
    </header>
    <?php include $content_view; ?>
<footer>
    <div id="copyright" class="container">
	    <p>&copy; Antonio. All rights reserved.
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input@1.3.4/dist/bs-custom-file-input.min.js"></script>
<script>
    $(() => {
        bsCustomFileInput.init();
    })
</script>
</body> 
</html>