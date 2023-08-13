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

        //If the user inputs a string or a number less or equal to 0, it will tell the user that it is an invalid amount
        if (isNaN(depositNumberAmount) || depositNumberAmount <= 0) {
            console.log("Invalid deposit amount, try again.")
        } else {
            return depositNumberAmount;
        }
    }
}

//calling the function deposit
//this function will display the valid amount provided by the user and concludes the loop
const depositAmount = deposit();
console.log(depositAmount);

