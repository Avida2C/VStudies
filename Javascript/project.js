/* Project summary 
1. Deposit money
2. Determine number of lines to bet on
3. Collect bet amount
4. Spin the slot machine
5. Determine if the user won or not
6. Payout or take the bets
7. Replay
*/

//Use: 'CD D:\Studies\Javascript\Javascript' in terminal if the location is not correct

//importing node.js package prompt-sync
const promt = require("prompt-sync")();

//The following is a function work similarly to: function deposit () {}
const deposit = () => {
    //The function will keep looping until the user provides a valid amount
    while (true) {

        //Asking the user to input amount
        const depositAmount = promt("Enter a deposit amount: ");

        //Converting string to number
        const depositNumberAmount = parseFloat(depositAmount);

        //If the number isNaN (is Not a Number), check whether the input is a string... less than or equal to 0
        if (isNaN(depositNumberAmount) || depositNumberAmount <= 0) {
            console.log("Invalid deposit amount, try again.")
        } else {
            return depositNumberAmount;
        }
    }
}


//The following is a function work similarly to: function deposit () {}
const getNumberOfLines = () => {
    //The function will keep looping until the user provides a valid amount
    while (true) {

        //Asking the user to input amount
        const lines = promt("Enter the number of lines to bet on (1-3): ");

        //Converting string to number
        const numberOfLines = parseFloat(lines);

        //If the number isNaN (is Not a Number), check whether the input is a string... less than or equal to 0... greater than 3
        if (isNaN(numberOfLines) || numberOfLines <= 0 || numberOfLines > 3) {
            console.log("Invalid number of lines, try again.")
        } else {
            return numberOfLines;
        }
    }
}

/* Calling the function: deposit
This function will:
1. Ask the user to input a number
2. Convert the string to number
3. Determine whether the input is a valid number (invalid: string, smaller than 0)
4. If the number is not valid, the function will keep asking the user to enter a valid number
5. The loop ends once the user inputs a valid number.
*/

const depositAmount = deposit();

/* Calling the function: getNumberOfLines
This function will:
1. Ask the user to input a number
2. Convert the string to number
3. Determine whether the input is a valid number (invalid: string, smaller than 0, or greater than 3)
4. If the number is not valid, the function will keep asking the user to enter a valid number
5. The loop ends once the user inputs a valid number.
*/
const lines = getNumberOfLines();