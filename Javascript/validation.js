// validation script here

/* Our first regular expressions!!! :D 

Type 1:
var reg = /[a-z]/ig; 
//quotes are not used! These are not string type variables!

Type 2:
var reg2 = new RegExp(/[a-z]/,'ig'); */

const inputs = document.querySelectorAll('input');

const patterns = {
    telephone: /^\d{11}$/g,
    username: /^[a-z\d]{5,12}$/i,
    email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,4})(\.[a-z]{2,4})?$/,
    password: /^[-@\w~`!@#$%^&*()_+={}|\:;"'<,>.?]{8,20}$/,
    slug: /^[a-z\d-]{8,20}$/
    //regex ends with , if it continues, the last one does not require a coma , 
    //spaces between numbers and characters will make the regex invalid

};

//validation function
function validate(field, regex) {
    //console.log(regex.test(field.value));
    //checks if input is valid
    if (regex.test(field.value) == true) {
        //creates class valid in the input 
        field.className = 'valid';
        return true;
    } else {
        //if it does not match: creates class invalid
        field.className = 'invalid';
        return false;
    }
}


inputs.forEach((input) => {
    //on keyup... 
    input.addEventListener('keyup', (e) => {
        //we're finding : name property of the field, while validating the input through the validate function which contains the RegEx against the field value
        //console.log(e.target.attributes.name.value);
        validate(e.target, patterns[e.target.attributes.name.value]);
    });
});

//JQuery onSubmit
$('#signupForm').on('submit', function () {
    var emailValid = validate($('#signupEmail')[0], patterns.email);
    var nameValid = validate($('#signupName')[0], patterns.username);
    var passwordValid = validate($('#signupPassword')[0], patterns.password);

    if (emailValid && nameValid && passwordValid) {
        return true;
    }
    return false;
});