'use strict'; // обзначает что пишем на стандарте ES6

let money = prompt("Ваш бюджет на месяц?"),
    time  = prompt("Введите дату в формате YYYY-MM-DD"),
    answerOne = prompt("Введите обязательную статью расходов в этом месяце"),
    answerTwo = prompt("Во сколько обойдется?");

let appData = {
    moneyNum: "",
    timeData: "",
    expenses: {},
    optionalExpenses: {},
    income: [],
    savings: false
};

appData.moneyNum = money;
appData.timeData = time;
appData.expenses['answer-one'] = answerOne;
appData.expenses['answer-two'] = answerTwo;

alert("Бюджет на 1 день: " appData.moneyNum/30);