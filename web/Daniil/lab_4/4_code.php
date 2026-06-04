<?php

function checkYear($year) {
    if (($year > 0) && ($year <= 30000)) {
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            return 'YES';
        }
        else {
            return 'NO';
        }
    }
    else {
        return 'Некорректный ввод: число меньше 0 или больше 30000';
    }
}

function checkNumber($digit) {
    if ($digit < 0 || $digit > 9) {
        return 'Некорректный ввод: нужно число от 0 до 9';
    }

    $digits = [
        0 => 'Ноль',
        1 => 'Один',
        2 => 'Два',
        3 => 'Три',
        4 => 'Четыре',
        5 => 'Пять',
        6 => 'Шесть',
        7 => 'Семь',
        8 => 'Восемь',
        9 => 'Девять'
    ];

    foreach ($digits as $key => $value) {
        if ($key == $digit) {
            return $value;
        }
    }
}

function getZodiac($date) {
    $day = 0;
    $month = 0;
    $year = 0;
    $temp = '';
    $ch = '';

    for ($i = 0; $i < strlen($date); $i++) { 
        $ch = $date[$i];

        if ($ch >= '0' && $ch <= '9') {
            $temp = $temp . $ch;
        }
        else {
            if ($day == 0 && $temp != '') {
                $day = (int)$temp;
            }
            else {
                 if ($month == 0 && $temp != '') {
                    $month = (int)$temp;
                }
                else {
                    if ($year == 0 && $temp != '') {
                        $year = (int)$temp;
                    }
                }
            }
            $temp = '';
        }
    }
    if ($year == 0 && $temp != '') {
        $year = (int)$temp;
    }
    
    if ($day == 0 || $month == 0 || $year == 0) {
        return 'Некорректный ввод, введите в формате ДД.ММ.ГГГГ';
    }
    if ($month < 1 || $month > 12) {
        return 'Месяц должен быть от 1 до 12';
    }
    if ($day < 1 || $day > 31) {
        return 'День должен быть от 1 до 31';
    }

    if ($month == 2) {
        if (checkYear($year) == 'YES') {
            if ($day > 29) {
                return 'В високосном году в феврале 29 дней';
            }
        }
        else {
            if ($day > 28) {
                return 'В невисокосном году в феврале 28 дней';
            }
        }
    }
    elseif ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
        if ($day > 30) {
            return 'В этом месяце не может быть больше 30 дней';
        }
    }
    
    if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) return 'Водолей';
    if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) return 'Рыбы';
    if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) return 'Овен';
    if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) return 'Телец';
    if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) return 'Близнецы';
    if (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) return 'Рак';
    if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) return 'Лев';
    if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) return 'Дева';
    if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) return 'Весы';
    if (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) return 'Скорпион';
    if (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) return 'Стрелец';
    if (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) return 'Козерог';

    return 'Неопределено';
}

function getLuckyTickets($start, $end) {
    if ($start < 1 || $start > 999999 || $end > 999999) {
        return 'Введите числа в диапазоне [000001, 999999]';
    }
    if ($start > $end) {
        return 'Начальное число должно быть меньше конечного';
    }

    $result = '';

    for ($ticket = $start; $ticket <= $end; $ticket++) {
        $firstHalf = (int)($ticket / 1000);
        $secondHalf = (int)($ticket % 1000);

        $sum1 = 0;
        $temp = $firstHalf;
        for ($i = 0; $i < 3; $i++) {
            $sum1 += $temp % 10;
            $temp = (int)($temp / 10);
        }

        $sum2 = 0;
        $temp = $secondHalf;
        for ($i = 0; $i < 3; $i++) {
            $sum2 += $temp % 10;
            $temp = (int)($temp / 10);
        }

        if ($sum1 == $sum2) {
            $result = $result . $ticket . '<br>';
        }
    }

    if ($result == '') {
        return 'Нет счастливых билетов';
    }

    return $result;
}

function factorial($num) {
    if ($num < 0) {
        return 'Число не должно быть отрицательным';
    }

    if ($num <= 1) {
        return 1;
    }

    return $num * factorial($num - 1);
}

function calculateRPN($expression) {
    $stack = array();
    $num = '';
    $len = strlen($expression);

    for ($i = 0; $i < $len; $i++) {
        $ch = $expression[$i];

        if ($ch >= '0' && $ch <= '9') {
            $num .= $ch;
        }
        elseif ($ch == ' ') {
            if ($num != '') {
                if ((int)$num > PHP_INT_MAX || (int)$num < PHP_INT_MIN) {
                    return 'Число превышает допустимое значение';
                }
                $stack[] = (int)$num;
                $num = '';
            }
        }
        elseif ($ch == '+' || $ch == '-' || $ch == '*') {
            if ($num != '') {
                if ((int)$num > PHP_INT_MAX || (int)$num < PHP_INT_MIN) {
                    return 'Число превышает допустимое значение';
                }
                $stack[] = (int)$num;
                $num = '';
            }

        if (count($stack) < 2) {
            return 'Недостаточно чисел для операции';
        }

            $b = array_pop($stack);
            $a = array_pop($stack);

            if ($ch == '+') {
                $result = $a + $b;
            }
            elseif ($ch == '-') {
                $result = $a - $b;
            }
            elseif ($ch == '*') {
                $result = $a * $b;
            }

            $stack[] = $result;
        }
        else {
            return "Недопустимый символ: '$ch' ";
        }
    }

    if (count($stack) != 1) {
        return 'Некорректное выражение';
    }
    return $stack[0];
}