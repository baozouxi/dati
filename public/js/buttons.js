$(function(){
    $('.buttons span.like').click(function(event) {
        event.preventDefault();
        alert('asdasd');
    });


    $('.reg_submit').click(function () {
        $(this).parents('form').submit();
    });


    $('.login_submit').click(function () {
        $(this).parents('form').submit();
    });


});