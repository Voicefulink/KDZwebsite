<!DOCTYPE html>
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
            <h1>Task2</h1>
            <p>Измененный текст</p>
            <?php
            {
                $text=$_GET['search'];
                $read=$_GET['read'];
                $write=$_GET['write'];
                $fix=preg_replace("/\b$read\b/ui",$write,$text);
               
               
                echo(nl2br("$fix\n"));
                
           }
?>
             <p>Изначальный текст</p>
             <?php
             {echo($text);}
             ?>
        </div>
        <footer>
            Всё КДЗ выполнено самостоятельно
        </footer>
    </div>
</body>
</html>