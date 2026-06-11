<?php

/**
 * Возвращает правильное склонение для часов
 */
function getHoursDeclension(int $hours): string
{
    $hours = abs($hours);
    
    if ($hours % 10 === 1 && $hours % 100 !== 11) {
        return 'час';
    } elseif ($hours % 10 >= 2 && $hours % 10 <= 4 && ($hours % 100 < 10 || $hours % 100 >= 20)) {
        return 'часа';
    } else {
        return 'часов';
    }
}

/**
 * Возвращает правильное склонение для минут
 */
function getMinutesDeclension(int $minutes): string
{
    $minutes = abs($minutes);
    
    if ($minutes % 10 === 1 && $minutes % 100 !== 11) {
        return 'минуту';
    } elseif ($minutes % 10 >= 2 && $minutes % 10 <= 4 && ($minutes % 100 < 10 || $minutes % 100 >= 20)) {
        return 'минуты';
    } else {
        return 'минут';
    }
}

/**
 * Форматирует timestamp в человекочитаемый вид
 */
function formatPostedAt(int $timestamp): string
{
    $currentTime = time();
    $diff = $currentTime - $timestamp;
    
    if ($diff < 60) {
        return 'только что';
    } elseif ($diff < 3600) {
        $minutes = floor($diff / 60);
        return $minutes . ' ' . getMinutesDeclension($minutes) . ' назад';
    } elseif ($diff < 86400) {
        $hours = floor($diff / 3600);
        return $hours . ' ' . getHoursDeclension($hours) . ' назад';
    } else {
        return date('d.m.Y', $timestamp);
    }
}
?>