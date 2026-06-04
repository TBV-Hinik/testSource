function mapObject(obj, callback) {
    let result = {};
    for (let key in obj) {
        result[key] = callback(obj[key]);
    }
    return result;
}

console.log('--- Задание 6 ---');
console.log(mapObject({ a: 1, b: 2, c: 3 }, function(x) { return x * 2; }));