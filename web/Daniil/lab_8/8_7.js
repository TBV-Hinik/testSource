function generatePassword(length) {
    const lower = "abcdefghijklmnopqrstuvwxyz";
    const upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const digits = "0123456789";
    const special = "!@#$%^&*";
    const allChars = lower + upper + digits + special;
    let password = "";
    password = password + lower[Math.floor(Math.random() * lower.length)];
    password = password + upper[Math.floor(Math.random() * upper.length)];
    password = password + digits[Math.floor(Math.random() * digits.length)];
    password = password + special[Math.floor(Math.random() * special.length)];
    for (let i = 4; i < length; i++) {
        password = password + allChars[Math.floor(Math.random() * allChars.length)];
    }
    return password;
}

console.log('--- Задание 7 ---');
console.log('Пароль: ' + generatePassword(8));