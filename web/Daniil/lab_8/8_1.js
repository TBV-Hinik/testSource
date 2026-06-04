// слишком много IF , много ходит
function isPrimeNumber(input) {
    if (typeof input == 'number') {
        let isPrime = true;
        if (input <= 1) {
            isPrime = false;
        } else {
            for (let j = 2; j < input; j++) {
                if (input % j == 0) {
                    isPrime = false;
                    break;
                }
            }
        }
        if (isPrime) {
            console.log(input + ' простое число');
        } else {
            console.log(input + ' не простое число');
        }
    }
    else if (input instanceof Array) {
        let simple = [];
        let notSimple = [];
        for (let i = 0; i < input.length; i++) {
            let num = input[i];
            let isPrime = true;
            if (typeof num != 'number') {
                console.log('Пропущено, не число: ' + num);
                continue;
            }
            if (num <= 1) {
                isPrime = false;
            } else {
                for (let j = 2; j < num; j++) {
                    if (num % j == 0) {
                        isPrime = false;
                        break;
                    }
                }
            }
            if (isPrime) {
                simple.push(num);
            } else {
                notSimple.push(num);
            }
        }
        let msg = '';
        if (simple.length > 0) {
            msg = simple.join(', ') + ' простые числа';
        }
        if (notSimple.length > 0) {
            if (simple.length > 0) {
                msg = msg + ', ';
            }
            msg = msg + notSimple.join(', ') + ' не простые числа';
        }
        console.log(msg);
    }
    else {
        console.log('Ошибка: параметр должен быть числом или массивом');
    }
}

console.log('--- Задание 1 ---');
isPrimeNumber(3);
isPrimeNumber(4);
isPrimeNumber([3, 4, 5]);
isPrimeNumber(['abc', 6, 7, 11]);
isPrimeNumber('abcd');