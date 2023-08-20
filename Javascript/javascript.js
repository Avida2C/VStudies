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
== equal to
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



/* 
<h1> Hello </h1>
can be written using JavaScript:
*/
//document.write("<h1> Hello! </h1>");

//-------------- Console Log (f12) --------------
//To Write a message
console.log("Hello");

//To Create a warning message 
console.warn("Your shit is on fire...");
//console.warn("WARNING: Fart incoming!");

//To create an error message 
console.error("Too fucking late, you're now gone, and I mean DEAD GONE!");
//console.error("ERROR: Oops... it was more than just a fart...");

//-------------- Some Interesting shit --------------

/*ID Header : string changed to Nadine Vidal -this has been removed-
document.getElementById("header").innerHTML = "Hello... welcome to your on going notes...";


input box value changes -this has been removed-
document.getElementById("inputBox").value = "Box";
//show inputBox value in console
console.log(document.getElementById("inputBox").value);


== : will check the value of the variables
=== : will check the value and the type of the variables
!= : will check if the value is not equal to the other
!== : will check if the value and the type of the variables are NOT the same



&& : And
|| : Or
< : Less than
> : More than
= : Equal to
*/

function changeImg() {

    imageSource = document.getElementById("changeImg").src;

    if(imageSource.includes ("img/card-back.jpg"))
    {
        document.getElementById("changeImg").src = ("img/flowers.jpg");
    }
    else if  (imageSource.includes ("img/flowers.jpg"))
    {
        document.getElementById ("changeImg").src = ("img/tulips.jpg");
    }
    else if  (imageSource.includes ("img/tulips.jpg"))
    {
        document.getElementById ("changeImg").src = ("img/butterfly.jpg");
    }
    else
    {
        document.getElementById("changeImg").src = ("img/card-back.jpg");
    }
     
}


function red() {
    //display text in console
    console.log("Red");
    //changes text to "red"
    document.getElementById("colourChangeText").innerHTML = "Red";
    //changes color text to red
    document.getElementById("colourChangeText").style.color = "red";
}

function green() {
    //display text in console
    console.log("Green");
    //changes text to "green"
    document.getElementById("colourChangeText").innerHTML = "Green";
    //changes color text to green
    document.getElementById("colourChangeText").style.color = "green"
}

function blue() {
    //display text in console
    console.log("Blue");
    //changes text to "blue"
    document.getElementById("colourChangeText").innerHTML = "Blue";
    //changes color text to blue
    document.getElementById("colourChangeText").style.color = "blue";
}

function btnClick() {
    var text = document.getElementById("userInput").value;
    textToLow = text.toLowerCase();

    document.getElementById("myText").style.color = textToLow;
    if (textToLow != document.getElementById("myText").style.color) {
        document.getElementById("myText").style.color = "black";
    }

    /*does the same thing as the previous code, difference is: 
    it is much more limited due to the if and else statements*/

    /*if (text === "red") {
        document.getElementById("myText").style.color = ("red");
    }
    else if(text === "green"){
        document.getElementById("myText").style.color = ("green");
    }
    else if(text === "blue")
    {
        document.getElementById("myText").style.color = ("blue");
    }
    else
    {
        document.getElementById("myText").style.color = ("black");*/
}

/* The Switch method is similar to if, if else and else statements, 
but it is much easier to use and read */

function guestButton() {
    var guestColor = document.getElementById("guestInput").value;
    guestOutput = guestColor.toLowerCase();

    console.log(guestOutput);

    switch (guestOutput) {
        case "red":
            document.getElementById("guestText").style.color = "red";
            break;
        case "green":
            document.getElementById("guestText").style.color = "green";
            break;
        case "blue":
            document.getElementById("guestText").style.color = "blue";
            break;
        default:
            document.getElementById("guestText").style.color = "black";
    }
}


function checkAgeCalculator() {
    var stringAge = document.getElementById("inputAge").value;
    numAge = parseInt(stringAge);

    if (numAge != isNaN, numAge <= 17) {
        document.getElementById("ageResult").innerHTML = "Not Adult";
    } else if (numAge != isNaN, numAge >= 18, numAge <= 89) {
        document.getElementById("ageResult").innerHTML = "Is Adult";
    } else if (numAge >= 90) {
        document.getElementById("ageResult").innerHTML = "Accient!";
    } else {
        document.getElementById("ageResult").innerHTML = "Incorrect!";
    }

}

function counterLoop() {
    var i = 0;
    while (i <= 15) {
        i++;
        console.log(i);
        document.getElementById("counterLoop").innerHTML += i + " ";
        if (i == 10) {

            break;

        }

    }

}

function whileArray() {
    var loopArray = [];
    var i = 0;

    while (i <= 50) {
        loopArray.push(i);
        i++;
    }
    document.getElementById("whileArray").innerHTML = loopArray;

}

var thumbnailInterval;

function thumbnailTest()
{ 
    

    thumbnailInterval = setInterval(() => {

        var imageSource = document.getElementById("thumbnailTest").src;

        if(imageSource.includes ("img/flowers.jpg"))
        {
            document.getElementById("thumbnailTest").src = "img/card-back.jpg";
        }
        else if(imageSource.includes("img/card-back.jpg") )
        {
            document.getElementById("thumbnailTest").src = "img/tulips.jpg";
        }
        else if(imageSource.includes("img/tulips.jpg"))
        {
            document.getElementById("thumbnailTest").src = "img/butterfly.jpg";
        }
        else
        {
            document.getElementById("thumbnailTest").src = "img/flowers.jpg";
        }
              
    }, 600);

}
   
function thumbnailDefault()
{
    clearInterval(thumbnailInterval);

    document.getElementById("thumbnailTest").src = "img/card-back.jpg";

}