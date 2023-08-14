// My first in-line comment in my first javascript code!

console.log("Hello World");

/* 

This is a multi-line comment
I can literally write anything here!!!

*/

//Javascript variables are case sensitive

// var total is created but no value has been assigned which means that the value is undefined
var total;

// A value has been assignment to var number1 and number2 
var number1 = 5;
var number2 = 5;

total = number1 + number2;

console.log(total); //used to show the outcome

/* 
var - can be used throughout the program

let -can only be used within the scope where it has been created

const - is a variable that should NEVER be changed (changing the variables in a const will result in an error)
*/

/*
string variables require " "
eg.
var myName = "Nadine";
*/

//Declarations:
var myName;
var age;
var projectType;

//Assigning values
myName = "Nadine";
age = 28;
projectType = "Study";

console.log("Student: " + myName + ", " + age);
console.log("Project Type: " + projectType);

//Escape Character

//for the following statement it is necessary to use the character "\" before the end quote : var myStr = "I am a "double quoted" strong inside "double quotes"";
var myStr1 = "I am a \"double quoted\" strong inside \"double quotes\"";
//or
//using a single quote in the front, which will not require the \ symbol after each extra quotes in the string
var myStr2 = 'I am a "double quoted" strong inside "double quotes"';
//or
//this enables me to use both quote both is the single quote symbol and double quote symbol
var myStr3 = `'I am a "double quoted" strong inside "double quotes"'`;

console.log(myStr1);
console.log(myStr2);
console.log(myStr3);

/*      Code Output

\'      single Quote
\""     double quote
\\      backlash
\n      newline
\r      carriage return
\t      tab
\b      backspace
\f      form feed

*/

var myStr4 = "FirstLine\n\tSecondLine\nThirdLine";
console.log(myStr4);

var myStr5 = "I come first. \n\t" + "I come second.";
myStr5 += "\n\t\t" + myStr1;

console.log(myStr5);

var myStrLength = myStr5.length;
console.log("Your sentence is " + myStrLength + " spaces long.");

//programming languages do not start from 1, they start from 0, so the first letter is going to be 0, while the 2nd letter is 1.
var firstLetterOfTheStr5 = myStr5[0];
var lastLetterOfTheStr5 = myStr5[myStr5.length - 1];


console.log(firstLetterOfTheStr5); //this will display the first letter of the variable myStr5 which is 'I'
console.log(lastLetterOfTheStr5); //this will display the last letter of the variable myStr5 which is "


var helloWorld = "Jello World";

//helloWorld[0] = "H"; you cannot change the first letter of the sentence, but you can change the whole sentance as follows:  
helloWorld = "Hello World"; //this will change the text 


/* Mathematics 
+ is addition
- is subtraction
* is multiplication
/ is division
*/

var myVar = 0;
//the following statements provide the same outcome
myVar = myVar + 1;
myVar++; //this is also possible using --

//similar to whole numbers, decimal numbers are doable as well:
var myDecimalNumber = 1.5;

//to find the remainder, % is used
var remainder;
remainder = 11 % 3;


// += does the same thing as eg. e = e + 7; 
var c;
c += 4; // c -= 4;
// *= -= += /= can also be used 


/* Arrays */

var myArray1 = ["Nadine", 28];

console.log(myArray1);
//Nested Array 

var myArray2 = [
    ["Earth", 10],
    ["Mars", 15]
]; //2 element of Arrays in 1 Array

console.log(myArray2);

var myArray3 = [10, 20, 30];

var myDataArray3 = myArray3[0];
console.log(myDataArray3);

var myArray4 = [10, 20, 30, 40];
myArray4[1] = 80;

console.log(myArray4);


/* Statements 

< = less than
> = greater than
|| = or 
= = equal to
! = not
*/


/* Functions */

function welcomeAlert() {
    alert('Hi there~');
    alert('Welcome to the JavaScript study page, click OK to proceed and gain KNELEDGE!');
}

function wordBlanks(myNoun, myAdjective, myVerb, myAdverb) {
    var result = "";
    result += "The " + myAdjective + " " + myNoun + " " + myVerb + " to the store " + myAdverb + ".";

    return result;

}

/* Function Calls */

console.log(wordBlanks("dog", "big", "run", "quickly"));
console.log(wordBlanks("bike", "slow", "flew", "slowly"));

/* Conversion 
    parseFloat will convert string to number
*/