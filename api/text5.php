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
            <h1>Task5</h1>
           <?php 
           $email=$_GET['email'];
           if(preg_match_all('/[a-zA-Z0-9---_]+@[a-zA-Z0-9\.]+\.[a-zA-Z0-9]{2,}/',$email,$mails))
           {
            $email=$mails[0];
            echo nl2br("Найдено\n");
            for ($pinus=0; $pinus<count($email); $pinus++)
            {
                 echo nl2br("$email[$pinus]\n");
            }
          
           }
           else{echo("Ошибка");}
           ?>

        
        </div>
        <footer>
            Всё КДЗ выполнено самостоятельно
        </footer>
    </div>
</body>
</html>
