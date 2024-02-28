//The differences between modules and scripts mostly come down to how it is loaded.
//
// If you load something as a module then the rules for modules (in particular those of scope) apply to it, and it you can import and export inside it.
//
// Using type="module" loads a resource as a module. Using import loads a resource as a module.

import {a, b, c} from './namedExport.js'
// import * as values from './namedExport.js'
import cube from "./defaultExport.js";

console.log(a)
console.log(b)
console.log(c)
// console.log(values)
console.log(cube(3))