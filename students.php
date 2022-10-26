<?php
define("HEADER", "26.10.2022 Деканат");
$students = [
    "anton" => [
        "name" => "Антон",
        "mark" => 10,
        "olympiad" => true,
    ],
    "liza" => [
        "name" => "Лиза",
        "mark" => 9,
        "olympiad" => false,
    ],
    "artur" => [
        "name" => "Артур",
        "mark" => 4,
        "olympiad" => false,
    ],
    "petya" => [
        "name" => "Петя",
        "mark" => 2,
        "olympiad" => false,
    ],
    "kira" => [
        "name" => "Кира",
        "mark" => 8,
        "olympiad" => true,
    ]
];

$messages = [
    "success" => "Мы вас благодарим за успехи в учебе.",
    "deduction" => "Мы отчисляем вас за то, что ваш балл слишком низкий.",
    "olympiad" => " Также мы вам вручаем премию за участие в олимпиаде!",
];
