//the function defined in the closure(execution context) ‘remembers’ the environment in which it was created.
//we're closing off data from other execution contexts

// function numberGenerator() {
//   // Local “free” variable that ends up within the closure
//   var num = 1;
//   function checkNumber() {
//     console.log(num);
//   }
//   num++;
//   return checkNumber;
// }
//
// var number = numberGenerator();
// number(); // 2

//use closures to our advantage
function createCounter() {
  let count = 0;
  return function() {
    count += 1;
    return count;
  }
}
const counter1 = createCounter();
const counter2 = createCounter();
console.log(counter1()); // 1
console.log(counter1()); // 2
console.log(counter2()); // 1

//each function has its own internal context