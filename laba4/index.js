function retEvenElements(arr) {
  let result = [];

  arr.forEach((el, index) => {
    if ((index + 1) % 2 === 0) result.push(el);
  });

  return result;
}

console.log(retEvenElements([1, 2, 3, 4, 5, 6]));
