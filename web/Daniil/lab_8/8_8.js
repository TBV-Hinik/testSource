console.log('--- Задание 8 ---');
const numbers = [2, 5, 8, 10, 3];
const result = numbers
    .map(function(x) {
        return x * 3;
    })
    .filter(function(x) {
        return x > 10;
    });
console.log('Исходный массив:', numbers);
console.log('Результат:', result);