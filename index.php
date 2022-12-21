<?php
  // показывать или нет выполненные задачи
  $show_complete_tasks = rand(0, 1);
  $user_name = 'Рональд Курочкин';

  require_once('helpers.php');
  require_once('functions.php');
  require_once('data.php');

  $page_content = include_template('main.php', [
    'tasks' => $tasks,
  ]);

  $layout_content = include_template('layout.php', [
    'content' => $page_content,
    'project_categories' => $project_categories,
    'tasks' => $tasks,
    'title' => 'Главная',
  
  ]);

  print($layout_content);

?>