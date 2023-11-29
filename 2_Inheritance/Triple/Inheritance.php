<?php

declare(strict_types=1);
require_once 'University.php';
require_once 'Teacher.php';

$University1 = new University("Boston State University", "Boston, MA", "123456");
$teacher1 = new Teacher("Jane", 25, "English",$University1);

$University1->University_Info();
$teacher1->University_Info();
$teacher1->Teacher_Info();
