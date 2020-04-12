<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>кдз№4</title>
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
            <h1>Task4</h1>
            <p>Приводит дату к общему стандарту.</p>
            <FORM method= "GET" action="KDZtext4.php">
            <INPUT name="date" type="text">Дата
<BR><BR>

<INPUT type="submit" value= "Исправить">
</FORM>
<?php
            $s=0;
            $error=0;
            $nepiss=0;

            if(isset($_GET['date'])){
            $date=$_GET['date'];
           //preg_match_all('|[0-9]|', $date, $shit[1]);
            if (preg_match_all('|[0-9]|', $date, $shit, PREG_PATTERN_ORDER)){
            //print_r($shit);
             $matches = $shit[0]; 
                //print_r($matches);
                //echo(count($matches));
                //for ($i = 0; $i <count($matches); $i++)
                if(count($matches)==8){
                    $piss1=$matches[1]+10*$matches[0];
                    $piss2=$matches[3]+10*$matches[2];
                    $piss3=$matches[7]+10*$matches[6]+100*$matches[5]+1000*$matches[4];
                    if($piss2>12){$piss=$piss2;$piss2=$piss1;$piss1=$piss;}
                    if($piss2>12){$error=1;}
                    if($piss1>31){$error=1;}
                    if($error==0)
                    {
                    if($piss2==2){if($piss1>28){$error=1;echo"Февральская ошибка";}}
                    if($piss2<10){$piss2="0$piss2";}
                    if($piss1<10){$piss1="0$piss1";}
                    }
                    if($error==0){
                    if($piss2<=12){echo nl2br("\nДата-$piss1.$piss2.$piss3\n");}
                    else{echo("ошибка 49");}
                    }
                    else{echo("Недопустимый формат даты");}
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
