﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BASE</title>
    <meta name="description" content="sample site for ISBN">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div id="container">
        <nav id="topnav">
            <a href="/api/index.php">Главная</a> |
            <a href="/api/kdzpage.php">КДЗ</a> |
            
            <a href="/api/OpenPage.php">Исходники</a>
        </nav>
        <div id="content">
            <h1>Task1</h1>
            <?php
            {
                $text = mb_strtolower($_GET['search']);
                

                $sss=mb_strtolower($_GET['read']);
          if (preg_match_all("~\w*$sss\w*~",$text,$matches)){
           //print_r($matches);
            echo count($matches, COUNT_RECURSIVE)-1;
          }
           
           else {
               echo"ошибка";
        }
    }
?>
        </div>
        <footer>
            Всё КДЗ выполнено самостоятельно
        </footer>
    </div>
</body>
</html>