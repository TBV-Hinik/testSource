console.log('--- Задание 5 ---');
const users = [
    { id: 1, name: "Alice" },
    { id: 2, name: "Bob" },
    { id: 3, name: "Charlie" }
];
const userNames = users.map(function(user) {
    return user.name;
});

console.log(userNames);