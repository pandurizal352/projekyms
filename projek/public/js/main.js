$(document).ready(function(){
    $('.login-container').hide()
    $(".btn-login").on('click', function (){
        $('.login-container').fadeToggle()
    })

    // fa-regular click
    $('.fa-regular').on('click',()=>{
        $('.login-container').fadeOut();
    })
})