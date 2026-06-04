function uniqueElements(arr) {
    let result = {};
    for (let i = 0; i < arr.length; i++) {
        let key = String(arr[i]);
        if (result[key]) {
            result[key] = result[key] + 1;
        } else {
            result[key] = 1;
        }
    }
    return result;
}

console.log('--- Задание 3 ---');
console.log(uniqueElements(['привет', 'hello', 1, '1']));