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
            <h1>Task3</h1>
            <p>Заполните анкету</p>
            <FORM method= "GET" action="KDZForm.php">
            <INPUT name="name1" type="text">Имя
<BR><BR>
            <INPUT name="name2" type="text">Фамилия
<BR><BR><p>Пол</p>
<input type="radio" id="male" name="gender" value="Мужчина">
  <label for="male">Мужчина</label><br>
  <input type="radio" id="female" name="gender" value="Женщина">
  <label for="female">Женщина</label><br>
<BR><BR>
<INPUT name="col" type="text">Любимый цвет
<BR><BR>

<p>Немного о себе</p>
  <p><textarea cols="40" name="about"></textarea></p>
<INPUT type="submit" value= "Ввод">
</FORM>
<?php
if(isset($_GET['name1']))
{
    $name1=$_GET['name1'];
    $name2=$_GET['name2'];
    $gender=$_GET['gender'];
    $col=$_GET['col'];
    $about=$_GET['about'];
    echo nl2br("Здравствуйте\nМеня зовут $name1 $name2\nЯ $gender\nМой любимый цвет $col\nНемного обо мне\n$about");
}



?>
            
            
        </div>
        <footer>
            Всё КДЗ выполнено самостоятельно
        </footer>
    </div>
</body>
</html>
