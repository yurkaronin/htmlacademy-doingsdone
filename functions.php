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

  // $date - дата закрытия торгов по лоту 
  // $res - функция возвращает массив 
  
  function get_dt_range($date) {

    date_default_timezone_set('Europe/Moscow');


    

    // $ny_date = strtotime("01.01.2222");

    if($cur_date < $final_date) {
      $hours = 0;
      print "Всё!";
    } else {
      $diff = date_diff($final_date, $cur_date);
      $format_diff = date_interval_format($diff, "%d %H %i");
      $arr = explode(" ", $format_diff);
      $hours = $arr[0] * 24 + $arr[1] + (intval($arr[2] / 60));
      $hours = $hours + $minutes;
      print($hours);
    }

    return $hours;
  };
?>