let name = document.querySelector('#name');
let email = document.querySelector('#email');
let phone = document.querySelector('#phone');
let message = document.querySelector('#message');

const error_email = document.querySelector('#error_email');
const error_name = document.querySelector('#error_name');
const error_phone = document.querySelector('#error_phone');


$(document).ready(function() {
    $('#error_email, #error_name, #error_phone').hide();

    $('#myform').submit((e) => {

        validInpud(e);
    })
})

function validInpud(e) {

    if ($('#capchat').val() != 'JE TE PRENDS' || $('#capchat').val() == '') {
        e.preventDefault();
        $('#capchat').css("border", "2px solid red");
    } else {
        $('#capchat').css("border", "2px solid silver");
    }
    if ($('#name').val() == '') {
        e.preventDefault();
        $('#name').css("border", "2px solid red");
    } else {
        $('#name').css("border", "2px solid silver");
    }
    if ($('#phone').val() == '' || isNaN($('#phone').val())) {
        e.preventDefault();
        $('#phone').css("border", "2px solid red");
    } else {
        $('#phone').css("border", "2px solid silver");
    }
    if ($('#email').val() == '' || !valideEmail()) {
        e.preventDefault();
        $('#email').css("border", "2px solid red");
    } else {
        $('#email').css("border", "2px solid silver");
    }
    if ($('#message').val() == '' || $('#message').val().length < 3) {
        e.preventDefault();
        $('#message').css("border", "2px solid red");
    } else {
        $('#message').css("border", "2px solid silver");
    }
}

function valideEmail() {
    let Validemail = $('#email').val();
    let regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
    if (regex.test(Validemail)) {
        return true;
    } else {
        return false;
    }
}