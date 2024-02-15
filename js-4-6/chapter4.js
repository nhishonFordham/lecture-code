// //conditional statements
//
// //1 == 2 is an expression, equates to a true or false
// console.log(1 == 2)
// console.log(1 == '1')
//
//
// //parenthesis enclose/encapsulate expressions
// // || this or that - will pass if either is true
// console.log((1 > 2) || (2 < 3))
//
// //and = if both are true
// console.log(true && false)

// console.log(
//   (
//     (true || false) && (true && true) || (true)
//   ) || (
//     true
//   )
// )


//conditional statements, if true do first block, etc
// if (1 > 2) {
//   console.log('true')
//
// } else if (1 < 4) {
//   console.log("if second condition is true")
// } else {
//   console.log('else run this')
// }

//switch
// switch('pinecone') {
//   case 'cat1':
//     // code block
//     break;
//   case 'pinecone':
//     console.log('found')
//     break;
//   default:
//     console.log('default')
//   // code block
// }

//ternary
// const ternaryValue = 1 > 2 ? 'true' : 'false';
// console.log(ternaryValue)

//type coercion

if(false == 0) {

}

if(false === 0) {

}


//truthy falsy gotchas
// if({}) {
//   console.log("empty object = true!")
// }
const emptyArray = []
//

// if ('0') {
//   console.log('true')
// } else {
//   console.log('false')
// }

//short circuit

// const firstValue = 'first value'
// const shortCircuit = (firstValue || nothing)
// //
// console.log(shortCircuit)


//loops

const cats = ['cat1', 'cat2', 'cat3']
// const consoleCats = function (cat) {
//   console.log
// }

//1. for
// for (let i = 0; i < cats.length; i++) {
//   console.log(cats[i])
// }


//2. forEach, takes a callback function and passes the current element to it
// cats.forEach(function(currentElement) {
//   console.log(currentElement)
// });

//3. for of
// for (const cat of cats) {
//   console.log(cat);
// }

//4. for in - iterates object properties
const catObject = {
  name: 'Pinecone',
  type: 'munchkin'
}
//
// for(const property in catObject) {
//   console.log(property)
//   console.log(catObject[property])
// }


//5. while
// let k = 0
// while (k < cats.length) {
//   console.log(cats[k]);
//   k++;
// }

//6. do while
// do {
//   console.log(cats[k])
//   k = k + 1;
// } while (k < 3);


//7. map - creates a new array from calling a function for every array element.

// const cats2 = cats.map(function (cat){
//   return 'new ' + cat
// })
//
// console.log(cats2)