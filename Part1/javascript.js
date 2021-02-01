
var mystr = "FirstLine\n\t\\SecondLine\nThirdLine";
var ourStr = "I come first" + "I come Second";

console.log(myStr);

var hi = 4;
var g = 3;
var sum = hi + g;
console.log(sum);
var ourStr = "I come first.";
ourStr += "I come second";
var anAdjective = "awesome!";
var firstNameLength = 0;
var firstName = "Ada";
firstNameLength = firstName.length;
lastLetteroffirstName = firstName[firstName.length-1];
var firstName = "adu";
var firstLetterofFirstName = firstName[0];
var myStr = "jello World";
myStr = "hello World";

function wordblanks(myNoun, myAdjective, myVerb, myAdverrb) {
    //Your code below this line
    var result = "";
    result += "The" + myAdjective + "" + myNoun + "" + myVerb + " to the store";
    //Your code above this line
    return result;
}
console.log(wordBlanks("dog", "big", "ran", "quickly"));
console.log(wordBlanks("bike", "slow", " ride", "hull"));

var myArray = [[1, 2, 3], [4, 5, 6], [7, 8, 9], [[10, 11, 12], 13, 14]];
var myData = myArray[0][0];
console.log(myData);//gives 1
myData = [2][1];
console.log(myData);
var ourArrat = ["stipmon", "5", "cat"];
ourArray.push(["happy", "joy"]);
var myArray = [["john", 23], ["cat", 2]];
myArray.push(["dog", 3]);
var ourArray = [1, 2, 3];
var removedFromarray = ourArray.pop();
//remove the last element from ourArray
var myArray = [["John", 23], ["cat", 2]];
var removedFromArray = myArray.pop();
console.log(myArray);
var ourArrat = ["stipmoson", "3", ["cat"]];
var removedFromOurArray = ourArray.shift();
//removed from array now equals "stipmoson" and ourArray now equals ["3",["cat"]]
var myArray = [["john", 23], ["dog", 3]];
myArray.shift();
myArray.unshift(["paul", 35]);
//it will remmoe first element and add paul array
var myList = [["cereal", 3], ["milk", 2], ["bananas", 3], ["juice", 2], ["eggs", 2]];
function ourResuableFuncction() {
    console.log("Heyya,World");
}
ourResuableFuncction();

function resuableFunction() {
    console.log("hi,World");

}
resuableFunction();

function ourFunctionWithArgs(a, b) {
    console.log(a - b);
}
ourFunctionWithArgs(10, 5);

function functionWihtArgs(a, b) {
    console.log(a + b);
}
var myGlobal;

function fun1() {  
    oopsGlobal = 5;
}
function fun2() {
    var output = "";
    if (typeof myGlobal != "undefined") {
        output += "myGlobal :" + myGlobal;
    }
    if (typeof oopsGlobal != "undefined") {
        output += "oopsGlobal:" + oopsGlobal;
    }
    console.log(output);
}
fun1();
fun2();

function myLocalScope() {
    var myVar = 5;
    console.log(myVar);
}
myLocalScope();
console.log(myVar);

var outerWear = "T-shirt";
function myoutfit() {
    var outerWear = "Sweater";
    return outerWear;
}
console.log(myoutfit());
function minusSeven(num) {
    return num - 7;
}
console.log(minusSeven(10));
//return 3

var sum = 0;
function addThree() {
    sum = sum + 3;
}
function addFive(){
    sum += 5;
}


var changed = 0;
function change(num) {
    return (num + 5) / 3;
}
changed = change(10);

function nextInline(arr, item) {
    arr.push(item);
    return arr.shift();
}
var testArr = [1, 2, 3, 4, 5];
console.log(("Before:" + JSON.stringify(testArr)));
console.log(nextInLine(testArr, 6));
console.log("After:" + JSON.stringify(testArr));

function welcomeToBooleans() {
    return true;
}
function ourIf(isTrue) {
    if (isTrue) {
        return "Yes";
    }
    return "false";
}
function trueOrFalse(wasThatTrue) {
    if (wasThatTrue) {
        return "Yes that was true";
    }
    return "No that was false";
}
console.log();

function testEqual(val) {
    if (val == 12) {
        return "Equal";
    }
    return "Not Equal";
}

function testStrict(val) {
    if (val) {
        return "Equal";
    }
    reutnr "Not Equal";
}
testStrict(10);

function compareEquality(a, b) {
    if (a === b) {
        return "Equal";
    }
    reutrn "Not Equal";
}
console.log(compareEquality(10, "10")); 

function testNotEqual(val) {
    if (val != 99) {
        return "NotEqual";
    }
    return "Equal";
}
function testStrictNotEqual(val) {
    if (val !== 17) {
         return "Not Equal"
    }
    return "Equal"
}
 
function testGreaterThan(val) {
    if (val > 100) {
        return "over 100";
    }
    if (val >= 10) {
        return "over 10";
    }
    else {
        return "10 or Under";
    } 
}
console.log(testGreaterThan(10));


var names = ["Hole-in-one!", "Eagle", "Birdie", "par", "Bogey", "Double Bogey",
    "hi"];
function golfScore(strokes, par) {
    if (strokes == 1) {
        return names[0]
    }
    else if (strokes >= par - 2) {
        return name[1];
    }
    else if (Strokes == par) {
        return name[1];
    }
    else if (strokes == par - 1) {
        return name[2];
    }
    else if (strokes == par + 1) {
        return name[4];
    }
    else if (strokes == par + 2) {
        return name[5];
    }
    else if (strokes == par + 3) {
        return naem[6];
    }
}
console.log(golfScore(5, 4));

function caseISwitch(val) {
    var answer = "";
    switch (val) {
        case 1:
            answer = "alpha";
            break;
        case 2:
            answer = "beta";
            break;
        case 3:
            answer = "gamma";
            break;
        case 4:
            answer = "delta";
            break;
    }
    break;
}

function switchOfStuff(val) {
    var answer = "";
    switch (val) {
        case "a":
            answer = "alphabet";
            break;
        case "b":
            answer = "bird";
            break;
        case "c":
            answer = "cat";
            break;
        default:
            answer = "stuff";
            break;
    }
}

function sequentialsizes(val) {
    var answer = "";
    switch (val) {
        case 1:
        case 2:
        case 3:
            answer = "Low";
            break;
        case 4:
        case 5:
        case 6:
            answer = "Mid";
            break;
        case 7:
        case 8:
        case 9:
            answer = "High";
            break;
    }
    return answer;
}

function chainToSwitch(val) {
    var answer = "";
    if (val === "bob") {
        answer = "Marley";
    }
    else if (val === 42) {
        answer = "The Answer";
    }
    else if (val === 1) {
        answer = "There is no #1";
    }
    else if (val === 99) {
        answer = "Missed me by this much!";
    }
    else if (val === 7) {
        answer = "Ate Night";
    }
}

function isLess(a, b) {
    if (a < b) {
        return true;
    }
    else {
        return false;
    }
}

console.log(isLess(10, 15));

function abTest(a, b) {
    if (a < 0 || b < 0) {
        return undefined;
    }
    return Math.round(Math.pow(Math.sqrt(a) + Math.sqrt(b), 2));

}
console.log(abTest(-2, 2));

var count = 0;
function cc(card) {
    switch (card) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            count++;
            break;
        case 10:
        case "J":
        case "Q":
        case "K":
        case "A":
            count--;
            break;
    }
    var holdbet = "Hold";
    if (count > 0) {
        holdbet = "Bet";
    }
    return count + " "+holdbet;
    return "Change Me";
}
cc(2); cc(3); cc(7); cc("k"); cc('A');

var ourDog = {
    "name": "Camper",
    "legs": 4,
    "tail": 1,
    "friends": ["everything"]
};
var hatValue = testObj["an entree"];

var ourDog = {
     name: "Camper",
    legs: 4,
    tails: 1,
    friends: ["everything!"]
};
ourDog.name = "Happy Camper";
// changes the Camper to happy camper
ourDog.bark = "verry Loud";
//adds bark to the our dog
delete ourDog.bark;

var myobj = {
    gift: "pony",
    pet: "kitten",
    bed: "sleigh",
};

function checkObj(checkProp) {
    if (myobj.hasOwnProperty(checkProp)) {
        return myObj[checkProp];
    }
    else { 
        return "Not Found";
    }
}

console.log(checkObj("gift"));
//gives pony
console.log(checkObj("hi"));

var myMusic = [
    {
        artist: "Billy Joel",
        title: "Piano Man",
        release_year: 1973,
        formats: [
            "CD",
            "8T",
            "Lp"
        ],
        gold: true
    },
    {
        artist: "Beau Cranes",
        title: "Cereal Man",
        release_year: 2004,
        formats: [
            "YouTube"
        ]
    }
];

var myStorage = {
    "car": {
        "inside": {
            "glove box": "maps",
            "passanger seat": "crumbs"
        },
        "outside": {
            "trunk": "Jack"
        }
    }
};
var gloveBoxContents = myStorage.car.inside["glove box"];
console.log(gloveBoxContents);


var myPlants = [
    {
        type: "flowers",
        list: [
            "rose",
            "tulip",
            "dandelion",
        ]
    },
    {
        type: "trees",
        list: [
            "fir",
            "pine",
            "birch",
        ]
    }
];

var secondTree = myPlants[1].list[1];
console.log(myPlants);

var colletction = {
    2548: {
        album: "slippery When Wet",
        artist: "Bon Jovi",
        tracks: [
            "Let it rocks",
            "you give love a bad namme"
        ]
    },
    2468: {
        album: "1999",
        artist: "Prince",
        tracks: [
            "1999",
            "Little Red Covette"
        ]
    },
    1245: {
        artist: "robert Palmer",
        tracks: []
    },
    5439: {
        album: "ABBA Gold"
    }
};

var collection = JSON.parse(Jason.stringify(collection));
function updateRecords(id, prop, value) {
    if (val === "") {
        delete collection[id][prop];
    }
    else if (prop === tracks) {
        collection[id][prop] = collection[id][prop] || [];
        colllection[id][prop].push(value);
    }
    else {
        collection[id][prop] = value;
    }

    return collection;
}
updateRecords(2468, "tracks", "test");
console.log(updateRecords(5438, "artist", "ABBa"));

var myArrays = [];
var i = 0;
while (i < 5) {
    myArray.push(i);
    i++;
}
console.log(myArray);

var ourArray = []
for (var i = 0; i < 5; i++){
    ourArray.push(i);
}
var myArray = [];

for (var i = 1; i < 6; i++){
    myArray.push(i);
}


var ourarray = [];
for (var i = 0; i < 10; i += 2){
    ourArray.push(i);
}

var myArray=[];
for (var i = 1; i < 10; i += 2){
    myArray.push(i);
}
console.log(myArray);

var ourArray = [];
for (vari = 10; i > 0; i -= 2){
    ourArray.push(i);
}
console.log(ourArray);
var myArray = [];
for (vari = 9; i > 0; i -= 2){
    myArray.push(i);
}

var ourArr = [9, 10, 11, 12];
var ourTotal = 0;
for (var i = 0; i < ourArr.length; i++){
    ourTotal += ourArr[i];
}
console.log(ourtotal);
var myArr = [2, 3, 4, 5, 6];
var total = 0;

for (var i = 0; i < myArr.length; i++){
    total += myArr[i];
}
console.log(total);


function multiplyAll(arr) {
    var product = 1;
    for (var i = 0; i < arr.lenght; i++){
        for (var j = 0; j < arr[i].lenght; j++){
            product *= arr[i][j];
        }
    }
    return product;
}
var product = multiplyAll([[1, 2], [3, 4], [5, 6, 7]]);
console.log(product);

do{
    myArray.push(i);
    i++;
} while (i < 5)
console.log(i, myArray);
function lookUpProfile(name, prop) {
    for (var i = 0; i < contacts.length){
        if (contacts[i].firstName === name) {
            return contacts[i][prop] || "No such property";
        }
    }

}
var vari
function random(vari) {

    return Math.floor(Math.random(vari)*10);
}

console.log(random(3));
var hi
function range(hi) {
    return Math.floor(Math.random() * (ourMax - ourMin + 1)) + ourMin;
}
ourRandomRange(1, 9);

function randomRange(myMin, myMax) {
    return Math.florr(Math.random()*(myMax-myMin+1)+ourMin);
}

var myRandom = randomRange(5, 15);
var str
function convetInt(str) {
    return parseInt(str);
}
webkitConvertPointFromNodeToPage("23323");

var int;
function con() {
    return parseInt(str, 2);
}
con("23");

function checkEqual(a, b) {
    return a === b ? true : false;

}
checkEqual(2, 5);

function checkSign(num) {
    return num > 0 ? "Positive" : num < 0 ? "negative" : "Zero";

}
console.log(checkSign(0));

let catName = "Quincy";
let  quote;

let catName = "Beau";

function catTalk() {
    "use strict";

    catName = "Oliver";
    quote = catName + "says Meow";
}

catTalk();

function checkScope() {
    "use strict";
    let i = "function scope";
    if (true) {
       let i = "block scope";
        console.log("Block scope i is : ", i);
    }
    console.log("function scope i is:", i);
    return i;
}

checkScope();

function printManyTimes(str) {
    "use strict";
    var senctence = str + " is cool!";
   const sentence = str + "is amazing!";

    for (let i = 0; i < str.length; i += 2){
        console.log(sentence);
    }
}

printManyTimes("freeCodeCamp");

const s = [5, 7, 2];
function editInPlace() {
    "use strict";
    s[0] = 2;
    s[1] = 5;
    s[2] = 7;
}

editInPlace();

function freezeObj() {
    "use strict";
    const Math_CONSTANTS = {
        PI: 3.14
    };

    Object.freeze(MATH_CONSTANTS);

    try {
        MATH_CONSTANTS.PI = 99;
    } CATCH(ex){
        console.log(ex);
    }
    return MATH_CONSTANTS.PI;
}

const PI = freezeObj();
console.log(PI);

const myconcat = (arr1, arr2) => arr1.concat(arr2);
console.log(myConcat([1, 2], [3, 4, 5]));

const realNumberArray = [4, 5.6, -9.8, 3.14, 42, 6, 8.34, -2];

const squarelList = (arr) => {
    const squaredIntegers = arr.filter
    return squaredIntegers;
};

const squaredIntegers = squareList(realNumberArray);
console.log(squaredIntegers);

const sum = (function () {
    return function sum(...args) {
        return args.reduce((a, b) => a + b, 0);

    };
})();
console.log(sum(1, 2, 3));
