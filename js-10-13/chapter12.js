const cats = [
    {
        name: 'Lilly',
        available: true
    },
    {
        name: 'Daisy',
        available: true
    },
    {
        name: 'Sophie',
        available: false
    },{
        name: 'Pinecone',
        available: true
    }
]

//imperative
//code that tells how to do something

// const filtered = []
// for (let i = 0; i < cats.length, i++) {
//     if (cats[i].available) {
//         filtered.push(cats[i])
//     }
// }

// Create a result collection, odds
// Step through each number in the arr
// Check the number, if it's odd, add it to the results


//declarative/functional
//write what you want to do, without saying how
// const filtered = cats.filter(function (cat) {
//     return cat.available === true
// })

//Give me all available cats, not "Step through the collection. Check this item, if it's odd, add it to a result collection."

//in javascript we can write it either way

//but the functional/declarative approach benefits should be pretty clear
//this paradigm results in shorter code that is more easily read, understood, and audited


//searching
const stringArray = [
    'Pinecone',
    'Lily',
    'Luna'
]
//
// //imperative'ish way
// const pineconeIndex = stringArray.indexOf('Pinecone')
//
// //functional way
// const result = cats.find(arrayItem => {
//     return obj.name === 'Pinecone'
// })

//sorting

//imperative'ish way - mutate the array
// stringArray.sort()
// console.log(stringArray)

//A function that defines a sort order. The function should return a negative, zero, or positive value, depending on the arguments
//we need to tell it how to treat something as bigger than the other

//more functional, give us a new sorted array
const sortedArray = cats.toSorted((a, b) => a.name > b.name ? 1 : -1)
console.log(sortedArray)