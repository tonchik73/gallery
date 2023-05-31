<title>Главная</title>
<div align="center">
    <h1>Добро пожаловать!</h1>
</div>
<?php 
    $arrRootDir = scandir("$rootDir/data/images");
    var_dump($arrRootDir[1]);
    for ($i = 2; $i < count($arrRootDir); $i++){ 
?> 

<div align="center">
    <div> 
        <h2>1</h2> <!-- Заголовок -->
    </div>
    <img src="data/images/<?= $arrRootDir[$i]; ?>">
    <div> 
        <div></div> <!-- тут коменты -->
    </div>
</div>
<?php }; ?>