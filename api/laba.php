<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>кдз№3</title>
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
            <h1>Лабараторная работа</h1>
            
            <FORM method= "GET" action="laba.php">
            <INPUT name="res" type="text">Значение X
            <BR><BR>
            <INPUT name="res2" type="text">Значение y
            <BR><BR>
            <INPUT name="res3" type="text">Значение z
            <BR><BR>
            <select name="find">
        <option disabled>Выберите вариант задания</option>    
        <option value="1">1</option>
        <option value="3">3</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="31">Справка</option>
    </select>
<BR><BR>
<INPUT type="submit" value= "Решение">
</FORM><?php
              if(isset($_GET['res2'])){ $name=$_GET['find'];
               if($x=$_GET['res']&& $y=$_GET['res2'] && $z=$_GET['res3'] ){
                   
                   
                    $x=$_GET['res']; 
                    $y=$_GET['res2'];
                    $z=$_GET['res3'];   
                    echo nl2br("\nx=$x\n");
                    echo nl2br("\ny=$y\n");
                    echo nl2br("\nz=$z\n");
                    //echo($name);
                    //1
                    if($name==1){$result=0;
                        //Задача№1
                        //1)
                        if(((3*$x+$x*$y-6)>0)||(tan($y))){
                        $result=((3*$x+$x*$y-6)**(1/2))*log($x+$y)+tan($y);
                        echo nl2br("\n1)Ответ==$result\n");}else{echo nl2br("\nОшибка в введенных переменных");}
                        //2)
                        
                        if(($y<>0)||((abs($x-1)-abs($y))**(1/3)<>0)||(1+($x*$x/12)+($y*$y/($x+1))<>0)||(($x+1)<>0)){
                            
                            $result=((abs($x-1)-abs($y)**(1/3))**(1/2))/(1+($x*$x/12)+($y*$y/($x+1)));
                            echo nl2br("\n2)Ответ==$result\n");}else{echo nl2br("\nОшибка в введенных переменных");}
                        //Задача№2
                        if((($y*$y+$x*$x)**(1/2))<>$x+$y){
                         $result=($y*$y+$x*$x)**(1/2);
                         $s=$x*$y/2;
                         $per=$result+$x+$y;
                            echo nl2br("\nВ прямоугольном треугольнике со сторонами x и у гипотенуза равна==$result, площадь равна==$s, периметр равен==$per  \n");}
                            else{echo("сумма двух сторон не может быть равна третьей");}
                        //Задача№3
                        if(1)
                        {
                            $result=strrev($z);
                            echo nl2br("\n3)Ответ==$result\n");
                        } else{echo nl2br("\nОшибка");}
                    }
                    //3
                    if($name==3)
                    {
                        $result=0;
                        //Задача№1
                        //1)
                        if(($x-$y)<>0){
                        $result=((3*$x+1)**3)*(($y+cos($x))**2)-log(($x+$y)/($x-$y));
                        echo nl2br("\n1)Ответ==$result\n");}else{echo nl2br("\nНельзя делить на ноль");}
                        //2)
                        if($x<>0 || ($x+(2*sin($y))/(exp($x)-1))<>0){
                           
                            $result=($x+$y-5)/($x+(2*sin($y))/(exp($x)-1));
                            echo nl2br("\n2)Ответ==$result\n");}else{echo nl2br("\nОшибка в введенных переменных");}
                        //Задача№2
                        if($x<>$y){
                         $result=abs(M_PI*$x*$x-M_PI*$y*$y);
                            echo nl2br("\nПлощадь кольца с радиусами х и у равна==$result (меньшее значение всегда означает меньший радиус)  \n");}
                            else{echo("\nменьший и больший радиус не могут быть равны\n");}
                        //Задача№3
                        if(1)
                        {$result=array_sum(str_split($z));
                            echo nl2br("\nОтвет==$result\n" );
                        } else{echo nl2br("\nОшибка");}
                    }
                    //8
                    if($name==8)
                    {
                        $result=0;
                        //Задача№1
                        //1)
                        if(($x-1)<>0){
                        $result=(4**$x)-10*(2**($x-1))*sin((3*$x)/($x-1));
                        echo nl2br("\n1)Ответ==$result\n");}else{echo nl2br("\nНельзя делить на ноль");}
                        //2)
                        //echo($x);
                        if($x<>0){
                            
                            $result=(2*exp($x))-atan(1/$x)*(log(2*$y)/log(3));
                            echo nl2br("\n2)Ответ==$result\n");}else{echo nl2br("\nНельзя делить на ноль");}
                        //Задача№2
                         $result=M_PI*$x*$x-($y*$y*(3**(1/2)))/4;
                            echo nl2br("\nРазность площадей круга с радиусом х и равностороннего треугольника со стороной у равна==$result\n");
                        //Задача№3
                        if($z<64)
                        {$result=decbin($z);echo nl2br("\n3)Ответ==$result\n");} else{echo nl2br("\nОшибка, z не может быть больше 64");}
                    }
                    //9
                    if($name==9)
                    {
                        $result=0;
                        //Задача№1
                        //1)
                        if($y<>0){
                        $result=8**(2/$x)-2**(3*$x+2)+tan($x/$y);
                        echo nl2br("\n1)Ответ==$result\n");}else{echo nl2br("\nНельзя делить на ноль");}
                        //2)
                        if(((log(2*$x))/(log(3))+sin(log($x)))<>0){
                           
                            $result=($x*((M_PI/2)-atan($z))+exp(-1*($x-$y)))/((log(2*$x))/(log(3))+sin(log($x)));
                            echo nl2br("\n2)Ответ==$result\n");}else{echo nl2br("\nНельзя делить на ноль");}
                        //Задача№2
                        if($x>0){
                         $result=$x*$x-M_PI*$x*$x/4;
                            echo nl2br("\nРазность квадрата и вписаного в него круга равна==$result\n");}
                            else{echo nl2br("\nСторона квадрата не может быть отрицательной или равняться нулю\n");}
                        //Задача№3
                        if(0.999>=$z && $z>=0.001)
                        
                        {preg_match_all('|[\d+]|', $z, $result1, PREG_PATTERN_ORDER);
                            // print_r($result1);
                            $result=$result1[0];
                           
                            $result1=$result[2]+$result[3];
                            echo nl2br("\nОтвет==$result1\n");
                        } else{echo nl2br("\nz не может быть меньше 0.001 и больше 0.999");}
                    }
                    //17
                    
                }
                if($name==31)
                {
                    echo nl2br("\nСправка\nПеременные x y z используются в первом и втором задании, в третьем задании используется только переменная z\nВывод решения происходит следующим образом, под номерами 1) и 2) выводится решение первого задания, далее без номера выводится решение второго задания, под номером 3) выводится решение третьего задания.\n");
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
