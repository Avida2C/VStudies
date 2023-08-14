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

//To create an error message 
console.error("Too fucking late, you're now gone, and I mean DEAD GONE!");

//-------------- Some Interesting shit --------------

//ID Header : string changed to Nadine Vidal
document.getElementById("header").innerHTML = "Hello... welcome to your on going notes...";

//input box value changes
document.getElementById("inputBox").value = "Box";
//show inputBox value in console
console.log(document.getElementById("inputBox").value);

/* 
== : will check the value of the variables
=== : will check the value and the type of the variables
!= : will check if the value is not equal to the other
!== : will check if the value and the type of the variables are NOT the same
*/

/* 
&& : And
|| : Or
< : Less than
> : More than
= : Equal to
*/

function changeImg() {
    document.getElementById("changeImg").src = "img/flowers.jpg";
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