'use strict';

console.log(leftBorderWidth); //переменная обьявлена но без занчения, undefined
// console.log(second); // вызовит ошоибку, переменной еще нет

//var уже существует до выполнения скрипта
var leftBorderWidth = 1; // объявляем и присваем значение переменной, имя может состоять из букв, цифр, символа доллора и нижнего подчеркивания, первый символ не должен быть цифрой, также нельзя использовать зарезервированные слова

//let будет видна только, когда до нее дойдет код, видна только в блоке с {}
let second = 2;


console.log(leftBorderWidth); // тут уже переменная имеет значение
console.log(second); // переменная тут уже создана и имеет значение

//Типы данных

var number = 1;
var string = "string";
var sym = Symbol();
var boolean = true;
null; // когда в коде чего то просто не существуюет
undefined; // обьект уже существует но не имеет значения
var obj = {}; // коллекция данных, набор разных типов, свойства и методы

let person = {
    name: "John",
    age: 25,
    isMarred: false
}

// общаращемся к объекту

console.log(person.name);
console.log(person["name"]);

let arr = ['one', 'two', 'three']; // массив, нумерация начинается с 0

console.log(arr[0]);

// let answer = confirm("Are u sure?");
// console.log(answer);

let answer = prompt("Are u 18?", "Yes");
console.log(typeof(arr));