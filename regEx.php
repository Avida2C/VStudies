<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VStudies - RegEx</title>

    <!-- Style Sheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

</head>

<body class="bodyStyle">
    <?php require_once 'header.php'; ?>

    <div class="container pt-4">
        <div class="container pt-4">

            <div class="pageSize">

                <div class="pb-3">
                    <h3>RegEx - Regular Expressions</h3>
                    <h4>What are regular expressions??</h4>

                    <ol>
                        <li>
                            Allow us to check a series of characters for matches
                        </li>
                        <li>
                            It allows us to check a form field to try and match a valid email address
                            <ul>
                                <li>
                                    Must have an @ symbol, at a certain position
                                </li>
                                <li>
                                    Must end in an extension like .com, .org or .co.uk
                                </li>
                            </ul>
                        </li>
                        <li>
                            Regular Expressions help validate the provided information
                        </li>

                    </ol>

                    <div>
                        <h3>Notes </h3>
                        <h4>Examples: </h4>
                        <table>
                            <tr>
                                <th>
                                    Regular Expression
                                </th>
                                <th>
                                    Match
                                </th>
                                <th>
                                    No Match
                                </th>
                                <th>
                                    Definition
                                </th>
                            </tr>
                            <tr>
                                <td>ninja</td>
                                <td>ninja</td>
                                <td>ginja</td>
                                <td>must be ninja, anything else will not match</td>
                            </tr>
                            <tr>
                                <td>[ng]inja</td>
                                <td>ninja , ginja</td>
                                <td>minja , kinja</td>
                                <td>must start with either n or g and ends with inja</td>
                            </tr>
                            <tr>
                                <td>[abc123]000</td>
                                <td>a000 , b000 , c000 , abc123000</td>
                                <td>e000 , d000 , f000</td>
                                <td>must start with either, a, b, c, 1, 2, 3 and ends with 000 </td>
                            </tr>
                            <tr>
                                <td>[^pe2]000</td>
                                <td>a000 , b000 , c000 , abc123000</td>
                                <td>p000, e000 , 2000</td>
                                <td>must not start with p, e or 2 and end with 000</td>
                            </tr>
                            <tr>
                                <td>[a-z]0 </td>
                                <td>a0 , b0 , c0 , d0 , z0 </td>
                                <td>10 , 20 , 30 , 40 </td>
                                <td>range from a to z in small letters</td>
                            </tr>
                            <tr>
                                <td>[a-zA-Z]0 </td>
                                <td>a0 , A0 , b0 , B0 , c0 , C0 , d0 , z0 </td>
                                <td>10 , 20 , 30 , 40 </td>
                                <td>range from a to z in either captial letter or small letter </td>
                            </tr>
                            <tr>
                                <td>[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9] </td>
                                <td>023123456 , 112233419 </td>
                                <td>10 , 120 , 30222 , 42011 </td>
                                <td>11 spaces which require a number between 0 and 9 to match</td>
                            </tr>
                            <tr>
                                <td>[0-9]{9} </td>
                                <!-- This is the same as [0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9] -->
                                <td>023123456 , 112233419 </td>
                                <td>10 , 120 , 30222 , 42011 </td>
                                <td>This is the same as [0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]</td>
                            </tr>
                            <tr>
                                <td>[a-z]{5} </td>
                                <td>ninja </td>
                                <td>amen , nadine </td>
                                <td>5 letters</td>
                            </tr>
                            <tr>
                                <td>[a-z]{5,8} </td> <!-- Between 5 and 8 letters -->
                                <td>ninja, nadine, vidal, longword </td>
                                <td>amen </td>
                                <td>between 5 and 8 letters</td>
                            </tr>
                            <tr>
                                <td>[1-9]{5,} </td> <!-- At least 5 numbers -->
                                <td>13452 , 11111345 , 22233321, 1110987652 </td>
                                <td>1 , 20 , 600 , 2134 </td>
                                <td>At least 5 numbers</td>
                            </tr>
                            <tr>
                                <td>\d\s\w</td> <!-- At least 5 numbers -->
                                <td>1 n, 5 p</td>
                                <td>d1o</td>
                                <td>\d any number, \s whitespace, \w any word character [a-z][A-Z][0-9] and _
                                    (underscore)</td>
                            </tr>
                            <tr>
                                <td>\d{3}\s\w{5}</td> <!-- At least 5 numbers -->
                                <td>321 ninja</td>
                                <td>heello , helloo</td>
                                <td>\d any number - 3 spaces, \s whitespace - 1 space, \w any word character
                                    [a-z][A-Z][0-9] and _ (underscore) - 5 spaces</td>
                            </tr>
                            <tr>
                                <td>he?llo?</td> <!-- At least 5 numbers -->
                                <td>hll , hello , hell , hllo</td>
                                <td></td>
                                <td>will match if e and o would be used once or nothing at all</td>
                            </tr>
                            <tr>
                                <td>car.</td> <!-- At least 5 numbers -->
                                <td>carb , cara , car@ , car_</td>
                                <td></td>
                                <td>. will require ANY letter or number, this also includes symbols</td>
                            </tr>
                            <tr>
                                <td>abc\*</td> <!-- At least 5 numbers -->
                                <td>abc*</td>
                                <td></td>
                                <td>the escape character can be used with all the special characters</td>
                            </tr>
                            <tr>
                                <td>^[a-z]{5}$</td> <!-- At least 5 numbers -->
                                <td>vidal</td>
                                <td>euiweioweeio</td>
                                <td>this will only match with 5 letters</td>
                            </tr>
                            <tr>
                                <td>^[a-z]{5}</td> <!-- At least 5 numbers -->
                                <td>vidal</td>
                                <td><u>vidal</u>euiweioweeio</td>
                                <td>this will only match the first 5 letters</td>
                            </tr>
                            <tr>
                                <td>pyre|tyre</td> <!-- At least 5 numbers -->
                                <td>pyre , tyre</td>
                                <td>pyretyre</td>
                                <td>this will match either of the inputs given at the front and the back of | as |
                                    represents OR</td>
                            </tr>
                            <tr>
                                <td>(pet|toy|crazy) rabbit</td> <!-- At least 5 numbers -->
                                <td>pet rabbit , toy rabbit , crazy rabbit</td>
                                <td>rabbit, pet, toy, crazy</td>
                                <td>will match one of the inputs in the brackets with that of the input on the outside
                                    of the brackets</td>
                            </tr>
                            <tr>
                                <td>(pet|toy|crazy)? rabbit</td> <!-- At least 5 numbers -->
                                <td>pet rabbit , toy rabbit , crazy rabbit, rabbit</td>
                                <td>pet, toy, crazy</td>
                                <td>data in the brackets are optional but, space rabbit will also match because of the
                                    added ? before the space</td>
                            </tr>

                        </table>

                        <h3>MetaCharacters</h3>
                        <table>
                            <tr>
                                <th>
                                    Metacharacter
                                </th>
                                <th>Definition</th>
                            </tr>
                            <tr>
                                <td>\d</td>
                                <td>match any digit character similar to [0-9]</td>
                            </tr>
                            <tr>
                                <td>\w</td>
                                <td>match any word character, similar to [a-z, A-Z, 0-9 and _'s (underscores)</td>
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

                        <h3>Special Characters</h3>
                        <table>
                            <tr>
                                <th>
                                    Character
                                </th>
                                <th>Definition</th>
                            </tr>
                            <tr>
                                <td>+</td>
                                <td>one or more quantifier</td>
                            </tr>
                            <tr>
                                <td>\</td>
                                <td>escape character</td>
                            </tr>
                            <tr>
                                <td>[]</td>
                                <td>character set</td>
                            </tr>
                            <tr>
                                <td>[^]</td>
                                <td>negate symbol in a character set, this accepts anything which is not written in the
                                    character set</td>
                            </tr>
                            <tr>
                                <td>?</td>
                                <td>zero or one quantifier, the character placed before the ? will be match if it
                                    doesn't show or shows only once</td>
                            </tr>
                            <tr>
                                <td>.</td>
                                <td>anycharacter except the newline characters</td>
                            </tr>
                            <tr>
                                <td>*</td>
                                <td>a bit like + but it is a 0 or more quantifier </td>
                            </tr>

                        </table>

                    </div>
                    <div class="signUpRegex">
                        <h3>New User Signup</h3>
                        <form>
                            <input type="text" name="username" placeholder="username">
                            <p>Username must be and contain 5 - 12 characters</p>

                            <input type="text" name="email" placeholder="email">
                            <p>Email must be a valid address, e.g. me@mydomain.com</p>

                            <input type="text" name="password" placeholder="password">
                            <p>Password must alphanumeric (@, _ and - are also allowed) and be 8 - 20 characters</p>

                            <input type="text" name="telephone" placeholder="telephone">
                            <p>Telephone must be a valid UK telephone number (11 digits)</p>

                            <input type="text" name="slug" placeholder="profile slug">
                            <p>Slug must contain only lowercase letters, numbers and hyphens and be 8 - 20 characters
                            </p>

                        </form>
                        


                    </div>

                </div>
            </div>
        </div>
    </div>





    <?php require_once 'footer.php'; ?>
    <!-- JavaScript linked-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Javascript/javascript.js"></script>
    <script src="Javascript/validation.js"></script>

    <!-- SCRIPTS SECTION -->

</body>

</html>