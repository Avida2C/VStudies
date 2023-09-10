<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VStudies - JS</title>

    <!-- Stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">


</head>

<body>
    <?php require_once "header.php"?>



    <div class="container pt-4">
        <div class="container pt-4">
            <h1>JavaScript Tutorial</h1>

            <div class="w-100">
                <h2> Easy Image change on Click</h2>
                <img id="changeImg" class="imgSize mt-3" src="img/card-back.jpg" alt="flower" onclick="changeImg()">
            </div>

            <div class="d-flex pt-3 codeSection">
                <div class="w-50">
                    <h2>JavaScript</h2>
                    <p>
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
                    </p>
                </div>

                <div class="w-50">
                    <H2>HTML</H2>
                    <p> &lt;img id="changeImg" class="imgSize" src="img/card-back.jpg" alt="flower"
                        onclick="changeImg()"&gt;
                    </p>
                </div>
                <div class="w-50">
                    <H2>CSS Properties</H2>
                    <p>
                        .imgSize {
                        <BR>
                        height: 250px;
                        <BR>
                        width:250px;
                        <BR>
                        object-fit:cover;
                        <BR>
                        }
                    </p>
                </div>
            </div>
            <!-- --------------------------------------------------------------- BUTTONS --------------------------------------------------------------- -->

            <div class="container pt-4">
                <div class="w-100 pb-4">
                    <h2>Color and text change </h2>
                    <h1 onclick="blue()" class="pt-4" id="colourChangeText">Blue</h1>
                    <button onclick="red()" type="button">Red</button>
                    <button onclick="green()" type="button">Green</button>
                </div>

                <div class="d-flex pt-3 codeSection">
                    <div class="w-50">
                        <h2>JavaScript</h2>
                        <p>
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
                        </p>
                    </div>
                    <div class="w-50">
                        <H2>HTML</H2>
                        <p> &lt;h1 onclick="blue()" id="colourChangeText"&gt;Blue&lt;/h1&gt; <br>
                            &lt;button onclick="red()" type="button"&gt;Red&lt;/button&gt;<br>
                            &lt;button onclick="green()" type="button"&gt;Green&lt;/button&gt;
                        </p>
                    </div>
                </div>
                <!-- --------------------------------------------------------------- BUTTONS --------------------------------------------------------------- -->
                <div class="container pt-4">
                    <div class="w-100 pb-4">
                        <h2>Colour on input - IF, IF ELSE and ELSE </h2>
                        <h1 id="myText">Hello!</h1>
                        <p>Please input a colour!</p>
                        <input type="text" id="userInput">
                        <button onclick="btnClick()" type="button">Enter</button>
                    </div>

                    <div class="d-flex pt-3 codeSection">
                        <div class="w-50">
                            <h2>JavaScript</h2>
                            <p>
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


                        </div>
                        <div class="w-50">
                            <H2>HTML</H2>
                            <p> &lt;h1 id="myText">Hello!&lt;/h1&gt;<br>
                                &lt;p>Please input a colour!&lt;/p&gt;<br>
                                &lt;input type="text" id="userInput"&gt;<br>
                                &lt;button onclick="btnClick()" type="button"&gt;Enter&lt;/button&gt;

                            </p>
                        </div>
                    </div>
                </div>
                <!----------------------------- Switch Command --------------------------------------->

                <div class="container pt-4">
                    <div class="w-100 pb-4">
                        <h2>On Switch</h2>
                        <h1 id="guestText">Hello Guest!
                        </h1>
                        <p>Please input a colour!</p>
                        <input type="text" id="guestInput">
                        <button type="button" onclick="guestButton()">Change</button>
                    </div>

                    <div class="d-flex pt-3 codeSection">
                        <div class="w-50">
                            <h2>JavaScript</h2>
                            <p>
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
                        </div>
                        <div class="w-50">
                            <H2>HTML</H2>
                            <p>
                                &lt;h1> id="guestText">Hello Guest! &lt;/h1>
                                <br>&lt;p>Please input a colour!&lt;/p>
                                <br>&lt;input type="text" id="guestInput">
                                <br> &lt;button type="button" onclick="guestButton()">Change&lt;/button>
                            </p>
                        </div>
                    </div>
                </div>

                <!-----------------------------  --------------------------------------->

                <div class="container pt-4">
                    <div class="w-100 pb-4">
                        <h2>Age Checker - IF, IF ELSE, ELSE</h2>

                        <h1>How old are you?</h1>
                        <p>Please input a number:</p>
                        <input type="text" id="inputAge">
                        <p id="ageResult"></p>
                        <button type="button" onclick="checkAgeCalculator()">Check</button>
                    </div>

                    <div class="d-flex pt-3 codeSection">
                        <div class="w-50">
                            <h2>JavaScript</h2>
                            <p>
                                function checkAgeCalculator() {
                                <br> var stringAge = document.getElementById("inputAge").value;
                                <br> numAge = parseInt(stringAge);
                                <br>
                                <br>if (numAge != isNaN, numAge &lt;= 17) {
                                <br>document.getElementById("ageResult").innerHTML = "Not Adult";
                                <br>} else if (numAge != isNaN, numAge >= 18, numAge <= 89) { <br>
                                    <br>document.getElementById("ageResult").innerHTML = "Is Adult";
                                    <br>} else if (numAge >= 90) {
                                    <br>document.getElementById("ageResult").innerHTML = "Accient!";
                                    <br>} else {
                                    <br>document.getElementById("ageResult").innerHTML = "Incorrect!";
                                    <br>}
                                    <br>}
                        </div>
                        <div class="w-50">
                            <H2>HTML</H2>
                            <p>
                                &lt;h1>How old are you?&lt;/h1>
                                <br>&lt;p>Please input a number:&lt;/p>
                                <br>&lt;input type="text" id="inputAge">
                                <br>&lt;p> id="ageResult">&lt;/p>
                                <br>&lt;button type="button" onclick="checkAgeCalculator()">Check&lt;/button>
                            </p>
                        </div>
                    </div>
                </div>

                <!-----------------------------  --------------------------------------->

                <div class="container pt-4">
                    <div class="w-100 pb-4">
                        <h1>While Loop</h1>
                        <h2>Count to 10</h2>
                        <p id="counterLoop"> </p>

                    </div>

                    <div class="d-flex pt-3 codeSection">
                        <div class="w-50">
                            <h2>JavaScript</h2>
                            <p>
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
                        </div>

                        <div class="w-50">
                            <H2>HTML</H2>
                            <p>
                                &lt;h2>Count to 10&lt;/h2>
                                <br>&lt;p id="counterLoop"> &lt;/p>
                            </p>
                        </div>
                    </div>
                </div>

                <!---------------------------------------------------->

                <div class="container pt-4">
                    <div class="w-100 pb-4">
                        <h2>While + Array up to 50</h2>
                        <p id="whileArray"> </p>

                    </div>

                    <div class="d-flex pt-3 codeSection">
                        <div class="w-50">
                            <h2>JavaScript</h2>
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
                        </div>

                        <div class="w-50">
                            <H2>HTML</H2>
                            <p>
                                &lt;h2>While + Array up to 50&lt;/h2>
                                <br> &lt;p id="whileArray"> &lt;/p>
                            </p>
                        </div>
                    </div>
                </div>

                <!--------------------------------------------------->


                <div class="container pt-4">
                    <div class="w-100 pb-4">
                        <h2>Thumbnail on Mouse enter / Mouse out</h2>
                        <img class="imgSize" src="img/card-back.jpg" onmouseenter="thumbnailTest()"
                            onmouseout="thumbnailDefault()" id="thumbnailTest" alt="">

                    </div>

                    <div class="d-flex pt-3 codeSection">
                        <div class="w-50">
                            <h2>JavaScript</h2>
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
                        </div>

                        <div class="w-50">
                            <H2>HTML</H2>
                            <p>
                                &lt;img class="imgSize" src="img/card-back.jpg" onmouseenter="thumbnailTest()"
                                onmouseout="thumbnailDefault()" id="thumbnailTest" alt="">
                            </p>
                        </div>
                    </div>
                </div>
                <!-------------------------CALCULATOR---------------------------->

                <div class="container pt-4">
                    <div class="w-100 pb-4">
                        <h2>Calculator</h2>
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
                            <button type="button" class="calculateBtn" value="="
                                onclick="calculate()">Calculate</button>
                        </div>

                    </div>

                    <div class="d-flex pt-3 codeSection">
                        <div class="w-50">
                            <h2>JavaScript</h2>
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
                        </div>

                        <div class="w-50">
                            <H2>HTML</H2>
                            <p class="scrollThreeBoxStyle"> &lt;img id="changeImg" class="imgSize"
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
                                <br> &lt;/p>
                        </div>
                        <div class="w-50">
                            <H2>CSS Properties</H2>
                            <p class="scrollThreeBoxStyle">
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
                        </div>
                    </div>

                </div>
            </div>

            <?php require_once "footer.php" ?>

            <!-- JavaScript linked-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="Javascript/javascript.js"></script>

            <!-- SCRIPTS SECTION -->

            <script>
                counterLoop();
                whileArray();
            </script>

        </div>
    </div>
</body>

</html>