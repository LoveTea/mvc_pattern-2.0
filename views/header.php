<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
    <title><?=$title;?></title>
</head>
<body>    
    <div class="wrapper">
        <header>
            <img src="http://zoompanningeffectslider.com/wp-content/uploads/2016/03/html5_.png" alt="logo" class="logo">
            <nav>
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/article/getlist">Новости</a></li>
                    <li><a href="/registration/">Регистрация</a></li>                    
                    <?php
                    if($_SESSION['islogin'] == false) echo '<li><a href="/login/">Авторизация</a></li>';
                    if($_SESSION['isAdmin'] == true) echo '<li><a href="/admin/">Админка</a></li>';  
                    if($_SESSION['islogin'] == true) echo '<li><a href="/login/logout">Выход</a></li>';                             
                    ?>                    
                </ul>
            </nav>
        </header>