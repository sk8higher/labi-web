// 1

let arr = [1, 2, 3, 4, 5];

arr.push(3, 2, 7);

console.log(arr.reverse());

// 2
let arr2 = [4, 2, 5, 19, 13, 0, 10];

let sumPow = 0;

for (let i = 0; i < arr2.length; i++) {
  sumPow += Math.pow(arr2[i], 2);
}

// let sumPow = arr2.reduce((acc, val) => acc + val * val, 0);
let sumSquare = Math.sqrt(sumPow);

console.log(sumSquare);

// 3
const str = "я учу javascipt!";
console.log(str.length);

// 4
const warStart = new Date(1939);
const timeNow = new Date().getFullYear();
const diff = timeNow - warStart;
console.log(diff);

// 5
const date = new Date();
const arr3 = [
  date,
  date.getFullYear(),
  date.getMonth() + 1,
  date.getDate(),
  date.getDay(),
  date.getHours(),
  date.getMinutes(),
  date.getSeconds(),
  date.getMilliseconds(),
];

arr3.forEach((el) => {
  console.log(el);
});
