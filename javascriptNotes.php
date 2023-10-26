<?php
require "functions.php";
require_once 'include/header.php';

check_login();
?>

<?php require_once 'include/navbar.php';
?>

<div class="container col-md-8 d-flex justify-content-center p-5">
    <div class="row">
        <div class="col">
            <h3>JavaScript</h3>
            <p>
                One of the fastest growing programming language in the world! <br>
                JavaScripts gives to opportunity to work as either a front-end developer, back-end developer
                or a full-stack developer.
            </p>
            <p>
                JavaScript was originally created to run only on browsers using an integrated JavaScript
                Engine which can execute JavaScript Code. In Firefox and chrome, these Engines are called: V8 and
                SpiderMonkey.
                In 2009 JavaScript has been implemented inside C++ which is called Node this gives the
                programmer the ability to create Mobile Applications!
            </p>
            <h4>What can you do with JavaScript?</h4>
            <!--Ordered List which will make the list numbered. Unordered List will create a bullet form list-->
            <ol>
                <li>Interactive Websites.</li>
                <li>Mobile Applications.</li>
                <li>Real-Time networking Applications. <br> (such as Chat and video streaming services)</li>
                <li>Command-line Tools.</li>
                <li>Games.</li>
            </ol>

            <h4>Code Editors</h4>
            <p> Some of these editors include:</p>
            <!--Ordered List which will make the list numbered. Unordered List will create a bullet form list-->
            <ol>
                <li>Visual Studio Code (VSCode)</li>
                <li>Sublime Text</li>
                <li>Note++</li>
                <li>Atom</li>
                <li>Brackets</li>
            </ol>
            <p>And many more!</p>

            <h3>Node.Js</h3>
            <H4>Commands</H4>
            <ul>
                <li>npm init</li>
                <li>npm i prompt-sync</li>
            </ul>
        </div>
        <div id="TutorialSection">
            <h3>JavaScript Tutorial</h3>
            <h4> Easy Image change on Click</h4>
            <img id="changeImg" class="object-fit-cover" style="width: 250px; height: 250px; " src="img/card-back.jpg"
                alt="flower" onclick="changeImg()">
            <!----------------------- Code ----------------------->
            <div class="col my-3 overflow-y-scroll" style="height:400px;">
                <table class="table table-striped-columns table-bordered">
                    <tr>
                        <th>
                            Javascript
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
                            function changeImg() {
                            <br>
                            <br> imageSource = document.getElementById("changeImg").src;
                            <br>
                            <br> if (imageSource.includes ("img/card-back.jpg"))
                            <br> {
                            <br> document.getElementById("changeImg").src = ("img/flowers.jpg");
                            <br> }
                            <br> else if (imageSource.includes ("img/flowers.jpg"))
                            <br> {
                            <br> document.getElementById ("changeImg").src = ("img/tulips.jpg");
                            <br> }
                            <br> else if (imageSource.includes ("img/tulips.jpg"))
                            <br> {
                            <br> document.getElementById ("changeImg").src = ("img/butterfly.jpg");
                            <br> }
                            <br> else
                            <br> {
                            <br> document.getElementById("changeImg").src = ("img/card-back.jpg");
                            <br> } }
                        </td>
                        <td>
                            &lt;img id="changeImg" class="imgSize" src="img/card-back.jpg" alt="flower"
                            onclick="changeImg()"&gt;
                        </td>
                        <td>
                            .imgSize {
                            <BR>
                            height: 250px;
                            <BR>
                            width:250px;
                            <BR>
                            object-fit:cover;
                            <BR>
                            }
                        </td>
                    </tr>
                </table>
            </div>

            <!-- --------------------------------------------------------------- example --------------------------------------------------------------- -->
            <h4>Color and text change </h4>
            <h1 onclick="blue()" class="pt-4" id="colourChangeText">Blue</h1>
            <button onclick="red()" class="btn btn-primary" type="button">Red</button>
            <button onclick="green()" class="btn btn-primary" type="button">Green</button>
            <!---------------------- Code ------------------------->
            <div class="col my-3">
                <table class="table table-striped-columns table-bordered">
                    <tr>
                        <th>
                            Javascript
                        </th>
                        <th>
                            HTML
                        </th>
                    </tr>
                    <tr>
                        <td>
                            function red() {
                            console.log("Red");
                            document.getElementById("colourChangeText").innerHTML = "Red";
                            document.getElementById("colourChangeText").style.color = "red";
                            }
                            <br><br>
                            function green() {
                            console.log("Green");
                            document.getElementById("colourChangeText").innerHTML = "Green";
                            document.getElementById("colourChangeText").style.color = "green"
                            }
                            <br><br>
                            function blue() {
                            console.log("Blue");
                            document.getElementById("colourChangeText").innerHTML = "Blue";
                            document.getElementById("colourChangeText").style.color = "blue";
                            }
                        </td>
                        <td>
                            &lt;h1 onclick="blue()" id="colourChangeText"&gt;Blue&lt;/h1&gt; <br>
                            &lt;button onclick="red()" type="button"&gt;Red&lt;/button&gt;<br>
                            &lt;button onclick="green()" type="button"&gt;Green&lt;/button&gt;
                        </td>
                    </tr>
                </table>
            </div>
            <!-- --------------------------------------------------------------- example --------------------------------------------------------------- -->
            <h4>Colour on input - IF, IF ELSE and ELSE </h4>
            <h1 id="myText">Hello!</h1>
            <p>Please input a colour!</p>
            <input type="text" class="p-1" id="userInput">
            <button class="btn btn-primary" onclick="btnClick()" type="button">Enter</button>

            <!----------- Code ----------------->
            <div class="col my-3 overflow-y-scroll" style="height:400px;">
                <table class="table table-striped-columns table-bordered">
                    <tr>
                        <th>
                            Javascript
                        </th>
                        <th>
                            HTML
                        </th>
                    </tr>
                    <tr>
                        <td>
                            function btnClick() {<br>
                            var text = document.getElementById("userInput").value;
                            <br>
                            document.getElementById("myText").style.color = text;<br><br>
                            if (text != document.getElementById("myText").style.color){
                            <br>
                            document.getElementById("myText").style.color = "black";
                            <br>
                            }<br>
                            <br>
                            <br>/*does the same thing as the previous code, difference is:
                            it is much more limited due to the if and else statements:
                            <br>
                            <br>
                            if (text === "red") {
                            <br> document.getElementById("myText").style.color = ("red");
                            <br>}
                            <br>else if(text === "green"){
                            <br> document.getElementById("myText").style.color = ("green");
                            <br>}
                            <br>else if(text === "blue")
                            <br> {
                            <br> document.getElementById("myText").style.color = ("blue");
                            <br> }
                            <br> else
                            <br> {
                            <br> document.getElementById("myText").style.color = ("black");
                            <br> }*/
                            <br>}
                        </td>
                        <td>
                            &lt;h1 id="myText">Hello!&lt;/h1&gt;<br>
                            &lt;p>Please input a colour!&lt;/p&gt;<br>
                            &lt;input type="text" id="userInput"&gt;<br>
                            &lt;button onclick="btnClick()" type="button"&gt;Enter&lt;/button&gt;
                        </td>
                    </tr>
                </table>
            </div>
            <!----------------------------- example --------------------------------------->

            <h4>On Switch</h4>
            <h1 id="guestText">Hello Guest!
            </h1>
            <p>Please input a colour!</p>
            <input type="text" class="p-1" id="guestInput">
            <button type="button" class="btn btn-primary" onclick="guestButton()">Change</button>
            <!------------ Code ------------>
            <div class="col my-3 overflow-y-scroll" style="height:400px;">
                <table class="table table-striped-columns table-bordered">
                    <tr>
                        <th>
                            Javascript
                        </th>
                        <th>
                            HTML
                        </th>
                    </tr>
                    <tr>
                        <td>
                            function guestButton() {
                            <br>var guestColor = document.getElementById("guestInput").value;
                            <br>guestOutput = guestColor.toLowerCase();
                            <br>
                            <br>console.log(guestOutput);
                            <br><br>
                            switch (guestOutput) {
                            <br> case "red":
                            <br> document.getElementById("guestText").style.color = "red";
                            <br> break;
                            <br> case "green":
                            <br> document.getElementById("guestText").style.color = "green";
                            <br> break;
                            <br> case "blue":
                            <br> document.getElementById("guestText").style.color = "blue";
                            <br> break;
                            <br> default:
                            <br> document.getElementById("guestText").style.color = "black";
                            <br> }
                            <br> }
                        </td>
                        <td>
                            &lt;h1> id="guestText">Hello Guest! &lt;/h1>
                            <br>&lt;p>Please input a colour!&lt;/p>
                            <br>&lt;input type="text" id="guestInput">
                            <br> &lt;button type="button" onclick="guestButton()">Change&lt;/button>
                        </td>
                    </tr>
                </table>


            </div>
            <!----------------------------- example --------------------------------------->

            <h4>Age Checker - IF, IF ELSE, ELSE</h4>
            <h1>How old are you?</h1>
            <p>Please input a number:</p>
            <input type="text" id="inputAge">
            <p id="ageResult"></p>
            <button type="button" class="btn btn-primary" onclick="checkAgeCalculator()">Check</button>

            <!--------------------- Code ------------------->
            <div class="col my-3 overflow-y-scroll" style="height:400px;">
                <table class="table table-striped-columns table-bordered">
                    <tr>
                        <th>
                            Javascript
                        </th>
                        <th>
                            HTML
                        </th>
                    </tr>
                    <tr>
                        <td>
                            function checkAgeCalculator() {
                            <br> var stringAge = document.getElementById("inputAge").value;
                            <br> numAge = parseInt(stringAge);
                            <br>
                            <br>if (numAge != isNaN, numAge &lt;= 17) {
                            <br>document.getElementById("ageResult").innerHTML = "Not Adult";
                            <br>}
                            <br>else if (numAge != isNaN, numAge >= 18, numAge <= 89) { <br>
                                document.getElementById("ageResult").innerHTML = "Is Adult";
                                <br>}
                                <br>else if (numAge >= 90) {
                                <br>document.getElementById("ageResult").innerHTML = "Accient!";
                                <br>}
                                <br>else {
                                <br>document.getElementById("ageResult").innerHTML = "Incorrect!";
                                <br>}
                                <br>}
                        </td>
                        <td>
                            &lt;h1>How old are you?&lt;/h1>
                            <br>&lt;p>Please input a number:&lt;/p>
                            <br>&lt;input type="text" id="inputAge">
                            <br>&lt;p> id="ageResult">&lt;/p>
                            <br>&lt;button type="button" onclick="checkAgeCalculator()">
                            <br>Check&lt;/button>
                        </td>
                    </tr>
                </table>
            </div>

            <!----------------------------- example --------------------------------------->
            <h4>While Loop</h4>
            <h2>Count to 10</h2>
            <p id="counterLoop"></p>
            <!---------------------------------------------------->
            <div class="col my-3">
                <table class="table table-striped-columns table-bordered">
                    <tr>
                        <th>
                            Javascript
                        </th>
                        <th>
                            HTML
                        </th>
                    </tr>
                    <tr>
                        <td>
                            function counterLoop() {
                            <br> var i = 0;
                            <br>while (i &lt;= 15) {
                            <br>i++;
                            <br> console.log(i);
                            <br> document.getElementById("counterLoop").innerHTML += i + " ";
                            <br> if (i == 10) {
                            <br> break;
                            <br> }
                            }
                            <br> }
                        </td>
                        <td>
                            &lt;h2>Count to 10&lt;/h2>
                            <br>&lt;p id="counterLoop"> &lt;/p>
                        </td>
                    </tr>
                </table>
            </div>



            <!---------------------------------------------------->
            <h4>While + Array up to 50</h4>
            <p id="whileArray" style="padding-top:0.5em; padding-bottom:0.5em;"> </p>
            <!---------------------------------------------------->
            <div class="col my-3">
                <table class="table table-striped-columns table-bordered">
                    <tr>
                        <th>
                            Javascript
                        </th>
                        <th>
                            HTML
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                function whileArray() {
                                <br> var loopArray = [];
                                <br> var i = 0;
                                <br>
                                <br> while (i &lt;= 50) {
                                <br> loopArray.push(i);
                                <br> i++;
                                <br> }
                                <br>document.getElementById("whileArray").innerHTML = loopArray;
                                <br>
                                }
                            </p>
                        </td>
                        <td>
                            <p>
                                &lt;h2>While + Array up to 50&lt;/h2>
                                <br> &lt;p id="whileArray"> &lt;/p>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
            <!--------------------------------------------------->

            <h4>Thumbnail on Mouse enter / Mouse out</h4>
            <img src="img/card-back.jpg" class="object-fit-cover" style="width: 250px; height: 250px;"
                onmouseenter="thumbnailTest()" onmouseout="thumbnailDefault()" id="thumbnailTest" alt="">

            <!---------------------------------------------------->
            <div class="col my-3 overflow-y-scroll" style="height:400px;">
                <table class="table table-striped-columns table-bordered">
                    <tr>
                        <th>Javascript</th>
                        <th>HTML</th>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                var thumbnailInterval;
                                <br>
                                <br>function thumbnailTest(){
                                <br> thumbnailInterval = setInterval(() => {
                                <br> <br>
                                var imageSource = document.getElementById("thumbnailTest").src;
                                <br>
                                <br> if (imageSource.includes ("img/flowers.jpg"))
                                <br> {
                                <br> document.getElementById("thumbnailTest").src = "img/card-back.jpg";
                                <br> }
                                <br> else if(imageSource.includes("img/card-back.jpg") )
                                <br> {
                                <br> document.getElementById("thumbnailTest").src = "img/tulips.jpg";
                                <br> }
                                <br> else if(imageSource.includes("img/tulips.jpg"))
                                <br> {
                                <br> document.getElementById("thumbnailTest").src = "img/butterfly.jpg";
                                <br> }
                                <br> else
                                <br> {
                                <br> document.getElementById("thumbnailTest").src = "img/flowers.jpg";
                                <br> }
                                <br> }, 600);}
                                <br>
                                <br>
                                <br> function thumbnailDefault()
                                <br> {
                                <br> clearInterval(thumbnailInterval);
                                <br> document.getElementById("thumbnailTest").src = "img/card-back.jpg";
                                <br> }
                            </p>
                        </td>
                        <td>
                            <p>
                                &lt;img class="imgSize" src="img/card-back.jpg" onmouseenter="thumbnailTest()"
                                onmouseout="thumbnailDefault()" id="thumbnailTest" alt="">
                            </p>
                        </td>
                    </tr>
                </table>



            </div>
            <!-------------------------CALCULATOR---------------------------->

            <h4 class="mt-4">Calculator</h4>
            <div class="calculator">
                <input class="calculatorInput" type="text" id="calculatorInput" readonly>

                <button type="button" class="clearCalc" value="C" onclick="clearCalc()">C</button>

                <button type="button" value="7" onclick="display('7')">7</button>
                <button type="button" value="8" onclick="display('8')">8</button>
                <button type="button" value="9" onclick="display('9')">9</button>

                <button type="button" value="4" onclick="display('4')">4</button>
                <button type="button" value="5" onclick="display('5')">5</button>
                <button type="button" value="6" onclick="display('6')">6</button>

                <button type="button" value="1" onclick="display('1')">1</button>
                <button type="button" value="2" onclick="display('2')">2</button>
                <button type="button" value="3" onclick="display('3')">3</button>

                <button type="button" value="." onclick="display('.')">.</button>
                <button type="button" value="0" onclick="display('0')">0</button>
                <button type="button" value="/" onclick="display('/')">/</button>
                <button type="button" value="+" onclick="display('+')">+</button>
                <button type="button" value="-" onclick="display('-')">-</button>
                <button type="button" value="*" onclick="display('*')">*</button>
                <button type="button" class="calculateBtn" value="=" onclick="calculate()">Calculate</button>
            </div>

            <!---------------------------------------------------->

            <div class="col my-3 overflow-y-scroll" style="height:400px;">
                <table class="table table-striped-columns table-bordered">
                    <tr>
                        <th>Javascript</th>
                        <th>HTML</th>
                        <th>CSS</th>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                function display(val){
                                <br> val = document.getElementById("calculatorInput").value += val;
                                <br>
                                <br>console.log(val);
                                <br> }
                                <br>
                                <br> function calculate(){
                                <br> x = document.getElementById("calculatorInput").value;
                                <br> y = eval(x);
                                <br>
                                <br> document.getElementById("calculatorInput").value = y;
                                <br> }
                                <br>
                                <br> function clearCalc(){
                                <br> document.getElementById("calculatorInput").value = " ";
                                <br> }
                            </p>
                        </td>
                        <td>
                            <p> &lt;img id="changeImg" class="imgSize"
                                src="img/card-back.jpg" alt="flower"
                                &lt;div class="calculator">
                                <br> &lt;input class="calculatorInput" type="text" id="calculatorInput" readonly>

                                <br> &lt;button type="button" class="clearCalc" value="C"
                                onclick="clearCalc()">C&lt;/button>

                                <br> &lt;button type="button" value="7" onclick="display('7')">7&lt;/button>
                                <br> &lt;button type="button" value="8" onclick="display('8')">8&lt;/button>
                                <br> &lt;button type="button" value="9" onclick="display('9')">9&lt;/button>
                                <br> &lt;button type="button" value="4" onclick="display('4')">4&lt;/button>
                                <br> &lt;button type="button" value="5" onclick="display('5')">5&lt;/button>
                                <br> &lt;button type="button" value="6" onclick="display('6')">6&lt;/button>
                                <br> &lt;button type="button" value="1" onclick="display('1')">1&lt;/button>
                                <br> &lt;button type="button" value="2" onclick="display('2')">2&lt;/button>
                                <br> &lt;button type="button" value="3" onclick="display('3')">3&lt;/button>
                                <br> &lt;button type="button" value="." onclick="display('.')">.&lt;/button>
                                <br> &lt;button type="button" value="0" onclick="display('0')">0&lt;/button>
                                <br> &lt;button type="button" value="/" onclick="display('/')">/&lt;/button>
                                <br> &lt;button type="button" value="+" onclick="display('+')">+&lt;/button>
                                <br> &lt;button type="button" value="-" onclick="display('-')">-&lt;/button>
                                <br> &lt;button type="button" value="*" onclick="display('*')">*&lt;/button>
                                <br> &lt;button type="button" class="calculateBtn" value="="
                                onclick="calculate()">Calculate&lt;/button>
                                <br> &lt;/div>
                            </p>
                        </td>
                        <td>
                            <p>
                                div .calculator {
                                <br> width: 350px;
                                <br> padding: 0.5em;
                                <br> background-color: rgb(31, 31, 31);
                                <br> }
                                <br>
                                <br> .calculator button {
                                <br> width: 32.3%;
                                <br> padding: 1em;
                                <br> }
                                <br>
                                <br> .calculator .calculatorInput {
                                <br> width: 72%;
                                <br> padding: 1em;
                                <br> margin-bottom: 0.5em;
                                <br> }
                                <br>

                                <br> .calculator .calculateBtn {
                                <br> width: 100%;
                                <br> padding: 1em;
                                <br> margin-top: 0.5em;
                                <br> }
                                <br>
                                <br> .calculator .clearCalc {
                                <br> width: 26%;
                                <br> }
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php 
    require_once "include/footer.php";?>
