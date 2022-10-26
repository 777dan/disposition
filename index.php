<?php
require("students.php");

foreach ($students as $key => $student_info) {
    // $str = "";
    $str = "\n\n" . HEADER . "\n";
    foreach ($student_info as $key1 => $info) {
        if ($key1 == "name") {
            $str .= "Уважаемый (ая) $info! ";
        }
        if ($key1 == "mark") {
            $student_info["mark"] <= 5 ? $str .= $messages["deduction"] : $str .= $messages["success"];
        }
        if ($key1 == "olympiad") {
            $student_info["olympiad"] == true ? $str .= $messages["olympiad"] : $str = $str;
        }
    }
    switch ($student_info["mark"]) {
        case $student_info["mark"] <= 5:
            $str .= " Вы не получаете стипендии, так как вы отчислены.";
            break;
        case $student_info["mark"] >= 6 and $student_info["mark"] <= 9:
            $str .= " Ваша стипендия - 100 грн.";
            break;
        case $student_info["mark"] >= 10:
            $str .= " Ваша стипендия - 500 грн.";
            break;
    }
    echo $str;
}
