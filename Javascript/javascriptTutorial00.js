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