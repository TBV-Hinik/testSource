<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab_4</title>
</head>
<body>
    <?php require 'D:\Web\web-2026\lab_4\4_code.php'?>
    <h3>1. Високосный год</h3>
    <form method="post">
        <input type="text" name="year" placeholder="Введите год" required>
        <input type="submit" name="submit_year" value="Проверить">
    </form>
    <p>
         <?php 
        if (isset($_POST['submit_year']) && isset($_POST['year'])) {
            echo checkYear($_POST['year']);
        }
        ?>
    </p>

    <h3>2. Цифра в слово</h3>
    <form method="post">
        <input type="text" name="digit" placeholder="Введите цифру (0-9)" required>
        <input type="submit" name="submit_digit" value="Проверить">
    </form>
    <p>
        <?php 
        if (isset($_POST['submit_digit']) && isset($_POST['digit'])) {
            echo checkNumber($_POST['digit']);
        }
        ?>
    </p>

    <h3>3. Знак зодиака</h3>
    <form method="post">
        <input type="text" name="date" placeholder="ДД.ММ.ГГГГ" required>
        <input type="submit" name="submit_zodiac" value="Проверить">
    </form>
    <p>
        <?php
        if (isset($_POST['submit_zodiac']) && isset($_POST['date'])) {
            echo getZodiac($_POST['date']);
        }
        ?>
    </p>

    <h3>4. Счастливые билеты</h3>
    <form method="post">
        <input type="text" name="startTicket" placeholder="Начальный номер (6 цифр)" required>
        <input type="text" name="endTicket" placeholder="Конечный номер (6 цифр)" required>
        <input type="submit" name="submit_tickets" value="Проверить">
    </form>
    <p>
        <?php
        if (isset($_POST['submit_tickets']) && isset($_POST['startTicket']) && isset($_POST['endTicket'])) {
            echo getLuckyTickets((int)$_POST['startTicket'], (int)$_POST['endTicket']);
        }
        ?>
    </p>

    <h3>5. Факториал</h3>
    <form method="post">
        <input type="text" name="num" placeholder="Введите число" required>
        <input type="submit" name="submit_factorial" value="Проверить">
    </form>
    <p>
        <?php
        if (isset($_POST['submit_factorial']) && isset($_POST['num'])) {
            echo factorial((int)($_POST['num']));
        }
        ?>
    </p>

    <h3>6. Обратная польская запись</h3>
    <form method="post">
        <input type="text" name="rpnExpression" placeholder="Введите выражение" required>
        <input type="submit" name="submit_rpn" value="Проверить">
    </form>
    <p>
        <?php
        if (isset($_POST['submit_rpn']) && isset($_POST['rpnExpression'])) {
            echo calculateRPN($_POST['rpnExpression']);
        }
        ?>
    </p>
</body>
</html>