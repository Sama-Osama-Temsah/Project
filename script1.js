// ----------------------------
// VARIABLES + DATA TYPES
/*
------------------------------------------------------------
JavaScript Variables: Primitive vs. Reference Types
------------------------------------------------------------

1. Primitive Types (Value Types):
    --------------------------------
    These store the actual value directly in memory.
    When you copy a primitive variable, you copy the value itself.
    Changing one does NOT affect the other.

    Primitive Data Types:
    - Number       → 5, 3.14, -10
    - String       → "Hello", 'Hi'
    - Boolean      → true, false
    - Null         → intentional empty value
    - Undefined    → variable declared but not assigned
    - Symbol       → unique value (used for identities)
    - BigInt       → very large integers

   Example:
    let a = 10;
     let b = a;   // copies the value 10
     b = 20;      // changing b does NOT change a


2. Reference Types (Objects):
    --------------------------------
   These store a *reference* (address) to the value in memory.
    When you copy a reference variable, both variables point to
    the same object in memory.
    Changing one affects the other.

    Reference Data Types:
    - Object
    - Array
    - Function


    Example:
    let obj1 = { name: "Shaymaa"};
     let obj2 = obj1;   // obj2 references the same object
    obj2.name = "Sara"; 
     // Now obj1.name also becomes "Sara"


------------------------------------------------------------
    Creating Variables (Syntax)
------------------------------------------------------------

   // Modern & recommended:
   let variableName = value;        // changeable
   const variableName = value;      // cannot be reassigned


------------------------------------------------------------
*/

// ----------------------------
let studentName = "Sara";     // string (primitive)
let grades = [90, 80, 70];    // array (reference type)
const passingGrade = 50;      // const (primitive)

console.log("Student:", studentName);

// ----------------------------
// TYPE CONVERSION
// ----------------------------
let bonus = "10";
let convertedBonus = Number(bonus);// convert string → number



// ----------------------------
// IF / ELSE + LOGICAL OPERATORS
// ----------------------------


//strict equality:
var s = "3";
document.writeln(s==3);   //will print true
document.writeln(s===3);  //will print false


//Ternary operator
let status = (t>=100)?"boiling" : "not boiling";
// it is equivelant to this if statment

if(t>=100){
    state="boiling";
}else{
    state="not boiling";
}


let temp = 30;

if (temp >= 100) {
    console.log("boiling!");
} else if (temp >= 50 && temp < 100) {
    console.log("it is hot");
} else if (temp >= 35 && temp < 50) {
    console.log("it is warm");
} else {
    console.log("it is cold");
}

// ----------------------------
// SWITCH STATEMENT
// ----------------------------
let day = 3;

switch (day) {
    case 1:
    console.log("Saturday");
    break;
    case 2:
    console.log("Sunday");
    break;
    case 3:
    console.log("Monday");
    break;
    default:
    console.log("Unknown day");
}

// ----------------------------
// LOOPS (for, while, do…while)
// ----------------------------

// for loop → print grades
for (let i = 0; i < 5; i++) {
    console.log(i);
}

// while loop → count up to 3
let counter = 5;
while (counter <= 3) {
    console.log("still in the while loop");
    counter++;
}
console.log("finished the loop");

// do while → always runs once
let x = 5;
do {
    console.log("Do-While runs at least once");
} while (x < 3);
// Function that prints "welcome" to the console
function welcome(){
    console.log("welcome")
}

//the function won't be executed unless we call it
welcome()

// Calling the welcome function inside console.log
// The function prints "welcome" and returns undefined, so console.log prints undefined
console.log(welcome())

// Function that adds two numbers
// n1 and n2 have default values (4 and 5) if no arguments are passed
function add(n1=4,n2=5){
    var t = 2   // var: function scope
    let c = 1   // let: block scope
    var result = n1 + n2  // calculate the sum
    return result          // return the result
}

// Calling add(3,4) ā†’ output: 7(printing the call of a function will print the return)
console.log(add(3,4))

// Function expression stored in variable y
var y = function(){
    console.log("hi")
}

// Calling y: prints "hi"
y()

// Function that accepts another function as argument (first class citizen)
function callAnotherFn(Fn){
    console.log("call another function") // first message
    Fn()                                  // call the function passed
}

// Passing an anonymous function: prints "the other function"
callAnotherFn(function(){
    console.log("the other function")
})

// block scope example
for (let i = 0; i < 5; i++) {
  var u = 4  // var: accessible outside the loop
  let k = 5  // let: only inside the loop
  console.log(i) 
}


//var => not block scope, function scope
//let => block scope ,function scope

// u exists because var is function scoped
console.log(u) // output: 4

// console.log(k)    //error: undfined

// Array examples
var arr = [100,200,400,500,"name","major"]
console.log(arr)           // print full array
console.log(arr[4])        // print element at index 4  "name"
arr[1] = 300                // change element at index 1
console.log(arr)           // print updated array
console.log(arr.length)    // print number of elements
arr.pop()                  // remove last element
console.log(arr)
arr.push(800,900)          // add elements at the end
console.log(arr)
arr.splice(3,0,450)        // insert 450 at index 3
console.log(arr)
arr.shift()                // remove first element
console.log(arr)
arr.unshift(30)            // add element at the beginning
console.log(arr)

arr2 = [10,20,30,20,40]
console.log(arr2.indexOf(900))  // -1 (not found)
console.log(arr2.lastIndexOf(400)) // 4

var miniArr = arr2.slice(2,5)   // extract elements index 2 to 4
console.log(miniArr)

var arr3 = [1,2,3]
var arr4 = [5,6,7]
var newArr = arr3.concat(arr4)  // combine arrays
console.log(newArr)
console.log(arr2.reverse())     // reverse array

var strArr = ["array","string"]
var newString = strArr.join(" ") // join elements with space  "array string"
console.log(newString)
let person = {
    name:"shaymaa",
    age:25,
    welcome:function(){
        console.log("welcome "+this.name)
    }
}
person.welcome()


console.log(person.name)

person.name = "Ali"
console.log(person)

person.major = "cs"
console.log(person)

delete person.age
console.log(person)

console.log(Object.keys(person))
console.log(Object.values(person))
console.log(Object.entries(person))

let person2 = {}
Object.assign(person2,person,{job:"designer"})
console.log(person2)

function Person(name,age){
    this.name = name
    this.age = age
}

// console.log(person.prototype)

let obj = new Person("Mai",27)
console.log(obj.name)

let obj2 = new Person("Sara",30)

// let a = new Array(1,2,3)
// console.log(Array.prototype)

function Animal(name){
    this.name = name
}

Animal.prototype.speak = function(){
    console.log(this.name+" makes a sound")
}

console.log(Animal.prototype)

let a = new Animal("cat")
a.speak()

function Dog(name){
    Animal.call(this,name)
}

Dog.prototype = Object.create(Animal.prototype)

Dog.prototype.speak = function(){
    console.log(this.name+" barks")
}

let d = new Dog("puppy")
d.speak()

class Animal1{
    constructor(name){
        this.name = name
    }
    speak(){
       console.log(this.name+" makes a sound") 
    }
}

class Dog1 extends Animal1{
    constructor(name,type){
        super(name)
        this.type = type
    }
    getData(){
        console.log("the name and type are: "+this.name+" "+this.type)
    }
}

let an = new Animal1("cat")
an.speak()
let d1 = new Dog1("puppy","type")
d1.speak()
d1.getData()


let str = JSON.stringify(person)
console.log(str)

let obj4 = JSON.parse(str)
console.log(obj4)