<?
//require('config.php');

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/') 
{
    require('home.php');
} 
elseif ($uri == '/login')
{
    $status = 'В разработке';
    $status_about = 'Панель управления';
    $status_about_2 = 'adCapctha - новый инструмент интернет-рекламы';
    $title_login = "adCaptcha - Вход в панель управления";
    require('login.php');
}
else
{
    require('home.php');
}
