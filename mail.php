<?php

$recepient = "k.v.kirpenko@gmail.com";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$Email = trim($_POST["Email"]);
$Title = trim($_POST["Title"]);
$Comment = trim($_POST["Comment"]);
$message = "Имя: $name \nПочтовый ящик: $Email \nЗаголовок: $Title \nТекст сообщения: $Comment";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");