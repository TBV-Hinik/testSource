function countVowels(str) {
    let vowels = "аеёиоуыэюяАЕЁИОУЫЭЮЯ";
    let count = 0;
    for (let i = 0; i < str.length; i++) {
        if (vowels.indexOf(str[i]) != -1) {
            count++;
        }
    }
    return count;
}

console.log('--- Задание 2 ---');
console.log('Гласных: ' + countVowels("Привет, мир!"));