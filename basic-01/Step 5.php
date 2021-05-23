<?php

$course_name = "Rust, the language of no bugs";
$enrolled_students = 20;
$price = 39.99;
$on_discount = false;
echo "Course name: $course_name </br>";
echo "Enrolled students: $enrolled_students</br>";
echo "Price: $price $ USD</br>";
$on_discount ? $on_discount='Yes' : $on_discount='No';
echo "There is a discount ? $on_discount"
?>