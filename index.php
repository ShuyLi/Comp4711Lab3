<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
<?php
include('Student.php');
$students = array(); 
$first = new Student(); $first->surname = "Doe"; $first->first_name = "John"; $first->add_email('home','john@doe.com'); $first->add_email('work','jdoe@mcdonalds.com'); $first->add_grade(65); 
$first->add_grade(75); $first->add_grade(55); $first->add_status('status','Senior');$students['j123'] = $first; 
  $second = new Student(); $second->surname = "Einstein"; $second->first_name = "Albert"; $second->add_email('home','albert@braniacs.com'); $second->add_email('work1','a_einstein@bcit.ca'); $second->add_email('work2','albert@physics.mit.edu'); $second->add_grade(95); $second->add_grade(80); $second->add_grade(50);$second->add_status('status','Freshman'); $students['a456'] = $second; 
  $third = new Student(); $third->surname = "Li"; $third->first_name = "Shuyu"; $third->add_email('home','shuyuli@doe.com'); $third->add_email('work','cka@qq.com'); $third->add_grade(85); $third->add_grade(70); $third->add_grade(85);$third->add_status('status','Sophomore'); $students['a789'] = $third; 
   $fourth = new Student(); $fourth->surname = "Gao"; $fourth->first_name = "Haiyu"; $fourth->add_email('home','haiyugao@doe.com'); $fourth->add_email('work','sdfs@qq.com'); $fourth->add_grade(85); $fourth->add_grade(70); $fourth->add_grade(85);$fourth->add_status('status','Junior'); $students['a101'] = $fourth; 
  ksort($students); 
foreach($students as $student) 
    echo $student->toString();
?> 
 
    </body>
</html>
