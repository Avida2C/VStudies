<?php
require "functions.php";

check_login();
?>

<?php require_once 'include/header.php';
    require_once 'include/navbar.php';?>

<div class="container d-flex justify-content-center p-5 col-md-8">
    <div class="row">
        <div class="col">
            <h3>Reference list</h3>
            <h4> Operations </h4>
            <div class="col mb-5 overflow-y-scroll" style="height:400px;">
                <table class="table table-striped-columns table-hover table-bordered">
                    <tr>
                        <td>+</td>
                        <td>Addition</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>Subtraction</td>
                    </tr>
                    <tr>
                        <td>*</td>
                        <td>Multiplication</td>
                    </tr>
                    <tr>
                        <td>/</td>
                        <td>Division</td>
                    </tr>
                    <tr>
                        <td>%</td>
                        <td>Percentages</td>
                    </tr>
                    <tr>
                        <td>++</td>
                        <td>Increment</td>
                    </tr>
                    <tr>
                        <td>--</td>
                        <td>Decrement</td>
                    </tr>
                    <tr>
                        <td>&gt;</td>
                        <td>Greater than</td>
                    </tr>
                    <tr>
                        <td>&lt;</td>
                        <td>Less than</td>
                    </tr>
                    <tr>
                        <td>&gt;=</td>
                        <td>Greater than or equal to</td>
                    </tr>
                    <tr>
                        <td>&lt;=</td>
                        <td>Less than or equal to</td>
                    </tr>
                    <tr>
                        <td>==</td>
                        <td>Equal to</td>
                    </tr>
                    <tr>
                        <td>!=</td>
                        <td>Not equal to</td>
                    </tr>
                    <tr>
                        <td>&&</td>
                        <td>AND</td>
                    </tr>
                    <tr>
                        <td>||</td>
                        <td>OR</td>
                    </tr>
                    <tr>
                        <td>!</td>
                        <td>NOT</td>
                    </tr>
                    <tr>
                        <td>+=</td>
                        <td>x = x + y</td>
                    </tr>
                    <tr>
                        <td>-=</td>
                        <td>x = x - y</td>
                    </tr>
                    <tr>
                        <td>*=</td>
                        <td>x = x * y</td>
                    </tr>
                    <tr>
                        <td>/=</td>
                        <td>x = x / y</td>
                    </tr>
                    <tr>
                        <td>%=</td>
                        <td>x = x % y</td>
                    </tr>
                    <tr>
                        <td>**==</td>
                        <td>x = x ** y</td>
                    </tr>
                </table>
            </div>

            <!------------------------STRING ESCAPE CHARACTERS------------------------>

            <h4>
                String Escape Characters
            </h4>
            <div class="col mb-5">
                <table class="table table-striped-columns table-hover table-bordered">
                    <tr>
                        <td>\'</td>
                        <td>single Quote</td>
                    </tr>
                    <tr>
                        <td>\""</td>
                        <td>double quote</td>
                    </tr>
                    <tr>
                        <td>\\</td>
                        <td>backlash</td>
                    </tr>
                    <tr>
                        <td>\n</td>
                        <td>newline</td>
                    </tr>
                    <tr>
                        <td>\r</td>
                        <td>carriage return</td>
                    </tr>
                    <tr>
                        <td>\t</td>
                        <td>tab</td>
                    </tr>
                    <tr>
                        <td>\b</td>
                        <td>backspace</td>
                    </tr>
                    <tr>
                        <td>\f</td>
                        <td>form feed</td>
                    </tr>
                </table>
            </div>
            <!------------------------ CHARACTER ENTITIES ------------------------>
            <h3>Operations (Other)</h3>
            <div class="col mb-5">
                <table class="table table-striped-columns table-hover table-bordered">
                    <tr>
                        <td>==</td>
                        <td>will check the value of the variables</td>
                    </tr>
                    <tr>
                        <td>===</td>
                        <td>will check the value and the type of the variables</td>
                    </tr>
                    <tr>
                        <td>!=</td>
                        <td>will check if the value is not equal to the other</td>
                    </tr>
                    <tr>
                        <td>!==</td>
                        <td>will check if the value and the type of the variables are NOT the same</td>
                    </tr>
                </table>
            </div>

            <!------------------------------------->

            <h4>Value Types</h4>
            <div class="col mb-5">
                <table class="table table-striped-columns table-hover table-bordered">
                    <tr>
                        <td>var</td>
                        <td>can be used throughout the program</td>
                    </tr>
                    <tr>
                        <td>let</td>
                        <td>can only be used within the scope where it has been created</td>
                    </tr>
                    <tr>
                        <td>const</td>
                        <td>is a variable that should NEVER be changed (changing the variables in a const will result in
                            an error)</td>

                    </tr>
                    <tr>
                        <td>parseFloat</td>
                        <td>conversion from string to number</td>
                    </tr>
                    <tr>
                        <td>parseInt</td>
                        <td>conversion from string to number</td>
                    </tr>
                    <tr>
                        <td>parseString</td>
                        <td>conversion to string</td>
                    </tr>
                </table>
            </div>

            <!------------------------------------------------------------------------------->

            <h4>Character Entities</h4>
            <div class="col mb-5 overflow-y-scroll" style="height:400px;">
                <table class="table table-striped-columns table-hover table-bordered">
                    <tr>
                        <td>&amp;</td>
                        <td>&amp;amp;</td>
                    </tr>
                    <tr>
                        <td>&lt;</td>
                        <td>&amp;lt;</td>
                    </tr>
                    <tr>
                        <td>&gt;</td>
                        <td>&amp;gt;</td>
                    </tr>
                    <tr>
                        <td>&quot;</td>
                        <td>&amp;quot;</td>
                    </tr>
                    <tr>
                        <td>&apos;</td>
                        <td>&amp;apos;</td>
                    </tr>
                    <tr>
                        <td>&ndash;</td>
                        <td>&amp;ndash;</td>
                    </tr>
                    <tr>
                        <td>&mdash;</td>
                        <td>&amp;mdash;</td>
                    </tr>
                    <tr>
                        <td>&copy;</td>
                        <td>&amp;copy;</td>
                    </tr>
                    <tr>
                        <td>&reg;</td>
                        <td>&amp;reg;</td>
                    </tr>
                    <tr>
                        <td>&trade;</td>
                        <td>&amp;trade;</td>
                    </tr>
                    <tr>
                        <td>&asymp;</td>
                        <td>&amp;asymp;</td>
                    </tr>
                    <tr>
                        <td>&ne;</td>
                        <td>&amp;ne;</td>
                    </tr>
                    <tr>
                        <td>&pound;</td>
                        <td>&amp;pound;</td>
                    </tr>
                    <tr>
                        <td>&euro;</td>
                        <td>&amp;euro;</td>
                    </tr>
                    <tr>
                        <td>&cent;</td>
                        <td>&amp;cent;</td>
                    </tr>
                    <tr>
                        <td>&yen;</td>
                        <td>&amp;yen;</td>
                    </tr>
                    <tr>
                        <td>&deg;</td>
                        <td>&amp;deg;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&amp;nbsp;</td>
                    </tr>
                </table>
            </div>
            <!------------------------STRING METHODS------------------------>

            <h4>
                String Methods
            </h4>
            <div class="col mb-5 overflow-y-scroll" style="height:400px;">
                <table class="table table-striped-columns table-hover table-bordered">
                    <tr>
                        <td>charAt()</td>
                        <td>Returns the character at a specified index (position)</td>
                    </tr>
                    <tr>
                        <td>charCodeAt()</td>
                        <td>Returns the Unicode of the character at a specified index</td>
                    </tr>
                    <tr>
                        <td>concat()</td>
                        <td>Returns two or more joined strings</td>
                    </tr>
                    <tr>
                        <td>endsWith()</td>
                        <td>Returns if a string ends with a specified value</td>
                    </tr>
                    <tr>
                        <td>fromCharCode()</td>
                        <td>Returns Unicode values as characters</td>
                    </tr>
                    <tr>
                        <td>includes()</td>
                        <td>Returns if a string contains a specified value</td>
                    </tr>
                    <tr>
                        <td>indexOf()</td>
                        <td>Returns the index (position) of the first occurrence of a value in a string</td>
                    </tr>
                    <tr>
                        <td>lastIndexOf()</td>
                        <td>Returns the index (position) of the last occurrence of a value in a string</td>
                    </tr>
                    <tr>
                        <td>length</td>
                        <td>Returns the length of a string</td>
                    </tr>

                    <tr>
                        <td>localeCompare()</td>
                        <td>Compares two strings in the current locale</td>
                    </tr>
                    <tr>
                        <td>match()</td>
                        <td>Searches a string for a value, or a regular expression, and returns the matches</td>
                    </tr>
                    <tr>
                        <td>prototype</td>
                        <td>Allows you to add properties and methods to an object</td>
                    </tr>
                    <tr>
                        <td>repeat()</td>
                        <td>Returns a new string with a number of copies of a string</td>
                    </tr>
                    <tr>
                        <td>replace()</td>
                        <td>Searches a string for a pattern, and returns a string where the first match is replaced</td>
                    </tr>
                    <tr>
                        <td>replaceAll()</td>
                        <td>Searches a string for a pattern and returns a new string where all matches are replaced</td>
                    </tr>
                    <tr>
                        <td>search()</td>
                        <td>Searches a string for a value, or regular expression, and returns the index (position) of
                            the match</td>
                    </tr>
                    <tr>
                        <td>slice()</td>
                        <td>Extracts a part of a string and returns a new string</td>
                    </tr>
                    <tr>
                        <td>split()</td>
                        <td>Splits a string into an array of substrings</td>
                    </tr>
                    <tr>
                        <td>startsWith()</td>
                        <td>Checks whether a string begins with specified characters</td>
                    </tr>
                    <tr>
                        <td>substr()</td>
                        <td>Extracts a number of characters from a string, from a start index (position)</td>
                    </tr>
                    <tr>
                        <td>substring()</td>
                        <td>Extracts characters from a string, between two specified indices (positions)</td>
                    </tr>
                    <tr>
                        <td>toLocaleLowerCase()</td>
                        <td>Returns a string converted to lowercase letters, using the host's locale</td>
                    </tr>
                    <tr>
                        <td>toLocaleUpperCase()</td>
                        <td>Returns a string converted to uppercase letters, using the host's locale</td>
                    </tr>
                    <tr>
                        <td>toLowerCase()</td>
                        <td>Returns a string converted to lowercase letters</td>
                    </tr>
                    <tr>
                        <td>toUpperCase()</td>
                        <td>Returns a string converted to uppercase letters</td>
                    </tr>
                    <tr>
                        <td>toString()</td>
                        <td>Returns a string or a string object as a string</td>
                    </tr>
                    <tr>
                        <td>trim()</td>
                        <td>Returns a string with removed whitespaces</td>
                    </tr>
                    <tr>
                        <td>trimEnd()</td>
                        <td>Returns a string with removed whitespaces from the end</td>
                    </tr>
                    <tr>
                        <td>trimStart()</td>
                        <td>Returns a string with removed whitespaces from the start</td>
                    </tr>
                    <tr>
                        <td>valueOf()</td>
                        <td>Returns the primitive value of a string or a string object</td>
                    </tr>
                </table>
            </div>

            <!--------------------------------------------------------------------->


            <h4>HTML References</h4>
            <div class="col mb-5">
                <table class="table table-striped-columns table-hover table-bordered">
                    <tr>
                        <td>favicon</td>
                        <td>An image which is displayed to the left of the page title in the browser tab</td>
                    </tr>
                </table>
            </div>

            <h4>PHP - SuperGlobal Variables</h4>
            <div class="col mb-5">
                <table class="table table-striped-columns table-hover table-bordered">
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
                        <td>used to collect form data after submitting an HTML form with method="post". $_POST is also
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

            <h4>PHP - Useful References</h4>
            <div class="col mb-5">
                <table class="table table-striped-columns table-hover table-bordered">
                    <tr>
                        <td>implode()</td>
                        <td>Converts data to string</td>
                    </tr>
                    <tr>
                        <td>
                            print_r
                        </td>
                        <td>
                            is used to display arrays and global variables.
                        </td>
                    </tr>
                </table>
            </div>

            <h4>RegEx MetaCharacters</h4>
            <div class="col">
                <table class="table table-striped-columns table-hover table-bordered">
                    <tr>
                        <td>\d</td>
                        <td>match any digit character similar to [0-9]</td>
                    </tr>
                    <tr>
                        <td>\w</td>
                        <td>match any word character, similar to [a-z, A-Z, 0-9 and _'s</td>
                    </tr>
                    <tr>
                        <td>\s</td>
                        <td>match a whitespace character such as space, tabs etc</td>
                    </tr>
                    <tr>
                        <td>\t</td>
                        <td>match a tab character only</td>
                    </tr>
                    <tr>
                        <td>\0</td>
                        <td>find a null character</td>
                    </tr>
                    <tr>
                        <td>\b</td>
                        <td>match the beginning or the end of a word</td>
                    </tr>
                    <tr>
                        <td>\B</td>
                        <td>match anywhere but in the beginning or the end of a word</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php 
    require_once "include/footer.php";?>
