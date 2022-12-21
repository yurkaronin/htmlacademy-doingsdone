<?php
  /* 
  * Функция должна принимать два аргумента:
  * список задач в виде массива;
  * название проекта.
  */
  function task_counter($tasks, $code) {
    // Хранит число элементов подходящих под параметры 
    $tasks_sum = 0;
    // проходится по всем элементам 
    foreach ($tasks as $task) {
      // и если условие соответствует увеличивает число на 1 
      if($task["category"] == $code) {
        $tasks_sum++;
      };
      // возвращает итоговое число 
    };
      return $tasks_sum;
  };

  function deadline_checker($date) {
    date_default_timezone_set('Europe/Moscow');
    $time_now = date_create("now");
    $deadline = date_create($date);

    if ($time_now > $deadline) {
      $hours = 0;

    } else {
    $diff = date_diff($time_now, $deadline);
    
    // Приводит временной интервал к нужному формату
    $days_count = date_interval_format($diff, "%d %h");
    $arr = explode(" ", $days_count);
    $hours = floor($arr[0] * 24 + $arr[1]);
    };

    return $hours;
    
    };

?>