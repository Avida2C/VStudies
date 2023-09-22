<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VStudies - PHP</title>

    <!-- Style Sheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

</head>

<body>
    <?php require_once 'header.php'; ?>

    <div class="wrapper">
        <div class="w-100 pt-4">


                <div class="pb-3">
                    <h3>PHP: Hypertext Pre-processor </h3>
                    <p>
                    A scripting language that is especially suited for web development which runs on the server side
                    meaning; it must be on a server in order to function.
                    Unlike HTML, CSS and Javascript which run on the client side.
                </p>
                <p>
                    The code can be easily embedded into HTML, as for the code, since the code is executed on the
                    server,
                    the code is hidden.
                    PHP (server) > HTML (client).
                </p>
                <p>
                    PHP is a loose language, one of the easiest programming languages. Although the code may be badly
                    coded,
                    it can still function.
                    It may cause the lack of security due to inexperience.
                </p>
            </div>
            <div class="container pt-4 introStyle">
                <h2>
                    Is PHP dead?
                </h2>
                <p>
                    78% of websites use PHP. While Python is used about 2% for websites.
                    Disliking PHP does not mean PHP is dead.
                </p>
                <p>
                    Websites such as Facebook, Wikipedia and WordPress use PHP.
                </p>
                <p>
                    PHP is constantly improving and updating.
                </p>
            </div>
            <div class="container pt-4 introStyle">
                <h2>Outcomes:</h2>
                <ul>
                    <li>Learning how to program the PHP.</li>
                    <li>Learning how to manipulate databases.</li>
                    <li>Learning how to protect your website using PHP.</li>
                </ul>
            </div>
            <div class="container py-4 introStyle">
                <h2>Requirements</h2>
                <ul>
                    <li>
                        HTML
                    </li>
                    <LI>
                        JavaScript (recommended)
                    </LI>
                    <li>
                        Local Server (XAMPP)
                    </li>
                </ul>
                </div>
            </div>
            <div class="pb-3">
                <div class="container">
                <h1>PHP Basics and Fundamentals</h1>

                <div class="pt-4">
                    <h2>Showing Words</h2>

                    <div class="d-flex mt-5 previewStyling">
                        <div class="col">
                            <?php 
                    echo "This is written with PHP."; 
                    ?>
                        </div>
                        <div class="col">
                            <p>This is written with HTML.</p>
                        </div>
                    </div>


                    <div class="d-flex codeStyling">
                        <div class="col">

                            <H2>PHP</H2>
                            <p>
                                &lt;?php
                                <br> echo "This is written with PHP.";
                                <br> ?>
                                <br>
                            </p>
                            <p> 'echo' is used to to display data onto the screen.
                                <br> PHP works between &lt;?php and ?>.
                                <br> PHP does not work beyond ?>.
                            </p>
                        </div>
                        <div class="col">
                            <h2>HTML</h2>
                            <p>
                                &lt;p> This is written with HTML.&lt; /p>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

</div>
<div class="container">
            <h3>Comments</h3>
            <p>
                /*This is a multi-line comment
                hehe! */
                <br>
                //This is a single-line comment
            </p>
        </div>

        <div class="container pt-4">
            <h2>HTML Escape</h2>

            <div class="d-flex pt-5">
                <div style="padding-left: 2em;" class="w-50 ">
                    <h2>No Escape</h2>
                    <?php
                                echo "<p> This can be used as a paragraph </p>"; 
                                ?>
                </div>

                <div class="w-50">
                    <h2>HTML Escape </h2>
                    <?php if (1 == 1) { ?>
                    <p> This is an <?php echo "awesome"?> paragraph </p>
                    <?php } ?>
                </div>
            </div>
            <div class="d-flex codeStyling">
                <div class="w-50">
                    <p>
                        &lt;?php
                        <br> echo "This is written with PHP.";
                        <br> ?>
                        <br>
                    </p>
                    <p>
                        Without escaping HTML, which can be a bit messy due to the PHP not reading the HTML
                        tags.
                    </p>

                </div>
                <div class="w-50">
                    <p>
                        &lt;?php if (1 == 1) { ?>
                        <br> &lt;p>
                        <br> This is an &lt;?php echo "awesome"?> paragraph
                        <br> &lt;/p>
                        <br> &lt;?php} ?>
                    </p>
                    <p>HTML Escape is optimal way to code HTML and PHP together.</p>
                </div>
            </div>

            <div class="container">
                <h2>Data Types</h2>
                <h3> Scalar (Contain Singular values)</h3>
                <table class="tableStyle">
                    <tr>
                        <th>
                            <h3>Type</h3>
                        </th>
                        <th>
                            <h3>Code</h3>
                        </th>
                        <th>
                            <h3>Definition</h3>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Variable
                        </th>
                        <th>
                            $nameOfVariable "value" / number
                        </th>
                        <th>
                            <p> a data item which holds one or more data values. </p>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            CONST
                        </th>
                        <th>
                            CONST PI = 3.14;
                        </th>
                        <th>
                            <p>an unchangable data type which must be declared rightaway (value given when
                                created)
                                names in CONST should be capitalized </p>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            String
                        </th>
                        <th>
                            $myName = "Nadine";
                        </th>
                        <th>
                            <p>can use either " or ' . especially when it is needed to use either ' or "
                                they
                                will cancel each other when used eg: echo "STRING it's"; </p>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Integer
                        </th>
                        <th>
                            $myAge = 28;
                        </th>
                        <th>
                            <p>Integer: you don't need to use " eg: echo 10; which will automatically been
                                read as an
                                integer.
                                <br> When adding " to numbers eg: echo "10"; will automatically become a
                                string data
                                type.
                                <br> Therefore 10 and "10" are not the same data type.</p>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Float
                        </th>
                        <th>
                            $objectID = 28.5;
                        </th>
                        <th>
                            <p>echo 10.2; echo 1000.222; </p>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Boolean
                        </th>
                        <th>
                            $havePet = true;
                        </th>
                        <th>
                            <p>true / false</p>
                        </th>
                    </tr>
                </table>

                <h3> Scalar (Contain Multiple values)</h3>
                <p> $array = array("Nadine", "Marry", "Lorainee");
                    <br> or
                    <br> $arrayNo2 = ["Nadine", "Marry", "Lorainee"];
                    <br> $arrayOutcome = implode($arrayNo2);
                    <br> echo $arrayOutcome;
                    <br>
                </p>

                <h3> Object Type </h3>
                <p>$objectType = new Car(); </p>

                <h3>Default Variable Creation</h3>
                <p><i>It is recommended to always assign values in the variables as it may cause errors.</i>
                    <br> $string = "";
                    <br> $int = 0;
                    <br> $bool = false;
                    <br> $array = [];
                    <br> $object = null;
                    <br>
                </p>
            </div>

            <div class="container">
                <h2>Superglobals/Pre-defined Variables</h2>
                <div>
                    <p>
                        &lt;?php
                        echo $_SERVER["DOCUMENT_ROOT"];
                        ?>
                        <br>
                        &lt;?php
                        echo $_SERVER["PHP_SELF"];
                        ?>
                        <br>
                        &lt;?php
                        echo $_SERVER["SERVER_NAME"];
                        ?>
                        <br>
                        &lt;?php
                        echo $_SERVER["REQUEST_METHOD"];
                        ?>
                    </p>
                </div>
                <table class="tableStyle">
                    <tr>
                        <th>
                            <h3>Name</h3>
                        </th>
                        <th>
                            <h3>Definition</h3>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $GLOBALS
                        </th>
                        <th>
                            used to access global variables from anywhere in the PHP script.
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $_SERVER
                        </th>
                        <th>
                            holds information about headers, paths, and script locations.
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $_REQUEST
                        </th>
                        <th>
                            used to collect data after submitting an HTML form.
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $_POST
                        </th>
                        <th>
                            used to collect form data after submitting an HTML form with method="post".
                            $_POST is also
                            widely used to pass variables.
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $_GET
                        </th>
                        <th>
                            used to collect form data after submitting an HTML form with method="get".
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $_FILES
                        </th>
                        <th>
                            used to associate array items that are uploaded through the HTTP POST method.
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $_ENV
                        </th>
                        <th>
                            used to access environment variables.
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $_COOKIE
                        </th>
                        <th>
                            used to access a cookie value.
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $_SESSION
                        </th>
                        <th>
                            used to temporarily store and make data accessible across all the website pages.
                        </th>
                    </tr>
                </table>
            </div>
            <div class="container pt-3">
                <h3>Arithmetic Operations</h3>
                <table class="tableStyle">
                    <tr>
                        <th>
                            <h3>Type</h3>
                        </th>
                        <th>
                            <h3>Code</h3>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Addition
                        </th>
                        <th>
                            $sum = $num1 + $num2;
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Subtraction
                        </th>
                        <th>
                            $sum = $num1 - $num2;
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Multiplication
                        </th>
                        <th>
                            $sum = $num1 * $num2;
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Division
                        </th>
                        <th>
                            $sum = $num1 / $num2;
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Finds the remainder
                        </th>
                        <th>
                            $sum = $num1 % $num2;
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Finds the Power of
                        </th>
                        <th>
                            $sum = $num1 ** $num2;
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Brakets are used to calculate the sum 1st
                        </th>
                        <th>
                            $sum = $num1 * ($num2 + $num3);
                        </th>
                    </tr>
                </table>
            </div>
            <div class="container pt-4">
                <h3>Assignment Operators</h3>
                <table class="tableStyle">
                    <tr>
                        <th>
                            <h3>Code</h3>
                        </th>
                        <th>
                            <h3>Similar</h3>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 += $num2;
                        </th>
                        <th>
                            $num1 = $num1 + $num2;
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 -= $num2;
                        </th>
                        <th>
                            $num1 = $num1 - $num2;
                        </th>
                    </tr>

                </table>
            </div>
            <div class="container pt-4">
                <h3>Comparison Operators</h3>
                <table class="tableStyle">
                    <tr>
                        <th>
                            <h3>Code</h3>
                        </th>
                        <th>
                            <h3>Definition</h3>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 == $num2;
                        </th>
                        <th>
                            are they equal to each other? (without the data type)
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 === $num2;
                        </th>
                        <th>
                            are they equal to each other? (including the data type)
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 != $num2;
                        </th>
                        <th>
                            are they NOT equal?
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 !== $num2;
                        </th>
                        <th>
                            are they NOT equal? (including the data type)
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 < $num2; </th> <th>

                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 > $num2;
                        </th>
                        <th>

                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 <= $num2; </th> <th>

                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 >= $num2;
                        </th>
                        <th>

                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 <=> $num2;
                        </th>
                        <th>
                            spaceship? if num1 is greater than num2 = 1, if equal = 0, if num2 is
                            greater than num1 = -1 (Mainly used to compare data)
                        </th>
                    </tr>

                </table>
            </div>
            <div class="container pt-4">
                <h3>Logic Operators</h3>
                <table class="tableStyle">
                    <tr>
                        <th>
                            Code
                        </th>
                        <th>
                            Similar
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 === 5 && $num2 === 10;
                        </th>
                        <th>
                            $num1 === 5 and $num2 === 10;
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 === 5 || $num2 === 10;
                        </th>
                        <th>
                            $num1 === 5 or $num2 === 10;
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h3>Code</h3>
                        </th>
                        <th>
                            <h3>Definition</h3>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            $num1 === 5 XOR $num2 === 10;
                        </th>
                        <th>
                            either one or the other can be true, if both true or both false = false
                        </th>
                    </tr>
                    <tr>
                        <th>
                            !$num1 === 5;
                        </th>
                        <th>
                            is statement false?
                        </th>
                    </tr>
                </table>
            </div>
            <div class="container pt-4">
                <h3>Increment/Decrement</h3>
                <p> ++$num1;
                    <br> //Adds 1 to the variable and output: 6
                    <br><br> $num1++;
                    <br> // Will output 6 after the number is echoed. the output will be: 5
                </p>
            </div>
            <div class="container pt-4 mb-5">
                <h3>String Operator</h3>
                <p>
                    $a = "Nadine";
                    <br> $b = "Vidal";
                    <br> $c = $a . " " . $b;
                    <br> '.' used to combine strings together
                    <br> <br> eg 2:
                    <br> $a = "My name ";
                    <br> $b = $a . "is Nadine!";
                    <br>
                </p>
            </div>
            <div class="container mb-5">
                <h3>Conditions and Control Structures</h3>
                <p>
                    $a = 2;
                    <br> $b = 4;
                    <br> $bool = true;
                    <br>
                    <br> $resultVar = match ($a){
                    <br> 1 => "Variable a is equal to one!",
                    <br> 2 => "Variable a is equal to two!",
                    <br> 3 => "Variable a is equal to three!",
                    <br><i> all conditions must have a comma at the end including the last condition. </i>
                    <br> 4, 5 => "Variable a is equal to four!",
                    <br> <i>using a comma between numbers stands for: 4 OR 3 OR 5 </i>
                    <br> default => "None is a match.",
                    <br> };
                    <br><i> this is similar to a variable... therefore it is important to close it. </i>
                </p>

                <h3>Switch Statement</h3>
                <p>
                    switch($a){
                    <br> case 1:
                    <br> echo "The first case is correct!";
                    <br> break;
                    <br> case 2:
                    <br> echo "The second case is correct!";
                    <br> default:
                    <br> echo "None of the conditions are true!";
                    <br> }
                </p>
                <h3>If, Else if, else statement</h3>
                <p>
                    if ($a < $b && !$bool) { <br> echo "First Condition is True!" ;
                        <br> }
                        <br> else if($a < $b && $bool) { <br> echo "Second Condition is True!" ;
                            <br> }
                            <br> else {
                            <br> echo "None of the conditions are true!";
                            <br> }
                </p>
            </div>
        </div>
        <div class="container my-5">
            <!-- Functions -->


            <?php
           echo "Hello World, PHP is working grand! Composer... All set! ";
      callMyName(); //calling the function callMyName.
     myArrayFunction(); //calling the function myArrayFunction.
    

        function callMyName()
    {

        echo "<br> Hello, I'm a function! ";
        $num01 = 5;
        echo $num01 . ": I'm a number!  <br>";
    }

    function myArrayFunction()
    {
        $newArray = [1,2, "sentence",4,5];
        print_r($newArray);
        echo "<br>";
        $newArray01 = ["key" => 1, "word" => "sentence"];
        print_r($newArray01["word"]); //shows the input in the keyword "word"
        //arrays start from 0 ... [0,1,2,3,4,5] = user input: [1,2,3,4,5,6]
    } 
    ?>

            <div class="container my-5">
                <!-- Loops tutorial -->
                <?php
                for ($i = 0; $i <= 100; $i++) 
                /* var is = 0, condition = if the var is not 100, do = var ++ 
                (add +1 to var) and run the code in the loop */
                {
                    echo $i . "&nbsp;"; //shows the number in the var i
                }
                echo "<br> For loop Complete 00! <br>";
                ?>


                <?php
                $arr = [1,2,3,4,5];
                $countMyArray = count($arr);

                for ($i = 0; $i < $countMyArray ; $i++)
                {
                    echo $arr[$i] . "&nbsp;";
                }
                echo "<br> For loop Complete 01! <br>";


                $arr02 = [1, 2, "some value", 4, 5,"hey", "yo"];
                
                foreach ($arr02 as $key => $value)
                {
                    echo $value . "&nbsp;";
                }

                echo "<br> Foreach loop Complete 02! <br>";

                $a = 1;

                while($a <= 10)
                {
                    echo $a . "&nbsp;";
                    $a++;
                }
                echo "<br> While loop Complete!";
                ?>

            </div>
<div>
    <h3>PHP Tutorials</h3>
    <div class="container pt-4">
        <div class="container pt-4">
            <div class="container">
                <h1>PHP Tutorial</h1>
                <div class="container pt-4">
                    <h1>Form</h1>

                    <form class="formStyle" action="includes/formHandler.php" method="post">
                        <!-- Post (will submit data but won't be visible) or Get (submit the data where it can be seen) method -->
                        <!-- If the data is going to remain on the same page: 
                    <form action ="<\?php echo $_SERVER["PHP_SELF"];?>" instead of "folder/file.php" (Not ideal to use this method as it is prone to hacking...) -->

                        <h2>Form:</h2>
                        <label for="firstname">First name:</label>
                        <input id="firstname" type="text" name="firstname" placeholder="First Name">
                        <p> </p>
                        <label for="lastname">Last name:</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Last Name">
                        <p> </p>
                        <label for="favouritepet">Favorite Pet:</label>
                        <select name="favouritepet" id="favouritepet">
                            <option value="none">None</option>
                            <option value="dog">Dog</option>
                            <option value="cat">Cat</option>
                            <option value="bird">Bird</option>
                        </select>
                        <p> </p>
                        <button type="submit">Submit</button>
                        <!-- On submit... the data from the form will be sent to formHandler --->
                    </form>

                    <div class="d-flex mb-5 mt-2 codeStyling">

                        <div class="w-50">
                            <H2>PHP</H2>
                            <p>
                                &lt;?php
                                <br> if($_SERVER["REQUEST_METHOD"] == "POST") {
                                <br> $firstName = htmlspecialchars($_POST["firstname"]);
                                <br> $lastName = htmlspecialchars($_POST["lastname"]);
                                <br> $favouritePet = htmlspecialchars($_POST["favouritepet"]);
                                <br>
                                <br> if(empty($firstName)) {
                                <br> header("Location: ../index.php");
                                <br> }
                                <br> else if(empty($lastName)) {
                                <br> header("Location: ../index.php");
                                <br> }
                                <br>
                                <br> echo "This is the data which the user has submitted:";
                                <br> echo "&lt;br>";
                                <br> echo $firstName;
                                <br> echo "&lt;br>";
                                <br> echo $lastName;
                                <br> echo "&lt;br>";
                                <br> echo $favouritePet;
                                <br>
                                <br> header("Location: ../index.php");
                                <br> }
                                <br>
                                <br> else {
                                <br> header("Location: ../index.php");
                                <br> } ?>
                            </p>
                        </div>

                        <div class="w-50">
                            <h2>HTML</h2>
                            <p>
                                &lt;form class="formStyle" action="includes/formHandler.php"
                                method="post">
                                <br> <br> &lt;h2>Form:&lt;/h2>
                                <br> <br> &lt;label for="firstname">First name:&lt;/label>
                                <br> &lt;input id="firstname" type="text" name="firstname"
                                placeholder="First
                                Name">
                                <br><br> &lt;p> &lt;/p>
                                <br><br> &lt;label for="lastname">Last name:&lt;/label>
                                <br> &lt;input id="lastname" type="text" name="lastname"
                                placeholder="Last
                                Name">
                                <br><br> &lt;p> &lt;/p>
                                <br> <br> &lt;label for="favouritepet">Favorite Pet:&lt;/label>
                                <br><br> &lt;select name="favouritepet" id="favouritepet">
                                <br> &lt;option value="none">None&lt;/option>
                                <br> &lt;option value="dog">Dog&lt;/option>
                                <br> &lt;option value="cat">Cat&lt;/option>
                                <br> &lt;option value="bird">Bird&lt;/option>
                                <br> &lt;/select>
                                <br> <br> &lt;p> &lt;/p>
                                <br><br> &lt;button type="submit">Submit&lt;/button>
                                <br> &lt;/form>
                            </p>
                        </div>

                        <div class="w-50">
                            <H2>CSS Properties</H2>
                            <p>
                                .formStyle {
                                <br> background-color: rgb(255, 0, 85);
                                <br> padding: 5em;
                                <br> font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande',
                                'Lucida
                                Sans
                                Unicode',
                                Geneva, Verdana, sans-serif;
                                <br> }
                                <br>
                                <br> .formStyle button {
                                <br> display: block;
                                <br> width: 20em;
                                <br> height: 3em;
                                <br> color: white;
                                <br> background-color: black;
                                <br> border: 0px;
                                <br> }
                                <br>
                                <br> .formStyle h2 {
                                <br> border-bottom: 3px solid rgb(255, 255, 255);
                                <br> width: 10em;
                                <br> }
                                <br>
                                <br> .formStyle input {
                                <br> width: 20em;
                                <br> height: 2em;
                                <br> border: 0px;
                                <br> display: block;
                                <br> margin-top: 1em;
                                <br> margin-bottom: 0.5em;
                                <br> }
                                <br>
                                <br> .formStyle label {
                                <br> display: block;
                                <br> font-size: 16px;
                                <br> font-weight: bold;
                                <br> }
                                <br>
                                <br> .formStyle p {
                                <br> border-bottom: 3px solid rgb(255, 255, 255);
                                <br> width: 20em;
                                <br> margin-top: 0.3em;
                                <br> }
                                <br>
                                <br> .formStyle select {
                                <br> width: 20em;
                                <br> height: 2em;
                                <br> border: 0px;
                                <br> }
                            </p>
                        </div>
                    </div>

                    <div class="container">
                        <h1>Calculator</h1>
                        <form class="formStyle" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                            method="post">
                            <input type="number" name="num01" placeholder="Input Number One" required>
                            <select name="operator">
                                <option value="add">+</option>
                                <option value="subtract">-</option>
                                <option value="multiply">*</option>
                                <option value="divide">/</option>
                            </select>
                            <input type="number" name="num02" placeholder="Input Number Two" required>
                            <button>Calculate</button>
                        </form>

                        <?php 
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    //Grab Data
                                    $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT); 
                                    //Sanitizing data input by filtering the input: INPUT POST method, the name of the input, how we want to sanitize the data (FLOAT/INT/STRING)
                                    $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
                                    $operator = htmlspecialchars($_POST["operator"]);
                                    //FILTER_SANITIZE_STRING is not recommended for operators since HTML 8 release. Therefore, using htmlspecialchars is ideal + superglobal

                                    //Error Handlers
                                    $errors = false;
                                    if(empty($num01) || empty($num02) || empty($operator)) {
                                        echo "<p> Fill in all Fields! </p>";
                                        $errors = true;
                                    }
                                    if (!is_numeric($num01) || !is_numeric($num02)) {
                                        echo "<p> Only write numbers! </p>";
                                        $errors = true;
                                    }
                                    //Calculate the numbers if no errors~
                                    if(!$errors) //!$errors == false
                                    {
                                        $value = 0;
                                        switch ($operator)
                                        {
                                        case"add":
                                            $value = $num01 + $num02;
                                            break;
                                        case"subtract":
                                            $value = $num01 - $num02;
                                            break;
                                        case"multiply":
                                            $value = $num01 * $num02;
                                            break;
                                        case"divide":
                                            $value = $num01 / $num02;
                                            break;
                                        default:
                                            echo "Something went wrong! </p>";
                                        }
                                        echo "<p> Result = " . 
                                        $value . "</p>";
                                    }
                                } ?>

                        <div class="d-flex mb-5 mt-2 codeStyling">
                            <div class="w-50">
                                <H2>PHP</H2>
                                <p>
                                    &lt;?php
                                    <br> if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    <br> $num01 = filter_input(INPUT_POST, "num01",
                                    FILTER_SANITIZE_NUMBER_FLOAT);
                                    <br> $num02 = filter_input(INPUT_POST, "num02",
                                    FILTER_SANITIZE_NUMBER_FLOAT);
                                    <br> $operator = htmlspecialchars($_POST["operator"]);
                                    <br>
                                    <br> //Error Handlers
                                    <br> $errors = false;
                                    <br> if(empty($num01) || empty($num02) || empty($operator)) {
                                    <br> echo "&lt;p> Fill in all Fields! &lt;/p>";
                                    <br> $errors = true;}
                                    <br><br> if (!is_numeric($num01) || !is_numeric($num02)) {
                                    <br> echo "&lt;p> Only write numbers! &lt;/p>";
                                    <br> $errors = true; }
                                    <br>
                                    <br> //Calculate the numbers if no errors found
                                    <br> if(!$errors) //!$errors == false {
                                    <br> $value = 0;
                                    <br> switch ($operator){
                                    <br> case"add":
                                    <br> $value = $num01 + $num02;
                                    <br> break;
                                    <br> case"subtract":
                                    <br> $value = $num01 - $num02;
                                    <br> break;
                                    <br> case"multiply":
                                    <br> $value = $num01 * $num02;
                                    <br> break;
                                    <br> case"divide":
                                    <br> $value = $num01 / $num02;
                                    <br> break;
                                    <br> default:
                                    <br> echo "Something went wrong! &lt;/p>";}
                                    <br> echo "&lt;p> Result = " .
                                    <br> $value . "&lt;/p>";
                                    <br> }} ?>
                                </p>
                            </div>

                            <div class="w-50">
                                <h2>HTML</h2>
                                <p>
                                    &lt;form class="formStyle" action="&lt;?php echo
                                    htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                    method="post">
                                    <br> <br> &lt;input type="number" name="num01" placeholder="Input
                                    Number
                                    One"
                                    required>
                                    <br> <br> &lt;select name="operator">
                                    <br> &lt;option value="add">+&lt;/option>
                                    <br> &lt;option value="subtract">-&lt;/option>
                                    <br> &lt;option value="multiply">*&lt;/option>
                                    <br> &lt;option value="divide">/&lt;/option>
                                    <br> &lt;/select>
                                    <br> <br> &lt;input type="number" name="num02" placeholder="Input
                                    Number
                                    Two"
                                    required>
                                    <br> &lt;button>Calculate&lt;/button>
                                    <br> &lt;/form>
                                </p>
                            </div>

                            <div class="w-50">
                                <H2>CSS Properties</H2>
                                <p>
                                    .formStyle {
                                    <br> background-color: rgb(255, 0, 85);
                                    <br> padding: 5em;
                                    <br> font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida
                                    Grande',
                                    'Lucida
                                    Sans
                                    Unicode', Geneva, Verdana, sans-serif;
                                    <br> }
                                    <br>
                                    <br> .formStyle button {
                                    <br> display: block;
                                    <br> width: 20em;
                                    <br> height: 3em;
                                    <br> color: white;
                                    <br> background-color: black;
                                    <br> border: 0px;
                                    <br> }
                                    <br>
                                    <br> .formStyle h2 {
                                    <br> border-bottom: 3px solid rgb(255, 255, 255);
                                    <br> width: 10em;
                                    <br> }
                                    <br>
                                    <br> .formStyle input {
                                    <br> width: 20em;
                                    <br> height: 2em;
                                    <br> border: 0px;
                                    <br> display: block;
                                    <br> margin-top: 1em;
                                    <br> margin-bottom: 0.5em;
                                    <br> }
                                    <br>
                                    <br> .formStyle label {
                                    <br> display: block;
                                    <br> font-size: 16px;
                                    <br> font-weight: bold;
                                    <br> }
                                    <br>
                                    <br> .formStyle p {
                                    <br> border-bottom: 3px solid rgb(255, 255, 255);
                                    <br> width: 20em;
                                    <br> margin-top: 0.3em;
                                    <br> }
                                    <br>
                                    <br> .formStyle select {
                                    <br> width: 20em;
                                    <br> height: 2em;
                                    <br> border: 0px;
                                    <br> }
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                
        </div>
    </div>





    <?php require_once 'footer.php'; ?>
    <!-- JavaScript linked-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Javascript/javascript.js"></script>

    <!-- SCRIPTS SECTION -->

</body>

</html>