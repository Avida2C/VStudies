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

/* -------------- IMPORTS -------------- */
//importing node.js package prompt-sync
const promt = require("prompt-sync")();


/* -------------- GLOBAL VARIABLES -------------- */

const ROWS = 3;
const COLS = 3;

/* -------------- OBJECTS -------------- */
const SYMBOLS_COUNT = {
    "A": 2,
    "B": 4,
    "C": 6,
    "D": 8
}
const SYMBOLS_VALUES = {
    "A": 5,
    "B": 4,
    "C": 3,
    "D": 2
}

/* -------------- FUNCTIONS -------------- */

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

const getBet = (balance, lines) => {
    while (true) {

        //Asking the user to input amount
        const bet = promt("Enter the bet per line: ");

        //Converting string to number
        const numberOfBet = parseFloat(bet);

        /*If the number isNaN (is Not a Number), check whether the input is a string... less than or equal to 0... 
        greater than the balance (the balance is divided by the amount of lines the user is beting on) */
        if (isNaN(numberOfBet) || numberOfBet <= 0 || numberOfBet > balance / lines) {
            console.log("Invalid amount to bet, try again.")
        } else {
            return numberOfBet;
        }
    }

}

const spin = () => {
    //the values in the array can be changed
    const symbols = [];
    for (const [symbol, count] of Object.entries(SYMBOLS_COUNT)) {
        for (let i = 0; i < count; i++) {
            symbols.push(symbol);
        }

    }

    const reels = [];
    for (let i = 0; i < COLS; i++) {
        reels.push([]);
        const reelSymbols = [...symbols];
        for (let j = 0; j < ROWS; j++) {
            const randomIndex = Math.floor(Math.random() * reelSymbols.length);
            const selectedSymbol = reelSymbols[randomIndex];
            reels[i].push(selectedSymbol);
            reelSymbols.splice(randomIndex, 1);

        }

    }
    return reels;
}

const transpose = (reels) => {
    const rows = [];

    for (let i = 0; i < ROWS; i++) {
        rows.push([]);
        for (let j = 0; j < COLS; j++) {
            rows[i].push(reels[j][i]);
        }
    }
    return rows;
}

const printRows = (rows) => {
    for (const row of rows) {
        let rowString = "";
        for (const [i, symbol] of row.entries()) {
            rowString += symbol
            if (i != row.length - 1) {
                rowString += " | "
            }
        }
        console.log(rowString);
    }
}

const getWinnings = (rows, bet, lines) => {
    let winnings = 0;
    for (let row = 0; row < lines; row++) {
        const symbols = rows[row];
        let allSame = true;

        for (const symbol of symbols) {
            if (symbol != symbols[0]) {
                allSame = false;
                break;
            }
        }
        if (allSame) {
            //console.log(bet);
            //console.log(SYMBOLS_VALUES[symbols[0]]);
            winnings += bet * SYMBOLS_VALUES[symbols[0]]
        }
    }
    return winnings;
}


/* -------------- FUNCTION CALL -------------- */

const game = () => {
    /* Calling the function: deposit
    This function will:
    1. Ask the user to input a number
    2. Convert the string to number
    3. Determine whether the input is a valid number (invalid: string, smaller than 0)
    4. If the number is not valid, the function will keep asking the user to enter a valid number
    5. The loop ends once the user inputs a valid number.
    */
    //the input in deposite will become the balance
    let balance = deposit();



    while (true) {
        console.log("You have a balance of $" + balance);
        /* Calling the function: getNumberOfLines
        This function will:
        1. Ask the user to input a number
        2. Convert the string to number
        3. Determine whether the input is a valid number (invalid: string, smaller than 0, or greater than 3)
        4. If the number is not valid, the function will keep asking the user to enter a valid number
        5. The loop ends once the user inputs a valid number.
        */
        const numberOfLines = getNumberOfLines();
        const bet = getBet(balance, numberOfLines);
        balance -= bet * numberOfLines;


        const reels = spin();
        const rows = transpose(reels);
        printRows(rows);

        const winnings = getWinnings(rows, bet, numberOfLines);
        balance += winnings;
        console.log('You won, $' + winnings.toString() + "!");

        if (balance <= 0) {
            console.log("You ran out of money!");
            break;
        }
        const playAgain = promt("Do you want to play again?(Y/N) ");

        if (playAgain != "y" && playAgain != "Y") break;

    }
}

game();