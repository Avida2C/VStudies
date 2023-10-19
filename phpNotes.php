<?php
require "functions.php";

check_login();
?>

<?php require_once 'include/header.php';
    require_once 'include/navbar.php';?>

<div class="container d-flex justify-content-center p-5 col-md-8">
    <div class="row">
        <div class="col">

            <h3>PHP - Hypertext Pre-processor </h3>
            <p>
                A server-side scripting language, designed primarily for web development,
                operates exclusively on a server for its execution, as opposed to HTML, CSS, and JavaScript,
                which run on the client side. The code can be effortlessly incorporated into HTML because,
                since it is executed on the server, it remains concealed from the client side,
                illustrating the hierarchy of PHP (server) over HTML (client). PHP is known for its flexibility and
                is often considered one of the most user-friendly programming
                languages. Even if the code is poorly written, it can still execute. However, this leniency can lead
                to security vulnerabilities, particularly when handled by inexperienced developers.
            </p>
            <h4>Is PHP dead?</h4>
            <p>
                PHP is utilized by approximately 78% of websites, a significantly higher percentage compared to
                Python, which is employed by roughly 2% of websites. It's important to note that having a personal
                dislike for PHP does not imply that PHP is obsolete or no longer in use.

                Prominent websites like Facebook, Wikipedia, and WordPress rely on PHP for their functionality.
                Moreover, PHP continues to evolve and receive regular updates, ensuring its relevance and
                effectiveness in web development.
            </p>
            <h4>Outcomes</h4>
            <ul>
                <li>Acquiring proficiency in PHP programming.</li>
                <li>Mastering the art of database manipulation.</li>
                <li>Gaining expertise in safeguarding your website through PHP.</li>
            </ul>
            <h4>Requirements</h4>
            <ul>
                <li>HTML</li>
                <LI>JavaScript (recommended)</LI>
                <li>Local Server (XAMPP)</li>
            </ul>
        </div>

        <div id="basicsSection">
            <h3>PHP Basics and Fundamentals</h3>
            <!-------------------- Example ------------------------>
            <h4>Showing Words</h4>
            <div class="col mb-5">
                <table class="table table-striped-columns table-bordered">
                    <tr>
                        <td>
                            <?php 
                            echo "This is written with PHP."; 
                            ?>
                        </td>
                        <td>
                            <p>This is written with HTML.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            &lt;?php echo "This is written with PHP.";?>
                        </td>
                        <td>
                            &lt;p> This is written with HTML.&lt; /p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            'echo' is used to to display data onto the screen.
                            <br> PHP works between &lt;?php and ?>
                            <br> PHP does not work beyond ?>
                        </td>
                        <td>
                        </td>
                    </tr>
                </table>
            </div>


            <!--------------- Code --------------->
            <h4>Comments</h4>
            <p>
                /*This is a multi-line comment
                hehe! */
                <br>
                //This is a single-line comment
            </p>
            <h4>HTML Escape</h4>
            <div class="col mb-5">
                <table class="table table-striped-columns table-bordered">
                    <tr>
                        <td>
                            No Escape
                        </td>
                        <td>
                            HTML Escape
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo "<p> This can be used as a paragraph </p>";?>
                        </td>
                        <td>
                            <?php if (1 == 1) { ?><p> This is an <?php echo "awesome"?> paragraph </p><?php 
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            &lt;?php echo "This is written with PHP.";?>
                        </td>
                        <td>
                            &lt;?php if (1 == 1) { ?>
                            <br> &lt;p> This is an &lt;?php echo "awesome"?> paragraph &lt;/p>
                            <br>&lt;?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Without escaping HTML, which can be a bit messy due to the PHP not reading the HTML
                            tags.
                        </td>
                        <td>
                            HTML Escape is optimal way to code HTML and PHP together.
                        </td>
                    </tr>
                </table>

                <h4>Data Types</h4>
                <h5> Scalar (Contain Singular values)</h5>
                <div class="col mb-5">
                    <table class="table table-striped-columns table-hover table-bordered">
                        <tr>
                            <th>Type</th>
                            <th>Code</th>
                            <th>Definition</th>
                        </tr>
                        <tr>
                            <td>Variable</td>
                            <td>$nameOfVariable "value" / number</td>
                            <td>a data item which holds one or more data values.</td>
                        </tr>
                        <tr>
                            <td>CONST</td>
                            <td>CONST PI = 3.14;</td>
                            <td>an unchangable data type which must be declared rightaway (value given when created)
                                names
                                in CONST should be capitalized</td>
                        </tr>
                        <tr>
                            <td>String</td>
                            <td>$myName = "Nadine";</td>
                            <td>can use either " or ' . especially when it is needed to use either ' or " they will
                                cancel
                                each other when used eg: echo "STRING it's";</td>
                        </tr>
                        <tr>
                            <td>Integer
                            </td>
                            <td>$myAge = 28;</td>
                            <td>Integer: you don't need to use " eg: echo 10; which will automatically been read as an
                                integer.
                                When adding " to numbers eg: echo "10"; will automatically become a string data type.
                                Therefore 10 and "10" are not the same data type.</td>
                        </tr>
                        <tr>
                            <td>Float</td>
                            <td>$objectID = 28.5;</td>
                            <td>echo 10.2; echo 1000.222;</td>
                        </tr>
                        <tr>
                            <td>Boolean</td>
                            <td>$havePet = true;</td>
                            <td>true / false</td>
                        </tr>
                    </table>
                </div>

                <h4> Scalar (Contain Multiple values)</h4>
                <p> $array = array("Nadine", "Marry", "Lorainee");
                    <br> or
                    <br> $arrayNo2 = ["Nadine", "Marry", "Lorainee"];
                    <br> $arrayOutcome = implode($arrayNo2);
                    <br> echo $arrayOutcome;
                    <br>
                </p>

                <h4> Object Type </h4>
                <p>$objectType = new Car(); </p>

                <h4>Default Variable Creation</h4>
                <p><i>It is recommended to always assign values in the variables as it may cause errors.</i>
                    <br> $string = "";
                    <br> $int = 0;
                    <br> $bool = false;
                    <br> $array = [];
                    <br> $object = null;
                    <br>
                </p>

                <h4>Superglobals/Pre-defined Variables</h4>
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

                <div class="col mb-5 overflow-y-scroll" style="height:400px;">
                    <table class="table table-striped-columns table-hover table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Definition</th>
                        </tr>
                        <tr>
                            <td>$GLOBALS</td>
                            <td>used to access global variables from anywhere in the PHP script.</td>
                        </tr>
                        <tr>
                            <td>$_SERVER</td>
                            <td>holds information about headers, paths, and script locations.</td>
                        </tr>
                        <tr>
                            <td>$_REQUEST</td>
                            <td>used to collect data after submitting an HTML form.</td>
                        </tr>
                        <tr>
                            <td>$_POST</td>
                            <td>used to collect form data after submitting an HTML form with method="post". $_POST is
                                also
                                widely used to pass variables.</td>
                        </tr>
                        <tr>
                            <td>$_GET</td>
                            <td>used to collect form data after submitting an HTML form with method="get".</td>
                        </tr>
                        <tr>
                            <td>$_FILES</td>
                            <td>used to associate array items that are uploaded through the HTTP POST method.</td>
                        </tr>
                        <tr>
                            <td>$_ENV</td>
                            <td>used to access environment variables.</td>
                        </tr>
                        <tr>
                            <td>$_COOKIE</td>
                            <td>used to access a cookie value.</td>
                        </tr>
                        <tr>
                            <td>$_SESSION</td>
                            <td>used to temporarily store and make data accessible across all the website pages.</td>
                        </tr>
                    </table>
                </div>

                <h4>Arithmetic Operations</h4>
                <div class="col mb-5">
                    <table class="table table-striped-columns table-hover table-bordered">
                        <tr>
                            <th>Type</th>
                            <th>Code</th>
                        </tr>
                        <tr>
                            <td>Addition</td>
                            <td>$sum = $num1 + $num2;</td>
                        </tr>
                        <tr>
                            <td>Subtraction</td>
                            <td>$sum = $num1 - $num2;</td>
                        </tr>
                        <tr>
                            <td>Multiplication</td>
                            <td>$sum = $num1 * $num2;</td>
                        </tr>
                        <tr>
                            <td>Division</td>
                            <td>$sum = $num1 / $num2;</td>
                        </tr>
                        <tr>
                            <td>Finds the remainder</td>
                            <td>$sum = $num1 % $num2;</td>
                        </tr>
                        <tr>
                            <td>Finds the Power of</td>
                            <td>$sum = $num1 ** $num2;</td>
                        </tr>
                        <tr>
                            <td>Brakets are used to calculate the sum 1st</td>
                            <td>$sum = $num1 * ($num2 + $num3);</td>
                        </tr>
                    </table>
                </div>

                <h4>Assignment Operators</h4>
                <div class="col mb-5">
                    <table class="table table-striped-columns table-hover table-bordered">
                        <tr>
                            <th>Code</th>
                            <th>Similar</th>
                        </tr>
                        <tr>
                            <td>$num1 += $num2;</td>
                            <td>$num1 = $num1 + $num2;</td>
                        </tr>
                        <tr>
                            <td>$num1 -= $num2;</td>
                            <td>$num1 = $num1 - $num2;</td>
                        </tr>

                    </table>
                </div>


                <h4>Comparison Operators</h4>
                <div class="col mb-5 overflow-y-scroll" style="height:400px;">
                    <table class="table table-striped-columns table-hover table-bordered">
                        <tr>
                            <th>Code</th>
                            <th>Definition</th>
                        </tr>
                        <tr>
                            <td>$num1 == $num2;</td>
                            <td>are they equal to each other? (without the data type)</td>
                        </tr>
                        <tr>
                            <td>$num1 === $num2;</td>
                            <td>are they equal to each other? (including the data type)</td>
                        </tr>
                        <tr>
                            <td>$num1 != $num2;</td>
                            <td>are they NOT equal?</td>
                        </tr>
                        <tr>
                            <td>$num1 !== $num2;</td>
                            <td>are they NOT equal? (including the data type)</td>
                        </tr>
                        <tr>
                            <td>$num1 < $num2; </td> <td>
                            </td>
                        </tr>
                        <tr>
                            <td>$num1 > $num2;</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>$num1 <= $num2; </td> <td>
                            </td>
                        </tr>
                        <tr>
                            <td>$num1 >= $num2;</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>$num1 <=> $num2;</td>
                            <td>spaceship? if num1 is greater than num2 = 1, if equal = 0, if num2 is greater than num1
                                = -1
                                (Mainly used to compare data)</td>
                        </tr>

                    </table>
                </div>

                <h4>Logic Operators</h4>
                <div class="col mb-5">
                    <table class="table table-striped-columns table-hover table-bordered">
                        <tr>
                            <th>Code</th>
                            <th>Similar</th>
                        </tr>
                        <tr>
                            <td>$num1 === 5 && $num2 === 10;</td>
                            <td>$num1 === 5 and $num2 === 10;</td>
                        </tr>
                        <tr>
                            <td>$num1 === 5 || $num2 === 10;</td>
                            <td>$num1 === 5 or $num2 === 10;</td>
                        </tr>
                        <tr>
                            <td>$num1 === 5 XOR $num2 === 10;</td>
                            <td>either one or the other can be true, if both true or both false = false</td>
                        </tr>
                        <tr>
                            <td>!$num1 === 5;</td>
                            <td>is statement false?</td>
                        </tr>
                    </table>
                </div>

                <h4>Increment/Decrement</h4>
                <p> ++$num1;
                    <br> //Adds 1 to the variable and output: 6
                    <br><br> $num1++;
                    <br> // Will output 6 after the number is echoed. the output will be: 5
                </p>

                <h4>String Operator</h4>
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

                <h4>Incremation and Arrays</h4>
                <p>
                    <?php $numbers=[0,1,2,3,4,5]; ?>

                    $array = [0,1,2,3,4,5];
                    <br>
                    $array = array(0,1,2,3,4,5);
                    <br>
                    Arrays can be written differently but display the same thing.
                    <br>
                    Arrays can be displayed using print_r
                    <br>
                    <?php print_r($numbers); ?>
                    <br>
                    <br>
                    echo 'text' . $array[0];
                    <br>
                    result:
                    <br>
                    <?php echo "text is " . $numbers[0]; ?>


                    <br> echo "text is {$array[0]}."; are the same.
                    <br>result:
                    <br>
                    <?php echo "text is {$numbers[0]}"?>
                    <br>

                </p>

                <p>
                    To modify an input into the array:
                    $array[0] = 100; [0] represents the position inside the array. Arrays start from 0, therefore, the
                    first number is always represented as 0, while the seoncd number is 1.
                    <br>
                    result:
                    <br>
                    <?php $numbers[0] = 100; 
                    echo $numbers[0]; 
                    ?>

                </p>

                <p>
                    You can add more inputs into an array by:
                    <br>
                    <?php $numbers[] = "text"?>
                    $array[] = "text";
                    <br>
                    This will simply add text into a new porition of the Array.
                    <br>
                    result:
                    <br>
                    <?php print_r($numbers); ?>
                </p>

                <p>
                    Removing an value from the value, unset.
                    <br>
                    unset($numbers[3]);
                    <?php unset($numbers[2]); ?>
                    <br>
                    This removes the input of that position, therefore the 3rd position is no longer visible due to be
                    being an empty position.
                    <br>
                    <?php print_r($numbers); ?>
                    <br>
                    When updating the empty position, the value will be visible after the previously inputted values.
                    <br>
                    <?php $numbers[2] = "update"; ?>
                    <?php print_r($numbers); ?>

                </p>

                <p>
                    Calculating the amount of values in an array:
                    <br>
                    <?php echo "<p> Number of elements in our array: " . count($numbers). "</p>" ?>

                </p>

                <p>
                    Resetting the position of the array:
                    <br>
                    Moves array pointer to the start and return value
<br>
                    <?php $first = reset($numbers);
                    echo "<p> RESET: {$first}. </p>" ?>
                    <br>
                    Moves array pointer to the next position and returns value
                    <br>
                    <?php $next = next($numbers);
                    echo "<p> NEXT: {$next}. </p>" ?>

                </p>

                <h4>Conditions and Control Structures</h4>
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

                <h4>Switch Statement</h4>
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

                <h4>If, Else if, else statement</h4>
                <p>
                    if ($a < $b && !$bool) { <br> echo "First Condition is True!" ;
                        <br> }
                        <br> else if($a < $b && $bool) { <br> echo "Second Condition is True!" ;
                            <br> }
                            <br> else {
                            <br> echo "None of the conditions are true!";
                            <br> }
                </p>

                <!---------------- Example -------------->
                <h4>Echo - Hello World</h4>
                <?php
                echo "<p> Hello World, PHP is working grand! Composer... All set! </p>";
                ?>
                <!---------------------------------------------------->
                <div class="codeStyle">
                    <h5>PHP</h5>
                    <p style="margin:0; padding:0; height:48px;">
                        &lt;?php
                        echo "&lt;p> Hello World, PHP is working grand! Composer... All set! &lt;/p>";
                        ?>
                    </p>
                </div>
                <!---- Example ----------->
                <h4>Calling Functions</h4>
                <?php callMyName()?>

                <?php
                function callMyName()
                {
                    echo "<p> Hello, I'm a function! </p>";
                    $num01 = 5;
                    echo "<p>" . $num01 . ": I'm a number!  <br></p>";
                }
                ?>
                <!------- Code --------->
                <div class="codeStyle">
                    <h5>PHP</h5>
                    <p>
                        &lt;?php
                        <br> callMyName();
                        <br>
                        <br>function callMyName(){
                        <br>cho "&lt;p> Hello, I'm a function! &lt;/p>";
                        <br> $num01 = 5;
                        <br> echo "&lt;p>" . $num01 . ": I'm a number! &lt;br> &lt;/p>";
                        <br> }?>
                    </p>
                </div>
                <!----- Example ----------->

                <h4>Array Function</h4>
                <?php myArrayFunction()?>

                <?php

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

                <!------- Code --------->
                <div class="codeStyle">
                    <h5>PHP</h5>
                    <p>
                        &lt;?php myArrayFunction()?>
                        <br>
                        <br> &lt;?php
                        <br> function myArrayFunction(){
                        <br> $newArray = [1,2, "sentence",4,5];
                        <br> print_r($newArray);
                        <br> echo "&lt;br>";
                        <br> $newArray01 = ["key" => 1, "word" => "sentence"];
                        <br> print_r($newArray01["word"]);
                        <br> }?>
                    </p>
                </div>
                <p>Arrays start from 0 ... [0,1,2,3,4,5] = user input: [1,2,3,4,5,6]</p>
                <!---------------- Example -------------->

                <h4>Loops Tutorial</h4>
                <h5>For Loop</h5>
                <?php
                for ($i = 0; $i <= 100; $i++) 
                {
                    echo '<p style="display:inline-flex;">' . $i . '&nbsp;</p>';
                }?>
                <!------- Code --------->
                <div class="codeStyle mt-3" style="height:150px;">
                    <h5>PHP</h5>
                    <p>
                        &lt;?php
                        <br> for ($i = 0; $i <= 100; $i++){ <br> echo '&lt;p style="float:left">' . $i . "&nbsp;
                            &lt;/p>";
                            <br> }?>
                    </p>
                </div>
                <p>var is = 0, condition = if the var is not 100, do = var ++ (add +1 to var) and run the code in the
                    loop
                </p>
                <p>echo i : shows the number in the var i</p>
                <!---------------- Example -------------->
                <h4>For Loop Array</h4>
                <?php
                $arr = [1,2,3,4,5];
                $countMyArray = count($arr);

                for ($i = 0; $i < $countMyArray ; $i++)
                {
                    echo $arr[$i] . "&nbsp;";
                }
                ?>
                <!------------------------- CODE ------------------>
                <div class="codeStyle">
                    <h5>PHP</h5>
                    <p>
                        &lt;?php
                        <br> $arr = [1,2,3,4,5];
                        <br>
                        <br> $countMyArray = count($arr);
                        <br>
                        <br> for ($i = 0; $i < $countMyArray ; $i++) <br> {
                            <br> echo $arr[$i] . "&nbsp;";
                            <br> }?>
                    </p>
                </div>
                <!----------EXAMPLE ----------------->
                <h5>For Each Loop</h5>

                <?php
                $arr02 = [1, 2, "some value", 4, 5,"hey", "yo"];
                
                foreach ($arr02 as $key => $value)
                {
                    echo $value . "&nbsp;";
                }
                ?>
                <!--------------CODE -------------->
                <div class="codeStyle">
                    <h5>PHP</h5>
                    <p>
                        &lt;?php
                        <br> $arr02 = [1, 2, "some value", 4, 5,"hey", "yo"];
                        <br>
                        <br> foreach ($arr02 as $key => $value)
                        <br> {
                        <br> echo $value . "&nbsp;";
                        <br> }
                        <br> ?>
                    </p>
                </div>
                <!----------EXAMPLE ----------------->
                <h5>While Loop</h5>
                <?php
                $a = 1;
                while($a <= 10)
                {
                    echo $a . "&nbsp;";
                    $a++;
                }
                ?>
                <!--------------CODE -------------->
                <div class="codeStyle">
                    <h5>PHP</h5>
                    <p>
                        &lt;?php
                        <br> $a = 1;
                        <br> while($a <= 10){ <br>echo $a . "&nbsp;" ;
                            <br>$a++;
                            <br>}?>
                    </p>
                </div>

                <h4>PHP Tutorials</h4>
                <div class="col">
                    <form action="includes/formHandler.php" class="form-control p-4 w-25" method="post">
                        <h5>Form:</h5>
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
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
                <!----------------CODE ------------------>
                <div class="col mt-3 overflow-y-scroll" style="height:400px;">
                    <table class="table table-striped-columns table-hover table-bordered">
                        <tr>
                            <th>
                                PHP
                            </th>
                            <th>
                                HTML
                            </th>
                            <th>
                                CSS
                            </th>
                        </tr>
                        <tr>
                            <td>
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
                            </td>
                            <td>
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
                            </td>
                            <td>
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
                            </td>
                        </tr>
                    </table>
                </div>
                <p class="mt-3"> Post (will submit data but won't be visible) or Get (submit the data where it can be
                    seen) method
                    <br> If the data is going to remain on the same page:
                    <br> &lt;form action ="<\?php echo $_SERVER["PHP_SELF"];?>" instead of "folder/file.php"
                        <br>(Not
                        ideal to use this method as it is prone to hacking...) </p>

                <h1>Calculator</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-control p-4 w-25"
                    method="post">
                    <input class="mb-1" type="number" name="num01" placeholder="Input Number One" required>
                    <select name="operator">
                        <option value="add">+</option>
                        <option value="subtract">-</option>
                        <option value="multiply">*</option>
                        <option value="divide">/</option>
                    </select>
                    <input class="my-1" type="number" name="num02" placeholder="Input Number Two" required>
                    <button class="btn btn-primary">Calculate</button>
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
                }
                ?>

                <div class="col mt-3 overflow-y-scroll" style="height:400px;">
                    <table class="table table-striped-columns table-hover table-bordered">
                        <tr>
                            <th>
                                PHP
                            </th>
                            <th>
                                HTML
                            </th>
                            <th>
                                CSS
                            </th>
                        </tr>
                        <tr>
                            <td>
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
                            </td>
                            <td>
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
                            </td>
                            <td>
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
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    require_once "include/footer.php";?>
