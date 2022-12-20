<?php
  // массив проектов 
$project_categories = array(
  "inbox"=>"Входящие",
  "study"=>"Учеба",
  "work"=>"Работа",
  "housework"=>"Домашние дела",
  "car"=>"Авто",
);

// массив заадч 
$tasks = array(
  [
    "name" => "Собеседование в IT компании",
    "date" => "01.12.2019",
    "category" => "work",
    "status" => false,
  ],
  [
    "name" => "Выполнить тестовое задание",
    "date" => "25.12.2019",
    "category" => "work",
    "status" => false,
  ],
  [
    "name" => "Сделать задание первого раздела",
    "date" => "21.12.2019",
    "category" => "study",
    "status" => true,
  ],
  [
    "name" => "Встреча с другом",
    "date" => "22.12.2019",
    "category" => "inbox",
    "status" => false,
  ],
  [
    "name" => "Купить корм для кота",
    "date" => null,
    "category" => "housework",
    "status" => false,
  ],
  [
    "name" => "Заказать пиццу",
    "date" => null,
    "category" => "housework",
    "status" => false,
  ],
);
?>