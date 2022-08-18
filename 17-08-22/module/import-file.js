

console.log("I am import file");
//in main file import sum() AND name
// import{sum,name} from'./export-file';
import{sum,name} from'./export-file.js';
console.log(name);

function showModule(){
    document.write("hello");
    let add2=23;
    document.write(add2);//add is global variable outside a function that why
}
// import { name, sum } from './module.js';
// console.log(name);
// let add = sum(4, 9);
// console.log(add); // 13



