<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>кдз№2</title>
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
            <p>Заменяет одно слово на другое</p>
            <FORM method= "GET" action="KDZtext2.php">
<INPUT name="search" type="text">Текст
<BR><BR>
<INPUT name="read" type="text">Заменяемое слово
<BR><BR>
<INPUT name="write" type="text">Заменить на
<BR><BR>
<INPUT type="submit" value= "Замена">
</FORM>
<?php
            if(isset($_GET['search']))
            {if(isset($_GET['read']))
                {if(isset($_GET['write'])){
                $text=$_GET['search'];
                $read=$_GET['read'];
                $write=$_GET['write'];
                if(empty($text|$read|$write)){echo"Ошибка";}
                else{
                $fix=preg_replace("/\b$read\b/ui",$write,$text);
               
               echo nl2br("Измененный текст\n\n");
                echo nl2br("$fix\n\n");
                echo nl2br("Изначальный текст\n\n");
                {echo("$text\n\n");}
            }
                
           }
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
